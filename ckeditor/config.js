
CKEDITOR.editorConfig = function( config ) {

 //   config.plugins = 'basicstyles,bidi,blockquote,notification,toolbar,colordialog,enterkey,htmlwriter,iframe,wysiwygarea,justify,menubutton,language,link,pastetext,undo,wsc,wordcount';
//	config.skin = 'moono-lisa';
//	config.extraPlugins = 'wordcount,notification';

	config.resize_enabled = false;
	config.removePlugins = 'elementspath' ;
	config.fillEmptyBlocks = false;
	config.forcePasteAsPlainText = true;

	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];
	config.removeButtons = 'Font,Paste,FontSize,Styles,Format,Save,NewPage,Preview,Print,Templates,Cut,Copy,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Subscript,Superscript,CopyFormatting,RemoveFormat,Outdent,Indent,CreateDiv,Link,Unlink,Anchor,Image,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Maximize,ShowBlocks,About,BidiLtr,BidiRtl,Language';


};
config.removePlugins = 'help';
config.enterMode = CKEDITOR.ENTER_BR; // pressing the ENTER KEY input <br/>
config.shiftEnterMode = CKEDITOR.ENTER_P; //pressing the SHIFT + ENTER KEYS input <p>
config.startupMode = 'source';
config.scayt_autoStartup = true;
config.autoParagraph = false;
