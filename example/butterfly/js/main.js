(function(){
	'use strict';
	var xMax, yMax, obj, objHeight, objWidth, animate, speed;
	xMax = document.getElementById('content').clientWidth;
	yMax = document.getElementById('content').clientHeight;
	obj = document.getElementById('movable');
	objHeight = obj.clientHeight;
	objWidth = obj.clientWidth;
	obj.style.left = '0px';
	obj.style.top = '0px';
	speed = 5;
	
	console.log('Div height: ' + yMax + ', Div width: ' + xMax);
	console.log('Object height: ' + objHeight + ', Object width: ' + objWidth);

	function move(){
		obj.style.left = parseInt(obj.style.left) + speed + 'px';
		if(parseInt(obj.style.left) + speed > (xMax - objWidth) || parseInt(obj.style.left)+ speed < 0){
			speed = speed - (speed * 2); 
			console.log('Current speed: ' + speed);
		}
		animate = setTimeout(move, 40);
	}
	 move();
}());
