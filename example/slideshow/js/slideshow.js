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
        images.forEach(function (image, index) {
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

        console.log("Init slideshow")
        console.log(sliders);

        sliders.forEach(initSlide);
    };

    return {
        init: init
    };
})();



var jQuery = (function() {
    "use strict";

    /**
    * Slideshow for the first page
    *
    */
    var slideShow = (function () {
        var cssId = '#slideshow',
            wrapper,
            image,
            orig,
            host,
            path,
            images,
            nr,
            intervalId = null,
            current = 0,
            zindex = 0,
            pause = false,
            durationSlide = 4000,
            durationPause = 9000,
            durationFirst = durationPause,

        rotate = function () {
            $(cssId + ' img')
                .eq(current)
                .fadeOut(durationSlide, function() {
                    $(this)
                        .css('z-index', zindex - nr + 1)
                        .fadeIn(0)
                        .siblings().each(function() {
                            $(this).css('z-index', ((parseInt($(this).css('z-index')) + 1)));
                        });
                });
            current = (current + 1) % nr;
            intervalId = window.setTimeout(rotate, durationPause);
        },

        togglePause = function() {
            pause = !pause;
            if (!pause) {
                console.log("Work");
                rotate();
                //intervalId = window.setTimeout(rotate, durationPause);
            } else {
                console.log("Paus");
                window.clearTimeout(intervalId);
            }
        },

        init = function(opts) {
            var i, clone, options = opts || {};

            console.log("Init");

            cssId         = options.cssId ||cssId;
            durationSlide = options.durationSlide || durationSlide;
            durationPause = options.durationPause || durationPause;
            durationFirst = options.durationFirst || durationFirst;

            wrapper = $(cssId);
            image   = $(cssId + ' img');
            orig    = image.attr('src');
            host    = wrapper.data('host');
            path    = wrapper.data('path');
            images  = wrapper.data('images');
            nr      = images.length + 1;

            current = 0;
            wrapper.css('position', 'relative');
            image.css('position', 'relative');
            image.css('top', '0');
            image.css('left', '0');
            zindex = parseInt(image.css('z-index')) | 0;
            image.css('z-index', zindex);
            clone = image.clone();
            clone.css('position', 'absolute');

            for (i = 0; i < images.length; i++) {
                clone.css('z-index', zindex - i - 1);
                clone.attr('src', host + path + images[i]);
                wrapper.append(clone.clone());
            }

            wrapper.on('click', togglePause);
            intervalId = window.setTimeout(rotate, durationFirst);
        };

        return {
            init: init
        };
    })();


    /**
    * Only init slideshow on first page
    *
    */
    //slideShow.init();
    slideShow.init({
        "cssId" : "#slideshow",
        "durationPause" : 4000,
        "durationSlide" : 2000,
        "durationFirst" : 4000
    });

});
