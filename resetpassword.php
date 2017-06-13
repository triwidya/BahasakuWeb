<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Password Reset</title>
	<script src="https://www.gstatic.com/firebasejs/4.1.1/firebase.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
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
  </script>
</head>
<link rel="stylesheet" href="css/resetpassword.css">
<body  class="ResponsiveLayout">
  <div class="TopNav">
    <div class="TopNav--container u-cf">
    </div>
         <div class="PageContainer">
        <div class="Section">
      <div class="PageHeader">Forgot Password ?</div>


      <p>
          Kami hanya memerlukan id email anda yang terdaftar untuk mengirimkan instruksi reset password.
      </p>
        <input id="email_reset" type="email" name="verification" class="Form-textbox is-required is-validatedRemotely " placeholder="Email address" autofocus>
        <input id="submit_reset" type="submit" class="Button" value="Submit"/>
    </div>

  </div>
    <script type="text/javascript">
      $( document ).ready(function() {
      $('#submit_reset').click(function() {
        var auth = firebase.auth();
        // console.log($('#email_reset').val());
        var emailAddress = $('#email_reset').val();

        auth.sendPasswordResetEmail(emailAddress).then(function() {
          alert('permintaan sudah terkirim, silahkan buka email anda');
        }, function(error) {
          // An error happened.
        });
      });
    });
    </script>
    <ul class="bg-bubbles">
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  		<li></li>
  	</ul>
  </div>

</body>
</html>
