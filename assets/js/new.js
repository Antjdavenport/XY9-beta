$(document).ready(function()
{
	animateBlinky();
	// animateLines();

	// FLARES ANIMATION
	setInterval(function(){
		flare($("#introBox #top #flare"));
	}, getRandomRange(5000, 7000));
	setInterval(function(){
		flare($("#waveDeckBox #top #flare"));
	}, getRandomRange(5000, 7000));
	setInterval(function(){
		flare($("#electricDeckBox #top #flare"));
	}, getRandomRange(5000, 7000));
	setInterval(function(){
		flare($("#blisterPacksBox #top #flare"));
	}, getRandomRange(5000, 7000));

	// START HOLO BEAMS
	animHoloBeams();

	animateCopyLines();



	var sheen = $(".sheen");
	var sheenline = new TimelineMax({repeat: 600, delay: 3, repeatDelay: 6});


	sheenline.to(sheen, 0.5, {opacity: 0.7, left: "30px", ease: Power2.easeIn, y: 0});
	sheenline.to(sheen, 0.5, {opacity: 0, left: "90px"} );
	


	if ($(window).width() > 849) {

	var arm1 = $("#introBox");

	TweenMax.from(arm1, 0.8, {opacity: 0, left: "100%", scale: 2.7, delay: 0.5,  ease: Power3.easeInOut, y: 0 });

}



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


	    var beam1 = $('#beam1');
	    var beam2 = $('#beam2');
	    var beam3 = $('#beam3');
	    var beam4 = $('#beam4');
	    var beam5 = $('#beam5');

			 var tl = new TimelineMax({repeat:200, repeatDelay:1.5, delay: 4});

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


			var tlbeam = new TimelineMax({delay: 2, repeat:200, repeatDelay: 0});
			
			tlbeam.to(beam5, 0.2, {css: {opacity: 1}}, "-=0.2");
			tlbeam.to(beam5, 0.2, {css: {opacity: 0}});
			tlbeam.to(beam4, 0.2, {css: {opacity: 1}}, "-=0.2");
			tlbeam.to(beam4, 0.2, {css: {opacity: 0}});
			tlbeam.to(beam3, 0.2, {css: {opacity: 1}}, "-=0.2");
			tlbeam.to(beam3, 0.2, {css: {opacity: 0}});
			tlbeam.to(beam2, 0.2, {css: {opacity: 1}}, "-=0.2");
			tlbeam.to(beam2, 0.2, {css: {opacity: 0}});
			tlbeam.to(beam1, 0.2, {css: {opacity: 1}}, "-=0.2");
			tlbeam.to(beam1, 0.2, {css: {opacity: 0}});




			





});

function animateCopyLines()
{
	TweenMax.set($("#deckIntroBox #copy #lines"), {y:-60, alpha:1});
	TweenMax.to($("#deckIntroBox #copy #lines"), .8, {y:50, alpha:1, ease:Power1.easeIn});
	TweenMax.to($("#deckIntroBox #copy #lines"), .8, {delay:.8, y:100, alpha:0, ease:Power1.easeOut, onComplete:function(){
		setTimeout(animateCopyLines, getRandomRange(2000, 5000))}});

	// TweenMax.set($("#gyradosIntroBox #copy #lines"), {y:-60, alpha:1});
	// TweenMax.to($("#gyradosIntroBox #copy #lines"), .8, {y:50, alpha:1, ease:Power1.easeIn});
	// TweenMax.to($("#gyradosIntroBox #copy #lines"), .8, {delay:.8, y:100, alpha:0, ease:Power1.easeOut});
}

function animHoloBeams()
{
	waveDeckBoxBeam();
	electricDeckBoxBeam();
	blisterPackBeam();

	function waveDeckBoxBeam()
	{
		var wdDur = getRandomRange(100, 300);
		idleFlickerBeam($("#waveDeckBox #top #beam"), wdDur);
		setTimeout(waveDeckBoxBeam, wdDur);
	}

	function electricDeckBoxBeam()
	{
		var edDur = getRandomRange(100, 300);
		idleFlickerBeam($("#electricDeckBox #top #beam"), edDur);
		setTimeout(electricDeckBoxBeam, edDur);
	}

	function blisterPackBeam()
	{
		var bpDur = getRandomRange(100, 300);
		idleFlickerBeam($("#blisterPacksBox #top #beam"), bpDur);
		setTimeout(blisterPackBeam, bpDur);
	}
}

function animateLines()
{
	waveDeck();

	function waveDeck()
	{
		setTimeout(function(){
			$("#waveDeckPacks #packs").attr("src", "../assets/img/new/waveDeck2_fast.png");
		}, 100);
		setTimeout(function(){
			$("#waveDeckPacks #packs").attr("src", "../assets/img/new/waveDeck3_fast.png");
		}, 200);
		setTimeout(function(){
			$("#waveDeckPacks #packs").attr("src", "../assets/img/new/waveDeck.png");
			waveDeck();
		}, 300);
		// setTimeout(function(){
		// 	$("#waveDeckPacks #packs").attr("src", "../assets/img/new/waveDeck.png");
		// 	waveDeck();
		// }, 400);
	}
}

function animateBlinky()
{
	introBlinky();
	decksBlinky();
	waveDeckBlinky();
	electricDeckBlinky();

	function introBlinky()
	{
		TweenMax.to($("#introBox #blinky"), getRandomRange(.2, 1), {css: {"opacity": (1 - $("#introBox #blinky").css("opacity")) }, onComplete:function(){
			introBlinky();
		}});
	}
	function decksBlinky()
	{
		TweenMax.to($("#deckIntroBox #blinky"), getRandomRange(.2, 1), {css: {"opacity": (1 - $("#deckIntroBox #blinky").css("opacity")) }, onComplete:function(){
			decksBlinky();
		}});
	}
	function waveDeckBlinky()
	{
		TweenMax.to($("#waveDeckBox #blinky"), getRandomRange(.2, 1), {css: {"opacity": (1 - $("#waveDeckBox #blinky").css("opacity")) }, onComplete:function(){
			waveDeckBlinky();
		}});
	}
	function electricDeckBlinky()
	{
		TweenMax.to($("#electricDeckBox #blinky"), getRandomRange(.2, 1), {css: {"opacity": (1 - $("#electricDeckBox #blinky").css("opacity")) }, onComplete:function(){
			electricDeckBlinky();
		}});
	}
}


