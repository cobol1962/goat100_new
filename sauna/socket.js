var customerSession = null;

var ws = null;

function ReconnectingWebSocket() {
    var url = "80.211.81.111:30001";
    this.debug = false;
    this.reconnectInterval = 1000;
    this.timeoutInterval = 5000;
    this.redirectInterval = null;
    var self = this;
    var ws;
    var forcedClose = false;
    var timedOut = false;
    this.url = url;
    this.readyState = WebSocket.CONNECTING;
    this.URL = url; // Public API
   this.refreshUserTimeout = null;

    this.onopen = function () {

        var reconnect = false;
        if (url.indexOf("?reconnect=") > -1) {
            reconnect = true;
        }
        url = ('https:' == document.location.protocol ? 'ws://' : 'ws://') + "80.211.81.111:30001";

    }


    this.onclose = function (e) {
		//ws.send("remove#" + localStorage.uid );

    };

    this.onconnecting = function (e) {
    };

    this.onmessage = function (e) {

      $("#message").html(e.data);
    };


    this.onerror = function (e) {

    };

    function connect(reconnectAttempt, reconnect) {

        if (reconnect) {
            if (url.indexOf("&reconnect=yes") == -1) {

            }

        } else {
            url = ('https:' == document.location.protocol ? 'ws://' : 'ws://') + "80.211.81.111:30001";
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
