(function(){
    'use strict';

    var area = document.body,
    areaHeight = window.innerHeight,
    areaWidth = window.innerWidth,
    points = document.getElementById('points'),
    duck = document.createElement('img'),
    score = 0,
    timer = 1000;

    function addAndPrintScore() {
        score = score +1;
        points.innerHTML = score;
    }

    /**
     * Set the attributes for the duck
     **/
    duck.src='img/duck.png';
    duck.style.position ='absolute';
    duck.style.left = '0px';
    duck.style.top = '0px';
    duck.style.zIndex = 10000;
    duck.addEventListener('click', addAndPrintScore);

    /**
     * A function for displaying the duck in random positions
     **/
    function newDuck() {
        var newX = Math.floor(Math.random() * (areaWidth-duck.width)),
        newY = Math.floor(Math.random() * (areaHeight-duck.height));
        duck.style.left = newX+'px';
        duck.style.top = newY+'px';
        area.appendChild(duck);
    }

    /**
     * The function that triggers the game, uses an time interval in milliseconds
     **/
    function startGame() {
        window.setInterval(newDuck, timer);
    }

    /**
     * Start the game
     **/
    startGame();

    console.log('Sandbox is ready!');
})();
