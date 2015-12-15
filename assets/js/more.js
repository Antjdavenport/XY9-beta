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
	
var rock1 = $('NewRock1');
var rock2 = $('NewRock2');
var rock3 = $('NewRock3');
var rock4 = $('NewRock4');
var rock5 = $('NewRock5');

if ($(window).width() > 849) {

var arm1 = $("#tcgBox");

	TweenMax.from(arm1, 0.8, {opacity: 0, left: "-80%", scale: 2.7, delay: 0.5,  ease: Power3.easeInOut, y: 0 });
}


var rockTimeline = new TimelineMax({delay: 2, repeat: 100, repeatDelay:1.2});


	rockTimeline.to(NewRock1, 0.05, {css: {opacity: 1}});
	rockTimeline.to(NewRock1, 0.7, {top:"-60%"});
	rockTimeline.to(NewRock2, 0.05, {css: {opacity: 1}});
	rockTimeline.to(NewRock2, 0.7, {top:"-60%"});
	rockTimeline.to(NewRock3, 0.05, {css: {opacity: 1}}, "+=1");
	rockTimeline.to(NewRock3, 0.7, {top:"-60%"});
	rockTimeline.to(NewRock4, 0.05, {css: {opacity: 1}});
	rockTimeline.to(NewRock4, 0.7, {top:"-60%"});
	rockTimeline.to(NewRock5, 0.05, {css: {opacity: 1}});
	rockTimeline.to(NewRock5, 0.7, {top:"-60%"}, "-=1.2");
	


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


