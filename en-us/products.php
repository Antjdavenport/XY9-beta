<!DOCTYPE HTML>
<html lang="en-us">
    <head>

		<!-- LANGUAGE FILES -->
		<?php 
			include "localization.php";
			$curPageDisplayName = $products_pageDisplayName;
		?>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title><?php echo $productsPageTitle; ?></title>		

		<meta property="og:type"      	content="website"/>
		<meta property="og:title"     	content=<?php echo $productsPageOGTitle; ?>/>
		<meta property="og:site_name" 	content=<?php echo $siteName; ?>/>
		<meta property="og:description" content=<?php echo $productsPageDescription; ?>/>
		<meta property="og:image" content=<?php echo $siteImage; ?>/>

		<link rel="shortcut icon" href=<?php echo $shortcutIcon; ?> />

		<meta name="robots"           content="index,follow"/>
		<meta name="description"      content=<?php echo $productsPageDescription; ?>/>

		<!-- STYLES -->
		<link type="text/css" rel="stylesheet" href="../assets/css/global.css" />
		<link type="text/css" rel="stylesheet" href="../assets/css/products.css" />

		<!-- SCRIPTS -->
		<script type="text/javascript" src="../assets/js/jquery-1.11.3.min.js"></script>
		<script src="../assets/js/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="../assets/js/AnimatedSprite.js"></script>
		<script type="text/javascript" src="../assets/js/global.js"></script>
		<script type="text/javascript" src="../assets/js/products.js"></script>

        <!-- GUS -->
		<link rel="stylesheet" href="//assets.pokemon.com/static2/_ui/css/gus.css" media="all" type="text/css"/>
        <script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/vendor/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/gus.js"></script>

	</head>

	<body>

		<?php include "../assets/templates/global_pokemon_nav.php"; ?>
		<?php include "../assets/templates/global_external_link_warning.php"; ?>

		<div id="bgHero">
			<img id="hero" src="../assets/img/products/page_bg.jpg" alt="" />

			<img id="leaf" src="../assets/img/new/leaf1.png" height="150px" width="150px">
			<img id="leaf2" src="../assets/img/new/leaf2.png" height="70px" width="70px">
			<img id="leaf3" src="../assets/img/new/leaf4.png" height="70px" width="70px">
			<img id="leaf4" src="../assets/img/new/leaf3.png" height="40px" width="40px">
			<img id="leaf5" src="../assets/img/new/leaf2.png" height="70px" width="70px">
			<img id="leaf6" src="../assets/img/new/leaf1.png" height="150px" width="150px">
			<img id="leaf7" src="../assets/img/new/leaf3.png" height="70px" width="70px">
			<img id="leaf8" src="../assets/img/new/leaf2.png" height="70px" width="70px">
			<img id="leaf9" src="../assets/img/new/leaf1.png" height="100px" width="100px">

			<img id="swipe1" src="../assets/img/products/swipe1_large.png">
			<img id="swipe2" src="../assets/img/products/swipe2_large.png">
			<img id="sparkle" src="../assets/img/products/sparkles1_large.png">
		</div>

		<script type="text/javascript">

		window.onload = function(){


 
	   	var leaf1 = $('#leaf');
	   	var leaf2 = $('#leaf2');
	    var leaf3 = $('#leaf3');
	    var leaf4 = $('#leaf4');
	    var leaf5 = $('#leaf5');
	    var leaf6 = $('#leaf6');
	    var leaf7 = $('#leaf7');
	    var leaf8 = $('#leaf8');
	    var leaf9 = $('#leaf9');

	    var swipe = $('#swipe1');
	    var swipe2 = $('#swipe2');
	    var sparkle = $('#sparkle');

	   var line2 = new TimelineMax({delay: 2, repeat: 100, repeatDelay:1.2});


	    line2.to(swipe2, 0.15, {css: {opacity: 0.8, top:"2%"}});
	  	line2.to(swipe2, 0.4, {css: {opacity: 0, top:"13%"}} );
	    line2.to(swipe, 0.15, {css: {opacity: 0.8, top:"2%"}});
	  	line2.to(swipe, 0.4, {css: {opacity: 0, top:"10%"}} );
		

	 	line2.to(sparkle, 0.3, {css: {opacity: 1, }} );
	  	line2.to(sparkle, 0.4, {css: {opacity: 0, }} );

		var tl = new TimelineMax({repeat:800});

 		 tl.to(leaf1, 2, {left:"110%", top:"5%",  ease:Quint.easeInOut, rotation: 180});
 		 tl.to(leaf2, 1.7, {left:"110%", top:"90%",  ease:Quint.easeInOut, rotation: -180}, "-=1");
 		 tl.to(leaf3, 1.8, {left:"110%", top:"60%",  ease: Power0.easeNone,  rotation: 180}, "-=1.3");
 		 tl.to(leaf4, 2, {left:"110%", top:"82%",  ease:Quint.easeInOut,  rotation: 180}, "-=2.2");
 		 tl.to(leaf5, 2.1, {left:"110%", top:"70%",  ease:Quint.easeInOut, rotation: 200}, "-=1.2");
 		 tl.to(leaf6, 2.1, {left:"110%", top:"80%",  ease:Quint.easeInOut,  rotation: 290}, "-=3");
 		 tl.to(leaf7, 1.5, {left:"110%", top:"60%",  ease: Power0.easeNone, rotation: 180}, "-=1.6");
 		 tl.to(leaf8, 1.5, {left:"110%", top:"90%",  ease:Quint.easeInOut, rotation: -180}, "-=1.2");
 		 




			}
</script>

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


		<div id="playerModal">
			<div id="videoBox">

				<div id="playerFrame">
				<div id="closeBtn">
					X
				</div>
				
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
		</div>


		<div id="container">
		<div id="content">

			<div id="trainerBoxContainer">

				<div id="platter2Container">
					<img id="platter2" src="../assets/img/products/platter.png" alt="" />
				</div>
			
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
							<span class="smaller">Elite Trainer Box</span>
						</div>
						<div id="blinky"><img src="../assets/img/global/blinky.png" alt="" /></div>
						<img id="frame" src="../assets/img/global/textFrame6_top.png" alt="" />
						<img id="arm" src="../assets/img/strategy/arm.png" alt="" />
						<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
						<img id="gear2" class="gear" src="../assets/img/global/gear.png" alt="" />
					</div>
					<div id="copy">
						<div id="lines"></div>
						<p>Join the Elite Trainers with the TCG: XY&mdash;BREAKpoint Elite Trainer Box! This impressive colletion contains a treasure trove of awesome Pokémon TCG cards and accessories. With the XY&mdash;BREAKpoint Elite Trainer Box, you'll be ready to compete with the best!</p>
						<img id="playBtn" src="../assets/img/products/playBtn.png" alt="" />
					</div>
				</div>

				<div id="trainerBox">
					<img id="platter" src="../assets/img/products/platter_m.png" alt="" />
					<img id="boxImage" src="../assets/img/products/eliteBox.png" alt="Elite Trainer Box" />
				</div>

				<div id="listBox">
					<div id="top">
						<img id="frame" src="../assets/img/global/textFrame7_top.png" alt="" />
						<img id="arm" src="../assets/img/new/arm_right.png" alt="" />
						<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
						<img id="gear2" class="gear" src="../assets/img/global/gear.png" alt="" />
					</div>
					<div id="copy">
						<span id="large">Inside, you’ll find:</span><br />
						&bull; 8 Pokémon TCG: XY—BREAKpoint booster packs<br />
						&bull; 65 card sleeves featuring Mega Gyarados<br />
						&bull; 45 Pokémon TCG Energy cards<br />
						&bull; A player’s guide to the XY—BREAKpoint expansion<br />
						&bull; 6 damage-counter dice<br />
						&bull; 1 competition-legal coin-flip die<br />
						&bull; 2 acrylic condition markers<br />
						&bull; A collector’s box to hold everything, with 4 dividers to keep it organized<br />
						&bull; A code card for the Pokémon Trading Card Game Online<br />
						<br />

						<div class="centered">
							<a href="#">
								<div class="greyButton">
									Buy Now!
								</div>
							</a>
						</div>

					</div>
					<div id="bottom">
						<img id="frame" src="../assets/img/global/textFrame7_bottom.png" alt="" />
					</div>
				</div>
			</div> <!-- end of #trainerBoxContainer -->



			<div id="gyradosBoxContainer">
				<div id="gyradosIntroBox">
					<div id="top">
						<div id="flare" class="loopingAnim">
							<img src="../assets/img/global/flare.png" alt="" />
						</div>
						<div id="header" class="blackOutline">
							Pokémon TCG:<br />
							<span class="smaller">Shiny Mega Gyarados Collection</span>
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
						<p>Pokémon Trainers know that Shiny Pokémon are not at all common, making the Pokémon TCG: Shiny Mega Gyarados Collection a sight to behold! This collection includes the enormous power of Shiny Mega Gyarados as an intimidating sculpted figure, plus a Shiny Gyarados promo card and extra Pokémon TCG booster packs! Make a big splash with the Shiny Mega Gyarados Collection!</p>
					</div>
				</div>

				<div id="sideProjector">
					<img src="../assets/img/global/sideProjector.png" alt="" />
				</div>

				<div id="boxSet">
					<img src="../assets/img/products/boxSet.png" alt="Box Set" />
				</div>


				<div id="gyradosListBox">
					<div id="pyramid" class="pyramid" data-scrollPercent=".2">
						<img src="../assets/img/global/pyramid.gif" alt="" />
					</div>
					<div id="top">
						<img id="frame" src="../assets/img/global/textFrame7_top.png" alt="" />
						<img id="arm" src="../assets/img/new/arm_right.png" alt="" />
						<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
					</div>
					<div id="copy">
						<span id="large">This collection includes:</span><br />
						&bull; A fantastic figure of Shiny Mega Gyarados!<br />
						&bull; A never-before-seen foil promo card featuring Shiny Gyarados!<br />
						&bull; 4 Pokémon TCG booster packs<br />
						&bull; A code card for the Pokémon Trading Card Game Online<br />
						<br />

						<div class="centered">
							<a href="#">
								<div class="greyButton">
									Buy Now!
								</div>
							</a>
						</div>

					</div>
					<div id="bottom">
						<img id="frame" src="../assets/img/global/textFrame7_bottom.png" alt="" />
					</div>
				</div>
			</div> <!-- end of #gyradosBoxContainer -->

			
			
			<?php include "../assets/templates/global_callouts_external.php" ?>

			
		</div> <!-- end of content -->
		</div> <!-- END OF CONTAINER -->
			
		<?php include "../assets/templates/global_footer.php"; ?>

		
		
	</body>
</html>
