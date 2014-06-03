type
==============================



```
/**
 * '===' behaves like '==' exept that no type conversion is done 
 */

true == 1 						// true because true is converted into 1 and then compared
"2" == 2 						// true because 2 is converted into "2" and then compared
true === 1 						// false
"2" === 2 						// false


/**
 * typeof
 */

typeof 50 === 'number' 			// true
typeof 'hej' === 'string'		// true 
typeof true === 'boolean'		// true
typeof undefined === 'undefined'// true
typeof Math.sin === 'function' 	// true


```



Reference and read more
------------------------------

[MDN typeof](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/typeof)



Revision history
------------------------------

2014-06-03 (zingo89) PA1 First try.

