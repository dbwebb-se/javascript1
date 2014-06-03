Positioning and size
==============================



```

/**
 * Create element to test on
 */

var div = document.createElement("div");
document.body.appendChild(div);
div.innerHTML = "Hello world!";


/**
 * Set a fixed size on an element
 */

div.style.width = "100px";
div.style.height = "50px";


/**
 * Change the position attribute
 */

div.style.position = "absolute";


/**
 * Put the element on the top left corner
 */

div.style.top = 0;
div.style.left = 0;


/**
 * Set a z-index to be able to place it on top of other elements
 */

div.style.zindex = 100;


```



Reference and read more
------------------------------

[MDN style](https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement.style)
[MDN CSS properties](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Properties_Reference)


Revision history
------------------------------

2014-06-03 (sylvanas) PA1 First try.

