/* Baddie3 - Assignment */
// Assignmentsections start like this:
//		// -------------------------------------------
//		// ASSIGNMENT
//
// In each section there will be INSTRUCTIONS on what to fill out.
// Each INSTRUCTION comment will start with "A.", like this:
//		// A. This is an instruction
// If it's a extra assignment, the instruction starts with "E.":
//		// E. This is an instruction for an extra assingment
// PLEASE make sure to note the difference between INSTRUCTION-comments and regular comments
//
// In most cases, you have to fill in rows which are left blank after the INSTRUCTION comment
//		// A. Assign value to variable x
//
// This could for example be filled out like this:
//		// A. Assign value to variable x
//		x = 42;
// PLEASE note that the INSTRUCTION can be to fill a whole BLOCK of code, not just one row
// In some cases you have to fill in some missing parts of code, and those can look like this:
//		if(/*Add check*/)
// These should be filled out by replacing the block-comment section.
// For example:
//		if(x > 10)
//
//
// Good luck!

(function(){
	'use strict';
	// HTML elements
	var baddie, content;
	// Numbers
	var tileSize, gridSize, left, top, posLeft, posTop;
	// Arrays
	var gameArea;

	// Get HTML elements that are to be used
	baddie = document.getElementById("baddie");
	content = document.getElementById("content");

	// Size of each tile
	tileSize = 32;
	// Number of tiles per row
	gridSize = 10;

	// Sets content size to match tilesize and gridsize
	content.style.width = content.style.height = gridSize*tileSize + "px";
	// Sets baddie
	baddie.style.height = baddie.style.width = tileSize + "px";

	// Gets starting position of baddie
	left = baddie.offsetLeft;
	top = baddie.offsetTop;

	// Starting position of baddie in the grid
	posLeft = 0;
	posTop = 0;

	// ------------------------------
	// ASSIGNMENT 1
	// Only half of the array is currently filled
	// The array size is gridSize*gridSize (gridSize 10 gives an array of 100)
	// A. Fill out the array gameArea so that the whole content is filled with tiles (1a)
	// A. Place out walls, a door and at least 1 box (1b)
	gameArea = [
	11,11,11,11,11,11,11,11,11,11,
	11,10,10,10,10,10,10,10,10,11,
	11,10,10,10,10,10,10,10,10,11,
	11,10,10,10,10,10,10,10,10,11,
	11,10,10,10,10,10,10,10,10,11,
	/*Fill out the rest of the array*/
	];
	/* HELP-section for tiles
	 * 10 - nothing
	 * 11 - wall
	 * 12 - box
	 * 13 - door
	 */


	/* ------------------------------------
	 * EVENTS
	 */
	// Triggers action on keypress
	document.addEventListener("keydown", function(event) {
		var key;
		// Gets what key was pressed as number
		key = event.keyCode || event.which;
		console.log(key + " was pressed");

		// ------------------------------
		// ASSIGNMENT 2
		// Switch case to decide where baddie is to go
		// A. Copy-paste the switch case you wrote from baddie2 that handles the key variable
		switch(key) {
			/*Place your cases in the switch*/
		}

		// Baddie action was performed - prevent button default
		event.preventDefault();
	});

	/* ---------------------------------------------------------
	 * FUNCTIONS
	 */

	/**
	* NEW Draws the initial gameplan
	*/
	var drawGamePlan = function(gameArea) {
		var i, tile;
		console.log("Drawing gameplan.");

		// ------------------------------
		// ASSIGNMENT 3
		// Write a for-loop that iterates over the gameArea-array
		// A. Fill out the missing for-loop conditions (3a)
		for(false;false;false /*Remove false and fill in needed conditions here*/) {
			// Creates the tile
			tile = document.createElement("div");

			// A. Write out the current tile from gameArea (3b)
			var tileFromArray = null;/*Change tileFromArray so that it fetches the value of the tile*/
			tile.className = "tile t" + tileFromArray;

			// Adds ID to tile
			tile.id = "n" + i;
			// Appends tile to the content
			content.appendChild(tile);
		}
	};

	/**
	 * NEW Initiates the area and moves baddie to his location
	 */
	var init = function() {
		drawGamePlan(gameArea);
		moveBaddieTo(1, 1);
	};

	/**
	* CHANGED Initiate move on character
	*/
	var moveBaddie = function(moveLeft, moveTop){
		var tile, tilePos, newLeft, newTop;
		// This time we want the grid position values, not the pixel position values
		newLeft = posLeft + moveLeft;
		newTop = posTop + moveTop;

		// Do check that new positon is in scope, if not - reset
		// Keep in mind that even though the gridsize is 10, you count from 0-9
		if(gridSize-1 < newLeft || newLeft < 0 || gridSize-1 < newTop || newTop < 0) {
			return true; // collided with walls, don't continue
		}
		console.log("Move to: " + newLeft + "," + newTop);

		// Get the tile baddie wants to move to
		// left is the row number and top is the column number
		tilePos = newLeft + newTop*gridSize;

		// ------------------------------
		// ASSIGNMENT 5
		// A. Get the tile value from array gameArea and place it in the variable tile (5a)
		

		console.log("Tile at " + tilePos + " contains " + tile);

		// Switch case on the tile value - do different things depending on what tile baddie is moving to
		switch(tile) {
			case 10: // empty
			case 13: // door
				// Move baddie to new position
				moveBaddieTo(newLeft, newTop);
				break;
			case 12:
				// Tile was a box, move it and then baddie
				var nextPos, nextTile;

				// Calculate where the sibling tile to be checked is in the array
				nextPos = tilePos + moveLeft + (gridSize*moveTop);

				// A. Get the next tile from gameArea and place it in the variable nextTile (5b)


				console.log("The next tile is: " + nextTile);
				// Only move if the sibling tile to be moved to is empty
				if(nextTile == 10) {
					// ------------------------------
					// ASSIGNMENT 6
					// Switch the tiles
					// A. Place tile into the next positon in the array gameArea (6a)
					
					// A. Now make sure the current tile is empty in the array gameArea (6b)
					

					// give the tiles new classnames to redraw them
					document.getElementById("n" + nextPos).className = "tile t" + tile; // box tile here
					document.getElementById("n" + tilePos).className = "tile t" + 10; // current tile will be empty
					console.log("Moved a box from " + tilePos + " to " + nextPos);

					moveBaddieTo(newLeft, newTop);
				}
				// if not empty - don't do anything else
				console.log("Can't push box - next tile is not empty");
				break;
			default:
				// Tile was impassible - collided, do not move baddie
				console.log("Oh no, baddie collided with the wall");
				return true;
		}
	};

	/**
	* NEW Preform the actual move of baddie to his new position in the grid
	*/
	var moveBaddieTo = function(x, y) {
		// Update baddies position variables
		posLeft = x;
		posTop = y;
		// Calculate pixel locations
		left = posLeft*tileSize;
		top = posTop*tileSize;
		// Move baddie to his new location
		baddie.style.left = left + "px";
		baddie.style.top = top + "px";
	};

	/**
	 * Turn functions for left and right 
	 * Just changes the class name
	 */
	// Turn baddie image right - transform handled in style.css
	var turnRight = function() {
		baddie.className = "baddie-right";
	};
	// Turn baddie image left - transform handled in style.css
	var turnLeft = function() {
		baddie.className = "baddie-left";
	};


	/* ---------------------------------------------------------
	 * CODE
	 */

	// Initiates the game area and places baddie
	init();

})();