(function(){
    'use strict';

    var content = document.getElementById('content'),
    browserSizeSpan = document.getElementById('browserSize'),
    divSizeSpan = document.getElementById('divSize'),
    browserHeight = window.innerHeight,
    browserWidth = window.innerWidth,
    divSize = {};

    /**
     * A function that returns the elements height and width
     **/
    function getSize(element) {
        var osWidth = element.offsetWidth,
        osHeight = element.offsetHeight,
        clientWidth = element.clientWidth,
        clientHeight = element.clientHeight,
        posX = element.offsetLeft,
        posY = element.offsetTop;

        return { osWidth: osWidth, osHeight: osHeight, clWidth: clientWidth, clHeight: clientHeight, posLeft: posX, posTop: posY };
    }
    /**
     * A function for creating a div, 100 x 100px
     * With .style you can get to the elements CSS properties
     **/
    function createDiv() {
        var newDiv = document.createElement('div');
        newDiv.style.height = 100+'px';
        newDiv.style.width = 100+'px';

        return newDiv;
    }

    browserSizeSpan.innerHTML = browserWidth + ' X ' + browserHeight + 'px';
    divSize = getSize(content);
    divSizeSpan.innerHTML = '<br>offsetWidth: ' + divSize.osWidth + 'px, offsetHeight: ' + divSize.osHeight + 'px<br>clientWidth: ' + divSize.clWidth + 'px, clientHeight: ' + divSize.clHeight + 'px<br>Pos left: ' + divSize.posLeft + 'px, Pos Top: ' + divSize.posTop + 'px';

    /**
     * Create the first div, pass it to getSize(..) and print out the data
     **/
    var firstDiv = createDiv(),
    spanOne = document.createElement('span');
    firstDiv.style.backgroundColor = 'yellow';
    content.appendChild(firstDiv);
    // get the size of the div, can be reached later with divSize.x and divSize.y
    divSize = getSize(firstDiv);
    spanOne.innerHTML = '(border: 0, margin: 0, padding: 0)<br>offsetWidth: ' + divSize.osWidth + 'px, offsetHeight: ' + divSize.osHeight + 'px<br>clientWidth: ' + divSize.clWidth + 'px, clientHeight: ' + divSize.clHeight + 'px<br>Pos left: ' + divSize.posLeft + 'px, Pos Top: ' + divSize.posTop + 'px';
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
    spanTwo.innerHTML = '(border: 0, margin: 10, padding: 0)<br>offsetWidth: ' + divSize.osWidth + 'px, offsetHeight: ' + divSize.osHeight + 'px<br>clientWidth: ' + divSize.clWidth + 'px, clientHeight: ' + divSize.clHeight + 'px<br>Pos left: ' + divSize.posLeft + 'px, Pos Top: ' + divSize.posTop + 'px';
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
    spanThree.innerHTML = '(border: 0, margin: 10, padding: 10)<br>offsetWidth: ' + divSize.osWidth + ' X ' + divSize.osHeight + 'px<br>clientWidth: ' + divSize.clWidth + ' X ' + divSize.clHeight + 'px<br>Pos left: ' + divSize.posLeft + 'px, Pos Top: ' + divSize.posTop + 'px';
    content.appendChild(spanThree);

    /**
     * Create the fourth div, pass it to getSize(..) and print out the data
     **/
    var fourthDiv = createDiv(),
    spanFour = document.createElement('span');
    fourthDiv.style.backgroundColor = 'blue';
    fourthDiv.style.margin = '10px';
    fourthDiv.style.padding = '10px';
    fourthDiv.style.border = '10px solid black';
    content.appendChild(fourthDiv);
    // get the size of the div, can be reached later with divSize.x and divSize.y
    divSize = getSize(fourthDiv);
    spanFour.innerHTML = '(border: 10, margin: 10, padding: 10)<br>offsetWidth: ' + divSize.osWidth + ' X ' + divSize.osHeight + 'px<br>clientWidth: ' + divSize.clWidth + ' X ' + divSize.clHeight + 'px<br>Pos left: ' + divSize.posLeft + 'px, Pos Top: ' + divSize.posTop + 'px';
    content.appendChild(spanFour);


    console.log('Sandbox is ready!');
}());
