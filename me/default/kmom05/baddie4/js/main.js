/* Baddie4 - Assignment */
// You should start by uncommenting blocks of code or functions that are needed for the assignment
// Follow the instructions given for each of these blocks
// After that you can start doing the assigments
// Assignment-sections start like this:
//		// -------------------------------------------
//		// ASSIGNMENT x
//
// In each section there will be INSTRUCTIONS on what to fill out
// Each INSTRUCTION comment will start with "A.", like this:
//		// A. This is an instruction
// If it's a extra assignment, the instruction starts with "E.":
//		// E. This is an instruction for an extra assingment
// In most cases, you have to fill in rows which are left blank after the INSTRUCTION comment
//		// A. Assign value to variable x
//
// This could for example be filled out like this:
//		// A. Assign value to variable x
//		x = 42;
// PLEASE note that the INSTRUCTION can be to fill a whole BLOCK of code, not just one row
// In some cases you have to fill in some missing parts of code or change parts of it
// It can look like this:
//		if(false)
// These should be filled out by replacing the boolean false with your code, for example:
//		if(x > 10)
// PLEASE follow any instructions given with the assignment
// They will tell you what code needs to be replaced
//
// Good luck!

(function(){
	"use strict";

	/* ---------------------------------------------------------------------------------------------
	 * OBJECTS
	 */
	
	/**
	 * Baddie as object
	 * Properties: size, positions (x,y), direction and element (HTML)
	 * Methods: init, move, turn, draw, attack
	 * @type {Object}
	 */
	var myBaddie = {
		// -------------------------------------------
		// ASSIGNMENT 1
		// A. Assign myBaddie-object these properties: size, x, y
		//		where the size should be 32 (tilesize)


		direction: 1,
		// HTML element
		element: document.getElementById("baddie"),
		/**
		 * init() - initiates the element size based on size given.
		 * Same height and width.
		 */
		init: function() {
			console.log("Initiating baddie size: %ix%i", this.size, this.size);
			this.element.style.width = this.element.style.height = this.size + "px";
		},
		/**
		 * move(pos) - changes the position of baddie in the grid (x,y)
		 * @param  {Object} pos - x,y coordinates to move to
		 */
		move: function(pos) {
			console.log("Changing baddie position to: ", pos);

			// A. Assign the properties of pos to the properties of this object
			//		Properties to fetch and assign are: x, y


		},
		/**
		 * draw() - moves the element on the screen to the position (x,y) that baddie has
		 */
		draw: function() {
			this.element.style.left = this.y*this.size + "px";
			this.element.style.top = this.x*this.size + "px";
			console.log("Drew out baddie to his position: %s x %s", this.element.offsetTop, this.element.offsetLeft);
		},
		/**
		 * turn() - Turns baddie in the direction user pressed as input
		 * @param  {Number} y - Range: -1<y<1 where -1 is right and 1 is left
		 */
		turn: function(y) {
			// If y is 0 - did not move left or right - else change direction to that move in
			this.direction = y !== 0 ? y : this.direction;
			// Change the classname of baddie to left or right depending on direction
			this.element.className = "baddie-" + (this.direction == 1 ? "left" : "right");
			console.log("Turned baddie %s", this.direction == 1 ? "left" : "right");
		},
		/**
		 * attack() - based on the direction baddie is standing, return the tile he attacks
		 * @return {Object} - x,y coordinates
		 */
		attack: function() {
			console.log("Getting the position baddie attacks...");
			// Can only attack left or right
			// Create object with positions of tile attacked - the tile baddie is facing
			// y + dir
			var attackTile = {
				y: this.y + this.direction,
				x: this.x
			};
			return attackTile;
		}
	};


	/**
	 * Enemy as object
	 * Moves in a random direction with a timer
	 * Can be stopped and started
	 * Properties: size, position (x,y), intervalID, moveTimer, element (HTML)
	 * Methods: init, move, draw, getDirection, start, stop
	 * @type {Object}
	 */
	var myEnemy = {
		// -------------------------------------------
		// ASSIGNMENT 2
		// A. Assign myEnemy-object these properties: size, x, y, moveTimer
		//		where the size should be 32 (tilesize)
		//		and the integer value of moveTimer should be in milliseconds


		intervalID: null,
		element: document.getElementById("enemy"),
		/**
		 * init() - initiates the element size based on size given.
		 * Same height and width.
		 */
		init: function() {
			console.log("Initiating enemy size: %ix%i", this.size, this.size);
			this.element.style.width = this.element.style.height = this.size + "px";
		},
		/**
		 * move() - changes the position of enemy in the grid
		 * @param  {Object} pos - x,y coordinates to move to
		 */
		move: function(pos) {
			console.log("Changing enemy position to: ", pos);

			// A. Assign the properties of pos to the properties of this object
			//		Properties to fetch and assign are: x, y


		},
		/**
		 * draw() - moves the element on the screen to the position (x,y) that enemy has
		 */
		draw: function() {
			this.element.style.left = this.y*this.size + "px";
			this.element.style.top = this.x*this.size + "px";
			console.log("Drew out enemy to his position: %s x %s", this.element.offsetTop, this.element.offsetLeft);
		},
		/**
		 * Randoms a direction for enemy to go and returns the next position
		 * @return {Object} position as object in x,y coordinates
		 */
		getDirection: function() {
			console.log("Getting a random direction for enemy to go...");
			var which, pos, dir;
			// A. Assign an object with the properties x and y to the variables pos
			//		initial values should be 0
			pos = {};

			// A. Create a random a number between 0 and 1 to decide if enemy moves in x or y
			//		Assign it to variable which (change null)
			//		Tip: Use Math.round and Math.random. You can use google to find ways to randomize in the wanted range
			which = null;

			// A. Create a random number that is either 1 or -1 (not 0!)
			//		Assign it to the variable dir instead of 0
			//		Tip: Use Math.round and Math.random. You can use google to find ways to randomize in the wanted range
			dir = 0;

			if(which) {// 1 == true, 0 == false
				// A. Assign the property y of the object pos to the direction that was generated

			} else {
				// A. Assign the property x of the object pos to the direction that was generated

			}
			return pos;
		},
		/**
		 * start() - starts an interval timer for the enemy that runs a given function each interval
		 * @param  {[type]} actionFunction - the function to run each interval 
		 */
		start: function(actionFunction) {
			// A. Clear precious interval by using the given method in this object
			//		Call the method to stop/clear the set interval


			// Saves the ID of the interval to the object for later clearing
			this.intervalID = window.setInterval(function() {
				// Calls the function passed to this method
				// Notice that the function reference is placed in a variable and does not need to have the same name as the actual function we want to call
				actionFunction();

			// A. Change 0 to the property in this object that contains the timer value in milliseconds
			}, 0);

			console.log("Started interval for enemy action, has id: %i and timer: %ims", this.intervalID, this.moveTimer);
		},
		/**
		 * stop() - stops the active interval
		 */
		stop: function() {
			console.log("Stoping enemy interval with id: ", this.intervalID);
			window.clearInterval(this.intervalID);
		}
	};

	/**
	 * Gamearea as object
	 * Properties: gridSize, tileSize, element (HTML)
	 * Arrays: tileMap
	 * Methods: init, moveTile, attackTile, draw, refresh
	 * @type {Object}
	 */
	var myGameArea = {
		gridSize: 10,
		tileSize: 32,
		element: document.getElementById("content"),
		/**
		 * This is the game area.
		 * 10 - nothing, 11 - wall, 12 - box, 13 - door
		 * @type {Array}
		 */
		tileMap: [
			// -------------------------------------------
			// ASSIGNMENT 3
			// Remade the array into a matrix:
			// Each row is now it's own array with 10 values each
			// There are 10 arrays in total which gives the grid of 10x10
			// A. Change the values of the matrix to create content on the gamearea (currently empty)
			[10,10,10,10,10,10,10,10,10,10],
			[10,10,10,10,10,10,10,10,10,10],
			[10,10,10,10,10,10,10,10,10,10],
			[10,10,10,10,10,10,10,10,10,10],
			[10,10,10,10,10,10,10,10,10,10],
			[10,10,10,10,10,10,10,10,10,10],
			[10,10,10,10,10,10,10,10,10,10],
			[10,10,10,10,10,10,10,10,10,10],
			[10,10,10,10,10,10,10,10,10,10],
			[10,10,10,10,10,10,10,10,10,10],
			/* HELP-section for tiles
			 * 10 - nothing
			 * 11 - wall
			 * 12 - box
			 * 13 - door
			 */
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
			var x, y, tile, tileType;
			// x is the row, y is the column
			// Loop through the matrix:
			// Loop trough each row
			for(x = 0; x < this.gridSize; x++) {
				// Loop through each value in the row
				for(y = 0; y < this.gridSize; y++) {
					// Create the tile div
					tile = document.createElement("div");

					// A. Get the value of the tile from the array in this object
					//		Change null to the code needed to fetch a tile and remember: x - row, y - column
					tileType = null;

					// Give the tile a classname based on type
					tile.className = "tile t" + tileType;
					// Give the class and id
					tile.id = "" + x + y;
					// Append the tile to the HTML element
					this.element.appendChild(tile);
				}
			}
		},
		/**
		 * refresh(pos) - redraws the given tile (changes the classname to trigger css)
		 * @param  {Object} pos - x,y coordinates
		 */
		refresh: function(pos) {
			var id, tile;
			// x is the row, y is the column
			// Get id as string (don't sum the numbers - concatenate them instead)
			id = "" + pos.x + pos.y;

			// A. Get the value of the tile from the array in this object
			//		The x and y that are needed are properties in the variable pos
			//		Change null to the code needed to fetch a tile and remember: x - row, y - column
			tile = null;

			// Get the element and change the tile value to the new tile
			document.getElementById(id).className = "tile t" + tile;
			console.log("Tile with id %s at %ix%i refreshed to type %i", id, pos.x, pos.y, tile);
		},
		/**
		 * moveTile(from, to) - attempts to move a tile from one positon to another
		 * @param  {Object} from - x,y coordinates
		 * @param  {Object} to - x,y coordinates
		 * @return {Boolean} - true if the tile was moved, false if it wasn't
		 */
		moveTile: function(from, to) {
			console.log("Attempting to move tile from ", from, " to ", to, "...");
			console.group();
			var tile, nextTile;

			// A. Get the value of the tile from the array in this object
			//		The x and y that are needed are properties in the variable from
			//		Change null to the code needed to fetch a tile and remember: x - row, y - column
			tile = null;

			// A. Get the value of the tile from the array in this object
			//		The x and y that are needed are properties in the variable to
			//		Change null to the code needed to fetch a tile and remember: x - row, y - column
			nextTile = null;

			if(nextTile == 10) {
				// empty tile pos
				this.tileMap[from.x][from.y] = nextTile;
				// move tile to new pos
				this.tileMap[to.x][to.y] = tile;
				console.log("Tile %i moved from %ix%i to %ix%i", tile, from.x, from.y, to.x, to.y);

				// A. Refresh tiles in positions from and to - use the method in this object (refresh)


				console.groupEnd();
				return true;
			} else {
				console.log("Can't move tile, next tile (%ix%i) was not empty: %i", to.x, to.y, nextTile);
				console.groupEnd();
				return false;
			}
		},
		/**
		 * attackTile(pos) - attacks a tile and destroys it if possible
		 * @param  {Object} pos - x,y coordinates
		 */
		attackTile: function(pos) {
			var tile;

			// A. Get the value of the tile from the array in this object
			//		The x and y that are needed are properties in the variable pos
			//		Change null to the code needed to fetch a tile and remember: x - row, y - column
			tile = null;

			if(tile == 12) {// box
				// Empty tile
				this.tileMap[pos.x][pos.y] = 10;

				// A. Refresh tile in position pos - use the method in this object (refresh)


				console.log("Attacked and removed box tile at ", pos);
			}
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
		console.log(key + " was pressed...");
		console.group();

		// Switch case to decide where baddie is to go
		switch(key) {
			// -------------------------------------------
			// ASSIGNMENT 4
			// A. Copy-paste cases 37-40 from previous assignment (baddie3)
			// A. Remove the turnRight and turnLeft-functioncalls (turning will be handled by and in the object)


			case 32: // space
				// baddie attack
				baddieAttack();
				break;
			case 83: // s
				// Start enemy
				// Uncomment this block comment when you have finished myEnemy
				/*
				myEnemy.start(moveEnemy);
				 */
				break;
			case 88: // x
				// A. Call the method in myEnemy-object that stops enemy movement (clears interval)


				break;
			default:
				// return this function so that the default button action is performed instead
				console.log("Nothing happened with the gameboard");
				console.groupEnd();
				return true;
		}
		// Baddie action was performed - prevent button default
		event.preventDefault();
		console.groupEnd();
	});

	/* -----------------------------------------------------------------------------------
	 * FUNCTIONS
	 */

	/**
	 * Initiates the area and moves baddie to his location
	 */
	var init = function() {
		var baddieStart, enemyStart;
		console.log("Initiating the gameboard and it's characters...");
		console.group();

		// -------------------------------------------
		// ASSIGNMENT 5
		// A. Assign baddieStart an object with the properties x and y
		//		Assign the values of these properites to a starting-position.
		//		Remember to put the values inside of the grid, and not on walls, boxes or the enemy.
		baddieStart = {};

		// A. Assign enemyStart an object with the properties x and y
		//		Assign the values of these properites to a starting-position.
		//		Remember to put the values inside of the grid, and not on walls, boxes or the baddie.
		enemyStart = {};

		// Initiate area and draw it out
		myGameArea.init();
		myGameArea.draw();
		// Initiate baddie, move him to start-position and draw him out
		myBaddie.init();
		myBaddie.move(baddieStart);
		myBaddie.draw();
		// Initiate enemy, move him to start-pos, draw him out, and start the interval
		myEnemy.init();
		myEnemy.move(enemyStart);
		myEnemy.draw();
		// Here we start the interval of enemy actions
		// Notice that the function we want to be called is passed as a paramater by it's name, and NOT as a call!
		// Uncomment this block comment when you have finished myEnemy
		/*
		myEnemy.start(moveEnemy);
		 */
		console.groupEnd();
	};

	/**
	 * Moves myEnemy if possible
	 */
	var moveEnemy = function() {
		console.log("Moving enemy...");
		console.group();
		var newPos, dir, tile;
		// Get a random direction from the enemy
		// -------------------------------------------
		// ASSIGNMENT 6
		// A. Use the method of the object enemy that returns a random direction
		//		Change null to the call needed
		dir = null;

		console.log("Random direction: ", dir);
		newPos = {
			x: myEnemy.x + dir.x,
			y: myEnemy.y + dir.y
		};
		console.log("Position enemy wants to move to: ", newPos);

		// A. Get the value of the tile from the array in myGameArea.tileMap
		//		The x and y that are needed are properties in the variable newPos
		//		Change null to the code needed to fetch a tile and remember: x - row, y - column
		tile = null;

		switch(tile) {
			case 10:
			case 13:
				// Check if enemy is trying to move to baddie's position
				if(newPos.x != myBaddie.x || newPos.y != myBaddie.y) {
					// Empty or door, move to tile
					// A. Call the method of myEnemy that moves him to newPos
					//		Remember to pass the position object to the call


				} else {
					console.log("Enemy collided with baddie");
				}
				break;
			case 11:
			case 12:
				// wall, don't move baddie
				console.log("Enemy collided with wall or box: %s", tile);
				break;
			default:
				// No tile, baddie tried to move outside of grid
				console.log("Next position was outside of grid, enemy did not move");
				break;
		}
		// Draw baddie in his new position
		myEnemy.draw();
		console.groupEnd();
	};


	/**
	 * Initiate move on character myBaddie
	 * @param  {Number} moveLeft - Range: -1 < moveLeft < 1 where 1 is left
	 * @param  {Number} moveTop - Range: -1 < moveTop < 1 where 1 is down
	 */
// Uncomment the function be able to use it (remove /* and */ before and efter function declaration)
/*	
	var moveBaddie = function(moveLeft, moveTop){
		var newPos, tile;
		// This time we want the grid position values, not the pixel position values
		newPos = {
			x: myBaddie.x + moveTop,
			y: myBaddie.y + moveLeft
		};
		console.log("Attempt move to: ", newPos, "...");
		console.group();
		
		// -------------------------------------------
		// ASSIGNMENT 7
		// A. Get the value of the tile from the array in myGameArea.tileMap
		//		The x and y that are needed are properties in the variable newPos
		//		Change null to the code needed to fetch a tile and remember: x - row, y - column
		tile = null;

		switch(tile) {
			case 10:
			case 13:
				// Check if baddie is trying to move to enemy's position
				if(newPos.x != myEnemy.x || newPos.y != myEnemy.y) {
					// Empty or door, move to tile
					// A. Call the method of myBaddie that moves him to newPos
					//		Remember to pass the position object to the call


				}
				break;
			case 11:
				// wall, don't move baddie
				console.log("Baddie collided with wall: %s", tile);
				break;
			case 12:
				console.log("Baddie collided with a movable tile: %s", tile);
				// box, move baddie and move box
				var nextPos = {
					x: newPos.x + moveTop,
					y: newPos.y + moveLeft
				};
				if(nextPos.x != myEnemy.x || nextPos.y != myEnemy.y) {
					if(myGameArea.moveTile(newPos, nextPos)) {
						// if the tile could be moved, also move baddie (else blocked)
						// A. Call the method of myBaddie that moves him to newPos
						//		Remember to pass the position object to the call


					}
				} else {
					console.log("Tile collided with enemy");
				}
				break;
			default:
				// No tile, baddie tried to move outside of grid
				console.log("Next position was outside of grid, baddie did not move");
				break;
		}
		// Turn baddie to his new direction
		myBaddie.turn(moveLeft);
		// Draw baddie in his new position
		myBaddie.draw();
		console.groupEnd();
	};
*/

	/**
	 * Initiates an attack with myBaddie
	 */
	var baddieAttack = function() {
		console.group();
		console.log("Initiating baddie attack...");

		// -------------------------------------------
		// ASSIGNMENT 8
		// A. Call the method for attacking in the object for baddie
		var tilePos = null;

		console.log("Attacking tile at: ", tilePos, "...");
		console.group();

		// A. Call the method for attacking a tile in the object for gamearea
		//		Remember to pass the tilePos-object to the call
		

		console.groupEnd();
		console.groupEnd();
	};

	/* ---------------------------------------------------------
	 * CODE
	 */
	// Initiates the game area and places baddie and enemy
	init();

})();