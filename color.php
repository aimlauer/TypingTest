<script>
function mostrar_temas(){
  document.getElementById('temas').innerHTML += '<span onclick="_default()" style="background: linear-gradient(135deg, white, white 80%, black);" class="square"></span>  '; 
  document.getElementById('temas').innerHTML += '<span onclick="white_blue()" style="background: linear-gradient(135deg, white, blue 60%, blue);" class="square"></span>  '
  document.getElementById('temas').innerHTML += '<span onclick="white_yellow()" style="background: linear-gradient(135deg, white, yellow 60%, yellow);" class="square"></span>  '
  document.getElementById('temas').innerHTML += '<span onclick="black_yellow()" style="background: linear-gradient(135deg, black, yellow 80%, white);" class="square"></span>  '
  document.getElementById('temas').innerHTML += '<span onclick="red_blue()" style="background: linear-gradient(135deg, red, white 60%, white);" class="square"></span>'
  document.getElementById('temas').innerHTML += '<span onclick="black()" style="background: linear-gradient(135deg, black, black 60%, white);" class="square"></span>'
}
prefijo="../css/";
var Temas = new Array('white.css','white_blue.css','white_yellow.css','black_yellow.css','red_blue.css','black.css');

function save(color){
  $.get("../cookie.php",{ color: color });
}

function _default(){
	save(prefijo+Temas[0]);
	document.getElementById('estilo').href=prefijo+Temas[0];
}
function white_blue(){
	save(prefijo+Temas[1]);
	document.getElementById('estilo').href=prefijo+Temas[1];
}
function white_yellow(){
	save(prefijo+Temas[2]);
	document.getElementById('estilo').href=prefijo+Temas[2];
}
function black_yellow(){
	save(prefijo+Temas[3]);
	document.getElementById('estilo').href=prefijo+Temas[3];
}
function red_blue(){
	save(prefijo+Temas[4]);
	document.getElementById('estilo').href=prefijo+Temas[4];
}
function black(){
	save(prefijo+Temas[5]);
	document.getElementById('estilo').href=prefijo+Temas[5];
}



function color(){
  color = Cookies.get('color');
  switch(color){
    case 'white.css':
      _default();
      break;
    case 'white_blue.css':
      white_blue();
      break; 
    case 'white_yellow.css':
      white_yellow();
      break; 
    case 'black_yellow.css':
      black_yellow();
      break; 
    case 'red_blue.css':
      red_blue();
      break;
    case 'black.css':
      black();
      break;
  }
}

</script>
