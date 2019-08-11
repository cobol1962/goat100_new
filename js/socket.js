function ReconnectingWebSocket(url,user,session, protocols) {
    protocols = protocols || [];

    // These can be altered by calling code.
    this.debug = false;
    this.reconnectInterval = 1000;
    this.timeoutInterval = 5000;
    this.redirectInterval = null;
	this.uid = localStorage.uid;
    var self = this;
    var ws;
    var forcedClose = false;
    var timedOut = false;
	this.user = user;
    this.url = url;
    this.protocols = protocols;
    this.readyState = WebSocket.CONNECTING;
    this.URL = url; // Public API
	this.refreshUserTimeout = null;
    this.onopen = function () {
	
        var reconnect = false;
        if (url.indexOf("?reconnect=") > -1) {
            reconnect = true;
        }
        url = ('https:' == document.location.protocol ? 'wss://' : 'ws://') + "invastor.com:8080" + (location.port ? ':' + location.port : '') + '?user=' + user + "&session=" + "1";
        if (!reconnect) {
			
	    } else {
         
          //  end_reconnect();
        }
    }


    this.onclose = function (e) {
		//ws.send("remove#" + localStorage.uid );
		
    };

    this.onconnecting = function (e) {
    };

    this.onmessage = function (e) {
	
		var obj = $.parseJSON(e.data);
		
    };
	
    this.onerror = function (e) {
		
    };
	function refreshUsers(data) {
		try {
			refreshChatOnlineUsers(data);
		} catch(err) {
		}
	
		
	}
    function connect(reconnectAttempt, reconnect) {
	
        if (reconnect) {
            if (url.indexOf("&reconnect=yes") == -1) {
                url += "&reconnect=yes";
            }

        } else {
            url = ('https:' == document.location.protocol ? 'wss://' : 'ws://') + "invastor.com:8080" + (location.port ? ':' + location.port : '') + '?user=' + user + "&session=" + "1";
        }
        ws = new WebSocket(url, this.protocols);

        self.onconnecting();

        var localWs = ws;
        var timeout = setInterval(function () {
            try {
                timedOut = true;
                localWs.close();
                timedOut = false;
                clearInterval(timeout); 
            } catch (Error) {

            }
        }, self.timeoutInterval);

        ws.onopen = function (event) {
            clearTimeout(timeout);

            self.readyState = WebSocket.OPEN;
            reconnectAttempt = false;
            self.onopen(event);
        };

        ws.onclose = function (event) {
            clearTimeout(timeout);
            ws = null;
            if (forcedClose) {
                self.readyState = WebSocket.CLOSED;
                self.onclose(event);
            } else {
                self.readyState = WebSocket.CONNECTING;
                self.onconnecting();
                if (!reconnectAttempt && !timedOut) {

                    self.onclose(event);
                }
                setTimeout(function () {
                    connect(true, true);
                }, self.reconnectInterval);
            }
        };
        ws.onmessage = function (event) {
            self.onmessage(event);
        };
        ws.onerror = function (event) {
			console.log(event);
            clearInterval(self.redirectInterval);
            self.redirectInterval = null;
        };
    }
    connect(url, false);

    this.send = function (data) {
       
        if (ws) {
            return ws.send(data);
            return true;
        } else {
            var sd = setInterval(function () {
                if (ws) {

                    clearInterval(sd);
                    return ws.send(data);
                }
            }, 500);
        }
    };
    this.close = function () {
		
        forcedClose = true;
        if (ws) {
            console.log('ws close');
            ws.close();
        }
    };

    this.logout = function () {
		
        if (self.redirectInterval != null) {
            
           
        }
        clearInterval(self.redirectInterval);
    };

    /**
     * Additional public API method to refresh the connection if still open (close, re-open).
     * For example, if the app suspects bad data / missed heart beats, it can try to refresh.
     */
    this.refresh = function () {
        if (ws) {
            ws.close();
        }
    };
}

/**
 * Setting this to true is the equivalent of setting all instances of ReconnectingWebSocket.debug to true.
 */
ReconnectingWebSocket.debugAll = false;