Add HTML to a element using innerHTML
==============================


In HTML:

```
<div id="content"></div>
```


In JavaScript:

```
/**
 * Get the element by id and add HTML to it.
 */

var myContent = document.getElementById('content');

myContent.innerHTML = '<h3>This is a MEGA template!</h3>';

```



Reference and read more
------------------------------

[MDN Element.innerHTML](https://developer.mozilla.org/en-US/docs/Web/API/Element.innerHTML)



Revision history
------------------------------

2014-06-30 (mos) A First try.

