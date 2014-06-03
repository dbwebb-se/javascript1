onclick
==============================



```
/**
 * Use functions on buttons with onclick
 **/

    var b1 = document.getElementById("button1");			// Declare variables for id with id button1
    var b2 = document.getElementById("button2");			// Declare variables for id with id button2

    b1.addEventListener("click", function() {				// Create a listener that listents to click on b1
    	document.getElementById("hello").className = "show style";
    });												// Change the class for item with id=hello to show and style
    b2.addEventListener("click", function() {				// Same as before but change the class to hide
    	document.getElementById("hello").className = "hide";
    });				// Create a function that replaces the class to hide
}

// HTML 
// index.html

<button id="button1">Show</button>
<button id="button2">Hide</button>
<p id="hello" class=hide>Hello world</p>

// CSS
// style.css

.style {
	background-color: #ccc;
}

.hide {
	visibility: hidden;
}

.show {
	visibility: visible;
}

```


Reference and read more
------------------------------

[MDN EventTarget.addEventListener](https://developer.mozilla.org/en-US/docs/Web/API/EventTarget.addEventListener)



Revision history
------------------------------

2014-06-03 (Zingo89) PA1 First try.

