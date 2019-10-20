var https = require('https');
var urlo = require('url');
var request = require('request');
var dateFormat = require('dateformat');
var fs = require("fs");
var online = [];
var tokens = [];
var uid = "";
var intrvls = {};
var fcm = require('fcm-notification');
var serverKey = require('/var/www/goat100/goat100-aac5b-firebase-adminsdk-vf69p-81f8da27d0.json'); // put your server key here
var FCM = new fcm(serverKey);

const options = {
  key: fs.readFileSync('gastronomskocarstvo.pem'),
  cert: fs.readFileSync('gastronomskocarstvo_com.crt')
};
var httpsServer = https.createServer(options, function (req, res) {
   res.setHeader('Access-Control-Allow-Origin', '*');
   if (req.method === 'POST') {
       var d = 'ok';
       var body = '';
        req.on('data', chunk => {
            body += chunk.toString(); // convert Buffer to string
            try {
              var query = JSON.parse(body);
              if (query.action == "registerToken") {

                if (tokens.indexOf(query.token) == -1) {
                  tokens.push(query.token);

                }
              }
            } catch(err) {

            }
        });
    }

    res.end("Server up"); //end the response
}).listen(4444);


/*setInterval(function() {
  var message = { //this may vary according to the message type (single recipient, multicast, topic, et cetera)
      data: {
          title: "GOAT100 news",
          body: "GOAT100 Some News",
          click_action: "https://goat100.com"
      }

  };

  FCM.sendToMultipleToken(message, tokens, function(err, response) {

      if(err){
          console.log('err--', err);
      }else {
          console.log('response-----', response);
      }

  })
}, 30000);*/


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
  console.log(query)

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
const axios = require('axios');
const cron = require("node-cron");
cron.schedule("10 22,10 * * *", makeSearch);
const fetch = require('node-fetch');
//e3656f16e9274bb58ebbedf8ee31b2ad
//makeSearch();
function makeSearch() {
    axios.get('https://goat100.com/ajax/getNames.php')
      .then(response => {
        var artst = response.data;

        executeSearch(artst);
      })
      .catch(error => {
        console.log(error);
      });
}
function executeSearch(data) {
  var i = 0;
  var dt = new Date();
  var dts = dt.getFullYear() + "-" + (dt.getMonth() + 1).toString().padStart(2, '0') + "-" + dt.getDate().toString().padStart(2, '0');
 if (dt.getHours() == 10) {
   var yesterday = new Date(Date.now() - 864e5);
   var dts = yesterday.getFullYear() + "-" + (yesterday.getMonth() + 1).toString().padStart(2, '0') + "-" + yesterday.getDate().toString().padStart(2, '0');
   dts += "T22:00";
 } else {
   dts += "T10:00";
 }
 var j = 0;
  data.forEach(function each(d) {
    setTimeout(function() {
      var url = 'https://newsapi.org/v2/everything?' +
          'q=+"' + d.name + '"&' +
          'language=en&' +
          'from='  + dts + '&' +
          'sortBy=popularity&' +
          'apiKey=598accefe2d448d498450422a6f505ed';
          console.log(url);
          axios.get(url)
            .then(response => {
              var news = response.data.articles;
              var i = 0;
              news.forEach(function each(article) {
                if (i > 2) {
                  return false;
                }
                if (article.description.indexOf("music") > -1 || article.description.indexOf("rap") > -1 || article.description.indexOf("hiphop") > -1 || article.description.indexOf("artist") > -1) {
                  i++;
                  var message = { //this may vary according to the message type (single recipient, multicast, topic, et cetera)
                      data: {
                          title: article.title,
                          body: article.description,
                          click_action: article.url,
                          icon: "https://goat100.com/images/goat.png",
                          image: article.urlToImage
                      }
                  };
                  console.log(message)
                  FCM.sendToMultipleToken(message, tokens, function(err, response) {
                      if(err){
                          console.log('err--', err);
                      }else {
                        console.log(response)
                      }
                  })
                }
              })
            })
            .catch(error => {
              console.log(error);
            });

    }, i * 300000);
    i++;
  })
}
