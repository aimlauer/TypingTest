<?php
session_start();
include('../conn.php');

$keystrokes = (int) $_GET['keystrokes'];
$words = (int)$_GET['words'];
$wpm = round((int)$_GET['wpm']);
$wrong = (int)$_GET['wrong'];

echo $keystrokes;

if(!empty($words) && !empty($wpm) && !empty($wrong)){
  	// Vulnerable SQLi attacks, but for now, I don't care
	$usuario = htmlentities($_SESSION['username']);
	$img = '<img src="' .$_SESSION['picture'] . '">';

    $query = "SELECT * FROM ".$infoTable." WHERE user='".$usuario."'";
    echo $query;
    $result = $conexion->query($query);
    $mayor = $result->fetch_assoc();
    if ((int)$mayor['WPM'] > $wpm) exit(-1);
    echo 'what: ' . (int)$mayor['WPM'];
    if($result->num_rows > 0){
          echo 'Acá update';
          $query = "UPDATE ".$infoTable." SET WPM = '".$wpm."', words_wrong = '".$wrong."', record_time = '".date("Y-m-d H:i:s")."' , words = '".$words."', keystrokes = '".$keystrokes."' WHERE user = '".$usuario."'";
          echo $query;
          $update = $conexion->query($query);

	}else{
	  echo 'aca insert';
   	  $query = "INSERT INTO ".$infoTable." SET user = '".$usuario."', WPM = '".$wpm."', words_wrong = '".$wrong."', record_time = '".date("Y-m-d H:i:s")."' , words = '".$words."', keystrokes = '".$keystrokes."'";
   	  $insert = $conexion->query($query);
	}
}
$conexion->close();

?>
