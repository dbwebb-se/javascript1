(function(){
	'use strict';
	var gameHeight = 25, gameWidth = 20;
	var gameArea = new Array(gameHeight),
		isPlayerOne = true;
	var boxes;

	for (var i = 0; i < gameArea.length; i++){
		gameArea[i] = new Array(gameWidth);
	}
	document.getElementById('content').style.width = (gameArea[0].length*32)+'px';

	function initGame(){
		var content = document.getElementById('content');
		var box, i, j, id = 0;
		for (i = 0; i < gameArea.length; i++){
			for (j = 0; j < gameArea[0].length; j++){
				box = document.createElement('div');
				box.id = id;
				box.className = 'boxes';
				gameArea[i][j] = id;
				content.appendChild(box);
				id++;

			}
		}
		boxes = document.getElementsByClassName("boxes");
		var arr = Array.prototype.slice.call(boxes);
		arr.forEach(function(entry) {
			entry.addEventListener("click", function() { regClick(entry); }, false);
		});
	}

	function regClick(e){
		var currBox, i, j, player;
		player = currPlayer();
		currBox = document.getElementById(e.id);
		currBox.style.pointerEvents = "none";
		currBox.innerHTML = player;
		console.log('Clicked box id: ' + currBox.id);
		console.log('Clicked id is on row: ' + getCurrentRow(e));

		// Set the position in gameArea to the current player and check if win
		for (i = 0; i < gameArea.length; i++){
			for (j = 0; j < gameArea[0].length; j++){
				if (gameArea[i][j] == e.id){
					console.log('GameArea before equals = ' + i + ' ' + j);
					gameArea[i][j] = player;
					console.log('GameArea after equals = ' + i + ' ' + j);
					checkWin(i, j, player);
				}
			}
		}
	}
	function checkWin(x,y,player){
		console.log('i = '+ x);
		console.log('j = '+ y);
		console.log('Player = ' + player);
	}
	function getCurrentRow(e){
		var currRow = Math.floor(e.id / gameArea[0].length);
		return currRow;
	}
	function currPlayer(){
		var currentPlayer = "";
		if (isPlayerOne){
			currentPlayer = 'X';
			isPlayerOne = false;
		}
		else {
			currentPlayer = 'O';
			isPlayerOne = true;
		}
		return currentPlayer;
	}

	initGame();
	console.log('game ready, Player one (X) begins');
})();
