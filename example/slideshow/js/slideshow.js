/**
 * Create a slideshow manager which inits and controlles the slideshows.
 */
window.slideshow = (function () {
    "use strict";
    var sliders;
    var intervalId = null;



    var rotateOne = function (element) {
        var images = element.querySelectorAll("img");
        var current;
        var next;

        // Loop through all images in slider and rearrange zindex
        images.forEach(function (image /*, index*/) {
            var zindex = parseInt(image.style.zIndex);

            if (zindex === 0) {
                current = image;
                return;
            }

            if (zindex + 1 === -1) {
                next = image;
            }

            image.style.zIndex = zindex + 1;
        });

        current.style.transition = "opacity 1s ease-in-out";
        current.style.opacity = 0;

        window.setTimeout(function () {
            current.style.zIndex = - images.length;
            current.style.transition = null;
            current.style.opacity = 1;
            next.style.zIndex = 0;
        }, 1500);
    };



    var rotateAll = function () {
        sliders.forEach(rotateOne);
        intervalId = window.setTimeout(rotateAll, 4000);
    };



    var togglePause = function () {
        if (intervalId) {
            console.log("Paus");
            window.clearTimeout(intervalId);
            intervalId = null;
        } else {
            console.log("Work");
            rotateAll();
        }
    };



    var initSlide = function (wrapper) {
        var startImage = wrapper.querySelector("img");
        var images = wrapper.dataset.images.split(/[, ]+/);

        // Setup wrapper and first node
        wrapper.style.position = "relative";
        startImage.style.cssText = "position: relative; top: 0; left: 0; z-index: 0; opacity: 1;";

        // Clone startImage for each new image
        images.map(function(image, index) {
            var node = startImage.cloneNode();

            node.style.position = "absolute";
            node.style.zIndex = - index - 2;
            node.src = image.trim();
            wrapper.appendChild(node);
            //console.log(image);
        });

        wrapper.addEventListener("click", togglePause);
        intervalId = window.setTimeout(rotateAll, 3000);
        // console.log(index);
        // console.log(obj);
    };



    var init = function(options) {
        //var options = config || {}
        //var selectors = options.selectors || "slideshow";
        sliders = document.querySelectorAll(options.selectors);

        console.log("Init slideshow");
        console.log(sliders);

        sliders.forEach(initSlide);
    };

    return {
        init: init
    };
})();
