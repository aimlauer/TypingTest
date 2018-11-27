function easy(idioma){
  switch(idioma){
    case 'spanish':
  var items = new Array('dije','día','mejor','vamos','amigo','dinero','después','esa','hola','a','o','alguien','esta','vez','estamos','un','nunca','un','tengo','así','mí','noche','mi','es','han','gran','mis','gracias','y','gracias','y','donde','quien','me','quiero','puedo','mía','hay','lugar','son','nombre','necesito','has','la','creo','nuestro','algo','mí','ellos','mañana','ir','buena','vez','papas','así','cuando','hay','por','nada','tú','he','tiempo','casa','antes','trabajo','también','son','nunca','su','todos','los','casa','ya','entonces','espero','voy','sus','me','trabajo','eres','siempre','usted','también','ella','sin','desde','padre','años','sé','él','hecho','hablar','nombre','oh','poco','pasa','gusta','ni','los','será','del','se','mismo','él','mis','que','sí','tipo');
      break;
	case 'english':
	  var items = new Array('a','o','alguien','esta','vez','estamos','un','nunca','un','tengo','así','mí','noche','mi','es','han','gran','mis','gracias','y','gracias','y','donde','quien','me','quiero','puedo','mía','hay','lugar','son','nombre','necesito','has','la','creo','nuestro','algo','mí','ellos','mañana','ir','buena','vez','papas','así','cuando','hay','por','nada','tú','he','tiempo','casa','antes','trabajo','también','son','nunca','su','todos','los','casa','ya','entonces','espero','voy','sus','me','trabajo','eres','siempre','usted','también','ella','sin','desde','padre','años','sé','él','hecho','hablar','nombre','oh','poco','pasa','gusta','ni','los','será','del','se','mismo','él','mis','que','sí','tipo');
	  break;
  }
  return items;
}

function difficult(idioma){
  switch(idioma){
    case 'spanish':
     var items = new Array('soy','teniente','haría','deje','y','hola','entrar','asesino','buscando','perra','nuestros','paso','historia','tierra','ni','quédate','abre','le','ustedes','mejor','película','dale','sabe','allí','extraño','atrás','palabra','creí','ayer','juro','perdido','un','deberías','mes','barco','ataques','dólares','carne','tuve','armas','tienen','asunto','negro','además','encontré','carne','de','ten','vete','puesto','eh','quería','gobierno','peor','razón','somos','entre','encontré','juntos','más','mano','poder','niños','vivir','hacen','llamado','cállate','sistema','llamas','vivir','grupo','baja','cuarto','pasando','realmente','mala','dólares','claro','marido','necesito','control','haría','terminado','esperen','media')
     break;
	case 'english':
	  var items = new Array('a','o','alguien','esta','vez','estamos','un','nunca','un','tengo','así','mí','noche','mi','es','han','gran','mis','gracias','y','gracias','y','donde','quien','me','quiero','puedo','mía','hay','lugar','son','nombre','necesito','has','la','creo','nuestro','algo','mí','ellos','mañana','ir','buena','vez','papas','así','cuando','hay','por','nada','tú','he','tiempo','casa','antes','trabajo','también','son','nunca','su','todos','los','casa','ya','entonces','espero','voy','sus','me','trabajo','eres','siempre','usted','también','ella','sin','desde','padre','años','sé','él','hecho','hablar','nombre','oh','poco','pasa','gusta','ni','los','será','del','se','mismo','él','mis','que','sí','tipo');
	  break;
  }
  return items;
}

function sin_tildes(){
      var items = new Array('a','o','alguien','esta','vez','estamos','un','nunca','un','tengo','noche','mi','es','han','gran','mis','gracias','y','gracias','y','donde','quien','me','quiero','puedo','hay','lugar','son','nombre','necesito','has','la','creo','nuestro','algo','ellos','mañana','ir','buena','vez','papas','cuando','hay','por','nada','he','tiempo','casa','antes','trabajo','son','nunca','su','todos','los','casa','ya','entonces','espero','voy','sus','me','trabajo','eres','siempre','usted','ella','sin','desde','padre','años','hecho','hablar','nombre','oh','poco','pasa','gusta','ni','los','del','se','mismo','mis','que','tipo');
      return items;
}

// Esta función debería imprimir toda la información, solo acá no se debería
// imprimir cosas fuera de esta.
function mostrar(info,data,data1){
  switch(info){
    case 'WPM':
      document.getElementById('WPM').innerHTML = Math.round(WPM)+' WPM'
      break;
    case 'informacion_juego':
      document.getElementById('palabras_correctas').innerHTML = correcto
      document.getElementById('palabras_incorrectas').innerHTML = incorrecto
      document.getElementById('pulsa').innerHTML = pulsaciones
      break;
    case 'cronometro':
      document.getElementById('cronometro').innerHTML = 60-segundos+' second(s)'
      break;
    case 'borrar':
      document.getElementById('texto').remove()
    case 'imagen':
      if (data < 80)
	document.getElementById('img').src="../img/lento.png"
      else
	document.getElementById('img').src="../img/rapido.png";
      break;
     case 'cambiar_color':
      document.getElementById(data).style.color = data1;
      break;
     case 'tachar':
      document.getElementById(data).style.textDecoration = 'line-through';
      break;
     case 'mostrar_texto':
       document.getElementById('texto').innerHTML += '<div style="display: inline" class="palabras" id='+data+'>'+data1[data]+' </div>';
       break;
     case 'cortar_palabra':
       document.getElementById('test').value = data[data.length-1]
       break;
  }
}
/*

function mostrar_temas(){
  document.getElementById('temas').innerHTML += '<span onclick="_default()" style="background: linear-gradient(135deg, white, white 80%, black);" class="square"></span>  '; 
  document.getElementById('temas').innerHTML += '<span onclick="white_blue()" style="background: linear-gradient(135deg, white, blue 60%, blue);" class="square"></span>  '
  document.getElementById('temas').innerHTML += '<span onclick="white_yellow()" style="background: linear-gradient(135deg, white, yellow 60%, yellow);" class="square"></span>	'
  document.getElementById('temas').innerHTML += '<span onclick="black_yellow()" style="background: linear-gradient(135deg, black, yellow 80%, white);" class="square"></span>  '
  document.getElementById('temas').innerHTML += '<span onclick="red_blue()" style="background: linear-gradient(135deg, red, white 60%, white);" class="square"></span>'
  //document.getElementById('').style = "";

}*/

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function bajar_texto(){
  var texto = document.getElementById('mandar_texto').value
  var res = texto.replace(/  +/g, ' ');
  var items = new Array();
  items = res.split(" ");
  return items;
}

function generar(level,idioma){
  switch(level){
	case 0:
		var items = easy(idioma)
		break;
	case 1:
		var items = difficult(idioma)
		break;
	case 2:
		var items = sin_tildes()
		break;
  case 3:
    var items = bajar_texto()
    break;
  }
  var random = [];
  // Creamos la lista con 200 palabras random.
  if (level != 3){
    for(var i=0; i<230; i++){
      random.push(items[ Math.floor(Math.random() * items.length)]);
     mostrar('mostrar_texto',i,random)
    }
  }
  else{
    for(var i=0; i<items.length; i++){
      mostrar('mostrar_texto',i,items);
    }
    random = items;
  }
  return random
}

function add(x){
        segundos = x;
	WPM = ((pulsaciones/5))/1

	mostrar('WPM',WPM,0)
	mostrar('cronometro',0,0)
	mostrar('informacion_juego',0,0)
	if (segundos != 60){
		segundos++;
		setTimeout(function() {add(segundos) },1000);
	}
	else{
		clearInterval(timer)
		mostrar('borrar',0,0)
		mostrar('imagen',WPM,0)
		// subir datos
		$.get("up.php",{ words: correcto, wpm: Math.round(WPM) , wrong: incorrecto, keystrokes: pulsaciones });
	}
}


function verificar(level,idioma){
  // Esto es para reiniciar la función con diferentes tests.
  palabra_actual=0; pulsaciones=0; incorrecto=0; correcto=0; timer=0;segundos=0;
  Texto = generar(level,idioma);
  function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
  $('#test').on("keydown", disableF5);
  $('#test').keyup(function(e){
      
    if (e.keyCode == 116) {
       location.reload();
    }
               
	if(timer == 0){ add(0); timer = 1;}
	var word = document.getElementById('test').value
	if (/\s/.test(word)){
	  n = word.split(' ')
	  // Esto sirve para cortar la palabra al hacer un espacio e imprimir el texto después del espacio.
	  // n.length es la longitud de la lista no de la palabra.
	  mostrar('cortar_palabra',n,0)

	  // word = word.split(' ')
	  word = n;
	  /* Solo cuento la palabra y el espacio, si el tipo borra toda la palabra no cuento cuantas
	  veces corrijió la palabra (cuantas veces uso borrar/backspace usó para corregir). */
	  //pulsaciones += word[0].length+1

	  if (word[0] == Texto[palabra_actual]){
	    pulsaciones += word[0].length+1;
	    correcto++;
	    mostrar('cambiar_color',palabra_actual,'green');
	  }else{
	    incorrecto++;
	    mostrar('cambiar_color',palabra_actual,'red');
	  }
	  // Pasamos de palabra.	  
	  palabra_actual++;
	}

	else if (word.length <= Texto[palabra_actual].length ){
	  var bool = compare_strings(word,Texto[palabra_actual])
	  if (!bool)
	    mostrar('cambiar_color',palabra_actual,'orange')
	  else
	    mostrar('cambiar_color',palabra_actual,'grey')
	}else if (word.length > Texto[palabra_actual].length){
	  mostrar('cambiar_color',palabra_actual,'orange')
	}

    });
}

function compare_strings(palabra1,palabra2){
  var num = true
  l = Math.min(palabra1.length,palabra2.length);
  for(i=0; i<l; i++){
    if(palabra1[i] != palabra2[i]){ num = false && num }
  }
  return num;
}

function init(){
  working = true;
}
