var firebase = require("firebase");
var config = {
    apiKey: "AIzaSyBlVJ1kdpCqLG6Ro_s_aDjicmyMlZVXNf8",
    authDomain: "travelwithus-86002.firebaseapp.com",
  };
  firebase.initializeApp(config);

//Create a new user
function createUserFireBase(email,password){
    console.log("DEBUG MESSAGE --- GO TO HERE");
    //var email = document.getElementById('resEmail').value;
    //var password = document.getElementById('inputPassword').value;
    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log("ERROR MESSAGE --- " + errorMessage);
        var user = firebase.auth().currentUser;
        var email = user.email;
        console.log("USER --- " + email);
        user.sendEmailVerification().then(function() {
            console.log("Send email!!!!");
            }).catch(function(error) {
            console.log("ERROR --- " + error.message);
            });
      });
}

function signIn(email,password){
    firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log("ERROR MESSAGE --- " + errorMessage);
      });

      firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // User is signed in.
          var displayName = user.displayName;
          var email = user.email;
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
          console.log("USER --- " + email);
          user.sendEmailVerification().then(function() {
            console.log("Send email!!!!");
            }).catch(function(error) {
            console.log("ERROR --- " + error.message);
            });
          // ...
        } else {
          // User is signed out.
          // ...
        }
      });

      //send email
      
}
//createUserFireBase("dmhuy@tma.com.vn","123456");
signIn("dmhuy@tma.com.vn","123456");