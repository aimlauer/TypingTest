<?php
  $color = htmlentities($_GET['color']);
  $cookie_name = "color";
  $cookie_value = $color;
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

