/* Baddie3 - Assignment */
/*
You should start by uncommenting blocks of code or functions that are needed for the assignment.
Follow the instructions given for each of these blocks.
Assignment-sections start like this:
	// -------------------------------------------
	// ASSIGNMENT

Note that the INSTRUCTION can be to fill a whole BLOCK of code, not just one row.
In some cases you have to fill in some missing parts of code or change parts of it.
It can look like this:
	if(false)
These should be filled out by replacing the boolean false with your code, for example:
	if(x > 10)

Good luck!
*/

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

	// Gets starting position of baddie
	left = baddie.offsetLeft;
	top = baddie.offsetTop;

	// Starting position of baddie in the grid
	posLeft = 0;
	posTop = 0;

	/**
	 * This is the game area with a 10x10 grid
	 * 10 - nothing (grass)
	 * 11 - wall (impassible)
	 * 12 - box (movable)
	 * 13 - door (passible)
	 */
	// ------------------------------
	// ASSIGNMENT
	// Fill out the array gameArea so that the whole content is filled with tiles
	// Place out walls, a door and at least 1 box
	// NOTE: The array size is gridSize*gridSize (gridSize 10 gives an array of 100)
	gameArea = [
	11,11,11,11,11,11,11,11,11,11,
	/*Fill out the rest of the array*/
	];

	/**
	 * Initiates the game area by adding each tile as a div with class and id to content area
	 * @param  {[type]} gameArea [description]
	 */
	var drawGamePlan = function(gameArea) {
		var i, tile;
		console.log("Drawing gameplan:");
		console.log(gameArea);

		// ------------------------------
		// ASSIGNMENT
		// Write a for-loop that iterates over the gameArea-array
		// Fill out the missing for-loop conditions
		// HINT: Make sure that the loop goes through the gameArea array, the full lenght of it
		for (i; i > 0; i) {
			// Create the tile
			tile = document.createElement("div");

			// ------------------------------
			// ASSIGNMENT
			// Write out the current tile from gameArea
			// HINT: Change null so that it fetches the value of the tile
			var tileFromArray = null;

			// Add class name to tile
			tile.className = "tile t" + tileFromArray;
			// Add ID to tile
			tile.id = "n" + i;
			// Append tile to the content
			content.appendChild(tile);
		}
	};


	/* ------------------------------------
	 * EVENTS
	 */
	// Triggers action on keypress
	document.addEventListener("keydown", function(event) {
		var key;
		// Gets what key was pressed as number
		key = event.keyCode || event.which;
		console.log(key + " was pressed");

		// Switch case to decide where baddie is to go
		// ------------------------------
		// ASSIGNMENT
		// Copy-paste the switch case you wrote from baddie2 that handles the key variable
		switch (key) {


			default:
				// Button was pressed but no action is to be performed
				console.log("Nothing happened with the gameboard");
				// return this function so that the default button action is performed instead
				return true;
		}
		// Baddie action was performed - prevent button default
		event.preventDefault();
	});

	/* ---------------------------------------------------------
	 * FUNCTIONS
	 */

	/**
	 * Initiates area and baddie
	 */
	var init = function() {
		drawGamePlan(gameArea);
		moveBaddie(1, 1);
	};

	/**
	 * This function checks that the move was possible and returns either the new position or false
	 * @param  {int} moveLeft	- direction to move horizontally, range: -1 -> 1
	 * @param  {int} moveTop	- direction to move vertically, range: -1 -> 1
	 * @return {bool} 			- if baddie was movable true is returned, otherwise false is returned
	 */
// UNCOMMENT THIS FUNCTION TO BE ABLE TO CONTINUE
/*	var isBaddieMovable = function(moveLeft, moveTop){
		var tile, tilePos, newLeft, newTop, movable;
		// This time we want the grid position values, not the pixel position values
		newLeft = posLeft + moveLeft;
		newTop = posTop + moveTop;

		movable = false;

		// Get the tile baddie wants to move to
		// left is the row number and top is the column number
		tilePos = newLeft + newTop*gridSize;

		// ------------------------------
		// ASSIGNMENT
		// Get the tile value from array gameArea and place it in the variable tile


		console.log("Move to: " + newLeft + "," + newTop);
		console.log("Tile " + tilePos + " contains " + gameArea[tilePos]);

		// Switch case on the tile value - do different things depending on what tile baddie is moving to
		switch(tile) {
			case 10: // empty
			case 13: // door
				// Move baddie to tile
				movable = true;
				break;
			case 11:
				// Wall, don't move baddie
				console.log("Baddie collided with wall: %s", tile);
				break;
			case 12:
				// Tile was a box, move it and then baddie
				var nextPos, nextTile;

				// Calculate where the sibling tile to be checked is in the array
				nextPos = tilePos + moveLeft + (gridSize*moveTop);

				// ------------------------------
				// ASSIGNMENT
				// Get the next tile from gameArea and place it in the variable nextTile (5b)


				console.log("The next tile is: " + nextTile);

				// Only move if the sibling tile to be moved to is empty
				if(nextTile == 10) {
					moveTile(tilePos, nextPos);
					// Allow  baddie to move to the current tile
					movable = true;
					console.log("Moved a box");
				} else {
					// if not empty - don't do anything else
					console.log("Can't push box - next tile is not empty");
				}
				break;
			default:
				// Tile was impassible - collided, do not move baddie
				console.log("Oh no, baddie collided with the wall");
				movable = false;
		}
		return movable;
	};*/


	/**
	 * Changes position variables for baddie and style to draw the change out on the screen
	 * @param  {[type]} x	- direction to move horizontally
	 * @param  {[type]} y	- direction to move vertically
	 */
	var moveBaddie = function(x, y) {
		// Update baddies position variables
		posLeft += x;
		posTop += y;

		// Assign left and right to the pixel positions inside the area that the baddie is moving to
		// x and y are the grid coordinates, so you take tile tileSize and use that to get the pixels
		left = posLeft*tileSize;
		top = posTop*tileSize;

		// To actually visually move baddie we need to change left and top in style as pixels
		baddie.style.left = left + "px";
		baddie.style.top = top + "px";
	};

	/**
	 * Switches two tiles and updates their classes to redraw them
	 * @param  {int} current	- array position of the tile to move
	 * @param  {int} next		- array position to move tile to
	 */
// UNCOMMENT THIS FUNCTION TO BE ABLE TO CONTINUE
/*	var moveTile = function(current, next) {
		var tile = gameArea[current];
		// ------------------------------
		// ASSIGNMENT
		// Switch the tiles
		// Place tile into the next positon in the array gameArea
		// Then make sure the current tile is empty in the array gameArea



		// Give the tiles new classnames to redraw them
		document.getElementById("n" + next).className = "tile t" + tile; // box tile here
		document.getElementById("n" + current).className = "tile t" + 10; // current tile will be empty
	};*/

	/**
	 * Turn baddie image right - transform handled in style.css
	 */
// UNCOMMENT THIS FUNCTION TO BE ABLE TO CONTINUE
/*
	function turnRight() {
		baddie.className = "baddie-right";
	}
*/
	/**
	 * Turn baddie image left - transform handled in style.css
	 */
// UNCOMMENT THIS FUNCTION TO BE ABLE TO CONTINUE
/*
	function turnLeft() {
		baddie.className = "baddie-left";
	}
*/

	/* ---------------------------------------------------------
	 * CODE
	 */
	init();

})();
