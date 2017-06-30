(function () {
    'use strict';

    var myContent = document.getElementById('content');

    myContent.innerHTML = '<h3>This is a template!</h3>';

    // Get window sizes
    var wWidth = window.innerWidth;
    var wHeight = window.innerHeight;

    // 10 divs on width and height, calculate sizes for each div
    var divWidth = wWidth/10;
    var divHeight = wHeight/10;



    /**
     * Give a random number between min and max.
     * @param  min
     * @param  max
     * @return integer
     */
    function random(min, max) {
        return Math.floor((Math.random() * max) + min);
    }



    // loop for 10 rows
    for (var i = 0; i<10; i++) {
        var posY = i * divHeight;

        // loop for 10 divs per row
        for (var j = 0; j<10; j++) {
            var posX = j * divWidth;

            // create the div
            var newDiv = document.createElement("div");

            // position it on top of everything else
            newDiv.style.zindex = 1;
            // give it an absolute positon on the screen
            newDiv.style.position = "absolute";
            // position ot
            newDiv.style.top = posY + "px";
            newDiv.style.left = posX + "px";
            // size it
            newDiv.style.width = divWidth + "px";
            newDiv.style.height = divHeight + "px";
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
})();
