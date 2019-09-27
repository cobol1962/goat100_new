var https = require('http');
var urlo = require('url');
var request = require('request');
var dateFormat = require('dateformat');
var fs = require("fs");
var online = [];
var tokens = [];
var uid = "";
var intrvls = {};
var httpsServer = https.createServer(function (req, res) {
   res.setHeader('Access-Control-Allow-Origin', '*');
   if (req.method === 'POST') {

    }

    res.end("Server up"); //end the response
}).listen(4444);

const WebSocket = require('ws');
var whenisdone = [];
var vv = [];
var diary = "";

var WebSocketServer = require('ws').Server;
const wss = new WebSocketServer({
    server: httpsServer,
    autoAcceptConnections: true
});

function originIsAllowed(origin) {
  return true;
}

// Broadcast to all.
wss.broadcast = function broadcast(data) {
  wss.clients.forEach(function each(client) {
    try     {
     client.send(JSON.stringify(data));
    } catch(err) {
    }
   });
};

wss.on('disconnected', function connection(ws) {
  wss.clients.forEach(function each(client) {
    if (client === ws) {
      console.log("deleted " + ws.clientID);
      delete client;
    }
  });

});
function noop() {}

function heartbeat() {
  this.isAlive = true;
}
wss.on('connection', function connection(ws, req) {
  ws.isAlive = true;
  ws.send(JSON.stringify({blah: "blah"}));
  ws.on('ping', heartbeat);
  var query = urlo.parse(req.url,true).query;
  var obj = {action: "connected", custid: query.custid, card: query.card};
  ws.send(JSON.stringify(obj));
  if (online.indexOf(query.custid) == -1) {
    if (query.custid != "") {
      ws.clientID = query.custid;
      online.push(query.custid);
    }
  }
  ws.custID = query.custid;
  ws.on('pong', function heartbeat() {

	   this.isAlive = true;
     if (online.indexOf(this.custID) == -1) {
       online.push(this.custID);
       var obj = {
         response: "refreshOnline",
         data:     online.join(",")
       }
       wss.broadcast(obj);
	    console.log('online ' + online.join(","));
    }
  });
  ws.on('message', function incoming(data) {
    var obj = JSON.parse(data);

    if (obj.action == "message") {

      delete obj.action;
      wss.clients.forEach(function each(client) {
          obj.response = "newMessage";
          
          client.send(JSON.stringify(obj));
      });
    }
  });
  ws.on('close', function() {

   console.log("closed " + ws.custID);
   ws.isAlive = false;
   ws.close();
   ws.terminate();

 });
  ws.on('disconnect', function(){
   console.log("disconnected " + ws.clientID);
 });
});
