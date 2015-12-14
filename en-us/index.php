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

	<script type="text/javascript">


/* Sets up the rocks and makes them fly out of the screen */

 		function rocks(){

 		console.log("Rocks being called");
 		var rock1 = $('#rock1');
 		var rock2 = $('#rock2');
 		var rock3 = $('#rock3');
 		var rock4 = $('#rock4');
 		var rock5 = $('#rock5');
 		var rock6 = $('#rock6');


 		var rockline = new TimelineMax({delay: 0.2});
 
 		rockline.to(rock1, 0.5, {opacity: 0, top: "-20%", left: "30%"});
 		rockline.to(rock2, 0.5, {opacity: 0, top: "25%", left: "-30%"}, "-0.0");
 		rockline.to(rock3, 0.5, {opacity: 0, top: "40%", left: "30%"}, "-0.0");
 		rockline.to(rock4, 0.5, {opacity: 0, top: "-25%", left: "25%"}, "-0.0");
 		rockline.to(rock5, 0.5, {opacity: 0, top: "25%", left: "-25%"}, "-0.0");
 		rockline.to(rock6, 0.5, {opacity: 0, top: "-25%", left: "-25%"}, "-0.0");


/* After the rocks fly out, calls a function that resets the positioning of the rocks, 
and reuses an older animation that gives them a little movement while setting the opacity back to 1. */

 		setTimeout(resetCSS, 3000)

 			function resetCSS(){
 			  $("#rock1, #rock2, #rock3, #rock4, #rock5, #rock6").css({"top" : "0%", "left" : "0%"});
 				  console.log("rockInterval being called");
 				  animateRocks();
 			}


 	}

		window.onload = function(){

		 var decks = $('#decks');
		 var unbox = $('#unbox');
		 var strategy = $('#strategy1')
		 console.log("decks being called");

/* This animates the 3 boxes as soon as the page loads, it also gives it a tiny wobble */



		var tl = new TimelineMax();

 		tl.from(decks, 0.5, {css: {scale: 5, rotation: 30, opacity: 0}, ease:Quint.easeInOut});
 		tl.to(decks, 0.08, {css: {scale: 0.99, top: "0.2%"}});
 		tl.to(decks, 0.08, {css: {scale: 1, top:"-0.2%"}});
 		tl.to(decks, 0.1, {top:"0%", ease:Quint.easeInOut});

 		tl.from(unbox, 0.5, {css: {scale: 5, rotation: 30, opacity: 0}, ease:Quint.easeInOut});
 		tl.to(unbox, 0.08, {css: {scale: 0.99, top: "42.44%"}});
 		tl.to(unbox, 0.08, {css: {scale: 1, top:"42.00%"}});
 		tl.to(unbox, 0.1, {top:"42.22%", ease:Quint.easeInOut});

 		tl.from(strategy1, 0.5, {css: {scale: 5, rotation: 30, opacity: 0}, ease:Quint.easeInOut});
 		tl.to(strategy1, 0.08, {css: {scale: 0.99, top: "267"}});
 		tl.to(strategy1, 0.08, {css: {scale: 1, top:"264"}});
 		tl.to(strategy1, 0.1, {top:"265", ease:Quint.easeInOut});




 		/* sets up the shout animation. The shout needs to animate 3 timees in rapid sucession while the rocks
 		only animate once.  */

 		 /* After the boxes fly in, wait 3 seconds before we call the shout. */

 		animateRocksBeams();

 	}

 		function animateRocksBeams(){

 		setTimeout(beams, 5000);
 		setTimeout(rocks, 5000);
 		

 	}
 
 		function beams(){

		console.log("beams being called");


 		var beam1 = $('#beam1');
 		var beam2 = $('#beam2');
 		var beam3 = $('#beam3');
 		var beam4 = $('#beam4');
 		var beam5 = $('#beam5');
 		var beam6 = $('#beam6');

 		var beamline = new TimelineMax({delay: 0, repeat: 2, repeatDelay:0.0});

 		/* Shout needs to be invisible, this sets the opacity quickly one just as it begins to aniamte */

 		beamline.to(beam1, 0.2, {css: {opacity: 1}, ease:Power2.easeOut});
 		beamline.to(beam2, 0.2, {css: {opacity: 1}, ease:Power2.easeOut}, "-0.0");
 		beamline.to(beam3, 0.2, {css: {opacity: 1}, ease:Power2.easeOut}, "-0.0");
 		beamline.to(beam4, 0.2, {css: {opacity: 1}, ease:Power2.easeOut}, "-0.0");
 		beamline.to(beam5, 0.2, {css: {opacity: 1}, ease:Power2.easeOut}, "-0.0");
 		beamline.to(beam6, 0.2, {css: {opacity: 1}, ease:Power2.easeOut}, "-0.0");

 		beamline.to(beam1, 0.5, {opacity: 0, top: "40%", left: "30%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam2, 0.5, {opacity: 0, top: "35%", left: "45%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam3, 0.7, {opacity: 0, top: "-30%", left: "35%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam4, 0.5, {opacity: 0, top: "-22%", left: "-10%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam5, 0.5, {opacity: 0, top: "-5%", left: "-30%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam6, 0.5, {opacity: 0, top: "40%", left: "-20%", ease:Power2.easeOut}, "+0.2" );

  /* waits 10 seconds and then resets the css positioning of the shout while causes the animation to replay */

 			setTimeout(beamInterval, 10000);



 			function beamInterval(){

 				  $("#beam1, #beam2, #beam3, #beam4, #beam5, #beam6").css({"top" : "0%", "left" : "0%"});
 				  console.log("beamInterval being called");

 		animateRocksBeams();

 	}
 }

/* this is the animation for the rocks after they fade back onto the screen following the shout */

 	function animateRocks()
{
	
	var rockanimate1 = $("#rock1");
	var rockanimate2 = $("#rock2");
	var rockanimate3 = $("#rock3");
	var rockanimate4 = $("#rock4");
	var rockanimate5 = $("#rock5");
	var rockanimate6 = $("#rock6");
	var randomDelay = getRandomRange(6000, 8000);



	// ROCK1
	TweenMax.to(rockanimate1, .5, {opacity: 1, left:".8%", top:"-.7%", onComplete: function(){
		TweenMax.to(rockanimate1, .7, {rotation: 0, left: "-.6%", top:".2%", onComplete: function(){
			TweenMax.to(rockanimate1, 1.2, {rotation: 0, left: "0%", top:"0%"})
		}})
	}});

	// ROCK2
	TweenMax.to(rockanimate2, .2, {opacity: 1, left:"-.4%", top:".5%", onComplete: function(){
		TweenMax.to(rockanimate2, .4, {rotation: 0, left: ".2%", top:"-.2%", onComplete: function(){
			TweenMax.to(rockanimate2, .7, {rotation: 0, left: "0%", top:"0%"})
		}})
	}});

	// ROCK3
	TweenMax.to(rockanimate3, .2, {opacity: 1, left:".6%", top:".5%", onComplete: function(){
		TweenMax.to(rockanimate3, .5, {rotation: 0, left: "-.3%", top:"-.2%", onComplete: function(){
			TweenMax.to(rockanimate3, .5, {rotation: 0, left: "0%", top:"0%"})
		}})
	}});

	// ROCK4
	TweenMax.to(rockanimate4, .3, {opacity: 1, left:".7%", top:"-.6%", onComplete: function(){
		TweenMax.to(rockanimate4, .5, {rotation: 0, left: "-.5%", top:".2%", onComplete: function(){
			TweenMax.to(rockanimate4, .8, {rotation: 0, left: "0%", top:"0%"})
		}})
	}});

	// ROCK5
	TweenMax.to(rockanimate5, .5, {opacity: 1, left:"-.7%", top:".6%", onComplete: function(){
		TweenMax.to(rockanimate5, .6, {rotation: 0, left: ".5%", top:"-.3%", onComplete: function(){
			TweenMax.to(rockanimate5, .7, {rotation: 0, left: "0%", top:"0%"})
		}})
	}});

	// ROCK6
	TweenMax.to(rockanimate6, .5, {opacity: 1, left:"-.5%", top:"-.6%", onComplete: function(){
		TweenMax.to(rockanimate6, .6, {rotation: 0, left: ".3%", top:"-.3%", onComplete: function(){
			TweenMax.to(rockanimate6, .7, {rotation: 0, left: "0%", top:"0%"})
			}})
		}});


	
	/* setTimeout(animateHero, randomDelay);
	
}
 	*/
 	}
 
 	



 		</script>
		
	</body>
</html>
