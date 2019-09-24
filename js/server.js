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
  ws.on('ping', heartbeat);
  var query = urlo.parse(req.url,true).query;
  console.log("card " + query.card);
  var obj = {action: "connected", custid: query.custid, card: query.card};
  ws.send(JSON.stringify(obj));
  if (online.indexOf(query.custid) == -1) {
    if (query.custid != "") {
      ws.clientID = query.custid;
      online.push(query.custid);
      tokens.push(query.pushtoken);
    }
//    console.log(" online " + online.join(","));

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

    if (obj.action == "setPendingComitee") {
      obj.response = "setPendingComitee";
      pending_comitees.push("/" + obj.building_id + "/" + obj.customer_id, obj);
        console.log(obj);
      wss.broadcast(obj);
    }
    if (obj.action == "paymentSettingsBuilding") {
      delete obj.action;
      payment_settings.push("/" + obj.building_id, obj);
      resp = {
        response: "paymentSettingsDone"
      }
      ws.send(JSON.stringify(resp));
    }

    if (obj.action == "writeJSLog") {
      delete obj["action"];
      jslog.push("/" + obj.customer_id + "/logs[]", obj);
    }

    if (obj.action == "writeApiLog") {
      delete obj["action"];
      apiLog.push("/" + obj.customer_id + "/logs[]", obj);
    }

    if (obj.action == "writeSystemMessage") {
      delete obj["action"];
      system_message.push("/" + obj.building_id + "/" + obj.message_id.toString() + "/", obj);
      obj["response"] = "newSystemMessage";
      ws.send(JSON.stringify(obj));

    }

    if (obj.action == "writeProtocol") {
      delete obj["action"];
      var bid = obj["building_id"];
      delete obj["building_id"];
      protocols.push("/" + bid + "/protocols[]", obj);
      obj["response"] = "protocolDone";
      ws.send(JSON.stringify(obj));
    }
    if (obj.action == "getOnline") {
      var obj = {
        response: "refreshOnline",
        data:     online.join(",")
      }

      ws.send(JSON.stringify(obj));
    }

    if (obj.action == "getConversation") {
      var toShow = [];
       var ol = false;
       for (i=0;i<online.length;i++) {
         if (online[i] == obj.isOnline) {
          ol = true;
         }
       }
      var data = {
        response: "showConversation",
        to: obj.to,
        from: obj.from,
        toShow: toShow,
        text: "",
        isOnline: ol
      }

      ws.send(JSON.stringify(data));

    }
    if (obj.action == "clearInterval") {
      console.log("clear " + obj.id);
      clearInterval(intrvls[obj.id]);
      delete intrvls[obj.id];
    }
    if (obj.action == "notifyNewMessage") {
        var now = new Date();
        var tim = now.getTime();
        var toShow = [];
        console.log(obj.from.id.toString() + obj.to.id.toString());
        if (intrvls[obj.from.id.toString() + obj.to.id.toString()] === undefined) {
          intrvls[obj.from.id.toString() + obj.to.id.toString()] = setInterval(function() {
          online.forEach(function each(oln) {
              if (oln == obj.to.id) {
                var data = {
                  response: "notifyNewMessage",
                  to: obj.from,
                  from: obj.to,
                  toShow: toShow,
                  text: obj.text
                }
                wss.clients.forEach(function each(client) {
                  if (client.custID == oln) {
                    client.send(JSON.stringify(data));
                    console.log("sent " + obj.from.id.toString() + obj.to.id.toString());
                  }
                });
              }
            });
          }, 3000);
        }
    }
    if (obj.action == "notifyComiteeEventBooked") {
      obj["response"] = "newEventBooked";

      var minte = setInterval(function() {
          wss.clients.forEach(function each(client) {

            if (client.custID == obj.notify) {
              client.send(JSON.stringify(obj));
              clearInterval(minte);
            }
          });
        }, 1000);
    }

    if (obj.action == "notifyNewVote") {
      var ww = setInterval(function() {
        if (online.indexOf(obj.id) > -1) {
          clearInterval(ww);
          var obj_to_send = {
            response: "notifyNewVote",
            data: obj.vote
          }
          wss.clients.forEach(function each(client) {
            if (client.custID == obj.id) {
              client.send(JSON.stringify(obj_to_send));
            }
          });
        }
      }, 1000);
    }

    if (obj.action == "recordDoc") {
      docs.push(obj.path, obj.data);
      delete obj["data"];
      delete obj["action"];
      obj["response"] = "docRecorded",
      ws.send(JSON.stringify(obj));
    }


    if (obj.action == "createCompany") {
      delete obj["action"];
      companies.push("/" + obj.company_id, obj);
      var to_send = { response: "companyCreated" };
      ws.send(JSON.stringify(to_send));
    }

    if (obj.action == "connectCompany") {
      delete obj["action"];
      company_building.push("/" + obj.company_id + "/" + obj.building_id, obj);
    }

    if (obj.action == "deleteCompany") {
      delete obj["action"];
      company_building.delete("/" + obj.company_id + "/" + obj.building_id, obj);
    }

    if (obj.action_node == "assignToCompany") {
      delete obj["action"];
      company_building.push("/" + obj.company_id + "/" + obj.building_id + "/faults[]", obj.fault_id);
    }

  if (obj.action_node == "unAssignFromCompany") {
    delete obj["action"];
    company_building.delete("/" + obj.company_id + "/" + obj.building_id);
  }

    if (obj.action == "setPaymentMethod") {
      delete obj["action"];
      payment_methods.push("/" + obj.building_id + "/" + obj.apartment, obj);
    }
    if (obj.action == "deletePaymentMethod") {
      delete obj["action"];
      console.log(obj);
      payment_methods.delete("/" + obj.building_id + "/" + obj.apartment);
    }

    if (obj.action == "refreshCompanyMessages") {
      var sent = [];
      obj.response = "refreshSystemMessages";
      wss.clients.forEach(function each(client) {
        if (obj.notify.indexOf(client.custID) > -1) {
          if (sent.indexOf(client.custID) == -1) {
            sent.push(client.custID);
            client.send(JSON.stringify(obj));
          }
        }
      });
    }
    if (obj.action == "refreshSystemMessages") {
      var sent = [];
      obj.response = "refreshSystemMessages";
      wss.clients.forEach(function each(client) {
        if (obj.notify.indexOf(client.custID) > -1) {
          if (sent.indexOf(client.custID) == -1) {
            sent.push(client.custID);
            client.send(JSON.stringify(obj));
          }
        }
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
