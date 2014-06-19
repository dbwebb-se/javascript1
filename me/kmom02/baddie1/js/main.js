/*
 * Baddie1 assignment
 *
 * If you wish to debug you can uncomment some of the console.log()-rows to get prints to the console
 * You can also write your own console.log()'s
 *
 */
(function(){
	'use strict';
	// HTML element variables
	var baddie;
	// Number variables
	var step, left, top;

	// Get HTML element to use
	baddie = document.getElementById("baddie");

	/* ----------- */
	/* Assigment 2.1 */
	// Where do you want baddie to start? Assign a string in the form of "100px" to baddie
	baddie.style.left =
	baddie.style.top =
	//console.log("Baddie is starting at: " + baddie.style.left + ", " + baddie.style.top);

	/* ----------- */
	/* Assignment 2.2 */
	// How far will baddie go each step? Assign the variable step a number

	//console.log("Baddie will step " + step + " pixels");

	// Triggers an action when you press a key
	document.addEventListener("keydown", function(e) {
		// Gets the key that was pressed
		var key = e.keyCode || e.which;
		// Prevents the normal key action (like scrolling)
		e.preventDefault();
		// Gets current position of baddie
		left = baddie.offsetLeft;
		top = baddie.offsetTop;
		//console.log("Baddie is currently at: " + left + "," + top);

		/* ----------- */
		/* Assigment 2.3 */
		// Create an if/if-else or switch-case for the variable key
		// key contains a number value which corresponts to a certain key
		//console.log("Key " + key + " was pressed");
		// These are the ones you need to handle:
		//     37 - Left arrow
		//        Calculate a new value for left so that the baddie takes one step to the left
		//     38 - Up arrow
		//        Calculate a new value for top so that the baddies takes one step up
		//     39 - Right arrow
		//        Calculate a new value for left so that the baddie takes one step to the right
		//     40 - Down arrow
		//        Calculate a new value for top so that the baddies takes one step down



		/* ------------------------------------------------------ */
		/* EXTRA Assigment */
		// Make sure that baddie can't go beyond the edges of the window
		// Use the getSize-example to find how you get the window size
		//	and check if baddie tries to move outside of the window


		/* ------------------------------------------------------ */


		// Here is where we finally give baddie its new coordinates so that he moves
		// Make sure that left and top contain a number value for where baddie is to go
		//console.log("Moving baddie to: " + left + "," + top);
		baddie.style.left = left + "px";
		baddie.style.top = top + "px";
	});
}());
