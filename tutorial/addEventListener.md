Add eventlistener
==============================



```
/**
 * Add onresize to window
 */

window.addEventListener("resize", function() {
	console.log("Resizing");
}, false);



/**
 * Add onclick to new element
 */

var button = document.createElement("button");
button.addEventListener("click", function() {
	alert("Hello world!");
}, false);

document.body.appendChild(button);

```



Reference and read more
------------------------------

[MDN addEventListener](https://developer.mozilla.org/en-US/docs/Web/API/EventTarget.addEventListener)


Revision history
------------------------------

2014-06-03 (sylvanas) PA1 First try.

