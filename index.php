<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>D.L DEVELOPER</title>
	<script src="https://kit.fontawesome.com/e3cdb81d19.js" href="<?php echo INCLUDE_PATH; ?>" crossorigin="anonymous"></script>	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/stylesheet.css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<meta charset="utf-8" />
	<meta name="description" content="Descrição do meu Website">
	<meta name="keywords" content="Palavras-chave,do,site">
</head>
<body>


	<header>
		<div class="center">
			<div class="logo left"><i class="fas fa-code"></i><span></span>D.V DEVELOPER</span></p></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>Sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>Serviços">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars" aria-hidden="true"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>Home">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>Sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>Serviços">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>Contato">Contato</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->
		</div><!--center-->	
	</header>
	
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			include('pages/404.php');
		}
		
	?>


	<footer>
		<div class="center">
			<p>todos os direitos reservados</p>
		</div><!--center-->
	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
	<?php
		if ($url =='home' || 'Serviços') {
			
	?>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php }?>
	<?php
		if ($url =='Contato') {
			
	?>
	<script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<?php }?>
</body>
</htm l>