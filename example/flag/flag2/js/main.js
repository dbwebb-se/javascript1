/**
 * @preserve Made by dbwebb-staff, staff@dbwebb.se
 */
 (function(){
    'use strict';

    //var myContent = document.getElementById('content');
    var flagTarget = document.getElementById('flag');
    var flagLink = document.getElementById('draw-elfenbenskusten');

    //myContent.innerHTML = '<h3>This is a MEGA template!</h3>';

    function drawFlagElfenbenskusten()  {
        var flagElfenbenskusten = '<div class="flag elfenbenskusten"><div class="part1"></div><div class="part2"></div></div>';

        console.log("Drawing flag");
        flagTarget.innerHTML = flagElfenbenskusten;
    }


    flagLink.addEventListener("click", function() {
        console.log("Event for clicking link elfenbenskusten.");
        drawFlagElfenbenskusten();
    });


    console.log('Sandbox MEGA is ready!');
})();
