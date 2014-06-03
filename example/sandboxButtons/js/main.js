(function(){
    'use strict';

    //var myContent = document.getElementById('content');

    //myContent.innerHTML = '<h3>This is a template!</h3>';
    //myContent.innerHTML += '<button onclick="buttonone()">Show</button>'
    //myContent.innerHTML += '<button onclick="buttontwo()">Hide</button>'

    //myContent.innerHTML += '<p id="hello" class=hide>Hello world</p>'

    var b1 = document.getElementById("button1");
    var b2 = document.getElementById("button2");

    b1.addEventListener("click", function() {
    	document.getElementById("hello").className = "show style";
    }, false);
    b2.addEventListener("click", function() {
    	document.getElementById("hello").className = "hide";
    }, false);

})();
