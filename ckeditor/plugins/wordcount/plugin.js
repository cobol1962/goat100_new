/**
 * @license Copyright (c) CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.plugins.add("wordcount", {
    lang: "ar,ca,da,de,el,en,es,eu,fa,fi,fr,he,hr,hu,ro,cs,it,ja,nl,no,pl,pt,pt-br,ru,sk,sv,tr,zh-cn", // %REMOVE_LINE_CORE%
    version: 1.16,
    requires: 'htmlwriter,notification,undo',
    bbcodePluginLoaded: false,
    onLoad: function(editor) {
        CKEDITOR.document.appendStyleSheet(this.path + "css/wordcount.css");
    },
    init: function (editor) {
		var maxLines = 2;
		var lines = 0;
        var defaultFormat = "",
            intervalId,
            lastWordCount = -1,
            lastCharCount = -1,
            limitReachedNotified = false,
			minLimitReachedNotified = false,
            limitRestoredNotified = false,
			minLimitRestoredNotified = false,
            snapShot = editor.getSnapshot(),
            notification = null;


        var dispatchEvent = function (type, currentLength, maxLength) {
            if (typeof document.dispatchEvent == 'undefined') {
                return;
            }

            type = 'ckeditor.wordcount.' + type;

            var cEvent;
            var eventInitDict = {
                bubbles: false,
                cancelable: true,
                detail: {
                    currentLength: currentLength,
                    maxLength: maxLength
                }
            };

            try {
                cEvent = new CustomEvent(type, eventInitDict);
            } catch (o_O) {
                cEvent = document.createEvent('CustomEvent');
                cEvent.initCustomEvent(
                    type,
                    eventInitDict.bubbles,
                    eventInitDict.cancelable,
                    eventInitDict.detail
                );
            }

            document.dispatchEvent(cEvent);
        };

        // Default Config
        var defaultConfig = {
            showParagraphs: true,
            showWordCount: true,
            showCharCount: false,
            countSpacesAsChars: false,
            countHTML: false,
            hardLimit: true,

            //MAXLENGTH Properties
            maxWordCount: -1,
            maxCharCount: -1,
			minCharCount: 0,
            // Filter
            filter: null,

            // How long to show the 'paste' warning
            pasteWarningDuration: 0,

            //DisAllowed functions
            wordCountGreaterThanMaxLengthEvent: function (currentLength, maxLength) {
                dispatchEvent('wordCountGreaterThanMaxLengthEvent', currentLength, maxLength);
            },
            charCountGreaterThanMaxLengthEvent: function (currentLength, maxLength) {
                dispatchEvent('charCountGreaterThanMaxLengthEvent', currentLength, maxLength);
            },

            //Allowed Functions
            wordCountLessThanMaxLengthEvent: function (currentLength, maxLength) {
                dispatchEvent('wordCountLessThanMaxLengthEvent', currentLength, maxLength);
            },
            charCountLessThanMaxLengthEvent: function (currentLength, maxLength) {
                dispatchEvent('charCountLessThanMaxLengthEvent', currentLength, maxLength);
            }
        };

        // Get Config & Lang
        var config = CKEDITOR.tools.extend(defaultConfig, editor.config.wordcount || {}, true);

        if (config.showParagraphs) {
            defaultFormat += editor.lang.wordcount.Paragraphs + " %paragraphs%";
        }

        if (config.showParagraphs && (config.showWordCount || config.showCharCount)) {
            defaultFormat += ", ";
        }

        if (config.showWordCount) {
            defaultFormat += editor.lang.wordcount.WordCount + " %wordCount%";
            if (config.maxWordCount > -1) {
                defaultFormat += "/" + config.maxWordCount;
            }
        }

        if (config.showCharCount && config.showWordCount) {
            defaultFormat += ", ";
        }

        if (config.showCharCount) {
			var charLabelMin = "";
			if (config.minCharCount > 0) {
               	var charLabelMin = "Minimum " + config.minCharCount + editor.lang.wordcount[config.countHTML ? "CharCountWithHTML" : "CharCount"] + " - ";
            }
		
            var charLabel = editor.lang.wordcount[config.countHTML ? "CharCountWithHTML" : "CharCount"];

            defaultFormat += charLabel + " %charCount%";
            if (config.maxCharCount > -1) {
                defaultFormat += "/" + config.maxCharCount;
            }
			
        }

        var format = defaultFormat;

        bbcodePluginLoaded = typeof editor.plugins.bbcode != 'undefined';

       function counterId(editorInstance) {
            return "cke_wordcount_" + editorInstance.name;
        }

        function counterElement(editorInstance) {
            return document.getElementById(counterId(editorInstance));
        }

        function strip(html) {
            if (bbcodePluginLoaded) {
                // stripping out BBCode tags [...][/...]
                return html.replace(/\[.*?\]/gi, '');
            }

            var tmp = document.createElement("div");

            // Add filter before strip
            html = filter(html);

            tmp.innerHTML = html;

            if (tmp.textContent == "" && typeof tmp.innerText == "undefined") {
                return "";
            }

            return tmp.textContent || tmp.innerText;
        }

        /**
         * Implement filter to add or remove before counting
         * @param html
         * @returns string
         */
        function filter(html) {
            if(config.filter instanceof CKEDITOR.htmlParser.filter) {
                var fragment = CKEDITOR.htmlParser.fragment.fromHtml(html),
                    writer = new CKEDITOR.htmlParser.basicWriter();
                config.filter.applyTo( fragment );
                fragment.writeHtml( writer );
                return writer.getHtml();
            }
            return html;
        }

        function countCharacters(text, editorInstance, getText) {
			
            if (config.countHTML) {
                return (filter(text).length);
            } else {
                var normalizedText;

                // strip body tags
                if (editor.config.fullPage) {
                    var i = text.search(new RegExp("<body>", "i"));
                    if (i != -1) {
                        var j = text.search(new RegExp("</body>", "i"));
                        text = text.substring(i + 6, j);
                    }

                }

                normalizedText = text;

                if (!config.countSpacesAsChars) {
                    normalizedText = text.
                        replace(/\s/g, "").
                        replace(/&nbsp;/g, "");
                }
				normalizedText = normalizedText.
                     replace(/<br \/>/g, "&nbsp;").
					  replace(/<br>/g, "&nbsp;");
                normalizedText = normalizedText.
                    replace(/(\r\n|\n|\r)/gm, "").
                    replace(/&nbsp;/gi, " ");
				
                normalizedText = strip(normalizedText).replace(/^([\t\r\n]*)$/, "");
				
				if (getText === undefined) {
					return(normalizedText.length);
				} else {
					return normalizedText;
				}
            }
        }
	
        function countParagraphs(text) {
            return (text.replace(/&nbsp;/g, " ").replace(/(<([^>]+)>)/ig, "").replace(/^\s*$[\n\r]{1,}/gm, "++").split("++").length);
        }

        function countWords(text) {
            var normalizedText = text.
                replace(/(\r\n|\n|\r)/gm, " ").
                replace(/^\s+|\s+$/g, "").
                replace("&nbsp;", " ");

            normalizedText = strip(normalizedText);

            var words = normalizedText.split(/\s+/);

            for (var wordIndex = words.length - 1; wordIndex >= 0; wordIndex--) {
                if (words[wordIndex].match(/^([\s\t\r\n]*)$/)) {
                    words.splice(wordIndex, 1);
                }
            }

            return (words.length);
        }
		function minLimitReached(editorInstance, notify) {
			
            minLimitReachedNotified = true;
            minLimitRestoredNotified = false;
			var pfr = editor.element.$.getAttribute("parentform");
			document.getElementById( editor.element.$.id + "_error").style.visibility = "visible";
			var pfr = $("#" + pfr).attr("modal");
			
			setTimeout(function() {
				$("#" + pfr).find("[purpose='save']").prop("disabled", true);
			} , 500);
            if ( !limitReachedNotified) {
				 counterElement(editorInstance).innerHTML += " (Minimum " + config.minCharCount + ")";
                counterElement(editorInstance).className = "cke_path_item cke_wordcountLimitReached";
               // editorInstance.fire("limitReached", {}, editor);
            }
        }
	   function minLimitRestored(editorInstance) {
		 	var pfr = editor.element.$.getAttribute("parentform");
			var pfr = $("#" + pfr).attr("modal");
			
			document.getElementById( editor.element.$.id + "_error").style.visibility = "hidden";
			setTimeout(function() {
				$("#" + pfr).find("[purpose='save']").prop("disabled", false);
			} , 500);
            minLimitRestoredNotified = true;
            minLimitReachedNotified = false;
            editorInstance.config.Locked = 0;
            snapShot = editor.getSnapshot();
			 counterElement(editorInstance).innerHTML = counterElement(editorInstance).innerHTML.replace(" (Minimum " + config.minCharCount + ")", "");
			 counterElement(editorInstance).className = "cke_path_item";
        }
        function limitReached(editorInstance, notify) {
            limitReachedNotified = true;
            limitRestoredNotified = false;
		
			
            if (config.hardLimit) {
                editorInstance.loadSnapshot(snapShot);
				positionTolast(editorInstance);
                editorInstance.config.Locked = 1;
            }
			
            if ( !minLimitReachedNotified) {
				
		        counterElement(editorInstance).className = "cke_path_item cke_wordcountLimitReached";
				editorInstance.fire("limitReached", {}, editor);
            }
        }
		function positionTolast(editor) {
			var jqDocument = $(editor.document.$);
			var documentHeight = jqDocument.height();
			jqDocument.scrollTop(documentHeight);
			var range = editor.createRange();
			range.moveToElementEditablePosition( editor.editable(), true ); // bar.^</p>

			editor.getSelection().selectRanges( [ range ] );
		}
        function limitRestored(editorInstance) {
			
            limitRestoredNotified = true;
            limitReachedNotified = false;
            editorInstance.config.Locked = 0;
            snapShot = editor.getSnapshot();

            counterElement(editorInstance).className = "cke_path_item";
        }

        function updateCounter(editorInstance) {
            var paragraphs = 0,
                wordCount = 0,
                charCount = 0,
                text;
			
            if (text = editorInstance.getData()) {
                if (config.showCharCount) {
                    charCount = countCharacters(text, editorInstance);
                }
			
                if (config.showParagraphs) {
                    paragraphs = countParagraphs(text);
                }

                if (config.showWordCount) {
                    wordCount = countWords(text);
                }
            }
     
            var html = format.replace("%wordCount%", wordCount).replace("%charCount%", charCount).replace("%paragraphs%", paragraphs);

            (editorInstance.config.wordcount || (editorInstance.config.wordcount = {})).wordCount = wordCount;
            (editorInstance.config.wordcount || (editorInstance.config.wordcount = {})).charCount = charCount;

            if (CKEDITOR.env.gecko) {
                counterElement(editorInstance).innerHTML = html;
            } else {
                counterElement(editorInstance).innerText = html;
            }

            if (charCount == lastCharCount && wordCount == lastWordCount) {
                return true;
            }

            //If the limit is already over, allow the deletion of characters/words. Otherwise,
            //the user would have to delete at one go the number of offending characters
            var deltaWord = wordCount - lastWordCount;
            var deltaChar = charCount - lastCharCount;

            lastWordCount = wordCount;
            lastCharCount = charCount;

            if (lastWordCount == -1) {
                lastWordCount = wordCount;
            }
            if (lastCharCount == -1) {
                lastCharCount = charCount;
            }
			var olr = false;
            // Check for word limit and/or char limit
			
				if ((config.maxWordCount > -1 && wordCount > config.maxWordCount && deltaWord > 0) ||
					(config.maxCharCount > -1 && charCount > config.maxCharCount && deltaChar > 0)) {
						olr = true;
					limitReached(editorInstance, limitReachedNotified);
				} else if ((config.maxWordCount == -1 || wordCount < config.maxWordCount) &&
				(config.maxCharCount == -1 || charCount < config.maxCharCount)) {

					limitRestored(editorInstance);
				} else {
					snapShot = editorInstance.getSnapshot();
				}

				if ((config.minCharCount > 0 && charCount < config.minCharCount)) {

					minLimitReached(editorInstance, minLimitReachedNotified);
				} else if ((config.minCharCount > 0 && charCount >= config.minCharCount) && !olr) {

					minLimitRestored(editorInstance);
				} 
				// Fire Custom Events
				if (config.charCountGreaterThanMaxLengthEvent && config.charCountLessThanMaxLengthEvent) {
					if (charCount > config.maxCharCount && config.maxCharCount > -1) {
						config.charCountGreaterThanMaxLengthEvent(charCount, config.maxCharCount);
					} else {
						config.charCountLessThanMaxLengthEvent(charCount, config.maxCharCount);
					}
				}
			
            if (config.wordCountGreaterThanMaxLengthEvent && config.wordCountLessThanMaxLengthEvent) {
                if (wordCount > config.maxWordCount && config.maxWordCount > -1) {
                    config.wordCountGreaterThanMaxLengthEvent(wordCount, config.maxWordCount);

                } else {
                    config.wordCountLessThanMaxLengthEvent(wordCount, config.maxWordCount);
                }
            }
			var elm = $((editor.element.$).parentNode);
			
			if (elm.attr("inmodal") === undefined) {
			
				if (charCount == 0 || (config.minCharCount > 0 && charCount < config.minCharCount)) {
					
					$("#save_" + elm.attr("target")).prop("disabled", true);
				} else {
					$("#save_" + elm.attr("target")).prop("disabled", false);
				}
			}
            return true;
        }

        editor.on("key", function (event) {
		
			
			if (lastCharCount == 0) {
				if (event.data.keyCode == 13 || event.data.keyCode == 32) {
					 var selection = event.editor.getSelection();
					  var range = selection.getRanges()[0];
					  var cursor_position = range.startOffset;
					console.log(cursor_position);
					event.cancel();
					return false;
				}
			}
			if (event.data.keyCode == 32) {
				var ccode = getEditorPrevChar(event.editor).charCodeAt(0);
			
				if (ccode == 160 || ccode == 32) {
					event.cancel();
					return false;
				}
			}
			if (event.data.keyCode == 13) {
				lines += 1;
			
				if (lines > maxLines) {
					event.cancel();
					return false;
				}
				
			} else {
				lines = 0;
			}
            if (editor.mode === "source") {
                updateCounter(event.editor);
            }
        }, editor, null, 100);

        editor.on("change", function (event) {
				
            updateCounter(event.editor);
        }, editor, null, 100);

        editor.on("uiSpace", function (event) {
            if (editor.elementMode === CKEDITOR.ELEMENT_MODE_INLINE) {
                if (event.data.space == "top") {
                    event.data.html += "<div class=\"cke_wordcount\" style=\"\"" +
                        " title=\"" +
                        editor.lang.wordcount.title +
                        "\"" +
                        "><span id=\"" +
                        counterId(event.editor) +
                        "\" class=\"cke_path_item\">&nbsp;</span></div>";
                }
            } else {
                if (event.data.space == "bottom") {
                    event.data.html += "<div class=\"cke_wordcount\" style=\"\"" +
                        " title=\"" +
                        editor.lang.wordcount.title +
                        "\"" +
                        "><span id=\"" +
                        counterId(event.editor) +
                        "\" class=\"cke_path_item\">&nbsp;</span></div>";
                }
            }

        }, editor, null, 100);

        editor.on("dataReady", function (event) {
            updateCounter(event.editor);
        }, editor, null, 100);

        editor.on("paste", function(event) {
            if (config.maxWordCount > 0 || config.maxCharCount > 0) {

                // Check if pasted content is above the limits
                var wordCount = -1,
                    charCount = -1,
					 diff =  0,
					 add = "";
									
                  var   text = countCharacters(event.editor.getData(),event.editor, true);
				  diff = config.maxCharCount - text.length;
				  add = countCharacters(event.data.dataValue, event.editor, true);
				 if (add.length > diff) {
					add = add.substr(0, diff);
					text = event.editor.getData() + add;
				 } else {
					return;
				 }
				 
				
				
			
                if (config.showCharCount) {
                    charCount = countCharacters(text, event.editor);
				
                }
	
                if (config.showWordCount) {
                    wordCount = countWords(text);
                }


                // Instantiate the notification when needed and only have one instance
                if(notification === null) {
                    notification = new CKEDITOR.plugins.notification(event.editor, {
                        message: event.editor.lang.wordcount.pasteWarning,
                        type: 'warning',
                        duration: config.pasteWarningDuration
                    });
                }

                if (config.maxCharCount > 0 && charCount > config.maxCharCount && config.hardLimit) {
					
                   if(!notification.isVisible()) {
                        notification.show();
                    }
                    event.cancel();
                }

                if (config.maxWordCount > 0 && wordCount > config.maxWordCount && config.hardLimit) {
                    if(!notification.isVisible()) {
                        notification.show();
                    }
                    event.cancel();
                }
			
				editor.setData(text, function() {
					snapShot = editor.getSnapshot();
					setTimeout(function() {
					
						var jqDocument = $(editor.document.$);
						var documentHeight = jqDocument.height();
						jqDocument.scrollTop(documentHeight);
						var range = editor.createRange();
						range.moveToElementEditablePosition( editor.editable(), true ); // bar.^</p>
						editor.getSelection().selectRanges( [ range ] );
					}, 200);
					
				});
            }
        }, editor, null, 100);

        editor.on("afterPaste", function (event) {
            updateCounter(event.editor);
        }, editor, null, 100);

        editor.on("blur", function () {
            if (intervalId) {
                window.clearInterval(intervalId);
            }
        }, editor, null, 300);
    }
});
