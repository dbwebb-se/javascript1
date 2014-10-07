Using getComputedStyle()
==============================

Get the computed style for a webpage. This gives you always some values, even if they are missing and not defined in the stylesheets.


```
/**
 * Get values for left and top from element and add 10px to each.
 */

var element = document.getElementById('someId'),
    style   = window.getComputedStyle(element),
    left    = parseInt(style.left),
    top     = parseInt(style.top);


element.style.left = left + 10 + "px";
element.style.top  = top  + 10 + "px";

```



Reference and read more
------------------------------

[Window.getComputedStyle()](https://developer.mozilla.org/en-US/docs/Web/API/Window.getComputedStyle)

[Can I Use ](http://caniuse.com/#feat=getcomputedstyle)



Revision history
------------------------------

2014-10-07 (A, mos) A First try.

