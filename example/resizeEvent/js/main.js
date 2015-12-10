(function(){
    'use strict';

    var myContent = document.getElementById('content');

    myContent.innerHTML = '<h3>This is a template!</h3>';

    // add eventlistener to window
    window.addEventListener("resize", function() {
    	// print out the new size
    	myContent.innerHTML = "New size: " + window.innerWidth + "x" + window.innerHeight;
    }, false);

})();
