(function(){
    'use strict';

    var b1 = document.getElementById("button1");
    var b2 = document.getElementById("button2");

    b1.addEventListener("click", function() {
    	document.getElementById("hello").className = "show style";
    });
    b2.addEventListener("click", function() {
    	document.getElementById("hello").className = "hide";
    });

})();
