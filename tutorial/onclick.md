onclick
==============================



```
/**
 * Use functions on buttons with onclick
 **/

	var myContent = document.getElementById('content'); 					// Create myContent variable

    myContent.innerHTML += '<button onclick="buttonone()">Show</button>'	// Add a show button with a onclick function
    myContent.innerHTML += '<button onclick="buttontwo()">Hide</button>'	// Add a hide button with a onclick function

    myContent.innerHTML += '<p id="hello" class=hide>Hello world</p>'		// Add a paragraph which is hidden


function buttonone() {
	document.getElementById("hello").className = "show";					// Create a function that replaces the class to show
}

function buttontwo() {
	document.getElementById("hello").className = "hide";					// Create a function that replaces the class to hide
}

//CSS classes

.hide {
	visibility: hidden;
}

.show {
	visibility: visible;
}

```



Reference and read more
------------------------------

[MDN onclick](https://developer.mozilla.org/en-US/docs/Web/API/GlobalEventHandlers.onclick)



Revision history
------------------------------

2014-06-03 (Zingo89) PA1 First try.

