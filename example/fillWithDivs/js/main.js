(function(){
    'use strict';

    var myContent = document.getElementById('content');

    myContent.innerHTML = '<h3>This is a template!</h3>';

    // Get window sizes
    var w_width = window.innerWidth;
    var w_height = window.innerHeight;

    // 10 divs on width and height, calculate sizes for each div
    var div_width = w_width/10;
    var div_height = w_height/10;


    // loop for 10 rows
    for (var i = 0; i<10; i++) {
    	var pos_y = i * div_height;
    	// loop for 10 divs per row
    	for (var j = 0; j<10; j++) {
    		var pos_x = j * div_width;

    		// create the div
        	var newDiv = document.createElement("div");

        	// position it on top of everything else
    		newDiv.style.zindex = 1;
    		// give it an absolute positon on the screen
    		newDiv.style.position = "absolute";
    		// position ot
    		newDiv.style.top = pos_y + "px";
    		newDiv.style.left = pos_x + "px";
    		// size it
    		newDiv.style.width = div_width + "px";
    		newDiv.style.height = div_height + "px";
    		// make it seethrough
    		newDiv.style.opacity = 0.5;

    		// create a random color
    		var r = random(0, 255);
    		var g = random(0, 255);
    		var b = random(0, 255);
    		// set rgb()-background color
    		newDiv.style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";

    		// finally - append it to the body
    		document.body.appendChild(newDiv);
    	}
    }


    /* Random function */
    function random(min, max) {
    	return Math.floor((Math.random() * max) + min);
    }

})();
