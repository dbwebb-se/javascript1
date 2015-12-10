(function(){
	'use strict';
	var baddie, container, step, left, top, anim;
	baddie = document.getElementById('baddie');
	container = document.getElementById('content');
	step = 50;
	left = baddie.offsetLeft;
  	top  = baddie.offsetTop;
  	baddie.style.left = '0px';
  	baddie.style.top = '0px';
  	console.log(container.clientWidth);

  	anim = function(moveLeft, moveTop) {
  		if (parseInt(baddie.style.left) + moveLeft > (container.clientWidth - baddie.clientWidth) || parseInt(baddie.style.left) + moveLeft < 0){
  			console.log('Out of bounds!');
  		}
  		else {
  			baddie.style.left = (baddie.offsetLeft + moveLeft) + 'px';
  		}
  		if (parseInt(baddie.style.top) + moveTop > container.clientHeight - baddie.clientHeight || parseInt(baddie.style.top) + moveTop < 0){
  			console.log('Out of bounds!');
  		}
  		else {
  			baddie.style.top  = (baddie.offsetTop + moveTop) + 'px';
  		}
  	};

	function checkKeys(e){
		var key,
            myTimer;

	    key = e.keyCode || e.which;
	    switch (key) {
	      case 37:  // ascii value for arrow left
	        anim(-step, 0);
	        break;
	      case 39:  // ascii value for arrow right
	        anim(step, 0);
	        break;
	      case 38:  // arrow up
	      	e.preventDefault();
	        anim(0, -step);
	        break;
	      case 40:  // arrow down
	        e.preventDefault();
	        anim(0, step);
	        break;
	      case 72:  // h = home
	        anim(left-baddie.offsetLeft, top-baddie.offsetTop);
	        break;
	      case 32:  // space = jump
	        anim(0, -step);
	        // What jumps up, must come down, a bit later.
	        myTimer = window.setTimeout(function(){anim(0, step);console.log('Timer!');}, 300);
	        break;
	      case 82:  // r = random
	        anim(step*Math.floor(Math.random()*(3)-1), step*Math.floor(Math.random()*(3)-1));
	        break;
	      default:
	        break;
    	}
	}
	document.onkeydown = checkKeys;
}());
