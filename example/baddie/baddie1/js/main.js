/* Baddie1 - Assignment */
/*
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
	// HTML Elements
	var baddie;
	// Numbers
	var step, left, top;

	// Get HTML baddie
	baddie = document.getElementById('baddie');

	// ------------------------------
	// ASSIGNMENT
	// How many pixles should baddie move each step? Assign a number to step

	console.log("Baddie will move", step, "pixels each step");
	// ------------------------------
	// ASSIGNMENT
	// Where should baddie start on the screen? Assign a number to left and top



	// Places baddie initially
	baddie.style.left = left + "px";
	baddie.style.top = top + "px";
	console.log("Baddie started at " + left + "," + top);


	/* ------------------------------------
	 * EVENTS
	 */
	// Triggers action on keypress
	document.addEventListener("keydown", function(event) {
		var key;

		// Get which key was pressed
		key = event.keyCode || event.which;
		console.log(key + " was pressed");

		// Gets baddie's current position
		left = baddie.offsetLeft;
		top = baddie.offsetTop;
		console.log("Baddie is currently at " + left + "," + top);

		// ------------------------------
		// ASSIGNMENT
		// Use an if/else or switch (on key) to calculate where baddie is going
		// HINT: step contains the number of pixels that we want baddie to move each time an arrow-key is pressed
			// and left and top contain the position on the screen that baddie will be assigned later
		/* Key contains a number value for which keyboard key was pressed
		 * 37 - left arrow
		 * 		change the variable left so that baddie will move left
		 * 38 - up arrow
		 * 		change the variable top so that baddie will move up
		 * 39 - right arrow
		 * 		change the variable left so that baddie will move right
		 * 40 - down arrow
		 * 		change the variable top so that baddie will move down
		 */


		// ------------------------------
		// EXTRA ASSIGNMENT
		// Handle so that baddie can't move outside of the window's edges
		// TIP: Use the getSize-example to find how you can get the window width and height



		// Assign a new position for baddie
		baddie.style.left = left + "px";
		baddie.style.top = top + "px";
		console.log("Baddie moved to %i,%i", left, top);
	});
}());
