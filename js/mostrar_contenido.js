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

