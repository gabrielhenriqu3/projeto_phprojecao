<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">ONDE ESTOU?</span></h5>
    <p>Me encontre neste endereço (em caso de erro, utilize o <a href="https://www.google.com.br/search?q=find+my+phone&oq=find+my+phone&aqs=chrome..69i57j0l5.2915j0j7&sourceid=chrome&ie=UTF-8/">Google Ache meu Celular)</a></p>
    <div id="" class="" style="width:%;height:px;"></div>
	<iframe
		width="600"
		height="450"
		frameborder="0" style="border:0"
		src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB6DEatbozWbRJU_8haYrzQeSmZmHIteNs
		&q=Brasilia+DF" allowfullscreen>
	</iframe>

	<p><span class="w3-tag">ACHEI!</span> Se souber como me encontrar, envie estas informações imediatamente para o 190, 191 ou 197</p>
    <p><strong>Certifique-se</strong> de que realmente me conhece ou mostre para alguém que saiba do meu sumiço</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nome" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Idade" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Ultimo Horario visto" required name="date" value="2018-06-04T10:50"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Diga mais sobre esta pessoa" required name="Message"></p>
      <p><button class="w3-button w3-black" type="submit">Enviar Mensagem</button></p>
    </form>
  </div>


<!-- Add Google Maps -->

<script>
function myMap()
{
  myCenter=new google.maps.LatLng(-15.655857,  -47.804677);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBztxW-h8-NfSz9AM7dnecMh5eA8XKsirE&callback=initMap">
</script>