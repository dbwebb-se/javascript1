/* Baddie4 - Assignment */
/*
You should start by uncommenting blocks of code or functions that are needed for the assignment.
Follow the instructions given for each of these blocks.
After that you can start doing the assigments.
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
	"use strict";

	console.log("Ready");

	/**
	 * OBJECTS
	 * We are going to transfer baddie and area and all the functions to handle them into objects
	 */

	/**
	 * Baddie - myBaddie
	 * Baddie has: size, position in the grid (x,y), direction (left or right), and an element in the DOM
	 * Baddie can move, be drawn, initiated, turn and attack (new).
	 */

	// Moved some variables from baddie3 into the object
		// and gave baddie it's init, draw, move and turn
	var myBaddie = {
		// Element
		element: document.getElementById("baddie"),
		// Size
		size: 32,
		// Position - x,y
		x: 0,
		y: 0,

		/**
		 * init() - initiates the element size based on size given (this.size)
		 * Same height and width.
		 */
		init: function() {
			console.log("Initiating baddie size: %ix%i", this.size, this.size);
			this.element.style.width = this.element.style.height = this.size + "px";
		},
		/**
		 * turn() - Turns baddie in the direction user pressed as input
		 * @param  {Number} x	- Where 1 is right and -1 is left
		 */
		turn: function(x) {
			this.direction = x;
			// ------------------------------
			// ASSIGNMENT
			// Use code from turnRight() and turnLeft() in baddie3 and rewrite it to be based on if x is -1 or 1
			// Turn baddie left or right based in x
			// HINT: Use this and access direction and element


		},
		/**
		 * move(pos) - changes the position of baddie in the grid (x,y)
		 * @param  {Object} pos	- x,y coordinates to move to
		 */
		move: function(pos) {
			// We check if x is different, because if it is we have a change in horizontal movement - a turn
			if (this.x != pos.x) {
				// We want to build in turn() into the movement so we don't have to call it ourselves in the appropriate switch-case
				this.turn(pos.x - this.x);
			}
			console.log("Changing baddie position to: ", pos);
			this.x = pos.x;
			this.y = pos.y;
		},
		/**
		 * draw() - moves the element on the screen to the position (x,y) that baddie has
		 */
		draw: function() {
			// ------------------------------
			// ASSIGNMENT
			// Use part of the code from moveBaddie() in baddie3 and rewrite it to assign a style
				// to the DOM-element that represents the x and y of baddie
			// Hints: use this and access element, x, y and size to get the correct pixel positions


		}
	};

	/**
	 * GameArea - myGameArea
	 * GameArea has: size of each tile, size of the grid, tileMap (matrix of map content), DOM element of area
	 * GameArea can be initiated, drawn into element, refresh tiles, move tiles and destroy tiles.
	 */

	// We start of my adding properites, our array and the methods init() and draw()
	var myGameArea = {
		gridSize: 10,
		tileSize: 32,
		element: document.getElementById("content"),
		/**
		 * This is the game area.
		 * 10 - nothing, 11 - wall, 12 - box, 13 - door
		 */
		// ------------------------------
		// ASSIGNMENT
		// Take the array you made in baddie3 and put it into tileMap
		// Rewrite it so that each row of 10 is it's own array (make tileMap into a 2D array)
		// HINT: Think in terms of rows and columns
		// Before:
		// (1 array with values)
		//  _ _ _ _ _ _ _ _ _
		// |_|_|_|_|_|_|_|_|_|
		//
		// Now:
		// (1 array with arrays)
		//  _ _ _
		// |_|_|_|	(1 array)
		// |_|_|_|	(1 array)
		// |_|_|_|	(1 array)
		tileMap: [

		],

		/**
		 * init() - sets size of element based on given grid och tile sizes (square box)
		 */
		init: function() {
			console.log("Initiating game area size with %ix%i grid and tilesize of %ix%i px", this.gridSize, this.gridSize, this.tileSize, this.tileSize);
			this.element.style.width = this.element.style.height = this.gridSize*this.tileSize + "px";
		},
		/**
		 * draw() - draws out all the tiles into element
		 */
		draw: function() {
			console.log("Initiating all tiles into myGameArea HTML element...");
			var x, y, tile;

			for (y = 0; y < this.gridSize; y++) {
				for (x = 0; x < this.gridSize; x++) {
					tile = false;
					// ------------------------------
					// ASSIGNMENT
					// Take part of the code from drawGamePlan() in baddie3 and rewrite it so that it draws the tiles into this.element
					// HINT: Use element and tileMap[][]
					// HINT: x → (column), y ↓ (row)
					// o is in row 0, and in column 1 which means that y is 0 and x is 1.
					//  _ _ _
					// |_|o|_|	(1 array)
					// |_|_|_|	(1 array)
					// |_|_|_|	(1 array)


				}
			}
		}
	};


	/**
	 * Initiate the area and move baddie to his location
	 */
	var init = function() {
		console.log("Initiating the gameboard and it's characters...");
		console.group();
		// ------------------------------
		// ASSIGNMENT
		// Initiate and draw out myGameArea and myBaddie and give myBaddie a starting position
		// Hints: Use the objects and their methods (init, draw and move)
		//		and remember to pass a position object to move
		// Also remember to call draw after move so that the change is visible



		console.groupEnd();
	};


	/* ------------------------------------
	 * EVENTS
	 */
	/* Changed from baddie3:
		* Removed turn-functions (built into myBaddie now)
		* Added a return of object from isBaddieMovable() into pos (the position baddie can move to)
		* Changed parameter of moveBaddie() to be the object returned by isBaddieMovable()
		* Added baddieAttack() to space-button
	*/
	document.addEventListener("keydown", function(event) {
		var key, pos;
		// Gets what key was pressed as number
		key = event.keyCode || event.which;
		console.log(key + " was pressed...");
		console.group();

		// Switch case to decide where baddie is to go
		switch (key) {
			// ------------------------------
			// ASSIGNMENT
			// Copy case 37-40 from baddie3
			// Change each case so that isBaddieMovable() instead returns into variable pos
				// Check that pos was not false and call moveBaddie() if it wasn't
				// Remember to pass the variable pos instead of x and y
			// Add a case for the space-button
				// Call the function that initiates a baddie attack in this case


			default:
				// Button was pressed but no action is to be performed
				// return this function so that the default button action is performed instead
				console.log("Nothing happened with the gameboard");
				console.groupEnd();
				return true;
		}
		console.log("Movement to", pos, "was attempted");
		console.groupEnd();
		// Baddie action was performed - prevent button default
		event.preventDefault();
	});


	/**
	 * This function checks that the move was possible and returns either the new position or false
	 * @param  {int} moveLeft	- direction to move horizontally, range: -1 -> 1
	 * @param  {int} moveTop	- direction to move vertically, range: -1 -> 1
	 * @return {bool OR object} - if baddie was movable and position object (with x and y) is returned,
	 * 		otherwise false is returned
	 * Changed from baddie3:
		 * newLeft and newRight into object named newPos
		 * Gets tile from tileMap in myGameArea-object instead of gameArea, uses newPos object for x and y
		 * case 12:
			 * nextPos is object instead of int
			 * Calls the method to move a tile in myGamearea instead of a function to move it
			 * Parameter is nextPos instead of x and y
	 */
// UNCOMMENT THIS FUNCTION TO BE ABLE TO CONTINUE
/*	var isBaddieMovable = function(moveLeft, moveTop){
		var tile, newPos, movable;
		movable = false;

		// Current position is found in myBaddie
		// Create a new object with the new position based on move
		// Left is horizontal movement, x movement
		// Top is vertical, y movement
		newPos = {
			x: myBaddie.x + moveLeft,
			y: myBaddie.y + moveTop
		};
		console.log("Attempt move to: ", newPos, "...");
		console.group();

		// Get the tile baddie wants to move to out of the array - this time it's a 2D array (arrays in array)
		// x is the row number and y is the column number
		tile = myGameArea.tileMap[newPos.y][newPos.x];

		// Switch case on the tile value - do different things depending on what tile baddie is moving to
		switch(tile) {
			case 10: // empty
			case 13: // door
				// Baddie can move
				movable = true;
				break;
			case 12:
				// When there is a box, we have to get the next position again to check if the box next to baddie can be moved
				// We use the same direction variables to create a new object for this position
				var nextPos = {
					x: newPos.x + moveLeft,
					y: newPos.y + moveTop
				};
				// We use the myGameArea object to check if we can move the box, allow baddie to move if it worked
				if(myGameArea.moveTile(newPos, nextPos)) {
					movable = true;
				} else {
					console.log("Can't push box - next tile is not empty");
				}
				break;
			default:
				// Tile was impassible - collided, do not move baddie
				console.log("Oh no, baddie collided with the wall");
				movable = false;
		}
		console.groupEnd();

		// return false if baddie can't move and the new position if he can
		return movable ? newPos : false;
	};*/


	/**
	 * Calls the needed methods to move baddie (move and draw)
	 * @param  {object} pos	- the position to move to in the grid as an object containing x and y
	 * Changed from baddie3:
		 * Parameter is object, not x and y
		 * Calls methods of myBaddie instead of doing the actual move right in this function
	 */
// UNCOMMENT THIS FUNCTION TO BE ABLE TO CONTINUE
/*	var moveBaddie = function(pos) {
		console.log("Moving baddie to position:", pos);
		// ------------------------------
		// ASSIGNMENT
		// When moving baddie we need to do two things:
			// Change the position and then change the style to draw him out
		// HINT: Relevant methods are move and draw
		// NOTE: Turn is built into myBaddie.move()


	};*/


	/* ------------------------------------
	/* MAKING PUSHING A BOX POSSIBLE
		Notice that we have prepared by using a method in the isBaddieMovable-function above for this
	*/

	// 1: Adding a method to move a tile from one pos to another
	/**
	 * Moves one tile from one position to another and empties the previous one
	 * @param  {object} from	- the position to move to in the grid as an object containing x and y
	 * @param  {object} to		- the position to move to in the grid as an object containing x and y
	 * @return {boolean} 		- returns true or false based on if tiles was moved or not
	 */
	myGameArea.moveTile = function(from, to) {
		var tile, nextTile;

		console.log("Attempting to move tile from ", from, " to ", to, "...");
		console.group();

		// Get tile to move
		tile = this.tileMap[from.y][from.x];
		// Check that next tile is in fact empty
		nextTile = this.tileMap[to.y][to.x];
		// If it was empty:
		if (nextTile == 10) {
			// Empty tile pos
			this.tileMap[from.y][from.x] = nextTile; // We checked that nextTile is 10
			// Move tile to new pos
			this.tileMap[to.y][to.x] = tile;
			console.log("Tile %i moved from %ix%i to %ix%i", tile, from.x, from.y, to.x, to.y);
			// Redraw both tiles
			this.refresh(from);
			this.refresh(to);

			console.groupEnd();
			// Return true because the tile was moved
			return true;
		} else {
			console.log("Can't move tile, next tile (%ix%i) was not empty: %i", to.x, to.y, nextTile);
			console.groupEnd();
			// Return false because the tile was NOT moved
			return false;
		}
	};

	// 2: Adding a method to refresh a tile that was changed so that it is redrawn (it's style changed)
	/**
	 * Changes the class of a tile so that it is refreshed in the screen
	 * @param  {object} pos	- position object of tile (containing x,y)
	 */
	myGameArea.refresh = function(pos) {
		var id, tile;
		// Get id as string (don't sum the numbers - concatenate them instead)
		id = "n" + pos.x + pos.y;
		// Get the tile value
		tile = this.tileMap[pos.y][pos.x];
		// Get the element and change the class to make it refresh
		document.getElementById(id).className = "tile t" + tile;
		console.log("Tile with id %s at %ix%i refreshed to type %i", id, pos.x, pos.y, tile);
	};


	/* ------------------------------------
	/* ADDING ATTACK
		Notice that there already is a call to the baddieAttack()-function in the keylistener that has been
		added in preperation for this
	*/

	// 1: Adding attack to myBaddie
	/**
	 * attack() - based on the direction baddie is standing, return the tile position he attacks
	 * @return {Object}	- x,y coordinates
	 */
	myBaddie.attack = function() {
		console.log("Getting the position baddie attacks...");
		// Can only attack left or right
		// Create object with positions of tile attacked - the tile baddie is facing
		// y + dir
		var attackTile = {
			x: this.x + this.direction,
			y: this.y
		};
		return attackTile;
	};

	// 2: Adding attack to myGameArea
	/**
	 * attackTile(pos) - attacks a tile and destroys it if possible
	 * @param  {Object} pos	- x,y coordinates
	 */
	myGameArea.attackTile = function(pos) {
		var tile;
		// get tile value
		tile = this.tileMap[pos.y][pos.x];
		if (tile == 12) {// box
			// remove tile
			this.tileMap[pos.y][pos.x] = 10;
			// Redraw that tile
			this.refresh(pos);
			console.log("Attacked and removed box tile at ", pos);
		}
	};

	// 3: Adding a function that is called when attack is to be performed (space-button triggered)
	/**
	 * Initiates an attack with myBaddie
	 */
// UNCOMMENT THIS FUNCTION TO BE ABLE TO CONTINUE
/*	var baddieAttack = function() {
		console.group();

		console.log("Initiating baddie attack...");
		// ------------------------------
		// ASSIGNMENT
		// Get the position object of the tile baddie is attacking
		// HINT: use the method created in the myBaddie object


		console.log("Attacking tile at: ", pos, "...");
		console.group();
		// ------------------------------
		// ASSIGNMENT
		// Send the attack position to myGameArea to perform the attack on that tile


		console.groupEnd();

		console.groupEnd();
	};*/


	/* ---------------------------------------------------------
	 * CODE
	 */
	// Initiates the game area and places baddie
	init();

}());
