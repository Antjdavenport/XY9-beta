$(document).ready(function()
{
	animateBlinky();

	// FLARES
	setInterval(function(){
		flare($("#introBox #top #flare"));
	}, getRandomRange(5000, 7000));

	animateCopyLines();

});

function animateCopyLines()
{
	TweenMax.set($("#introBox #copy #lines"), {y:-60, alpha:1});
	TweenMax.to($("#introBox #copy #lines"), .8, {y:50, alpha:1, ease:Power1.easeIn});
	TweenMax.to($("#introBox #copy #lines"), .8, {delay:.8, y:100, alpha:0, ease:Power1.easeOut, onComplete:function(){
		setTimeout(animateCopyLines, getRandomRange(2000, 5000))}});
}

function animateBlinky()
{
	TweenMax.to($("#introBox #blinky"), getRandomRange(.2, 1), {css: {"opacity": (1 - $("#introBox #blinky").css("opacity")) }, onComplete:function(){
		animateBlinky();
	}});
}