var cardsMoving = false;
var cardsArray = ["meganium", "emboar", "golduck", "slowbro", "palkia", "greninja", "luxray", "hypno", "trevenant", "togekiss", "raticate", "allNightParty", "fightingFuryBelt", "mistysDetermination", "puzzleOfTime", "reverseValley", "splashEnergy", "gyrados", "megaGyrados", "manaphy", "espeon", "darkrai", "scizor", "megaScizor", "hoOh"];
var curCardStartIndex = 0;
var firstCardVis = 0;
var lastCardVis = 6;

var cardData = [{
	"left": 0,
	"top": 0,
	"width": 400,
	"opacity": 1,
	"rotation": 0
},
{
	"left": -40,
	"top": -30,
	"width": 200,
	"opacity": .9,
	"rotation": -10
},
{
	"left": 90,
	"top": -120,
	"width": 180,
	"opacity": .79,
	"rotation": 10
},
{
	"left": 260,
	"top": -120,
	"width": 160,
	"opacity": .67,
	"rotation": 30
},
{
	"left": 400,
	"top": -30,
	"width": 120,
	"opacity": .5,
	"rotation": 60
},
{
	"left": 440,
	"top":120,
	"width": 90,
	"opacity": .5,
	"rotation": 80
},
{
	"left": 450,
	"top": 200,
	"width": 75,
	"opacity": .5,
	"rotation": 110
}];

var cardsBezier = [];


$(document).ready(function()
{
	adjustBGPos();	
	animateHero();

	// CARD NAV ARROW LISTENERS
	$("#cardNav #left").on("click", handlePrevClick);
	$("#cardNav #right").on("click", handleNextClick);

	// PUT CARDS AT BEGINNING POSITIONS
	$(".spiralCard").css({"left": cardData[cardData.length-1].left, "top": cardData[cardData.length-1].top})

	// SPIRAL CARD SETUP
	for (var i = 0; i < 7; i++)
	{
		var spiralCardDiv = $(".spiralCard").eq(i);
		var spiralCardImg = spiralCardDiv.find("img");
		spiralCardImg.attr("src", "../assets/img/featured/cards_en-us/" + cardsArray[i] + ".png");
		spiralCardDiv.addClass(cardsArray[i]);

		TweenMax.to(spiralCardDiv, .4, {delay:i*.1, css:{"left": cardData[i].left, "top": cardData[i].top, "width": cardData[i].width, "opacity": cardData[i].opacity}});
		TweenMax.to(spiralCardImg, .4, {delay:i*.1, rotation: cardData[i].rotation});

		// cardsBezier.unshift({left: cardData[i].left, top: cardData[i].top});
	}


	updateFrontCard();
	updateCopy();

	showCardBorder();

	animateBlinky();

});

$(window).resize(function()
{
	adjustBGPos();
})

function animateBlinky()
{
	// $("#blinky").css({"top": 15, "left":270});

	TweenMax.to($("#blinky"), getRandomRange(.2, 1), {css: {"opacity": (1 - $("#blinky").css("opacity")) }, onComplete:function(){
		animateBlinky();
	}});
	// BACK AND FORTH
	// TweenMax.to($("#blinky"), getRandomRange(2, 5), {css: {"left": getRandomRange(22, 270)}, onComplete:function(){
			// animateBlinky();
	// }});



	// TweenMax.to($("#blinky"), getRandomRange(2, 5), {css: {"left": 270}, onComplete:function(){
		// TweenMax.to($("#blinky"), getRandomRange(1, 3), {css: {"left": 290, "top": 30}, onComplete:function(){
			// TweenMax.to($("#blinky"), getRandomRange(1, 3), {css: {"top": 48}, onComplete:function(){
				// TweenMax.to($("#blinky"), getRandomRange(2, 5), {css: {"left": 70}, onComplete:function(){
					// TweenMax.to($("#blinky"), getRandomRange(2, 5), {css: {"left": 20}, onComplete:function(){
						// TweenMax.to($("#blinky"), getRandomRange(1, 3), {css: {"top": 15}, onComplete:function(){
							// animateBlinky();
						// }});
					// }});
				// }});
			// }});
		// }});
	// }});
	// RANDOM
	// TweenMax.to($("#blinky"), getRandomRange(2, 5), {css: {"left": getRandomRange(20, 290), "top": getRandomRange(20, 50)}, ease:Quad.easeInOut, onComplete:function(){
	// 	animateBlinky();
	// }});
}

// --------------------------------------------------------
// --------------------------------------------------------
// CARD NAVIGATION

function showCardBorder()
{
	if ($(".spiralCard").first().hasClass("golduck") ||
		$(".spiralCard").first().hasClass("greninja") ||
		$(".spiralCard").first().hasClass("luxray") ||
		$(".spiralCard").first().hasClass("raticate") ||
		$(".spiralCard").first().hasClass("trevenant"))
	{
		$("#cardContent #border #horizontal").animate({"opacity": 1}, 500);
	}
	else
	{
		$("#cardContent #border #vertical").animate({"opacity": 1}, 500);
	}
}

function hideCardBorder()
{
	$("#cardContent #border #vertical").animate({"opacity": 0}, 100);
	$("#cardContent #border #horizontal").animate({"opacity": 0}, 100);
}

function updateFrontCard()
{
	// $("#frontCard").removeClass();
	// $("#frontCard").addClass
	$("#frontCard img").attr("src", $(".spiralCard").first().find("img").attr("src"));
}

function updateCopy()
{
	// UPDATE COPY
	var newHeader = $("#" + cardsArray[firstCardVis] + " #name").html();
	var newDesc = $("#" + cardsArray[firstCardVis] + " #desc").html();
	$("#cardInfoBox #header").html(newHeader);
	$("#cardInfoBox #copy").html(newDesc);
}

function handlePrevClick()
{
	if (cardsMoving)
		return;

	cardsMoving = true;

	hideCardBorder();

	var animTime = .5;

	firstCardVis--;
	lastCardVis--;
	if (firstCardVis < 0)
		firstCardVis = cardsArray.length-1;
	if (lastCardVis < 0)
		lastCardVis = cardsArray.length-1;

	// ADD NEW CARD
	$("#cards").prepend('<div class="spiralCard ' + cardsArray[firstCardVis] + '"><img src="../assets/img/featured/cards_en-us/' + cardsArray[firstCardVis] + '.png" />');
	var firstCardData = cardData[0];
	var newCard = $(".spiralCard").first();
	newCard.css({"left": firstCardData.left+10, "top": firstCardData.top+10, "opacity": 0, "width": firstCardData.width});
	TweenMax.to(newCard.find("img"), 0, {rotation: firstCardData.rotation});

	// SHIFT EVERYTHING TOWARD THE BACK
	for (var i = 0; i < 8; i++)
	{
		var targetSpace = i;
		var spiralCardDiv = $(".spiralCard").eq(i);
		var spiralCardImg = spiralCardDiv.find("img");
		if (i < 7)
		{
			TweenMax.to(spiralCardDiv, animTime, {css:{"left": cardData[targetSpace].left, "top": cardData[targetSpace].top, "width": cardData[targetSpace].width, "opacity": cardData[targetSpace].opacity}});
			TweenMax.to(spiralCardImg, animTime, {rotation: cardData[targetSpace].rotation});
		}
		else
		{
			// LAST CARD
			spiralCardDiv.addClass("remove");
			TweenMax.to(spiralCardDiv, animTime, {css:{"left": cardData[targetSpace-1].left, "top": cardData[targetSpace-1].top+50, "width": cardData[targetSpace-1].width-50, "opacity": 0}, onComplete:function(){
				$(".remove").remove();
				updateFrontCard();
				updateCopy();
				showCardBorder();
				cardsMoving = false;
			}});
		}
	}

}

function handleNextClick()
{
	if (cardsMoving)
		return;

	cardsMoving = true;

	hideCardBorder();

	var animTime = .5;

	firstCardVis++;
	lastCardVis++;
	if (firstCardVis > cardsArray.length-1)
		firstCardVis = 0;
	if (lastCardVis > cardsArray.length-1)
		lastCardVis = 0;

	// ADD NEW CARD
	$("#cards").append('<div class="spiralCard ' + cardsArray[lastCardVis] + '"><img src="../assets/img/featured/cards_en-us/' + cardsArray[lastCardVis] + '.png" />');
	var lastCardData = cardData[cardData.length-1];
	var newCard = $("#cards div").eq(7);
	newCard.css({"left": lastCardData.left+10, "top": lastCardData.top+40, "width": lastCardData.width-50, "opacity": 0});
	TweenMax.to(newCard.find("img"), 0, {rotation: lastCardData.rotation});

	// SHIFT EVERYTHING TOWARD THE FRONT
	for (var i = 0; i < 8; i++)
	{
		var targetSpace = i-1;
		var spiralCardDiv = $(".spiralCard").eq(i);
		var spiralCardImg = spiralCardDiv.find("img");
		if (i > 0)
		{
			TweenMax.to(spiralCardDiv, animTime, {css:{"left": cardData[targetSpace].left, "top": cardData[targetSpace].top, "width": cardData[targetSpace].width, "opacity": cardData[targetSpace].opacity}});
			TweenMax.to(spiralCardImg, animTime, {rotation: cardData[targetSpace].rotation});
		}
		else
		{
			// FIRST CARD
			spiralCardDiv.addClass("remove");
			TweenMax.to(spiralCardDiv, animTime, {css:{"top": 10, "left": 10, "opacity": 0}, onComplete:function(){
				$(".remove").remove();
				updateFrontCard();
				updateCopy();
				showCardBorder();
				cardsMoving = false;
			}});
		}
	}
}



// --------------------------------------------------------
// --------------------------------------------------------
// PAGE AMBIENT ANIMATIONS

function animateHero()
{
	var bg = $("#hero");
	var bg2 = $("#hero2");
	var bg3 = $("#hero3");
	var totalSpinTime = 120;

	TweenMax.to(bg, 0, {opacity: 1, rotation: 0, scaleX: 1.5, scaleY: 1.5});

	animation1();
	animation2();
	animation3();

	function animation1()
	{
		TweenMax.to(bg, totalSpinTime*0.5, {opacity: 1, rotation: -180, scaleX: 2, scaleY: 2, ease:Linear.easeNone, onComplete:function(){
			TweenMax.to(bg, totalSpinTime*0.5, {opacity: 0, rotation: -360, scaleX: 3, scaleY: 3, ease:Linear.easeNone, onComplete: function(){
				// RESET
				TweenMax.to(bg, 0, {scaleX:1, scaleY:1, rotation: 0, onComplete: function(){
					// RESTART
					animation1();
				}});
			}})
		}});
	}

	function animation2()
	{
		TweenMax.to(bg2, totalSpinTime*0.5, {delay: totalSpinTime*0.75, opacity: 1, rotation: -180, scaleX: 2, scaleY: 2, ease:Linear.easeNone, onComplete:function(){
			TweenMax.to(bg2, totalSpinTime*0.5, {opacity: 0, rotation: -360, scaleX: 3, scaleY: 3, ease:Linear.easeNone, onComplete: function(){
				// RESET
				TweenMax.to(bg2, 0, {scaleX:1, scaleY:1, rotation: 0, onComplete: function(){
					// RESTART
					animation2();
				}});
			}})
		}});
	}

	function animation3()
	{
		TweenMax.to(bg3, totalSpinTime*0.5, {delay: totalSpinTime*0.4, opacity: 1, rotation: -180, scaleX: 2, scaleY: 2, ease:Linear.easeNone, onComplete:function(){
			TweenMax.to(bg3, totalSpinTime*0.5, {opacity: 0, rotation: -360, scaleX: 3, scaleY: 3, ease:Linear.easeNone, onComplete: function(){
				// RESET
				TweenMax.to(bg3, 0, {scaleX:1, scaleY:1, rotation: 0, onComplete: function(){
					// RESTART
					animation3();
				}});
			}})
		}});
	}		
}