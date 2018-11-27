<html>
<head>
<?php
$color = htmlentities($_COOKIE['color']);
if(empty($color))
        echo '<link id="estilo" rel="stylesheet" href=white.css />';
else
        echo '<link id="estilo" rel="stylesheet" href='.$color.' />';
?>
<script src="nombre.js"></script>
<script src="https://code.jquery.com/jquery-1.7.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="189124726554-c0attjmfjku6eqfbn9dvj8b1hpvm75bj.apps.googleusercontent.com">
<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase.js"></script>
<script src="login.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<center><div class="center1"><div class="palabras">Login: <br><br>
<div class="g-signin2" data-onsuccess="onSignIn"></div> <br>
<img src="img/twitter.png" onclick="Twitter_SignIn()"/> <br> <br>


</div>
</center>

</body>



</html>      
