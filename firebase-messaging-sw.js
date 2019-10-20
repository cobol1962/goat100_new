importScripts('https://www.gstatic.com/firebasejs/6.3.4/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/6.3.4/firebase-messaging.js');
var config = {
  apiKey: "AIzaSyCDW6qVaRS0TwHtu87lSWS8e-7rrs9Xf4Q",
  authDomain: "goat100-aac5b.firebaseapp.com",
  databaseURL: "https://goat100-aac5b.firebaseio.com",
  projectId: "goat100-aac5b",
  storageBucket: "goat100-aac5b.appspot.com",
  messagingSenderId: "211978863857"
};
firebase.initializeApp(config);
const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {

    console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  var notificationTitle = payload.data.title; //or payload.notification or whatever your payload is
  var notificationOptions = {
    body: payload.data.body,
    data: { url:payload.data.click_action }, //the url which we gonna use later
    actions: [{action: "open_url", title: "Read Article Now"}],
    icon: "https://goat100.com/images/goat.png",
    badge: "https://goat100.com/images/goat.png",
    image: payload.data.image
  };
  return self.registration.showNotification(notificationTitle,  notificationOptions);
});
self.addEventListener('notificationclick', function(event) {
  switch(event.action){
    case 'open_url':
      clients.openWindow(event.notification.data.url); //which we got from above
    break;
    case 'any_other_action':

    break;
  }
}
, false);
