Math functions
==============================



```
/**
 * Round a number
 */

var a = 42.5;
a = Math.round(a);

console.log(a);

var b = 42.2;
b = Math.round(b);

console.log(b);



/**
 * Round a number down
 */

var a = 42.7;
a = Math.floor(a);

console.log(a);



/**
 * Round a number up
 */

var a = 42.2;
a = Math.ceil(a);

console.log(a);



/**
 * Get the square root of a number
 */

var x = 9;

console.log(Math.sqrt(x))

var y = 20;

console.log(Math.sqrt(y))



/**
 * Get a random number (between 0 and 1)
 */

var rand = Math.random();

console.log(rand);



/**
 * Use random to get a number between 1 and 6
 */

var min = 1;
var max = 6;

var rand = Math.floor((Math.random() * max) + min);


```



Reference and read more
------------------------------

[MDN Math](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math)


Revision history
------------------------------

2014-06-03 (sylvanas) PA1 First try.

