inputField
==============================



```

/**
 *	
 **/

var myTextArea = document.getElementById('textarea');	
var b1 = document.getElementById("button1");			

submitButton.addEventListener("click", function() {		// Listen to the submit button and then fetch the value from the input field
	var msg = document.getElementById("message").value;
    myTextArea.innerHTML = msg;							// Show the message on the textarea 



// HTML
// index.html

<input type='text' id='message' />						// Input field for the user to enter message
<button id="submitButton">Submit</button> 
<div id="textarea"></div>								// Text area to show the message


```



Reference and read more
------------------------------

[MDN Arrays](https://developer.mozilla.org/en/docs/Web/HTML/Element/Input)



Revision history
------------------------------

2014-06-03 (zingo89) PA1 First try.

