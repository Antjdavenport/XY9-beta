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

