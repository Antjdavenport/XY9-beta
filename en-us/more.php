<!DOCTYPE HTML>
<html lang="en-us">
    <head>

		<!-- LANGUAGE FILES -->
		<?php 
			include "localization.php";
			$curPageDisplayName = $more_pageDisplayName;
		?>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title><?php echo $morePageTitle; ?></title>		

		<meta property="og:type"      	content="website"/>
		<meta property="og:title"     	content=<?php echo $morePageOGTitle; ?>/>
		<meta property="og:site_name" 	content=<?php echo $siteName; ?>/>
		<meta property="og:description" content=<?php echo $morePageDescription; ?>/>
		<meta property="og:image" content=<?php echo $siteImage; ?>/>

		<link rel="shortcut icon" href=<?php echo $shortcutIcon; ?> />

		<meta name="robots"           content="index,follow"/>
		<meta name="description"      content=<?php echo $morePageDescription; ?>/>



		<!-- STYLES -->
		<link type="text/css" rel="stylesheet" href="../assets/css/global.css" />
		<link type="text/css" rel="stylesheet" href="../assets/css/more.css" />

		<!-- SCRIPTS -->
		<script type="text/javascript" src="../assets/js/jquery-1.11.3.min.js"></script>
		<script src="../assets/js/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="../assets/js/AnimatedSprite.js"></script>
		<script type="text/javascript" src="../assets/js/global.js"></script>
		<script type="text/javascript" src="../assets/js/more.js"></script>

        <!-- GUS -->
		<link rel="stylesheet" href="//assets.pokemon.com/static2/_ui/css/gus.css" media="all" type="text/css"/>
        <script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/vendor/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/gus.js"></script>

	</head>

	<body>

		<?php include "../assets/templates/global_pokemon_nav.php"; ?>
		<?php include "../assets/templates/global_external_link_warning.php"; ?>

		<div id="bgHero">
			<!--<img id="hero2" src="../assets/img/more/page_bg_2.jpg" alt="" /> -->
			<img id="hero" src="../assets/img/more/page_bg.jpg" alt="" />
			<!--<img id="rock1" class="loopingAnim" src="../assets/img/more/page_bg_rock1.png" alt="" />
			<img id="rock2" class="loopingAnim" src="../assets/img/more/page_bg_rock2.png" alt="" />
			<img id="rock3" class="loopingAnim" src="../assets/img/more/page_bg_rock3.png" alt="" />
			<img id="rock4" class="loopingAnim" src="../assets/img/more/page_bg_rock4.png" alt="" />
			<img id="rock5" class="loopingAnim" src="../assets/img/more/page_bg_rock5.png" alt="" /> -->

<--
			<img id="NewRock1" src="../assets/img/more/rock1.png">
			<img id="NewRock2" src="../assets/img/more/rock2.png">
			<img id="NewRock3" src="../assets/img/more/rock3.png">
			<img id="NewRock4" src="../assets/img/more/rock4.png">
			<img id="NewRock5" src="../assets/img/more/rock5.png">

			<img id="NewRock5" src="../assets/img/more/rock5.png">
			<img id="NewRock5" src="../assets/img/more/rock5.png">
			<img id="NewRock5" src="../assets/img/more/rock5.png">
			<img id="NewRock5" src="../assets/img/more/rock5.png">

			<img id="bolt" src="../assets/img/more/bolt1.png">
			<img id="bolt2" src="../assets/img/more/bolt2.png">
			<img id="bolt3" src="../assets/img/more/bolt3.png">
			<img id="smallbolt" src="../assets/img/more/smallbolt.png">
			<img id="smallbolt2" src="../assets/img/more/smallbolt2.png">


		
		</div>

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

			<div id="tcgBox">
				<div id="top">
					<div id="flare" class="loopingAnim">
						<img src="../assets/img/global/flare.png" alt="" />
					</div>
					<div id="header" class="blackOutline">
					Play the Pokémon <br />Trading Card Game Online!</div>
					<div id="blinky"><img src="../assets/img/global/blinky.png" alt="" /></div>
					<img id="frame" src="../assets/img/global/textFrame_top.png" alt="" />
					<img id="arm" src="../assets/img/more/arm.png" alt="" />
					<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
					<img id="gear2" class="gear" src="../assets/img/global/gear.png" alt="" />
				</div>
				<div id="top2">
					<img id="beam" src="../assets/img/more/beam.png" alt="" />
					<img id="frame" src="../assets/img/global/textFrame2_top.png" alt="" />
				</div>
				<div id="copy">
					<div id="floatingDownloadBoxSpace">	
					</div>
					<p>The Pokémon Trading Card Game Online is an online version of the Pokémon TCG! The rules are the same for both the paper and online versions, so the Pokémon TCG Online is a great way to continue the fun when your friends aren’t around or your favorite game store has closed for the evening.</p>
					<p>The complete XY—BREAKpoint expansion is available to play in the Pokémon Trading Card Game Online!</p>
				</div>
				<div id="bottom">
					<img id="smFrameBottom" src="../assets/img/global/textFrame_bottom.png" alt="" />
					<img id="lgFrameBottom" src="../assets/img/global/textFrame2_bottom.png" alt="" />
				</div>
			</div>

			<a href="http://www.pokemon.com/us/pokemon-tcg/play-online/download/">
			<div id="downloadBox">
				<div id="pyramid" class="pyramid" data-scrollPercent=".2">
					<img src="../assets/img/global/pyramid.gif" alt="" />
				</div>
				<div id="info" class="blackOutline">
					Download the Pokémon TCG Online installer and start playing today!
				</div>
				<div id="arrow">
					<img src="../assets/img/more/arrow.png" alt="Download" />
				</div>
				<div id="cta" class="blackOutline">
					<span id="line1">DOWNLOAD</span><br /><span id="line2">NOW</span>
					
				</div>
			</div>
			</a>
			
			<?php include "../assets/templates/global_callouts_external.php" ?>

			
		</div> <!-- end of content -->
		</div> <!-- END OF CONTAINER -->
			
		<?php include "../assets/templates/global_footer.php"; ?>

		
		
	</body>
</html>
