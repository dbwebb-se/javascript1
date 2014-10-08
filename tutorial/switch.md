Switch
==============================



```
/**
 * Check a printable colorvalue and return its hexvalue.
 */
var color = "red",
    hexColor = "";

switch(color) {
	case "red":
		hexColor = "#F00";
        break;
	case "green":
        hexColor = "#0F0";
        break;
	case "blue":
        hexColor = "#00F";
        break;
	default:
        hexColor = "Unknown";
}

console.log("The color: " + color + " matches the hexadeciamal colorvalue: " + hexColor);
```



Reference and read more
------------------------------

[MDN switch](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/switch)



Revision history
------------------------------

```
2014-10-08 (B, mos) Updated with a more verbose example.
2014-06-03 (A, zingo89) First try.
```
