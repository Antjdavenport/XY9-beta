<!DOCTYPE HTML>
<html lang="en-us">
    <head>

		<!-- LANGUAGE FILES -->
		<?php 
			include "localization.php";
			$curPageDisplayName = $new_pageDisplayName;
		?>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title><?php echo $newPageTitle; ?></title>		

		<meta property="og:type"      	content="website"/>
		<meta property="og:title"     	content=<?php echo $newPageOGTitle; ?>/>
		<meta property="og:site_name" 	content=<?php echo $siteName; ?>/>
		<meta property="og:description" content=<?php echo $newPageDescription; ?>/>
		<meta property="og:image" content=<?php echo $siteImage; ?>/>

		<link rel="shortcut icon" href=<?php echo $shortcutIcon; ?> />

		<meta name="robots"           content="index,follow"/>
		<meta name="description"      content=<?php echo $newPageDescription; ?>/>

		<!-- STYLES -->
		<link type="text/css" rel="stylesheet" href="../assets/css/global.css" />
		<link type="text/css" rel="stylesheet" href="../assets/css/new.css" />

		<!-- SCRIPTS -->
		<script type="text/javascript" src="../assets/js/jquery-1.11.3.min.js"></script>
		<script src="../assets/js/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="../assets/js/AnimatedSprite.js"></script>
		<script type="text/javascript" src="../assets/js/global.js"></script>
		<script type="text/javascript" src="../assets/js/new.js"></script>
	

        <!-- GUS -->
		<link rel="stylesheet" href="//assets.pokemon.com/static2/_ui/css/gus.css" media="all" type="text/css"/>
        <script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/vendor/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="//assets.pokemon.com/static2/_ui/js/gus.js"></script>

	</head>

	<body>

		<?php include "../assets/templates/global_pokemon_nav.php"; ?>
		<?php include "../assets/templates/global_external_link_warning.php"; ?>

		<div id="bgHero">
			<img id="hero" src="../assets/img/new/page_bg.jpg" alt="" />
			
			<img id="leaf" src="../assets/img/new/leaf1.png" height="150px" width="150px">
			<img id="leaf2" src="../assets/img/new/leaf2.png" height="70px" width="70px">
			<img id="leaf3" src="../assets/img/new/leaf4.png" height="70px" width="70px">
			<img id="leaf4" src="../assets/img/new/leaf3.png" height="70px" width="70px">
			<img id="leaf5" src="../assets/img/new/leaf2.png" height="70px" width="70px">
			<img id="leaf6" src="../assets/img/new/leaf1.png" height="150px" width="150px">
			<img id="leaf7" src="../assets/img/new/leaf3.png" height="70px" width="70px">
			<img id="leaf8" src="../assets/img/new/leaf2.png" height="70px" width="70px">
			<img id="leaf9" src="../assets/img/new/leaf1.png" height="100px" width="100px">

			<img id="magic5" src="../assets/img/new/magic5.png" height="50%" width="50%">
			<img id="magic4" src="../assets/img/new/magic4.png" height="80%" width="60%">
			<img id="magic3" src="../assets/img/new/magic3.png" height="70%" width="60%">
			<img id="magic2" src="../assets/img/new/magic1.png" height="50%" width="50%">
			<img id="magic1" src="../assets/img/new/magic2.png" height="20%" width="30%">

			<img id="star1" src="../assets/img/new/star1.png">
			<img id="star2" src="../assets/img/new/star2.png">
			<img id="star3" src="../assets/img/new/star3.png">
			<img id="star4" src="../assets/img/new/star4.png">
			<img id="star5" src="../assets/img/new/star5.png">
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

	    var star1 = $('#star1');
	    var star2 = $('#star2');
	    var star3 = $('#star3');
	    var star4 = $('#star4');
	    var star5 = $('#star5');

		var tl = new TimelineMax({repeat:200, repeatDelay:1.5});

 		 tl.to(leaf1, 1.5, {left:"110%", top:"5%",  ease:Quint.easeInOut, rotation: 180});
 		 tl.to(leaf2, 1.2, {left:"110%", top:"-5%",  ease:Quint.easeInOut, rotation: -180}, "-=1");
 		 tl.to(leaf3, 1.3, {left:"110%", top:"40%",  ease:Quint.easeInOut,  rotation: 180}, "-=.7");
 		 tl.to(leaf4, 1.7, {left:"110%", top:"5%",  ease:Quint.easeInOut,  rotation: 180}, "-=.7");
 		 tl.to(leaf5, 1.3, {left:"110%", top:"8%",  ease: Power0.easeNone, rotation: 200}, "-=1");
 		 tl.to(leaf6, 1.7, {left:"110%", top:"60%",  ease: Power1.easeIn,  rotation: 290}, "-=1");
 		 tl.to(leaf7, 1.5, {left:"110%", top:"5%",  ease:Quint.easeInOut, rotation: 180}, "-=.3");
 		 tl.to(leaf8, 1.2, {left:"110%", top:"-5%",  ease:Quint.easeInOut, rotation: -180}, "-=1");
 		 tl.to(leaf9, 1.3, {left:"110%", top:"40%",  ease:Quint.easeInOut,  rotation: 180}, "-=.7");


 		 	var tlstar = new TimelineMax({repeat:200, repeatDelay:0});
			tlstar.to(star1, 0.5, {css: {opacity: 1}, ease:Quint.easeInOut});
			tlstar.to(star1, 0.5, {css: {opacity: 0}, ease:Quint.easeInOut});
			tlstar.to(star2, 0.5, {css: {opacity: 1}, ease:Quint.easeInOut}, "-=.8");
			tlstar.to(star2, 0.5, {css: {opacity: 0}, ease:Quint.easeInOut});
			tlstar.to(star3, 0.5, {css: {opacity: 1}, ease:Quint.easeInOut}, "-=.8");
			tlstar.to(star3, 0.5, {css: {opacity: 0}, ease:Quint.easeInOut});
			tlstar.to(star4, 0.5, {css: {opacity: 1}, ease:Quint.easeInOut}, "-=.8");
			tlstar.to(star4, 0.5, {css: {opacity: 0}, ease:Quint.easeInOut});
			tlstar.to(star5, 0.5, {css: {opacity: 1}, ease:Quint.easeInOut}, "-=.8");
			tlstar.to(star5, 0.5, {css: {opacity: 0}, ease:Quint.easeInOut});
			}

			var wrap = $("#globalChromeBottom");



/*
	 $(window).scroll(function(){
        if($(window).scrollTop() > wrap.top){
        	console.log(wrap.scrollTop());
              $('#globalChromeBottom').css('position','fixed').css('top','70%');
              console.log("working");
        } else {
            $('#globalChromeBottom').css('position','fixed');
            console.log("not working");
        }    
});
	
*/

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

		<div id="container">
		<div id="content">

			<div id="introBox" class="box">
				<div id="pyramid" class="pyramid" data-scrollPercent=".2">
					<img src="../assets/img/global/pyramid.gif" alt="" />
				</div>
				<div id="arm">
					<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
					<img id="gear2" class="gear" src="../assets/img/global/gear.png" alt="" />
					<img src="../assets/img/new/arm_right.png" alt="" />
				</div>
				<div id="top">
					<div id="flare" class="loopingAnim flare">
						<img src="../assets/img/global/flare.png" alt="" />
					</div>
					<div id="header" class="boxHeader blackOutline">Pokémon TCG:<br /><span class="smallHeader">XY&mdash;BREAKpoint</span></div>
					<div id="blinky" class="blinky"><img src="../assets/img/global/blinky.png" alt="" /></div>
					<img src="../assets/img/global/textFrame_top.png" alt="" />
				</div>
				<div id="copy">
					<p>The hour grows desperate, and two worlds stand at the brink! The Pokémon TCG: XY&mdash;BREAKpoint expansion reveals the growing rift between the twin worlds, first discovered by Shiny Mega Gyarados-<span class="italic">EX</span>. As the rift tears through the skies, more Pokémon are drawn into the struggle, including Greninja BREAK, Luxray BREAK, and Mega Scizor-<span class="italic">EX</span>! Can they mend the rift and save both worlds from collision chaos?</p>
				</div>
				<div id="bottom">
					<img src="../assets/img/global/textFrame_bottom.png" alt="" />
				</div>
			</div>

			<div id="deckIntroBox" class="box">
				<div id="top">
					<div id="header" class="boxHeader blackOutline">XY&mdash;BREAKpoint<br /><span class="smallHeader">Theme Decks</span></div>
					<div id="blinky" class="blinky"><img src="../assets/img/global/blinky.png" alt="" /></div>
					<img id="frameTop" src="../assets/img/global/textFrame_top.png" alt="" />
					<img id="arm" src="../assets/img/new/deckIntro_arm.png" alt="" />
					<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
					<img id="gear2" class="gear" src="../assets/img/global/gear.png" alt="" />
				</div>
				<div id="copy">
					<div id="lines"></div>
					<p>Pokémon TCG: XY&mdash;BREAKpoint theme decks are a great way to get started in the Pokémon TCG! Each theme deck comes with a legal 60-card deck, as well as damage counters and condition markers, a card checklist, and a deckbox.</p>
				</div>
			</div>

			<div id="waveDeck">
				
				<div id="pyramid" class="pyramid" data-scrollPercent=".2">
					<img src="../assets/img/global/pyramid.gif" alt="" />
				</div>

				<div id="waveDeckBox" class="box">	
					<div id="arm">
						<img src="../assets/img/new/arm_right.png" alt="" />
						<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
						<img id="gear2" class="gear" src="../assets/img/global/gear.png" alt="" />
					</div>
					<div id="top">
						<div id="header" class="boxHeader"></div>
						<div id="flare" class="loopingAnim flare">
							<img src="../assets/img/global/flare.png" alt="" />
						</div>
						<div id="blinky" class="blinky"><img src="../assets/img/global/blinky.png" alt="" /></div>
						<div id="beam"><img src="../assets/img/new/beam.png" alt="" /></div>
						<img id="frameTop" src="../assets/img/global/textFrame_top.png" alt="" />
						<img id="frame4Top" src="../assets/img/global/textFrame4_top.png" alt="" />
					</div>
					<div id="copy">
						<img class="deckName" src="../assets/img/global/XY9_PCD_Logo_EN_WaveSlasher_en-us.png" alt="" />
						<p>Cut through waves and slash foes in the battle arena&mdash;flow like water and bend like grass! Greninja and Slowking come to your call in the Wave Slasher theme deck!</p>
						<div class="centered">
							<a href="#">
								<div class="greyButton">
									Buy Now!
								</div>
							</a>
						</div>
					</div>
					<div id="bottom">
						<img id="frameBottom" src="../assets/img/global/textFrame_bottom.png" alt="" />
						<img id="frame4Bottom" src="../assets/img/global/textFrame4_bottom.png" alt="" />
					</div>
				</div>

				<div id="sideProjector" class="sideProjector">
					<img src="../assets/img/global/sideProjector.png" alt="" />
				</div>

				<div id="waveDeckPacks">
					<img id="packs" src="../assets/img/new/waveDeck.png" alt="Wave Slasher theme deck packs" />
				</div>

			</div>

			<div id="electricDeck">

				<div id="electricDeckBox" class="box">
					<div id="arm">
						<img src="../assets/img/new/arm_right.png" alt="" />
						<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
						<img id="gear2" class="gear" src="../assets/img/global/gear.png" alt="" />
					</div>
					<div id="top">
						<div id="header" class="boxHeader"></div>
						<div id="flare" class="loopingAnim flare">
							<img src="../assets/img/global/flare.png" alt="" />
						</div>
						<div id="blinky" class="blinky"><img src="../assets/img/global/blinky.png" alt="" /></div>
						<div id="beam"><img src="../assets/img/new/beam2.png" alt="" /></div>
						<img id="frameTop" src="../assets/img/global/textFrame_top.png" alt="" />
						<img id="frame5Top" src="../assets/img/global/textFrame5_top.png" alt="" />
					</div>
					<div id="copy">
						<img class="deckName" src="../assets/img/global/XY9_PCD_Logo_EN_ElectricEye_en-us.png" alt="" />
						<p>Command the gleaming eyes of Luxray and strike fast with the crackling fists of Electivire! Stare down your opponent with the hypnotic mastery and total focus of the Electric Eye theme deck!</p>
						<div class="centered">
							<a href="#">
								<div class="greyButton">
									Buy Now!
								</div>
							</a>
						</div>
					</div>
					<div id="bottom">
						<img id="frameBottom" src="../assets/img/global/textFrame_bottom.png" alt="" />
						<img id="frame5Bottom" src="../assets/img/global/textFrame5_bottom.png" alt="" />
					</div>
				</div>

				<div id="sideProjector" class="sideProjector">
					<img src="../assets/img/global/sideProjector.png" alt="" />
				</div>

				<div id="electricDeckPacks">
					<img id="packs" src="../assets/img/new/electricDeck.png" alt="Electric Eye theme deck packs" />
				</div>

			</div>

			<div id="blisterPacks">
				
				<div id="pyramid" class="pyramid" data-scrollPercent=".2">
					<img src="../assets/img/global/pyramid.gif" alt="" />
				</div>

				<div id="blisterPacksBox" class="box">	
					<div id="arm">
						<img src="../assets/img/new/arm_right.png" alt="" />
						<img id="gear1" class="gear" src="../assets/img/global/gear.png" alt="" />
						<img id="gear2" class="gear" src="../assets/img/global/gear.png" alt="" />
					</div>
					<div id="top">
						<div id="header" class="boxHeader blackOutline">3-Pack Pin Blister<br /><span class="smallHeader">Mega Scizor and Shiny Mega Gyarados</span></div>
						<div id="flare" class="loopingAnim flare">
							<img src="../assets/img/global/flare.png" alt="" />
						</div>
						<div id="blinky" class="blinky"><img src="../assets/img/global/blinky.png" alt="" /></div>
						<div id="beam"><img src="../assets/img/new/beam.png" alt="" /></div>
						<img id="frameTop" src="../assets/img/global/textFrame_top.png" alt="" />
						<img id="frame4Top" src="../assets/img/global/textFrame4_top.png" alt="" />
					</div>
					<div id="copy">
						<p>Give Your Collection a Boost with Pokémon TCG: Mega Scizor and Shiny Mega Gyarados 3-Pack Pin Blister packs! Power up your Pokémon TCG collection with 3 booster packs, and show your Pokémon pride with 1 of 2 awesome collector’s pins featuring Mega Scizor or Shiny Mega Gyarados!</p>
						<div class="centered">
							<a href="#">
								<div class="greyButton">
									Buy Now!
								</div>
							</a>
						</div>
					</div>
					<div id="bottom">
						<img id="frameBottom" src="../assets/img/global/textFrame_bottom.png" alt="" />
						<img id="frame4Bottom" src="../assets/img/global/textFrame4_bottom.png" alt="" />
					</div>
				</div>

				<div id="sideProjector" class="sideProjector">
					<img src="../assets/img/global/sideProjector.png" alt="" />
				</div>

				<div id="blisterPacksImage">
					<img id="packs" src="../assets/img/new/blisterPacks.png" alt="Mega Scizor and Shiny Mega Gyarados 3-Pack Pin Blister" />
				</div>

			</div>

				
			<?php include "../assets/templates/global_callouts_external.php" ?>

			
		</div> <!-- end of content -->
		</div> <!-- END OF CONTAINER -->
			
		<?php include "../assets/templates/global_footer.php"; ?>

		
		
	</body>



</html>
