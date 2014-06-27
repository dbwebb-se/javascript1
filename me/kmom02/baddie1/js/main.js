/* Baddie1 - Assignment */
// Assignmentsections start like this:
//		// -------------------------------------------
//		// ASSIGNMENT
//
// In each section there will be INSTRUCTIONS on what to fill out.
// Each INSTRUCTION comment will start with "A.", like this:
//		// A. This is an instruction
// If it's a extra assignment, the instruction starts with "E.":
// 		// E. This is an instruction for an extra assingment
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
	// HTML Elements
	var baddie;
	// Numbers
	var step, left, top;

	// Get HTML baddie
	baddie = document.getElementById("baddie");

	// ------------------------------
	// ASSIGNMENT 1
	// A. How many pixles should baddie move each step? Assign a number to step (1a)

	console.log("Baddie will go " + step + " pixels each step");
	// A. Where should baddie start on the screen? Assign a number to left and to top (1b)
	

	console.log("Baddie will start at " + left + "," + top);
	
	// Places baddie initially
	baddie.style.left = left + "px";
	baddie.style.top = top + "px";
	

	/* ----- EVENTS ----- */

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
		// ASSIGNMENT 2
		// A. Use an if/else or switch-case on key (2a)
		// A. Calculate the new position for baddie and place it in top or left depending on where he's going (2b)

		
		/* HELP-section
		 * Key contains a number value for which keyboard key was pressed
		 * 37 - right arrow
		 * 		change the variable left so that baddie moves right
		 * 38 - up arrow
		 * 		change the variable top so that baddie moves up
		 * 39 - left arrow
		 * 		change the variable left so that baddie moves left
		 * 40 - down arrow
		 * 		change the variable top so that baddie moves down
		 */
		
		// ------------------------------
		// EXTRA ASSIGNMENT
		// E. Handle so that baddie can't move outside of the windows edges
		// Tip: Use the getSize-example to find how you can get the window width and height


		// Assigns a new position for baddie
		baddie.style.left = left + "px";
		baddie.style.top = top + "px";
		console.log("Baddie moved to %i,%i", left, top);
	});
}());