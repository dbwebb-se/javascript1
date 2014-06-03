(function(){
    'use strict';
    
    var content = document.getElementById('content'),
    browserHeight = window.innerHeight, 
    browserWidth = window.innerWidth,
    divHeight = content.clientHeight,
    divWidth = content.clientWidth,
    divPosX = content.offsetLeft,
    divPosY = content.offsetTop;

    document.getElementById('browserSize').innerHTML = browserWidth + ' X ' + browserHeight + 'px';
    document.getElementById('divSize').innerHTML = divWidth + ' X ' + divHeight + 'px';
    document.getElementById('divPosition').innerHTML = 'Left: ' + divPosX + 'px, Top: ' + divPosY + 'px';

    console.log('Sandbox is ready!');
})();