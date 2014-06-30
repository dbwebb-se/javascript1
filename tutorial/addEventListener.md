Add eventlistener
==============================

Call a function when an event happens.


```
/**
 * Add eventhandler for click, to any object using id
 */

var element = document.getElementById('someId');

element.addEventListener("click", function() {
    console.log("You clicked the element with #someId");
});



/**
 * Add onresize to window, called each time the browser window is resized.
 */

window.addEventListener("resize", function() {
	console.log("Resizing");
});



/**
 * Create a new element and add an eventhandler to it when its clicked.
 */

var button = document.createElement("button");

button.addEventListener("click", function() {
	alert("Hello world!");
});

document.body.appendChild(button);

```



Reference and read more
------------------------------

[MDN addEventListener](https://developer.mozilla.org/en-US/docs/Web/API/EventTarget.addEventListener)



Revision history
------------------------------

2014-06-30 (mos) Added eventhandler for id.
2014-06-03 (sylvanas) A First try.

