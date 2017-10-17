/**
 * Pushing the ball.
 */
window.onload = function () {
    "use strict";

    var html,
        element = document.getElementById('flash'),
        myBall = {};

    html  = "<p>Click inside this area to move the ball.</p>";
    html += "<div id='ball' class='ball'></div>";
    element.innerHTML = html;

    myBall.HTMLelement = document.getElementById('ball');
    myBall.image = "http://dbwebb.se/img/black_ball_64_64.png";
    myBall.position = {x: 10, y: 10};
    myBall.dimension = {w: 64, h: 64};



    /**
     * Print details of ball position.
     */
    myBall.print = function () {
        console.log("Ball position is: " + this.position.x + "x" + this.position.y);
    };

    myBall.print();


    /**
     * Set up the css-details for the ball.
     */
    myBall.init = function () {
        console.log("init");
        this.HTMLelement.style.position  = "absolute";
        this.HTMLelement.style.backgroundImage = "url(" + this.image + ")";
        this.HTMLelement.style.left   = this.position.x + "px";
        this.HTMLelement.style.top    = this.position.y + "px";
        this.HTMLelement.style.width  = this.dimension.w + "px";
        this.HTMLelement.style.height = this.dimension.h + "px";
        this.HTMLelement.style.transition = "left 0.5s, top 0.5s";
        this.draw();
    };



    /**
     * Draw the ball.
     */
    myBall.draw = function () {
        console.log("draw");
        this.HTMLelement.style.left = this.position.x + "px";
        this.HTMLelement.style.top = this.position.y + "px";
        this.print();
    };



    /**
     * Move the ball.
     */
    myBall.move = function (x, y) {
        console.log("move");
        this.position.x = x;
        this.position.y = y;
        this.draw();
    };



    /**
     * Add event listener for mouse clicks.
     */
    element.addEventListener('click', function (event) {
        console.log('Clicked on (client): ' + event.clientX + ' x ' + event.clientY);
        console.log('Clicked on (screen): ' + event.screenX + ' x ' + event.screenY);
        console.log('Clicked on (page): ' + event.pageX + ' x ' + event.pageY);
        myBall.move(event.pageX, event.pageY);
    });



    myBall.init();
    console.log('Ready');
};
