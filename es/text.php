<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:../index.php");
    exit();
}
?>
<html>
<head>
<?php include('../color.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script src="https://code.jquery.com/jquery-1.7.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
<?php
$color = htmlentities($_COOKIE['color']);
if(empty($color))
	echo '<link id="estilo" rel="stylesheet" href=../css/white.css />';
else
	echo '<link id="estilo" rel="stylesheet" href='.$color.' />';
?>


<script src="../js/fast.js"></script>
<script>color()</script>
</head>

<body>
<div class="topnav" id="myTopnav">
  <a href="#" class="active"><?php $date = date('jS \of F Y h:i a'); echo $date; ?></a>
  </a>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <center><div id="temas" class="tema_menu"><script> mostrar_temas()</script> </div> </center><br>
  <div class="menu_word">
  <a href="_init.php?level=0" class="word">Normal</a>
  <a href="_init.php?level=1" class="word">Avanzada</a>
  <a href="_init.php?level=2" class="word">Sin tildes</a>
  <a href="#" class="word">Crear un texto</a>
  </div>
</div>
<span onclick="openNav()"><font class="letra_menu">☰</font></span>


<div id="bienvenido_usuario" class="nombre_usuario"><?php echo '<img src='. $_SESSION['picture']. ' >' . $_SESSION['username'] ; ?> </div>
<div id="texto" class="texto"></div>
<center>
<input id="test" class="input" autofocus="autofocus" onFocus="this.select()" type="text">
<div class="square"></div>
<div style="display:inline;" class="segundos" id="cronometro">60 second(s)</div>
</div>
<div class="palabras" style="color:purple;" id="pulsa"></div>
<div class="palabras" style="display:inline; color:green" id="palabras_correctas"></div>
<div class="palabras" style="display:inline; color:red" id="palabras_incorrectas"></div>
<div class="WPM" id="WPM"></div>
<img id="img" /> <br><br>
</center>
<div class="texto">





<br><br>
<center>
<textarea class="black" id="texto_usuario" rows="30" cols="100">
</textarea>
<button onclick="crear_texto()" >Enviar</button>

</center>


</table>
</div>
</body>
</html>
