// Auth ke firebase
 src="https://www.gstatic.com/firebasejs/4.1.0/firebase.js">

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

    const txtEmail = document.getElementById('txtEmail');
    const txtPassword = document.getElementById('txtPassword');
    const btnLogin = document.getElementById('btnLogin');
    const btnLogout = document.getElementById('btnLogout');
    const status = document.getElementById('status');

    // saat button login di click
    btnLogin.addEventListener('click', e => {
      const email = txtEmail.value;
      const pass = txtPassword.value;
      const auth = firebase.auth();

      const promise = auth.signInWithEmailAndPassword(email, pass);
      promise.catch(e => console.log(e.message));
    });

    // menampilkan status sekarang
  firebase.auth().onAuthStateChanged(firebaseUser => {
    if(firebaseUser) {
        var user = firebase.auth().currentUser;
        window.location.assign("http://localhost/miniprototype/home.php");
        console.log(firebaseUser);
    } else {
    }
  });

}());

// Design login animation

$("#login-button").click(function(event){
    event.preventDefault();

  $('form').fadeOut(500);
  $('.wrapper').addClass('form-success');
});
