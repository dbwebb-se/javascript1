(function(){
    'use strict';

    var area = document.body,
    areaHeight = window.innerHeight,
    areaWidth = window.innerWidth,
    points = document.getElementById('points'),
    duck = new Image(),
    score = 0,
    timer = 1000;

    /**
     * Set the attributes for the duck
     **/
    duck.src='img/duck.png',
    duck.style.position ='absolute',
    duck.style.left = '0px',
    duck.style.top = '0px',
    duck.style.zIndex = 10000,
    duck.addEventListener('click', function() {
        score++;
        points.innerHTML = score;
    });

    /**
     * A function for displaying the duck
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
        var start = setInterval(function() {
            newDuck();
        }, timer);        
    }

    /**
     * Start the game
     **/
    startGame();

    console.log('Sandbox is ready!');
})();