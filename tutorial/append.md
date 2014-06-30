Append elements
==============================



```
/**
 * Add a new element to the DOM-structure
 */

var div = document.createElement("div");
div.innerHTML = "Hello div!";

document.body.appendChild(div);



/**
 * Add a new element to an other element
 */

var div = document.createElement("div");
var p = document.createElement("p");
p.innerHTML = "Hello paragraph!";

div.appendChild(p);

document.body.appendChild(div);

```



Reference and read more
------------------------------

[MDN appendChild](https://developer.mozilla.org/en-US/docs/Web/API/Node.appendChild)



Revision history
------------------------------

2014-06-03 (sylvanas) PA1 First try.

