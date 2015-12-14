<!DOCTYPE HTML>
<html lang="en-us">
    <head>

		<!-- LANGUAGE FILES -->
		<?php 
			include "localization.php";
			$curPageDisplayName = $strategy_pageDisplayName;
		?>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title><?php echo $strategyPageTitle; ?></title>		

		<meta property="og:type"      	content="website"/>
		<meta property="og:title"     	content=<?php echo $strategyPageOGTitle; ?>/>
		<meta property="og:site_name" 	content=<?php echo $siteName; ?>/>
		<meta property="og:description" content=<?php echo $strategyPageDescription; ?>/>
		<meta property="og:image" content=<?php echo $siteImage; ?>/>

		<link rel="shortcut icon" href=<?php echo $shortcutIcon; ?> />

		<meta name="robots"           content="index,follow"/>
		<meta name="description"      content=<?php echo $strategyPageDescription; ?>/>

		<!-- STYLES -->
		<link type="text/css" rel="stylesheet" href="../assets/css/global.css" />
		<link type="text/css" rel="stylesheet" href="../assets/css/strategy.css" />

		<!-- SCRIPTS -->
		<script type="text/javascript" src="../assets/js/jquery-1.11.3.min.js"></script>
		<script src="../assets/js/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="../assets/js/AnimatedSprite.js"></script>
		<script type="text/javascript" src="../assets/js/global.js"></script>
		<script type="text/javascript" src="../assets/js/strategy.js"></script>

        <!-- GUS -->
		<link rel="stylesheet" href="//assets.pokemon.com/static2/_ui/css/gus.css" media="all" type="text/css"/>
        <script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/vendor/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/gus.js"></script>

	</head>

	<body>

		<?php include "../assets/templates/global_pokemon_nav.php"; ?>
		<?php include "../assets/templates/global_external_link_warning.php"; ?>

		<div id="bgHero"></div>

		<div id="machines">
			<div id="globalNavPlate">
				<img src="../assets/img/global/nav_plate.png" alt="" />
			</div>
			<div id="globalNavBeam">
				<img src="../assets/img/global/nav_beam.png" alt="" />
			</div>
			<div id="globalNavArm">
			</div>
		</div>

		<?php include "../assets/templates/global_nav.php"; ?>

		<div id="container">
		<div id="content">

			
			<div id="introBox">
				<div id="pyramid" class="pyramid" data-scrollPercent=".2">
					<img src="../assets/img/global/pyramid.gif" alt="" />
				</div>
				<div id="top">
					<div id="flare" class="loopingAnim">
						<img src="../assets/img/global/flare.png" alt="" />
					</div>
					<div id="header" class="blackOutline">
						XY&mdash;BREAKpoint<br />
						<span class="smaller">Strategies</span>
					</div>
					<div id="blinky"><img src="../assets/img/global/blinky.png" alt="" /></div>
					<img id="frame" src="../assets/img/global/textFrame6_top.png" alt="" />
					<img id="frameExtension" src="../assets/img/global/textFrame_extension.png" alt="" />
					<img id="arm" src="../assets/img/strategy/arm.png" alt="" />
					<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
					<img id="gear2" class="gear" src="../assets/img/global/gear.png" alt="" />
				</div>
				<div id="copy">
					<div id="lines"></div>
					<p>With all the new Pokémon-<span class="italic">EX</span> and Pokémon BREAK cards arriving in the XY&mdash;BREAKpoint expansion, the routes to victory are virtually endless. If you're wondering where to start, take a look at several ideas we've come up with for you to try.</p>
				</div>
			</div>

			<div id="videoBox">

				<div id="sideProjector" class="sideProjector">
					<img src="../assets/img/global/sideProjector.png" alt="" />
				</div>

				<div id="playerFrame">
				<!-- LIMELINE PLAYER -->
					<span class="LimelightEmbeddedPlayer">
					    <script src="http://video.limelight.com/player/embed.js"></script>
					    <object class="vidPlayer" type="application/x-shockwave-flash" id="limelight_player_95243" name="limelight_player_95243" class="LimelightEmbeddedPlayerFlash" data="http://video.limelight.com/player/loader.swf">
						    <param name="movie" value="http://video.limelight.com/player/loader.swf"/>
						    <param name="wmode" value="window"/>
						    <param name="allowScriptAccess" value="always"/>
						    <param name="allowFullScreen" value="true"/>
						    <param id="vidVars" name="flashVars" value="playerForm=2b84c3101f624f1d9f5857abfc109d52&mediaId=155cba39f1c44a518397363e19db8c42&deepLink=true&autoplay=false"/>
					    </object>
					    <script>LimelightPlayerUtil.initEmbed('limelight_player_95243');</script>
				    </span>
				    <!-- END OF LIMELIGHT PLAYER -->
				</div>
			</div>
			
			<?php include "../assets/templates/global_callouts_external.php" ?>

			
		</div> <!-- end of content -->
		</div> <!-- END OF CONTAINER -->
			
		<?php include "../assets/templates/global_footer.php"; ?>

		
		
	</body>
</html>
