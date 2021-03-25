<!DOCTYPE html>
<html>
<head>
	<title>Contato</title>
</head>
<body>


	<script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>

<div style='overflow:hidden;height:180;width:100%;color: #0095eb'>
    <div id='gmap_canvas' style='height:280px;width:100%; margin-left: 5px;'></div>
     <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
   </div>

       <!-- Alterar apenas Aqui -->
       <script type='text/javascript'>
        function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(-9.907628046166558, -56.09452768796357),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-9.907628046166558, -56.09452768796357)});infowindow = new google.maps.InfoWindow({content:'<strong> MEU ENDEREÇO </strong><br> MINHA EMPRESA <br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
        </script>

    <div class="contato-container">
    	<div class="center">
    		<form>
	    		<input type="text" name="nome" placeholder="nome...">
	    		<div></div>
	    		<input type="text" name="email" placeholder="E-mail...">
	    		<div></div>
	    		<input type="text" name="telefone" placeholder="telefone...">
	    		<div></div>
	    		<textarea name="mensagem" placeholder="Digite sua mensagem..."></textarea>
	    		<div></div>
	    		<input type="submit" name="acao" value="Enviar">
    		</form>
    	</div><!--center-->
    </div><!--contato-container-->    
</body>
</html>
