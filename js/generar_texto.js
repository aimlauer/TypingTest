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

function generar(level,idioma){
  document.getElementById('texto').innerHTML = ""
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
  }
  var random = [];
  // Creamos la lista con 200 palabras random.
  for(var i=0; i<230; i++){
    random.push(items[ Math.floor(Math.random() * items.length)]);
    mostrar('mostrar_texto',i,random)
  }
  return random
}

