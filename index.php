<?php
session_start();
if(isset($_SESSION['username'])){header('Location: /es/_init.php');exit;}
?>

<html>
<head>
<?php
require_once('settings.php');

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';
$color = htmlentities($_COOKIE['color']);
if(empty($color))
        echo '<link id="estilo" rel="stylesheet" href=white.css />';
else
        echo '<link id="estilo" rel="stylesheet" href='.$color.' />';
?>
</head>

<body>
<center>
<a href="<?=$login_url ?>">
<img src="/img/goo.png">
</a>
<br>
</center>
</body>



</html>      
