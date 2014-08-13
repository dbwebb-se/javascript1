/** 
 * @preserve Made by mos@dbwebb.se
 *
 * Using code from example programs:
 * - example/getSize
 * - example/fillWithDivs
 * - example on classList?
 */
window.lawnMower = (function(){
    'use strict';

    var windowWidth     = window.innerWidth,
        windowHeight    = window.innerHeight,
        lawnArea        = document.getElementById("lawnArea"),
        lawnMower       = document.getElementById("lawnMower"),
        lawnMowerWidth  = lawnMower.offsetWidth,
        lawnMowerHeight = lawnMower.offsetHeight;

    console.log("Browser area are width x height: " + windowWidth + " x " + windowHeight);



    /**
     * Place out the grassplants to make a lawn.
     */
    var initLawn = function () {
        var x = null,
            y = null,
            element = null,
            i = 0;

        console.log("Planting grass plants on the lawn... please wait...");

        for (x = 0; x <= windowWidth; x+=10) {
            for (y = 0; y <= windowHeight; y+=10) {
                element = document.createElement("div");
                element.classList.add("grass");
                element.style.top  = y + "px";
                element.style.left = x + "px";
                lawnArea.appendChild(element);
                i++;
            }
        }
        console.log("Done. Inited lawn by placing " + i + " grass plants.");
    };



    /**
     * Move - or place out - the grasslawner.
     */
    var placeLawnMower = function (x, y) {
        var posX = 0,
            posY = 0;

        // Provide default values to missing arguments
        x = (x === undefined) ? windowWidth / 2 : x;
        y = (y === undefined) ? windowHeight / 2 : y;

        console.log("Placing the lawn mower with its center at position x, y: " + x + ", " + y);

        // Respect the size of the lawn mower when placing it
        posX = Math.round(x - lawnMowerWidth / 2);
        posY = Math.round(y - lawnMowerHeight / 2);

        console.log("Lawn mower has dimensions of width x height: " + lawnMowerWidth + " x " + lawnMowerHeight);
        console.log("Placing the lawn mower at left, top: " + posX + ", " + posY);

        lawnMower.style.left = posX + "px";
        lawnMower.style.top  = posY + "px";

        console.log("Done.")
    };



    /**
     * All done, return object exposing functions and variables to the outside world.
     */ 
    console.log('Lawn mover is ready!');

    return {
        "element":  lawnMower,
        "init":     initLawn,
        "place":    placeLawnMower
    }
})();



/**
 * Now you can use the lawnmover by callings its functions from the console.
 */
//window.lawnMower.init();
//window.lawnMower.place();

lawnMower.init();
lawnMower.place();


