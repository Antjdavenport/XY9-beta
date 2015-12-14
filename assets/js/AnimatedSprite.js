var fpsInterval; // FRAMES PER SECOND FOR THE ANIMATION
var curFrame = 0; // ON ZERO BY DEFAULT BECAUSE THAT'S WHERE THE SPRITESHEET IS POSITIONED AT START
var curAnimFrames; // ARRAY OF FRAME NUMBERS
var curAnimFramesIndex = 0; // INDEX OF ARRAY OF FRAME NUMBERS
var curAnimName; // DEFINED WHEN CREATING THE SPRITE, POSSIBLY NONE

var AnimatedSprite = function(settings)
{
	this.spriteDiv = settings.spriteDiv; // NAME OF DIV WITH BACKGROUND IMAGE SET AS SPRITESHEET
	this.fps = settings.fps;
	this.columns = settings.columns;
	this.looping = settings.looping;
	this.complete = settings.complete;

	this.animations = settings.animations;
	this.curAnim = null;
	curAnimFrames = [];
}

AnimatedSprite.prototype.playSprite = function(animationName)
{
	// console.log("playSprite ", animationName);
	curAnimName = animationName;
	
	// IF ALREADY PLAYING, OVERWRITE
	if (fpsInterval != null)
	{
		this.stopSprite();
	}

	if (animationName != undefined)
	{
		this.curAnim = animationName;

		this.createCurAnimFramesArray(this.animations[this.curAnim].start, this.animations[this.curAnim].end+1);
	}
	else
	{
		// PLAY ALL FRAMES
		this.createCurAnimFramesArray(0, this.framesPositions.length);
	}

	// BEGIN FRAME UPDATE LOOP
	if (!fpsInterval)
	{
		// console.log("start loop interval")
		fpsInterval = setInterval(this.loop.bind(this), this.fps); // use bind() to assign the correct scope
	}

}

AnimatedSprite.prototype.createCurAnimFramesArray = function(start, end)
{
	// CREATE AN ARRAY OF THE FRAME NUMBERS
	if (end > start)
	{
		for (var i = start; i < end; i++)
		{
			curAnimFrames.push(i);
		}
	}
	else if (start > end)
	{
		for (var i = start; i >= end-1; i--)
		{
			curAnimFrames.push(i);
		}
	}

// console.log(curAnimFrames);

	curFrame = curAnimFrames[0];
}

AnimatedSprite.prototype.stopSprite = function()
{
	// console.log("stopSprite")
	curAnimFramesIndex = 0;
	window.clearInterval(fpsInterval);
	fpsInterval = null;
	curAnimFrames = [];
}

AnimatedSprite.prototype.loop = function()
{
	this.updateFrame();

	curAnimFramesIndex++;
	curFrame = curAnimFrames[curAnimFramesIndex];
	
	// IF REACHED THE END OF THE FRAMES LIST
	if (curAnimFramesIndex == curAnimFrames.length)
	{
		// console.log("reached end of frame set")
		if (this.looping)
		{
			// GO BACK TO THE BEGINNING IF THIS SPRITE SHOULD LOOP
			curFrame = curAnimFrames[0];
			curAnimFramesIndex = 0;
		}
		else
		{
			// STOP ANIMATING IF THIS SPRITE SHOULD NOT LOOP
			curFrame = curAnimFrames[curAnimFramesIndex-1]; //step back
			this.stopSprite();
		}	

		this.complete();	
	}

	// console.log("curFrame ", curFrame)
}

AnimatedSprite.prototype.updateFrame = function()
{
	// console.log("updateFrame ", curFrame);

	if (!curFrame)
		return;

	// REPOSITION BACKGROUND IMAGE TO SHOW CORRECT FRAME
	var newLeft = this.framesPositions[curFrame].left;
	var newTop = this.framesPositions[curFrame].top;

	this.spriteDiv.style.backgroundPosition = newLeft + "px " +  newTop + "px";

// TEMP
// document.getElementById("frame").innerHTML = (curFrame + " " + newLeft + " " + newTop); 
}

AnimatedSprite.prototype.gotoFrame = function(frameNumber)
{
	// console.log("gotoFrame")
	if (fpsInterval)
		this.stopSprite();

	curFrame = frameNumber;
	this.updateFrame();
}

AnimatedSprite.prototype.setSize = function(size)
{
	// console.log("setSize")
	this.frameWidth = size.frameWidth;
	this.frameHeight = size.frameHeight;
	this.sheetHeight = size.sheetHeight;
	this.rows = this.sheetHeight / this.frameHeight;
	this.framesPositions = [];

	for (var i = 0; i < this.rows; i++)
	{
		for (var j = 0; j < this.columns; j++)
		{
			// SHEET NEEDS TO MOVE UP AND TO THE LEFT, SO NUMBERS ARE NEGATIVE FROM 0, 0/TOP, LEFT 
			var left = 0 - j*this.frameWidth;
			var top = 0 - i*this.frameHeight;
			var pos = {left: left, top: top};
			this.framesPositions.push(pos);
		}	
	}
	
	this.updateFrame();
}

AnimatedSprite.prototype.getCurAnimName = function()
{
	return curAnimName;
}