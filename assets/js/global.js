// var absoluteURL = "http://localhost:8888/xy9/en-us/";
var absoluteURL = "http://staging.seven2.net/pokemon/xy9/beta/en-us/";

// -------------------------------------------------------
// WARNING DIALOG FOR WHEN USER CLICKS ON AN EXTERNAL LINK

var externalLink;

function openExternalWarning(link)
{
	externalLink = link;
	$("#externalWarning").css("display", "block");
}

function closeExternalWarning()
{
	$("#externalWarning").css("display", "none");
}

function openExternal()
{
	window.open(externalLink);
	$("#externalWarning").css("display", "none");
}


// -------------------------------------------------------
// HANDLE LANGUAGE CHANGE

function languageChange()
{
	// SWITCH THE LANGUAGE AND STAY ON SAME PAGE
	var page = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
	if (page == null)
		window.location.href = "../" + $("#languageSelect").val() + "/";
	else
		window.location.href = "../" + $("#languageSelect").val() + "/" + page;
}

// -------------------------------------------------------
// 
var touchDevice = false;
var curLang;

$(document).ready(function()
{
	if (('ontouchstart' in window) ||
     (navigator.maxTouchPoints > 0) ||
     (navigator.msMaxTouchPoints > 0)) {
      /* browser with either Touch Events of Pointer Events
         running on touch-capable device */
         touchDevice = true;
	}

	// NAME OF CURRENT PAGE
	curPage = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
	curPage = curPage.substring(0, curPage.length - 4);
	curPage = curPage.toLowerCase();

	// CURRENT LANGUAGE
	var loc = (location.pathname).toLowerCase();
	loc = loc.replace("%2d", "-"); // for phone

	curLang = "en-us"; // default

	if (loc.indexOf("en-us") > -1)
	{
		curLang = "en-us";
	}
	else if (loc.indexOf("de-de") > -1)
	{
		curLang = "de-de";
	}
	else if (loc.indexOf("en-gb") > -1)
	{
		curLang = "en-gb";
	}
	else if (loc.indexOf("fr-fr") > -1)
	{
		curLang = "fr-fr";
	}
	else if (loc.indexOf("it-it") > -1)
	{
		curLang = "it-it";
	}
	else if (loc.indexOf("es-es") > -1)
	{
		curLang = "es-es";
	}

	// SET UP EXTERNAL LINKS
	$(".external").click(function(e)
	{
		e.preventDefault();
		openExternalWarning($(this).attr("href"));
	});

	// CLICK ANYWHERE TO CLOSE THE EXTERNAL WARNING
	$("#externalWarning").click(function(e)
	{
		closeExternalWarning();
	});

	// LISTEN FOR LANGUAGE CHANGE IN FOOTER
	$("#languageSelect").change(function()
	{
		languageChange();
	});

});

// -------------------------------------------------------
// 

$(window).load(function()
{
	// SHOW LOADED PAGE
	TweenMax.to("body", .5, {opacity:1});

	enableGlobalNav();

	flickerChromeBlinkies();

	rotateGears();
	setUpNavArmSprite();

	// SET UP PYRAMIDS STARTING TOP POSITION
	$(".pyramid").each(function(index)
	{
		var p = $(this);
		p.attr("data-top", parseInt(p.css("top")));
	});
	adjustPyramids();
});

$(window).scroll(function()
{
	adjustPyramids();
});

function adjustPyramids()
{	var distFromTop = $(window).scrollTop();
	$(".pyramid").each(function(index)
	{
		var p = $(this);
		var pTop = p.attr("data-top");
		var pScrollPercent = p.attr("data-scrollPercent");
		p.css("top", (pTop - (distFromTop*pScrollPercent)));
	});
}

var navSprite;
var navSpriteDiv;

var navCols = 25;
var navRows = 4;
var navFullFrameWidth = 156; // 322;
var navFullFrameHeight = 194; // 400;
var navFullSheetWidth = navCols * navFullFrameWidth;
var navFullSheetHeight = navRows * navFullFrameHeight;

function setUpNavArmSprite()
{
	navSpriteDiv = document.getElementById("globalNavArm");
	navSprite = new AnimatedSprite({
		"spriteDiv": navSpriteDiv, 
		"fps": 24, 
		"columns": navCols,
		"looping": false,
		"animations": {
			"idle": {"start": 0, "end": 20},
			"open": {"start": 21, "end": 55},
			"openIdle": {"start": 57, "end": 61},
			"close": {"start": 65, "end": 86}
		},
		"complete": function(){
			//
		}
	});
	navSprite.setSize({
		"frameWidth":  navFullFrameWidth,
		"frameHeight": navFullFrameHeight, 
		"sheetHeight": navFullSheetHeight
	});

	$("#globalNavArm").css({"width": navFullFrameWidth + "px", "height": navFullFrameHeight + "px", "background-size": navFullSheetWidth+"px " + navFullSheetHeight +"px"});

	navSpriteIdle();
}

function navSpriteIdle()
{
	var waitTime;
	
	if (!$("#globalNav").hasClass("open"))
		waitTime = 2000;
	else
		waitTime = 100;

	setTimeout(function(){
		if (!$("#globalNav").hasClass("open"))
		{
			navSprite.playSprite("idle");
		}
		else
		{
			navSprite.playSprite("openIdle");
		}
		navSpriteIdle();
	}, waitTime);
}

function enableGlobalNav()
{
	$("#globalNav #btn").on("click", handleGlobalNavClick);
	$(".globalNavItem").on("click", handleGlobalNavItemClick)
}

function handleGlobalNavClick()
{
	if ($("#globalNav").hasClass("open"))
	{
		// CLOSE THE NAV
		$("#globalNav").removeClass("open");
		// SWAP THE BUTTON TO INACTIVE
		$("#globalNav #btn #menu").attr("src", "../assets/img/global/nav_off.png");
		// ANIMATE ITEMS
		for (i = $("#globalNav #items .globalNavItem").length; i > -1; i--)
		{
			$("#globalNav #items .globalNavItem:eq(" + i + ")").delay(i*5).animate({"opacity": 0, "margin-top":"15px"}, 250);
		}
		// ANIMATE BG
		$("#globalNav #items #pinkBG").animate({"opacity":0}, 300, function(){ $("#globalNav #items").css({"display": "none"}); });

		$("#globalNavBeam").css({"opacity": 0});

		navSprite.playSprite("close");
	}
	else
	{
		flicker($("#globalNavBeam"));
		// OPEN THE NAV
		$("#globalNav").addClass("open");
		// SWAP THE BUTTON TO ACTIVE
		$("#globalNav #btn #menu").attr("src", "../assets/img/global/nav_on.png");
		// ANIMATE ITEMS
		$("#globalNav #items").css({"display": "block"});
		setTimeout(function(){
			for (i = 0; i < $("#globalNav #items .globalNavItem").length; i++)
			{
				$("#globalNav #items .globalNavItem:eq(" + i + ")").css({"margin-top": "-50px"});
				$("#globalNav #items .globalNavItem:eq(" + i + ")").delay(i*40).animate({"opacity": 1, "margin-top":0}, 300);
			}
			// ANIMATE BG
			$("#globalNav #items #pinkBG").animate({"opacity":1}, 500);
		}, 200);

		navSprite.playSprite("open");
	}
}

function handleGlobalNavItemClick()
{
	var curURL = window.location.href;
	var pageID = $(this).attr("id");
	window.location.href = curURL.substring(0,curURL.lastIndexOf("/")) + "/" + pageID + ".php";
}

function flickerChromeBlinkies()
{
	var randomDuration;
	var newOpacity;
	right();
	left();
	function right()
	{
		randomDuration = getRandomRange(.5, 3);
		newOpacity = 1 - $("#blinkyRight").css("opacity");
		TweenMax.to($("#blinkyRight"), randomDuration, {css:{"opacity":newOpacity}, onComplete:function(){
			right();
		}});
	}
	function left()
	{
		randomDuration = getRandomRange(.5, 3);
		newOpacity = 1 - $("#blinkyLeft").css("opacity");
		TweenMax.to($("#blinkyLeft"), randomDuration, {css:{"opacity":newOpacity}, onComplete:function(){
			left();
		}});
	}
}

function rotateGears(obj)
{
	$(".gear").each(function(){
		// if ($(".gear").css("display") == "block")
		// {
			var dir = Math.random() < 0.5 ? -360 : 360;
			TweenMax.to($(this), getRandomRange(3, 15), {rotation: dir, ease:Linear.easeNone, transformOrigin: "50% 50%", repeat:99999999});
		// }
	});
}






// -------------------------------------------------------
// HELPER FUNCTIONS

function flicker(obj)
{
	$(obj).css({"opacity": 1});
	$(obj).delay(25).animate({"opacity": 0}, 1);
	$(obj).delay(75).animate({"opacity": .7}, 1);
	$(obj).delay(100).animate({"opacity": 0}, 1);
	$(obj).delay(150).animate({"opacity": 1}, 1);
}

function idleFlickerBeam(obj, dur)
{
	$(obj).animate({"opacity": getRandomRange(.5, 1)}, dur);
}

function flare(obj)
{
	TweenMax.set($(obj), {scaleX:1, scaleY:1, x:0, opacity:0});
	
	TweenMax.to($(obj), .3, {opacity:1, overwrite:"none"});
	TweenMax.to($(obj), .2, {delay:.35, opacity:0, overwrite:"none"});
	TweenMax.to($(obj), .5, {scaleX:.1, scaleY:.1, x:90, transformOrigin: "50% 50%", overwrite:"none"});
}

function adjustBGPos()
{
	// ADJUST HERO PLACEMENT - hero min width is 1000px
	if (window.matchMedia("(max-width: 1000px)").matches)
	{
		var winW = $(window).width();
		var newLeft = 500 - winW*.5;
		$("#bgHero").css("margin-left", (0 - newLeft) + "px");
	}
	else
	{
		$("#bgHero").css("margin-left", "0px");
	}
}

function getRandomRange(min, max) 
{
    return Math.random() * (max - min) + min;
}




$(window).scroll(function() {
if (!checkBelowViewBottom($("#globalFooterContent")) && !checkAboveViewTop($("#globalFooterContent"))){
console.log("YOU CAN SEE ME")
$("#globalChromeBottom").css({"opacity" : "0"});
$("#globalChromeBottomSticky").css({"opacity" : "1"});

}

else {

$("#globalChromeBottom").css({"opacity" : "1"});
$("#globalChromeBottomSticky").css({"opacity" : "0"});

}

function checkBelowViewBottom(elem, offset)
{
var scrollTop = $(window).scrollTop();
var winH = window.innerHeight;
var visOffset = (offset == undefined) ? 0 : offset; // HOW MUCH CAN WE ALREADY SEE OF THE ELEMENT BEFORE RETURNING TRUE
var elemTopDist = $(elem).offset().top;

if ((scrollTop+winH-visOffset) >= elemTopDist){
return false;
}
else {
return true;
}
}

function checkAboveViewTop(elem, offset)
{

var scrollTop = $(window).scrollTop();
var winH = window.innerHeight;
var visOffset = (offset == undefined) ? 0 : offset; // HOW MUCH CAN WE STILL SEE OF THE ELEMENT BEFORE RETURNING TRUE
var elemTopDist = $(elem).offset().top;
var elemH = $(elem).height();

if (elemTopDist+elemH-visOffset > scrollTop){
return false;
 }
else {
return true;

}
}





 	});

/*
This sets the top nav to fixed when scrolled up
 */


$(window).scroll(function (e) {

       if ($(window).scrollTop() > 62) {


	$("#globalChromeTop").css({"position" : "fixed", "top" : "0"});




}

	else if ($(window).scrollTop() < 64) {

		$("#globalChromeTop").css({"position" : "absolute", "top" : "62px"});


       }
     
        });



$(window).scroll(function (e) {

	 if ($(window).scrollTop() > 120) {


if ($("#globalNav").hasClass("open"))
	{
		// CLOSE THE NAV
		$("#globalNav").removeClass("open");
		// SWAP THE BUTTON TO INACTIVE
		$("#globalNav #btn #menu").attr("src", "../assets/img/global/nav_off.png");
		// ANIMATE ITEMS
		for (i = $("#globalNav #items .globalNavItem").length; i > -1; i--)
		{
			$("#globalNav #items .globalNavItem:eq(" + i + ")").delay(i*5).animate({"opacity": 0, "margin-top":"15px"}, 250);
		}
		// ANIMATE BG
		$("#globalNav #items #pinkBG").animate({"opacity":0}, 300, function(){ $("#globalNav #items").css({"display": "none"}); });

		$("#globalNavBeam").css({"opacity": 0});

		navSprite.playSprite("close"); }

}
         });
/*

/*

$(window).scroll(function (e) {
        $navTop = $('#globalChromeTop');
        if ($(this).scrollTop() == 0) {
            $('#globalChromeTop').css({ 'position': 'absolute', 'top': '0'});
            console.log("make fixed");
        }
        if ($(this).scrollTop() < 0) {
            $('#globalChromeTop').css({ 'position': 'absolute'});
            console.log("make relative");
        }
    }); */

 