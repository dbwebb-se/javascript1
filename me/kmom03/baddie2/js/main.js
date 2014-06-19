/*
 * Baddie2 assigment
 *
 * If you wish to debug to the console, uncomment desired console.log()-row
 * Or write your own console.log()
 */
(function(){
	'use strict';
	// HTML elements
	var baddie, content;
	// Numbers
	var step, left, top, maxLeft, maxTop;
	// Get HTML elements that are to be used
	baddie = document.getElementById("baddie");
	content = document.getElementById("content");

	// Step value - how far does baddie go per step - his own size per step
	step = baddie.offsetWidth;
	// Size of window
	maxTop = window.innerHeight;
	maxLeft = window.innerWidth;
	// Gets starting position of baddie
	left = baddie.offsetLeft;
	top = baddie.offsetTop;

	/* ------------------------------------
	 * EVENTS
	 */
	// Triggers action on keypress
	document.addEventListener("keydown", function(e) {
		// Gets what key was pressed as number
		var key = e.keyCode || e.which;

		// Switch case to decide where baddie is to go
		// Directions should be given in the form of -1, 0 or 1.
		// -1 is opposite, 1 is the same direction, 0 is no movement for that direction
		switch(key) {
			case 37:
				// Go right - use the moveBaddie()-function

				// Turn baddie right - use function

				break;
			case 38:
				// Go up - use the moveBaddie()-function

				break;
			case 39:
				// Go left - use the moveBaddie()-function

				// Turn baddie left - use function

				break;
			case 40:
				// Go down - use the moveBaddie()-function

				break;
			case 32:
				// Space key
				// Jump - use function

				break;
			default:
				// Button was pressed but no action is to be performed
				// return this function so that the default button action is performed instead
				return true;
		}
		// Baddie action was performed - prevent button default
		e.preventDefault();
	});

	// Adds click event to content element - triggers on mouse click inside content
	content.addEventListener("click", function(e) {
		var x, y;
//		console.log("Clicked at inside element: " + e.offsetX + "," + e.offsetY)
//		console.log("Clicked at inside window: " + e.clientX + "," + e.clientY);
		// Check that the click was inside the field and not inside the baddie
		if(e.currentTarget == e.target){
			// The coordinates for the click
			x = e.offsetX;
			y = e.offsetY;
			// Use the moveBaddieTo()-function to move it to the click location

		} else {
			// Click orignated from baddie - move to current pos + element click
			x = baddie.offsetLeft + e.offsetX;
			y = baddie.offsetTop + e.offsetY
			// Use the moveBaddieTo()-function to move it to the click location

		}
	});


	/* ---------------------------------------------------------
	 * FUNCTIONS
	 */

	// Move baddie centered to fixed location
	function moveBaddieTo(x, y) {
		//console.log("Current baddie pos: " + baddie.offsetLeft + "," + baddie.offsetTop);
		left = x - baddie.offsetWidth/2;
		top = y - baddie.offsetHeight/2;
		//console.log("Baddie wants to move to: " + left + "," + top);

		// Check baddie for wall collision - use function


		// Turn baddie in the direction he is going
		if(left > baddie.offsetLeft) {
			// Turn baddie left - use function

		} else {
			// Turn baddie right - use function

		}

		// Move baddie to its new location
		baddie.style.left = left + "px";
		baddie.style.top = top + "px";

		//console.log("Baddie moved to: " + baddie.offsetLeft + "," + baddie.offsetTop);
	};

	// Wall collide function
	// Checks if baddie collided with content wall and recalculates left and top if it did
	function wallCollideBaddie() {
		// Assume that baddie did not collide at first - assign boolean value
		var collided =
		// Baddie position is relative to the content element
		// Walls are at 0,0 and width,height of content
		// Left wall collide check
		if(left < 0) {
			// Change left to put baddie inside content

			// Change collided-variable

		}
		// Top wall collide check
		if(top < 0) {
			// Change top to put baddie inside content

			// Change collided-variable

		}
		// Right wall collide check
		if(left + baddie.offsetWidth > content.clientWidth) {
			// A bit trickier. Have to take baddie width into account since we check its top left corner
			// Change left so that baddie ends up inside content

			// Change collided-variable

		}
		// Bottom wall collide check
		if(top + baddie.offsetHeight > content.clientHeight) {
			// A bit trickier. Have to take baddie width into account since we check its top left corner
			// Change top so that baddie ends up inside content

			// Change collided-variable

		}

		// Return if baddie collided

	}

	// Move baddie in a given direction where directions are -1, 0 or 1 for x and y
	function moveBaddie(dirX, dirY) {
		// Get new baddie positon by getting current one and adding step and direction
		// For example, if baddie wants to go right, the direction is opposite of left (-1)
		left = baddie.offsetLeft +
		top = baddie.offsetTop +

		// Check for wall collision - use function
		var collided =

		// Move baddie to its new position
		baddie.style.left = left + "px";
		baddie.style.top = top + "px";

		/*console.log("Baddie position: " + baddie.offsetLeft + "," + baddie.offsetTop);
		console.log("Wall box position: " + content.offsetLeft + "," + content.offsetTop);
		console.log("Wall box size: " + content.clientWidth + "," + content.clientHeight);*/

		// return if baddie collided

	}

	// Make baddie jump up and then come down again
	function jump() {
		// Move baddie up
		// If he did _not_ collide when moving (hindering the jump) move him back down after a set amount of time
		// Fill the parameters for movements
		if(!moveBaddie( /* Fill parameters */ )) {
			// Assign time to a number - will be used as milliseconds
			var ms =
			// Timer, runs code after waiting for given milliseconds
			window.setTimeout(function() {
				// Go down - use the moveBaddie()-function

			}, ms);
		}
	}

	// Turn baddie image right - transform handled in style.css
	function turnRight() {
		// Give baddie the correct classname that will make him turn right - look for it in style.css
		baddie.className = "";
	}
	// Turn baddie image left - transform handled in style.css
	function turnLeft() {
		// Give baddie the correct classname that will make him turn left - look for it in style.css
		baddie.className = "";
	}

}());