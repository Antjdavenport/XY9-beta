<!DOCTYPE HTML>
<html lang="en-us">
    <head>

		<!-- LANGUAGE FILES -->
		<?php 
			include "localization.php";
		?>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title><?php echo $homePageTitle; ?></title>		

		<meta property="og:type"      	content="website"/>
		<meta property="og:title"     	content=<?php echo $homePageOGTitle; ?>/>
		<meta property="og:site_name" 	content=<?php echo $siteName; ?>/>
		<meta property="og:description" content=<?php echo $homePageDescription; ?>/>
		<meta property="og:image" content=<?php echo $siteImage; ?>/>

		<link rel="shortcut icon" href=<?php echo $shortcutIcon; ?> />

		<meta name="robots"           content="index,follow"/>
		<meta name="description"      content=<?php echo $homePageDescription; ?>/>


		<!-- STYLES -->
		<link type="text/css" rel="stylesheet" href="../assets/css/global.css" />
		<link type="text/css" rel="stylesheet" href="../assets/css/home.css" />

		<!-- SCRIPTS -->
		<script type="text/javascript" src="../assets/js/jquery-1.11.3.min.js"></script>
		<script src="../assets/js/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="../assets/js/AnimatedSprite.js"></script> 
		<script type="text/javascript" src="../assets/js/global.js"></script>
		<script type="text/javascript" src="../assets/js/home.js"></script>

        <!-- GUS -->
		<link rel="stylesheet" href="//assets.pokemon.com/static2/_ui/css/gus.css" media="all" type="text/css"/>
        <script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/vendor/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/gus.js"></script>

	</head>

	<body>

		<?php include "../assets/templates/global_pokemon_nav.php"; ?>
		<?php include "../assets/templates/global_external_link_warning.php"; ?>
		<?php include "../assets/templates/home.php"; ?>


		
	</body>
</html>
