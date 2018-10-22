(function () {
    'use strict';

    var boxes = document.getElementsByClassName("box");

    for (var i = 0; i < boxes.length; i++) {
        boxes[i].style.backgroundColor = "#503899";
        boxes[i].style.margin = "5px";
    }

    console.log(boxes);

    window.console.log('Sandbox is ready!');
})();
