for
==============================



```
/**
 * Count to nine from zero 
 **/
for(var i=0; i < 10; i++) {
	console.log(i);
}

// Same as abone but to ten
for(var i=0; i <= 10; i++) {
	console.log(i);
}

// Not including zero

for(var i=0; i <= 10; ++i) {
	console.log(i);
}

/**
 * Nested loops. Count to 9.9 with 0.1 increments starting from zero.
 **/
for(var i=0; i<10; i++){			// Count to 9 from 0
	for(var j=0; j<10; j++){		// Count to 9 from 0
		console.log(i + '.' + j);	// Add the first number(i) with a dot and then add the the other number(j)
	}
}


```



Reference and read more
------------------------------

[MDN for](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/for)



Revision history
------------------------------

2014-06-03 (Zingo89) PA1 First try.

