"use strict";

(function() {
    console.log("All is ready!");

    var content = document.getElementById('content');

    for (var i = 0; i < 4; i++) {
        var element = document.createElement("div");

        element.className = "box";
        element.style.top = i * 200 + "px";
        element.style.left = i * 200 + "px";
        element.style.zIndex = i + 1;

        element.addEventListener("click", handleClick);

        content.appendChild(element);
    }

    function handleClick(event) {
        console.log("I just got clicked: ", this, event);
    }
})();
