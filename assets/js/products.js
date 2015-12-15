$(document).ready(function()
{
	animateBlinky();

	animateCopyLines();

	// OPEN VIDEO BUTTON
	$("#introBox #playBtn").on("click", onVideoPlayClick);
	// VIDEO CLOSE BUTTON
	$("#playerModal #videoBox #playerFrame #closeBtn").on("click", onVideoCloseClick);

	// FLARES
	setInterval(function(){
		flare($("#introBox #top #flare"));
	}, getRandomRange(5000, 7000));
	setInterval(function(){
		flare($("#gyradosIntroBox #top #flare"));
	}, getRandomRange(5000, 7000));

	var arm1 = $('#introBox');
	var arm2 = $('#listBox');
	var arms = new TimelineMax({delay: 1});

	arms.from(arm1, 1, {scale: 2.3, opacity: 0, left: "-80%", ease: Power3.easeInOut, y: 0 });
	arms.from(arm2, 1, {scale: 2.3, opacity: 0, left: "100%", ease: Power3.easeInOut, y: 0 }, "-=0.7");  
	







});

function animateCopyLines()
{
	TweenMax.set($("#introBox #copy #lines"), {y:-60, alpha:1});
	TweenMax.to($("#introBox #copy #lines"), .8, {y:50, alpha:1, ease:Power1.easeIn});
	TweenMax.to($("#introBox #copy #lines"), .8, {delay:.8, y:100, alpha:0, ease:Power1.easeOut, onComplete:function(){
		setTimeout(animateCopyLines, getRandomRange(2000, 5000))}});

	TweenMax.set($("#gyradosIntroBox #copy #lines"), {y:-60, alpha:1});
	TweenMax.to($("#gyradosIntroBox #copy #lines"), .8, {y:50, alpha:1, ease:Power1.easeIn});
	TweenMax.to($("#gyradosIntroBox #copy #lines"), .8, {delay:.8, y:100, alpha:0, ease:Power1.easeOut});
}

function animateBlinky()
{
	TweenMax.to($("#introBox #blinky"), getRandomRange(.2, 1), {css: {"opacity": (1 - $("#introBox #blinky").css("opacity")) }, onComplete:function(){
		animateBlinky();
	}});
}

function onVideoPlayClick()
{
	$("#playerModal").css("display", "block");
}

function onVideoCloseClick()
{
	$("#playerModal").css("display", "none");
}

