$(document).ready(function()
{
	adjustBGPos();	



	/*setTimeout(animateHero, 3000);*/

	// OPEN THE ARM NAV IF IT'S VISIBLE
	var arm = $("#machines #globalNavArm");
	var btn = $("#globalNav #btn");
	if (arm.css("display") == "block")
	{
		TweenMax.set(btn, {y: -200});
		TweenMax.set(arm, {y: -200});
		TweenMax.to(btn, .5, {delay:1, y:0, ease:Back.easeOut});
		TweenMax.to(arm, .5, {delay:1, y: 0, ease:Back.easeOut, onComplete:function(){ 
			// TweenMax.to(btn, .2, {alpha:1});
			setTimeout(handleGlobalNavClick, 500); }});
	}

	// animatePyramids();

	// FLARES
	setInterval(function(){
		flare($("#homeCallouts #decks #flare"));
	}, getRandomRange(5000, 7000));
	setInterval(function(){
		flare($("#homeCallouts #strategy #flare"));
	}, getRandomRange(5000, 7000));

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

 		tl.from(decks, 0.4, {css: {scale: 5, rotation: 30, opacity: 0}, ease:Quint.easeInOut});
 		tl.to(decks, 0.08, {css: {scale: 0.99, top: "0.2%"}});
 		tl.to(decks, 0.08, {css: {scale: 1, top:"-0.2%"}});
 		tl.to(decks, 0.1, {top:"0%", ease:Quint.easeInOut});

 		tl.from(unbox, 0.4, {css: {scale: 5, rotation: 30, opacity: 0}, ease:Quint.easeInOut}, "-=0.12");
 		tl.to(unbox, 0.08, {css: {scale: 0.99, top: "42.44%"}});
 		tl.to(unbox, 0.08, {css: {scale: 1, top:"42.00%"}});
 		tl.to(unbox, 0.1, {top:"42.22%", ease:Quint.easeInOut});

 		tl.from(strategy1, 0.4, {css: {scale: 5, rotation: 30, opacity: 0}, ease:Quint.easeInOut}, "-=0.12");
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

 		beamline.to(beam1, 0.3, {opacity: 0, top: "40%", left: "30%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam2, 0.3, {opacity: 0, top: "35%", left: "45%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam3, 0.5, {opacity: 0, top: "-30%", left: "35%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam4, 0.3, {opacity: 0, top: "-22%", left: "-10%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam5, 0.3, {opacity: 0, top: "-5%", left: "-30%", ease:Power2.easeOut}, "+0.2");
 		beamline.to(beam6, 0.3, {opacity: 0, top: "40%", left: "-20%", ease:Power2.easeOut}, "+0.2" );


		var bg = $("#hero");
		var bgshake = new TimelineMax({delay: 0, repeat: 3});

	 	bgshake.to(bg, 0.1, {left: "2px"});
		bgshake.to(bg, 0.1, {left: "-2px"});
		bgshake.to(bg, 0.1, {left: "2px"});
		bgshake.to(bg, 0.1, {left: "-2px"});

  /* waits 10 seconds and then resets the css positioning of the shout while causes the animation to replay */

 			setTimeout(beamInterval, 10000);



 			function beamInterval(){

 				  $("#beam1, #beam2, #beam3, #beam4, #beam5, #beam6").css({"top" : "0%", "left" : "0%"});
 				

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
 
 	


});

$(window).resize(function()
{
	adjustBGPos();
});

function animatePyramids()
{
	var p1 = $("#homeCallouts #unbox #pyramid");
	TweenMax.to(p1, 8, {x: getRandomRange(0, 20), y:getRandomRange(0, 20), rotation: getRandomRange(12, 24), ease:Power0.easeNone, onComplete:function(){
		TweenMax.to(p1, 8, {x: 15, y:15, rotation: getRandomRange(30, 50), ease:Power0.easeNone, onComplete:function(){
			animatePyramids();
		}})
	}});
}

