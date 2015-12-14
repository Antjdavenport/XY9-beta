$(document).ready(function()
{
	animateBlinky();

	fadeBg2();

	flickerBeam();

	// FLARES
	setInterval(function(){
		flare($("#tcgBox #top #flare"));
	}, getRandomRange(5000, 7000));

});

$(window).load(function(){

	// TweenMax.to($("#testy"), 2, {bezier:[{x:10,y:10}, {x:20,y:50}, {x:100, y:0}, {x:20, y:-20}]});
});

function flickerBeam()
{
	tcgBoxBeam();

	function tcgBoxBeam()
	{
		var tcgDur = getRandomRange(100, 300);
		idleFlickerBeam($("#tcgBox #top2 #beam"), tcgDur);
		setTimeout(tcgBoxBeam, tcgDur);
	}
	
}

function fadeBg2()
{
	var newOpacity = 1 - $("#hero2").css("opacity");
	TweenMax.to($("#hero2"), getRandomRange(.8, 1.3), {opacity: newOpacity, onComplete: function(){
		fadeBg2();
	}})
}

function animateBlinky()
{
	TweenMax.to($("#blinky"), getRandomRange(.2, 1), {css: {"opacity": (1 - $("#blinky").css("opacity")) }, onComplete:function(){
		animateBlinky();
	}});
}


