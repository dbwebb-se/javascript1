(function(){
    'use strict';
    
    var content = document.getElementById('content'),
    browserSizeSpan = document.getElementById('browserSize'),
    divSizeSpan = document.getElementById('divSize'),
    divPositionSpan = document.getElementById('divPosition'),
    browserHeight = window.innerHeight, 
    browserWidth = window.innerWidth,
    divHeight = content.offsetHeight,
    divWidth = content.offsetWidth,
    divPosX = content.offsetLeft,
    divPosY = content.offsetTop,
    divSize = {};

    browserSizeSpan.innerHTML = browserWidth + ' X ' + browserHeight + 'px';
    divSizeSpan.innerHTML = divWidth + ' X ' + divHeight + 'px';
    divPositionSpan.innerHTML = 'Left: ' + divPosX + 'px, Top: ' + divPosY + 'px';


    /**
     * A function that returns the elements height and width
     **/
    function getSize(element) {
        var elWidth = element.offsetWidth,
        elHeight = element.offsetHeight;

        return {x: elWidth, y: elHeight}
    }
    /**
     * A function for creating a div, 100 x 100px
     * With .style you can get to the elements CSS properties
     **/
    function createDiv() {
        var newDiv = document.createElement('div');
        newDiv.style.height = 100+'px',
        newDiv.style.width = 100+'px';
        
        return newDiv;         
    }
    /**
     * Create the first div, pass it to getSize(..) and print out the data
     **/
    var firstDiv = createDiv(),
    spanOne = document.createElement('span');
    firstDiv.style.backgroundColor = 'yellow';
    content.appendChild(firstDiv);
    // get the size of the div, can be reached later with divSize.x and divSize.y
    divSize = getSize(firstDiv);
    spanOne.innerHTML = 'Size: ' + divSize.x + ' X ' + divSize.y + 'px';
    content.appendChild(spanOne);

    /**
     * Create the second div, pass it to getSize(..) and print out the data
     **/
    var secondDiv = createDiv(),
    spanTwo = document.createElement('span');
    secondDiv.style.backgroundColor = 'green';
    secondDiv.style.margin = '10px';
    content.appendChild(secondDiv);
    // get the size of the div, can be reached later with divSize.x and divSize.y
    divSize = getSize(secondDiv);
    spanTwo.innerHTML = 'Size: ' + divSize.x + ' X ' + divSize.y + 'px';
    content.appendChild(spanTwo);

    /**
     * Create the third div, pass it to getSize(..) and print out the data
     **/
    var thirdDiv = createDiv(),
    spanThree = document.createElement('span');
    thirdDiv.style.backgroundColor = 'red';
    thirdDiv.style.margin = '10px';
    thirdDiv.style.padding = '10px';
    content.appendChild(thirdDiv);
    // get the size of the div, can be reached later with divSize.x and divSize.y
    divSize = getSize(thirdDiv);
    spanThree.innerHTML = 'Size: ' + divSize.x + ' X ' + divSize.y + 'px';
    content.appendChild(spanThree);

    /**
     * Create the fourth div, pass it to getSize(..) and print out the data
     **/
    var fourthDiv = createDiv(),
    spanFour = document.createElement('span');
    fourthDiv.style.backgroundColor = 'blue';
    fourthDiv.style.margin = '10px';
    fourthDiv.style.padding = '10px';
    fourthDiv.style.border = '1px solid black';
    content.appendChild(fourthDiv);
    // get the size of the div, can be reached later with divSize.x and divSize.y
    divSize = getSize(fourthDiv);
    spanFour.innerHTML = 'Size: ' + divSize.x + ' X ' + divSize.y + 'px';
    content.appendChild(spanFour);
    

    console.log('Sandbox is ready!');
})();