/**
 * @fileOverview A lawnmover which moves a lawn.
 *
 * @module
 *
 * @preserve Made by mos@dbwebb.se
 *
 */
window.lawnMower = (function(){
    'use strict';

    /**
     * A module for a lawn mover.
     *
     * @module lawnMover
     */

    var windowWidth     = window.innerWidth,
        windowHeight    = window.innerHeight,
        lawnArea        = document.getElementById("lawnArea"),
        lawnMower       = document.getElementById("lawnMower"),
        lawnMowerAudio  = document.getElementById("lawnMowerAudio"),
        lawnMowerWidth  = lawnMower.offsetWidth,
        lawnMowerHeight = lawnMower.offsetHeight,
        lawnMowerPosX   = 0,
        lawnMowerPosY   = 0,
        lawnMaxX        = 0,
        lawnMaxY        = 0,
        lawnMowerSpeed  = 30,
        lawnMowerDirection = 0, // degrees
        lawnMowerGear   = 0,
        lawnMowerSound  = true,
        lawnMowerEngine = false,
        lawnMowerRunState = false,
        lastGameTick    = null,
        td              = null,
        gameLoopId      = null,
        lawnLevel       = {
            "level1":       0,
            "level2":       0,
            "doneLevel1":   0,
            "doneLlevel2":  0
        };

    //console.log("Browser area are width x height: " + windowWidth + " x " + windowHeight);



    /**
     * Create a lawn id for a particular position on the lawn.
     *
     * @param {int} x - position x of lawn id.
     * @param {int} y - position y of lawn id.
     */
    var createLawnId = function (x, y) {
        if (x > lawnMaxX) {
            lawnMaxX = x;
        }

        if (y > lawnMaxY) {
            lawnMaxY = y;
        }

        return "pos" + x + "x" + y;
    };



    /**
     * Get a lawn id from any position
     */
    var getLawnId = function (x, y) {
        var x1 = 0,
            y1 = 0;

        if (x !== 0) {
            x1 = Math.floor(x / 10) * 10;
        }

        if (y !== 0) {
            y1 = Math.floor(y / 10) * 10;
        }

        if (x1 > lawnMaxX) {
            x1 = lawnMaxX;
        }

        if (y1 > lawnMaxY) {
            y1 = lawnMaxY;
        }

        return "pos" + x1 + "x" + y1;
    };



    /**
     * Check what item the mower is upon and take action.
     */
    var collisionDetection = function (id) {
        var element = document.getElementById(id);

        if (element.classList.contains("border")) {
            return handlerBorderDetected();
        }
        else if (element.classList.contains("level2")) {
            element.classList.remove("level2");
            lawnLevel.level2--;
            return true;
        }
        else if (element.classList.contains("level1")) {
            element.classList.remove("level1");
            lawnLevel.level1--;
            return true;
        }

        return true;
    };




    /**
     * Check what item the mower is upon and take action.
     */
    var handlerBorderDetected = function () {

        console.log("Border detected");

        return false;
    };



    /**
     * Check what item the mower is upon and take action.
     */
    var collisionDetectionMower = function (x, y) {
        var id1 = null,
            id2 = null,
            id3 = null,
            id4 = null,
            test1 = null,
            test2 = null,
            test3 = null,
            test4 = null;

        x = Math.round(x + lawnMowerWidth / 2);
        y = Math.round(y + lawnMowerHeight / 2);
        id1 = getLawnId(x-10, y);
        id2 = getLawnId(x, y-10);
        id3 = getLawnId(x+10, y);
        id4 = getLawnId(x, y+10);
        test1 = collisionDetection(id1);
        test2 = collisionDetection(id2);
        test3 = collisionDetection(id3);
        test4 = collisionDetection(id4);

        return test1 && test2 && test3 && test4;
    };



    /**
     * Place out the border as a rectangle relative mower position.
     */
    var drawBorderRectangle = function (startX, startY, endX, endY) {
        var x = null,
            y = null,
            element = null,
            id = null,
            x1 = null,
            x2 = null,
            y1 = null,
            y2 = null;

        console.log("Drawing a rectangle border.");

        x1 = Math.floor(lawnMowerPosX + lawnMowerWidth / 2 + startX * 10);
        y1 = Math.floor(lawnMowerPosY + lawnMowerHeight / 2 + startY * 10);

        x2 = x1 + endX * 10;
        y2 = y1 + endY * 10;

        for (x = x1; x <= x2; x += 10) {

            id = getLawnId(x, y1);
            element = document.getElementById(id);
            element.classList.add("border");

            id = getLawnId(x, y2);
            element = document.getElementById(id);
            element.classList.add("border");
        }

        for (y = y1; y <= y2; y += 10) {

            id = getLawnId(x1, y);
            element = document.getElementById(id);
            element.classList.add("border");

            id = getLawnId(x2, y);
            element = document.getElementById(id);
            element.classList.add("border");
        }

        console.log("Done drawing border.");
    };



    /**
     * Place out the grassplants to make a lawn.
     */
    var initLawn = function () {
        var x = null,
            y = null,
            element = null,
            i = 0;

        console.log("Planting grass plants on the lawn... please wait...");

        for (x = 0; x <= windowWidth - 10; x+=10) {
            for (y = 0; y <= windowHeight - 10; y+=10) {
                element = document.createElement("div");
                lawnLevel.level1++;
                lawnLevel.level2++;
                element.classList.add("grass", "level1", "level2");
                element.id  = createLawnId(x, y);
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
     * Set the gear 0 (neutral), back=-1 or forward=1.
     */
    var setGear = function (gear) {
        console.log("Gear is: " + lawnMowerGear);

        if (gear === -1 || gear === 0 || gear === 1) {
            lawnMowerGear = gear;
            console.log("Setting gear to:" + lawnMowerGear);
            console.log("Available gears are: 0 (neutral), back=-1 or forward=1");
        }

        return lawnMowerGear;
    };



    /**
     * Start the sound (true), or shut it off (false). The sound can only be on when the engine is started.
     */
    var setSound = function (level) {

        level = level || !lawnMowerSound;

        console.log("Sound is: " + lawnMowerSound);

        if (level === false) {
            // Shut off sound
            lawnMowerSound = level;
            console.log("Pausing sound.");
            lawnMowerAudio.pause();
        }
        //else if (level === true && lawnMowerEngine === true && lawnMowerSound === false) {
        else if (level === true && lawnMowerEngine === true) {
            // Start sound
            lawnMowerSound = level;
            console.log("Playing sound.");
            lawnMowerAudio.play();
        }

        console.log("Setting sound to:" + lawnMowerSound);

        return lawnMowerSound;
    };



    /**
     * Start engine.
     */
    var startEngine = function () {
        lawnMowerEngine = true;
        setGear(0);
        setSound(true);
        console.log("Started engine, brumm, brumm");
    };



    /**
     * Start engine.
     */
    var stopEngine = function () {
        lawnMowerEngine = false;
        setGear(0);
        setSound(false);
        console.log("Stopped engine. The silence is golden.");
    };



    /**
     * Move forward or backward where direction is 1 or -1
     */
    var moveMower = function (td, direction) {
        var radians = lawnMowerDirection * Math.PI / 180,
            lookaheadX = 0,
            lookaheadY = 0;

        if (!lawnMowerEngine) {
            console.log("Can not move, the engine is not started.");
            return false;
        }

        lookaheadX = lawnMowerPosX + direction * lawnMowerSpeed * Math.cos(radians) * td;
        lookaheadY = lawnMowerPosY + direction * lawnMowerSpeed * Math.sin(radians) * td;

        if (!collisionDetectionMower(lookaheadX, lookaheadY)) {
            console.log("Can not move in direction " + direction + ". Setting gear to neutral.");
            setGear(0);
            return false;
        }

        lawnMowerPosX = lookaheadX;
        lawnMowerPosY = lookaheadY;

        lawnMowerMove();

        return true;
    };



    /**
     * Move forward.
     */
    var moveForward = function (td) {
        return moveMower(td, 1);
    };



    /**
     * Move backward.
     */
    var moveBackward = function (td) {
        return moveMower(td, -1);
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
        console.log("Sound is on: " + lawnMowerSound);
        console.log("Lawn level is: ");
        console.log(lawnLevel);
    };



    /**
     * Make the lawn mower go by itself.
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
            td = null;
            lastGameTick = null;
            console.log("Engine/Runstate was stopped, gameloop is cancelled");
            return;
        }

        gameLoopId = window.requestAnimationFrame(gameLoop);
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




    /**
     * Click to make lawn mower go in a specific direction.
     */
    document.addEventListener("keydown", function (event) {
        var key;

        // Get which key was pressed
        key = event.keyCode || event.which;
        console.log("Pressed key: " + key);

        switch (key) {
            case 49: // 1
                console.log("Toggle start and stop");
                if (lawnMowerEngine) {
                    stopEngine();
                } else {
                    startEngine();
                }
            break;

            case 50: // 2
                console.log("Toggle run and paus");
                lawnMowerRun();
            break;

            case 51: // 3
                console.log("Gear forward");
                setGear(1);
            break;

            case 52: // 4
                console.log("Gear neutral");
                setGear(0);
            break;

            case 53: // 5
                console.log("Gear back");
                setGear(-1);
            break;

            case 54: // 6
                console.log("Display status");
                lawnMowerStatus();
            break;

            case 48: // 0
                console.log("Toggle sound");
                setSound();
            break;

            case 72: // h
                console.log("Display helptext");
                help();
            break;

            case 37: // Left arrow
            case 65: // a
                console.log("Turn left");
                setDirection(lawnMowerDirection - 15);
            break;

            case 39: // Right arrow
            case 68: // d
                console.log("Turn right");
                setDirection(lawnMowerDirection + 15);
            break;

            case 38: // Up  arrow
                console.log("Increase throttle");
                setSpeed(lawnMowerSpeed + 5);
            break;

            case 40: // Down arrow
                console.log("Decrease throttle");
                setSpeed(lawnMowerSpeed - 5);
            break;
        }
    });



    // längd gått
    // tid passerad
    // procent klippt
    // gräns
    // gränsavkännare


    /**
     * The game loop.
     */
    var help = function () {
        console.log(" ");
        console.log("HELP ON USAGE");
        console.log("The lawn mower object is stored as:");
        console.log("- window.lanMover");
        console.log("- m (shortcut to window.lanMover)");
        console.log(" ");
        console.log("Functions to use on the object:");
        console.log(" lawnMover.init()     // Inits the lawnmover with the environment.");
        console.log(" lawnMover.place()    // Places the lawnMover at its start position.");
        console.log(" lawnMover.start()    // (1) Start the engine.");
        console.log(" lawnMover.stop()     // (1) Stop the engine.");
        console.log(" lawnMover.run()      // (2) Move and cut the grass, or paus if already running.");
        console.log(" lawnMover.gear(val)  // (3, 4, 5) Change gear. val is integer -1, 0, 1");
        console.log(" lawnMover.speed(val) // (arrow up, arrow down) Change speed). val is integer -1, 0, 1");
        console.log(" lawnMover.status()   // (6) Show the current status.");
        console.log(" lawnMover.sound(val) // (0) Use sound by setting val to true or false.");
        console.log(" lawnMover.help()     // Display this helptext.");
        console.log(" ");
        console.log("Mouse and keyboard connections:");
        console.log(" left-click mouse  // Change direction.");
    };



    /**
     * All done, return object exposing functions and variables to the outside world.
     */
    console.log("Lawn mower is ready!");
    console.log(help());

    this.exports = {
        "element":      lawnMower,
        "speed":        setSpeed,
        //"direction":    setDirection,
        "init":         initLawn,
        "place":        placeLawnMower,
        "start":        startEngine,
        "stop":         stopEngine,
        //"forward":      moveForward,
        //"back":         moveBackward,
        "run":          lawnMowerRun,
        "gear":         setGear,
        "sound":        setSound,
        "status":       lawnMowerStatus,
        "border":       drawBorderRectangle,
        "help":         help
    };

    return this.exports;

})();



/**
 * Now you can use the lawnmover by callings its functions from the console.
 */
//window.lawnMower.init();
//window.lawnMower.place();

var m = window.lawnMower;

m.init();
m.place();
//m.start();
//m.sound(false);
//m.run();
m.border(-20, -20, 40, 40);

//lawnMower.run();
