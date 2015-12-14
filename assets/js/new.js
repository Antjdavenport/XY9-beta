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


