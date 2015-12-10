/* Baddie5 - Assignment */
/*
You should start by uncommenting blocks of code or functions that are needed for the assignment
Follow the instructions given for each of these blocks
After that you can start doing the assigments
Assignment-sections start like this:
	// -------------------------------------------
	// ASSIGNMENT

In each section there will be INSTRUCTIONS on what to fill out
Each INSTRUCTION comment will start with "A.", like this:
	// A. This is an instruction
If it's a extra assignment, the instruction starts with "E.":
	// E. This is an instruction for an extra assingment
In most cases, you have to fill in rows which are left blank after the INSTRUCTION comment
	// A. Assign value to variable x

This could for example be filled out like this:
	// A. Assign value to variable x
	x = 42;
PLEASE note that the INSTRUCTION can be to fill a whole BLOCK of code, not just one row
In some cases you have to fill in some missing parts of code or change parts of it
It can look like this:
	if(false)
These should be filled out by replacing the boolean false with your code, for example:
	if(x > 10)
PLEASE follow any instructions given with the assignment
They will tell you what code needs to be replaced

Good luck!
*/

(function() {
	"use strict";
	// Variables
	var timeoutID, pxPerSec;
	// Booleans
	var villageCompleted, towerCompleted/*, fortressCompleted*/;
	// Elements
	var overlay, modal, map, hint, toggleHint, village, tower, fortress, baddie;

	// Init how far baddie goes per second
	pxPerSec = 200;

/* ---------------------------------------------------------------------
	FUNCTIONS
*/

	/**
	 * Creates a random number between max and min (inclusive)
	 * @param  {Number} min
	 * @param  {Number} max
	 * @return {Number} - the random number generated
	 */
// Uncomment this block comment to be able to use this function
/*
	var random = function(min, max) {
		console.log("Creating a random number between %i and %i", min, max);
		var number = Math.floor(Math.random() * (max-min+1) + min);
		return number;
	};
*/

	/**
	 * Calculates and sets a relative hight to the window size
	 * @param {HTMLElement} element - element to set hight of
	 * @param {Float} relativeSize - floating point number to specify relative size (half of window: 0.5)
	 */
	var setRelativeHeight = function(element, relativeSize) {
		//console.log("Setting a height realtive to window (%f) for %o", relativeSize, element);
		var height = relativeSize * map.offsetHeight;
		element.style.height = element.style.width = height + "px";
	};

	/**
	 * Move HTMLElement to a given pixel location, centered to that location
	 * @param  {HTMLElement} element - element to move
	 * @param  {Number} x - horizontal location
	 * @param  {Number} y - vertical location
	 * @return {Float} - the time it will take to move the element to it's location
	 */
	var moveElementTo = function(element, x, y) {
		console.log("Moving element %o to %i x %i", element, x, y);
		var a, b, c, t;

		// Sides: new location - current location
		//		And remove half of size to count for centering
		a = x - element.offsetLeft - (element.offsetWidth/2);
		b = y - element.offsetTop - (element.offsetHeight/2);
		console.log("Distance to position (x and y): %i x %i", a, b);

		// -------------------------------------------
		// ASSIGNMENT
		// Calculate the distance for baddie to move
		// Distance is the hypotenuse of a and b
		// Tip: use math-functions
		c = null;
		console.log("Hypot (actual distance): ", c);


		// Calculate how long it will take to move with the given speed
		t = c/pxPerSec;
		console.log("Time to get there: %f seconds", t);

		// Set the transition timer
		element.style.transitionDuration = t + "s";

		// Give baddie a relative position
		element.style.left = (x - element.offsetWidth/2) + "px";
		element.style.top = (y - element.offsetHeight/2) + "px";

		// Return the time as milliseconds
		return t * 1000;
	};

	/**
	 * Open a modal window and place it centered in the window
	 * @param  {Functions} fillModal
	 */
	var showModal = function(fillModal) {
		console.log("Opening modal window");
		var left, top;
// Uncomment this block comment to be able to use these variables
/*
		var x, y, w, h;
*/
		// Change the display so that it's not hidden and size can be set
		modal.style.display = "block";
		overlay.style.display = "block";

		// -------------------------------------------
		// ASSIGNMENT
		// Give modal a centered position on the screen
		// Get the size of modal window


		// Get the size of the window


		// Calculate where left, top should be to center modal


		// Place modal in it's spot
		modal.style.left = left + "px";
		modal.style.top = top + "px";

		//console.log("Running function to fill modal:", fillModal);
		// Run the given function to fill the modal with content
		fillModal();
	};

	/**
	 * Hide the modal window
	 */
	var closeModal = function() {
		console.log("Closing modal");
		// Remove all modal content
		modal.innerHTML = "";
		// Hide modal and overlay
		modal.style.display = "none";
		overlay.style.display = "none";
	};

	/**
	 * Resizes the elements set in the function to their given values
	 */
	var resizeElements = function() {
		//console.log("Resizing elementes to realtive sizes");
		setRelativeHeight(village, 0.25);
		setRelativeHeight(tower, 0.15);
		setRelativeHeight(fortress, 0.40);
		setRelativeHeight(baddie, 0.05);
	};


	/////////////////////////////////////////////////////////////////////////
	// CREATE THE ELEMENTS WE WANT TO SHOW AND ADD: MAP, LOCATIONS, MODAL //
	/////////////////////////////////////////////////////////////////////////

	/////////////////////////////////
	// Step 1: Create map elements //
	/////////////////////////////////
	map = document.createElement("div");
	map.id = "map";
	// Map styles
	map.style.height = "100vh";
	map.style.width = "100%";
	map.style.background = "#9C3";
	// Add map
	document.body.appendChild(map);

	console.log("Added ", map);

	hint = document.createElement("div");
	hint.id = "hint";
	// Hint styles
	hint.style.height = "0.5em";
	hint.style.width = "20%";

	// -------------------------------------------
	// ASSIGNMENT
	// Add your own styling to hint-area.


	// Hint positions
	hint.style.position = "absolute";
	hint.style.right = 0 + "px";
	hint.style.top = 0 + "px";
	// Add hint
	document.body.appendChild(hint);

	console.log("Added ", hint);

	// -------------------------------------------
	// ASSIGNMENT
	// Fill hint with informative text
	// Should include cheatkey-information as well as how you move around
	hint.innerHTML += "<p>Add your own text here.</p>";


	// Hide hint paragraphs
	var list = hint.getElementsByTagName("p");
	//console.log(list);
	for (var i = 0; i < list.length; i++) {
		list[i].hidden = true;
	}

	// Add hide/show arrow
	toggleHint = document.createElement("a");
	toggleHint.id = "showHint";
	toggleHint.innerHTML = "&#x25BC;";
	// Arrow styles
	toggleHint.style.position = "absolute";
	toggleHint.style.right = "0px";
	toggleHint.style.top = "0px";

	// Add arrow link
	hint.appendChild(toggleHint);


	///////////////////////////////////////
	// Step 2: Create overlay for modal //
	///////////////////////////////////////

	overlay = document.createElement("div");
	overlay.id = "overlay";
	// Index - place overlay over both map and baddie:
	overlay.zIndex = 2;
	// Add overlay
	document.body.appendChild(overlay);


	//////////////////////////////////
	// Step 3: Create modal window //
	//////////////////////////////////
	modal = document.createElement("div");
	modal.id = "modal";
	// Index - place modal over everything else with an index (higher):
	modal.zIndex = 3;
	// Add modal
	document.body.appendChild(modal);


	//////////////////////////////////////////
	// Step 4: Add some checkpoints to map //
	//////////////////////////////////////////
	// Village:
	village = document.createElement("div");
	village.id = "village";
	// Village styles
	// Background:
	village.style.backgroundImage = "url(img/village.png)";
	village.style.backgroundSize = "100%";
	// Position:
	village.style.position = "absolute";
	village.style.left = "10%";
	village.style.top = "10%";
	// Add village
	map.appendChild(village);

	// -------------------------------------------
	// ASSIGNMENT
	// Create a tower and fortress and place them out on the map just as with the village

	// Tower


	// Fortress



	///////////////////////////
	// Step 5: Add a baddie //
	///////////////////////////
	baddie = document.createElement("div");
	baddie.id = "baddie";
	// Baddie styles
	// Background:
	baddie.style.backgroundImage = "url(img/fox.png)";
	baddie.style.backgroundSize = "100%";
	// Position
	baddie.style.position = "absolute";
	baddie.style.left = "0px";
	baddie.style.top = "0px";
	// Index - place baddie on top of map
	baddie.style.zIndex = 1;
	// Add smooth transition - tip: read about CSS Transition
	baddie.style.transition = "all 1s linear";
	// Add baddie
	map.appendChild(baddie);

	///////////////////////////////////////////////////////////////////////////////////////////////////////////
	// CREATE SOME FUNCTIONS TO FILL MODAL BASED ON A: WHAT WAS CLICKED AND B: WHAT STATE THAT LOCATION HAS //
	///////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Set the variables for completion and change status of other location
	 */
	var completeVillage = function() {
		villageCompleted = true;
		tower.style.pointerEvents = "auto";
		console.log("Village is completed!");
	};

	// -------------------------------------------
	// ASSIGNMENT
	// Add functions similar to the above one for completing tower



	/**
	 * Fills modal window with content for if village was not completed yet
	 */
	var villageModal = function() {
		console.log("Creating modal for not completed village");
		var btnYes, btnNo, p;

		// -------------------------------------------
		// ASSIGNMENT
		// Create some describing text
		p = document.createElement("p");
		p.textContent = "Add your own text here.";
		modal.appendChild(p);

		// -------------------------------------------
		// ASSIGNMENT
		// Add a yes and no-button to the modal
		// Remeber to give it text
		btnYes = null;
		modal.appendChild(btnYes);

		btnNo = null;
		modal.appendChild(btnNo);


		// Event listeners for buttons added
		btnYes.addEventListener("click", function() {
			// Complete village
			completeVillage();
			// Close current modal and open modal with completed village view
			closeModal();
			showModal(villageCompletedModal);
		});

		btnNo.addEventListener("click", function() {
			closeModal();
		});
	};
	/**
	 * Fills modal window with content for if village was completed
	 */
	var villageCompletedModal = function() {
		console.log("Creating modal for completed village");
		var p;

		// -------------------------------------------
		// ASSIGNMENT
		// Add some text for when village was completed
		p = document.createElement("p");
		p.textContent = "Add your own text here.";
		modal.appendChild(p);

	};

	/**
	 * Fills modal for if tower was not completed
	 */
	var towerModal = function() {
		console.log("Creating modal for not completed tower");
		var p, input, output, number, guesses, span;

		// -------------------------------------------
		// ASSIGNMENT
		// Add some describing text
		p = document.createElement("p");
		p.textContent = "Add your own text here.";
		modal.appendChild(p);


		p = document.createElement("p");
		p.textContent += "I'm thinking of a number between 1 and 10. Guess which one.";
		modal.appendChild(p);

		// -------------------------------------------
		// ASSIGNMENT
		// Add input field - create input element
		input = null;
		modal.appendChild(input);


		// Add output field
		output = document.createElement("textarea");
		output.setAttribute("disabled", "disabled");
		output.setAttribute("rows", 10);
		modal.appendChild(output);

		// -------------------------------------------
		// ASSIGNMENT
		// Get a random number that will be the correct answer - use the given function
		number = null;
		console.log("The number is: ", number);


		// Initiate number of gusses
		guesses = 0;

		// Add text and element for storing number of guesses
		p = document.createElement("p");
		p.textContent = "Number of guesses: ";
		// Span with ID added for easy access to change later
		span = document.createElement("span");
		span.textContent = guesses;
		p.appendChild(span);
		modal.appendChild(p);

		// Event listener for input on key down
		input.addEventListener("keydown", function(event) {
			var key;

			key = event.keyCode || event.which;
			console.log(key + " was pressed");

			// Do stuff if key was the enter-key
			if (key == 13) {
				console.log("Input is of type: ", typeof input.value);
				// A guess was made so increment number
				guesses++;
				// Print out number in span
				span.textContent = guesses;

				// -------------------------------------------
				// ASSIGNMENT
				// Check if the number was the right one and show what happened
				var condition = null;
				if (condition) {
					console.log("You won!");
					// Add some output to textarea - either first or last in textarea

					// Disable input so no more guesses can be made
					// Tip: use setAttribute

					// Complete location - use function to complete it


				} else {
					console.log("Try again...");
					// Print out if the guess was higher or lower than the number - either first or last in textarea

				}
			}

			// Since there is another event listener for keydown on the whole window stopPropagation is needed
			//		to stop that event from triggering aswell (it would have bubbled up)
			event.stopPropagation();
		});
	};
	/**
	 * Fill modal with content for if tower was completed
	 */
	var towerCompletedModal = function() {
		console.log("Creating modal for completed tower");
		var p;

		// -------------------------------------------
		// ASSIGNMENT
		// Add some text for when tower is completed
		p = document.createElement("p");
		p.textContent = "Add some text here.";
		modal.appendChild(p);
	};


	/////////////////////////////////////////////////
	// CREATE SOME ONCLICK EVENTS FOR CHECKPOINTS //
	/////////////////////////////////////////////////

	// Hide/show arrow for hints
	toggleHint.addEventListener("click", function() {
		var list, i;
		// If id is showHint - show them
		if (toggleHint.id == "showHint") {
			console.log("Showing hints");

			// Get all paragraphs
			list = hint.getElementsByTagName("p");
			//console.log(list);
			for (i = 0; i < list.length; i++) {
				// Unhide them
				list[i].hidden = false;
			}
			// Make hint take up as much height as is needed
			hint.style.height = "auto";

			// Hints shown, now change arrow and id
			toggleHint.id = "hideHint";
			toggleHint.innerHTML = "&#x25B2;";
		} else {
			console.log("Hiding hints");

			// Get all paragraphs
			list = hint.getElementsByTagName("p");
			//console.log(list);
			for (i = 0; i < list.length; i++) {
				// Hide them
				list[i].hidden = true;
			}
			// Give hints a fixed height so that some of it is still shown
			hint.style.height = "0.5em";

			// Hints hidden, now change arrow and id
			toggleHint.id = "showHint";
			toggleHint.innerHTML = "&#x25BC;";
		}
	});

	// Village
	village.addEventListener("click", function(event) {
		var x, y, t;

		// Firefox events do not have x and y
		x = event.x || event.clientX;
		y = event.y || event.clientY;

		// Start moving baddie to where it was clicked
		t = moveElementTo(baddie, x, y);
		// Clear any previous timers so that we don't get a new one for each click - many modals!
		window.clearTimeout(timeoutID);
		// Start timer for when modal is to open
		timeoutID = window.setTimeout(function() {
			// Show modal window
			showModal(villageCompleted ? villageCompletedModal : villageModal);
		}, t);
	});

	// Tower
	tower.addEventListener("click", function(event) {
		var x, y, t;

		// Firefox events do not have x and y
		x = event.x || event.clientX;
		y = event.y || event.clientY;

		// Start moving baddie to where it was clicked
		t = moveElementTo(baddie, x, y);
		// Clear any previous timers so that we don't get a new one for each click - many modals!
		window.clearTimeout(timeoutID);
		// Start timer for when modal is to open
		timeoutID = window.setTimeout(function() {
			// Show modal window
			showModal(towerCompleted ? towerCompletedModal : towerModal);
		}, t);
	});

	// Fortress
	fortress.addEventListener("click", function(event) {
		var x, y, t;

		// Firefox events do not have x and y
		x = event.x || event.clientX;
		y = event.y || event.clientY;
		// Start moving baddie to where it was clicked
		t = moveElementTo(baddie, x, y);
		// Clear any previous timers so that we don't get a new one for each click - many modals!
		window.clearTimeout(timeoutID);
		// Start timer for when modal is to open
		timeoutID = window.setTimeout(function() {
			// Show modal window
			showModal();
		}, t);
	});

	// Overlay
	overlay.addEventListener("click", function() {
		// When clicked - close
		closeModal();
	});

	// Resize
	window.addEventListener("resize", function() {
		console.log("Resizes window");
		resizeElements();
	});

	////////////////////
	// Add cheatkeys //
	////////////////////
	window.addEventListener("keydown", function(event) {
		var key;

		//console.log(event);

		key = event.keyCode || event.which;
		console.log(key + " was pressed");

		switch (key) {
			case 49:
				// 1 - complete village
				completeVillage();
				break;
			case 50:
				// 2 - complete village & tower
				completeVillage();
				// -------------------------------------------
				// ASSIGNMENT
				// Make sure to call the function you declared for completing the tower

				break;
			case 51:
				// 3 - complete village & tower & fortress
				break;
			default:
				return true;
		}
		event.preventDefault();
	});

/*
	INIT
 */
	resizeElements();

}());
