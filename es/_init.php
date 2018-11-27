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
  <a href="_new.php" class="word">Crear un texto</a>
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
<div class="palabras">TOP 30</div><br>
<table style="width:100%" class="palabras">
<?php
require_once('../conn.php');

$prevQuery = "SELECT * FROM ".$infoTable." ORDER by WPM DESC LIMIT 30";
$prevResult = $conexion->query($prevQuery);
if($prevResult){
  while ($row = mysqli_fetch_assoc($prevResult)) {
    $usuario = $row['user'];
    $photo = "SELECT * FROM ".$userTable." WHERE first_name='".$usuario."'";
    $picture = $conexion->query($photo);
    // fetch_assoc lo lleva a como un arreglo la verdad lo entendi por arriba.
    $picture = $picture->fetch_assoc();   
    $TMP =  '<tr><td>' . '<img src="' . $picture['picture'] . '">' . "</td><td>".$row['user']."</td><td>".$row['WPM']."</td><td>".$row['record_time']."</td></tr>";
    echo $TMP;
    
    //$TMP = '<img src="' . $picture['picture'] . '">' . " " . $row['user'] .  " " . '<font color=red>' . $row['WPM'] . "</font>\n";
    //echo('<div class="palabras">'. $TMP . '</div>');
  }
}
?>
</table>
</div>
</body>
<?php
$level = htmlspecialchars($_GET['level']);
?>
<script>
init();
<?php
if (!empty($level))
  echo "verificar($level,'spanish');";
else
  echo "verificar(0,'spanish');"
?>
</script>


</html>
