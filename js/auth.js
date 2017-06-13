(function () {

  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCRGfgFz2V6NO4gJwHTXQknQdWEJvup7jU",
    authDomain: "bahasaku-a7af4.firebaseapp.com",
    databaseURL: "https://bahasaku-a7af4.firebaseio.com",
    projectId: "bahasaku-a7af4",
    storageBucket: "bahasaku-a7af4.appspot.com",
    messagingSenderId: "578157537660"
  };
  firebase.initializeApp(config);

}());

$( document ).ready(function() {

  const txtEmail = document.getElementById('txtEmail');
  const txtPassword = document.getElementById('txtPassword');
  const btnLogin = document.getElementById('btnLogin');

  // saat button login di click
  btnLogin.addEventListener('click', e => {
    const email = txtEmail.value;
    const pass = txtPassword.value;
    console.log(email);
    console.log(pass);

    firebase.auth().signInWithEmailAndPassword(email, pass).catch(function(error) {
      console.log(error.code);
      console.log(error.message);
    });
  });

  // menampilkan status sekarang
  firebase.auth().onAuthStateChanged(firebaseUser => {
    if(firebaseUser) {
        var user = firebase.auth().currentUser;
        window.location.assign("http://localhost/BahasakuWeb/index.php");
        console.log(firebaseUser);
    } else {
    }
  });

});

(function () {
    var dialogButton = document.querySelector('.dialog-forgot');
    var dialog = document.querySelector('#dialog8');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
      $('#btnInputPercakapan').val('ADD');
      dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());
