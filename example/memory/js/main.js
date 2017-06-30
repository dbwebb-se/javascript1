(function () {
    'use strict';

    var nrOfBlocks = 10;
    var hiddenBlocks = new Array(10);
    var lockedBlocks = new Array(2);
    var lockedCards = new Array(2);
    var temp = document.getElementsByTagName('td');
    var counter= 0;



    function checkForDuplicates(nr) {
        var isDuplicate = false;
        var count = 0;

        for (var i = 0; i < nrOfBlocks; i++) {
            if (hiddenBlocks[i] === nr) {
                count++;
            }
        }
        if (count === 2) {
            isDuplicate = true;
        }
        return isDuplicate;
    }



    function randomizeBlocks(currPos) {
        var randNr = Math.floor((Math.random() * 5) +1);

        while (checkForDuplicates(randNr)) {
            randNr = Math.floor((Math.random() * 5) +1);
        }
        hiddenBlocks[currPos] = randNr;
    }



    function toggleClickable() {
        var box = document.getElementsByTagName('td');

        for (var i = 0; i < nrOfBlocks; i++) {
            if (box[i].style.pointerEvents === 'none') {
                box[i].style.pointerEvents = '';
            } else {
                box[i].style.pointerEvents = 'none';
            }
        }
    }



    function checkMatch(currId) {
        if (counter === 1) {
            lockedCards[0] = hiddenBlocks[currId];
            lockedBlocks[0] = currId;
        } else if (counter === 2) {
            lockedCards[1] = hiddenBlocks[currId];
            lockedBlocks[1] = currId;

            if (lockedCards[0] === lockedCards[1]) {
                window.console.log('yeey a match!');
            } else {
                window.console.log('sorry...no match');
                window.console.log('flipping back in 3 secs');
                toggleClickable();

                window.setTimeout(function () {
                    for (var i = 0; i < 2; i++) {
                        for (var j = 0; j < nrOfBlocks; j++) {
                            if (hiddenBlocks[j] === lockedCards[i]) {
                                var box = document.getElementById(lockedBlocks[i]);

                                box.style.backgroundImage = 'none';
                                box.innerHTML = '?';
                                box.onclick = function () {
                                    displayHidden(this.id);
                                };
                            }
                        }
                    }
                    toggleClickable();
                }, 3000);
            }
            counter = 0;
        }
    }



    function displayHidden(currId) {  // jshint ignore:line
        var currBlock = document.getElementById(currId);

        currBlock.innerHTML = "";
        currBlock.style.backgroundImage = "url('img/"+hiddenBlocks[currId]+".jpg')";

        currBlock.onclick = function () {
            window.alert('You have to choose another card');
        };

        counter++;
        window.console.log('Click: ' + counter);
        checkMatch(currId);
    }



    for (var i = 0; i < nrOfBlocks; i++) {
        temp[i].setAttribute('id', i);
        temp[i].onclick = function () {
            displayHidden(this.id);
        };
        randomizeBlocks(i);
    }
}());
