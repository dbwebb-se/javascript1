Get size
==============================



```
/**
 * Get an element based on its ID
 **/
var content = document.getElementById('content');

/**
 * Get the size of the browser
 **/
 var browserHeight = window.innerHeight,
 	browserWidth = window.innerWidth;

/**
 * Get size of the recieved element
 **/
 var divHeight = content.clientHeight,
    divWidth = content.clientWidth;

/**
 * Get position of the recieved element
 **/
 var divPosX = content.offsetLeft,
    divPosY = content.offsetTop;

/**
 * Example on how to print data into html element
 **/
 document.getElementById('browserSize').innerHTML = browserWidth + ' X ' + browserHeight + 'px';

```



Reference and read more
------------------------------

* [MDN getElementById](https://developer.mozilla.org/en-US/docs/Web/API/document.getElementById)
* [MDN innerHeight](https://developer.mozilla.org/en-US/docs/Web/API/Window.innerHeight)
* [MDN innerWidth](https://developer.mozilla.org/en-US/docs/Web/API/Window.innerWidth)
* [MDN clientHeight](https://developer.mozilla.org/en-US/docs/Web/API/Element.clientHeight)
* [MDN clientWidth](https://developer.mozilla.org/en-US/docs/Web/API/Element.clientWidth)
* [MDN offsetLeft](https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement.offsetLeft)
* [MDN offsetTop](https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement.offsetTop)
* [MDN Determining the dimensions of elments](https://developer.mozilla.org/en-US/docs/Web/API/CSS_Object_Model/Determining_the_dimensions_of_elements)



Revision history
------------------------------

2014-06-03 (Zingo89) PA1 First try.