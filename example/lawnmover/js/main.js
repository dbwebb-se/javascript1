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
        lawnMowerHeight = lawnMower.offsetHeight,
        lawnMowerPosX   = 0,
        lawnMowerPosY   = 0,
        lawnMowerSpeed  = 30,
        lawnMowerDirection = 0, // degrees
        lawnMowerGear   = 0, 
        lawnMowerEngine = false,
        lawnMowerRunState = false,
        lastGameTick    = null,
        td              = null,
        gameLoopId      = null;

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

        // Provide default values to missing arguments
        x = (x === undefined) ? windowWidth / 2 : x;
        y = (y === undefined) ? windowHeight / 2 : y;

        console.log("Placing the lawn mower with its center at position x, y: " + x + ", " + y);

        // Respect the size of the lawn mower when placing it
        lawnMowerPosX = Math.round(x - lawnMowerWidth / 2);
        lawnMowerPosY = Math.round(y - lawnMowerHeight / 2);

        console.log("Lawn mower has dimensions of width x height: " + lawnMowerWidth + " x " + lawnMowerHeight);
        console.log("Placing the lawn mower at left, top: " + lawnMowerPosX + ", " + lawnMowerPosY);
        
        lawnMowerMove(lawnMowerPosX, lawnMowerPosY);

        console.log("Done.");
    };



    /**
     * Set speed for lawn mower, if argument is sent. Return current speed.
     */
    var setSpeed = function (speed) {
        if (speed >= 1 && speed <= 100) {
            lawnMowerSpeed = speed;
            console.log("Set speed to " + lawnMowerSpeed);
        }

        console.log("Current speed is " + lawnMowerSpeed);
        return lawnMowerSpeed;
    };



    /**
     * Set direction for lawn mower, where its front points, if argument is present. 
     * Return current value.
     */
    var setDirection = function (direction) {
        if (direction >= -360 && direction <= 360) {
            lawnMowerDirection = direction;
            lawnMower.style.transform = "rotate(" + lawnMowerDirection + "deg)";
            console.log("Set direction to " + lawnMowerDirection);
        }

        console.log("Current direction is " + lawnMowerDirection);
        return lawnMowerDirection;
    };



    /**
     * Set the gear 0, back=-1 or forward=1. 
     */
    var setGear = function (gear) {
        console.log("Gear is:" + lawnMowerGear);

        if (gear === -1 || gear === 0 || gear === 1) {
            lawnMowerGear = gear;
            console.log("Setting gear to:" + lawnMowerGear);
        }

        return lawnMowerGear;
    };



    /**
     * Start engine. 
     */
    var startEngine = function () {
        lawnMowerEngine = true;
        setGear(0);
        console.log("Started engine, brumm, brumm");
    };



    /**
     * Start engine. 
     */
    var stopEngine = function () {
        lawnMowerEngine = false;
        setGear(0);
        console.log("Stopped engine");
    };



    /**
     * Move forward. 
     */
    var moveForward = function (td) {
        var radians = lawnMowerDirection * Math.PI / 180;

        if (!lawnMowerEngine) {
            console.log("Can not move, the engine is not started.");
            return;
        }

        lawnMowerPosX += lawnMowerSpeed * Math.cos(radians) * td;
        lawnMowerPosY += lawnMowerSpeed * Math.sin(radians) * td;

        lawnMowerMove(lawnMowerPosX, lawnMowerPosY);

        //console.log("Moved forward from " + x + ", " + y + " to " + lawnMowerPosX + ", " + lawnMowerPosY);
    };



    /**
     * Move backward. 
     */
    var moveBackward = function (td) {
        var radians = lawnMowerDirection * Math.PI / 180;

        if (!lawnMowerEngine) {
            console.log("Can not move, the engine is not started.");
            return;
        }
        
        lawnMowerPosX -= lawnMowerSpeed * Math.cos(radians) * td;
        lawnMowerPosY -= lawnMowerSpeed * Math.sin(radians) * td;

        lawnMowerMove(lawnMowerPosX, lawnMowerPosY);

        //console.log("Moved backward from " + x + ", " + y + " to " + lawnMowerPosX + ", " + lawnMowerPosY);
    };



    /**
     * Move lawn mower to current position. 
     */
    var lawnMowerMove = function () {
        lawnMower.style.left = lawnMowerPosX + "px";
        lawnMower.style.top  = lawnMowerPosY + "px";
    };



    /**
     * Current state of the lawn mower. 
     */
    var lawnMowerStatus = function () {
        console.log("Engine is on: " + lawnMowerEngine);
        console.log("Run state is on: " + lawnMowerRunState);
        console.log("Speed is: " + lawnMowerSpeed);
        console.log("Direction is: " + lawnMowerDirection);
        console.log("Position is x,y: " + lawnMowerPosX + ", " + lawnMowerPosX);
        console.log("Gear is: " + lawnMowerGear);
    };



    /**
     * Make thw lawn mower go by itself. 
     */
    var lawnMowerRun = function (run) {
        if (!lawnMowerEngine) {
            console.log("Can not run, the engine is not started.");
            return;
        }
        
        lawnMowerRunState = (run === undefined) ? !lawnMowerRunState : run;

        console.log("Run state is " + lawnMowerRunState);

        if (lawnMowerRunState) {
            gameLoopId = window.requestAnimationFrame(gameLoop);
            console.log("Gameloop started");
        } else {
            console.log("Stopping runstate");
        }
    };



    /**
     * The game loop. 
     */
    var gameLoop = function () {
        var now = Date.now();
        td = (now - (lastGameTick || now)) / 1000;
        lastGameTick = now;

        if (lawnMowerEngine === false || lawnMowerRunState === false) {
            window.cancelAnimationFrame(gameLoopId);
            console.log("Engine/Runstate was stopped, gameloop is cancelled");
            return;
        }

        window.requestAnimationFrame(gameLoop);
        update(td);
    };



    /**
     * Update one game tick. 
     */
    var update = function (td) {

        if (lawnMowerGear === 1) {
            moveForward(td);
        } else if (lawnMowerGear === -1) {
            moveBackward(td);
        }
    };



    /**
     * Click to make lawn mower go in a specific direction. 
     */
    lawnArea.addEventListener("click", function (event) {
        var theta;

        console.log("Clicked with the mouse at x,y: " + event.clientX + ", " + event.clientY);
        theta = Math.atan2(event.clientY - lawnMowerPosY, event.clientX - lawnMowerPosX);
        setDirection(theta * 180 / Math.PI);
    });


    // keydown
    // klippa gräset
    // längd gått
    // tid passerad
    // procent klippt
    // gräns
    // gränsavkännare


    /**
     * All done, return object exposing functions and variables to the outside world.
     */ 
    console.log('Lawn mower is ready!');

    return {
        "element":      lawnMower,
        "speed":        setSpeed,
        "direction":    setDirection,
        "init":         initLawn,
        "place":        placeLawnMower,
        "start":        startEngine,
        "stop":         stopEngine,
        "forward":      moveForward,
        "back":         moveBackward,
        "run":          lawnMowerRun,
        "gear":         setGear,
        "status":       lawnMowerStatus
    };
})();



/**
 * Now you can use the lawnmover by callings its functions from the console.
 */
//window.lawnMower.init();
//window.lawnMower.place();

var m = window.lawnMower;

m.init();
m.place();
m.start();
//lawnMower.run();

