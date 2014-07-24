<?php

/**
 * Titel and introduction to the lab.
 */

$words = [
['melon', 'banana', 'apple', 'orange', 'lemon'],
['potato', 'carrot', 'onion', 'leek', 'cabbage'],
['milk', 'juice', 'lemonade', 'soda', 'water'],
['candy', 'cake', 'cupcakes', 'lollipop', 'pringles'],
['car', 'bus', 'plane', 'helicopter', 'train']
];
$format1 = [
["grandma", 42, "cows"],
["father", 9, "cats"],
["brother", 2, "dogs"],
["sister", 2, "houses"],
["book", 398, "pages"]
];
$findSlice = [
"154.84.56.0 : (wallpaper), soda", 
"567.1.53.4 : (greece), table", 
"196.98.2.54 : (tree), window", 
"984.45.6.65 : (wasp), boat", 
"789.234.2.54 : (sunshine), bakery"];
$r1 = 1; // 0-4 for the words
$r2 = 2; // 0-4 for the words
$r3 = 3; // 0-4 for the words
$r4 = 4; // 0-4 for the words

return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 2 - python",

"intro" => "
<p>Strings and files
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Strings",

"intro" => "
<p>The basics of strings</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Assign the word: "' . $words[$r1][$r2] . '" to a variable and put your variable as the answer.
</p>
',

"answer" => function () use ($words, $r1, $r2) {

    return $words[$r1][$r2];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Assign the word: "' . $words[$r2][$r4] . '" to a variable. Create another variable where you put the first and the last letter in the word. Answer with the second variable.
</p>
',

"answer" => function () use ($words, $r2, $r4) {

	$a = $words[$r2][$r4][0];
	$b = strlen($words[$r2][$r4]);
	$c = $words[$r2][$r4][$b-1];
    return $a . $c;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Assign the word: "' . $words[$r4][$r3] . '" to a variable. Answer with the length of the word as an integer.
</p>
',

"answer" => function () use ($words, $r4, $r3) {

    return strlen($words[$r4][$r3]);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the "in-operator" to see if the word: "' . $words[$r2][$r4] . '" contains the letter "a". Answer with the boolean result.
</p>
',

"answer" => function () use ($words, $r2, $r4) {

	$result = false;
	for($i = 0; $i < strlen($words[$r2][$r4]); $i++) {
		if($words[$r2][$r4][$i] === "a") {
			$result = true;
		}
	}
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a for-in loop to make all the letters in: "' . $words[$r1][$r3] . '" capitalized. Answer with the capitalized word.
</p>
',

"answer" => function () use ($words, $r1, $r3) {

    return strtoupper($words[$r1][$r3]);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the built-in function "startswith()" to make the word: "' . strtoupper($words[$r4][$r2]) . '" return the boolean value "True" when checking if it starts with the small letter: "' . $words[$r4][$r2][0] . '". Answer with the boolean value.
</p>
',

"answer" => function () use ($words, $r4, $r2) {

    return true;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Assign the words: "' . $words[$r1][$r3] . '" and "' . $words[$r1][$r2] . '" to two different variables. Pass them as arguments to a function that returns them as a single word. Answer with the result.
</p>
',

"answer" => function () use ($words, $r1, $r2, $r3) {

    return $words[$r1][$r3] . $words[$r1][$r2];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the word: "' . $words[$r4][$r1] . '" to a function that returns a sentence: "This word was: ' . $words[$r4][$r1] . '". Answer with the result.
</p>
',

"answer" => function () use ($words, $r1, $r4) {

    return "This word was: " . $words[$r4][$r1];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the word: "' . $words[$r4][$r3] . '" to a function that returns "yes" if the word is longer than 5 characters. Else return "no". Answer with the result.
</p>
',

"answer" => function () use ($words, $r3, $r4) {

	$len = strlen($words[$r4][$r3]);
	$result = "no";
	if($len > 5) {
		$result = "yes";
	}
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the word: "' . $words[$r2][$r1] . '" to a function that returns a string with the word backwards. Answer with the result.
</p>
',

"answer" => function () use ($words, $r1, $r2) {

	$result = "";
	$len = strlen($words[$r2][$r1])-1;
	for($i = $len; $i > -1; $i--) {
		$result .= $words[$r2][$r1][$i];
	}
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the word: "' . $words[$r3][$r4] . '" to a function that excludes the first and the last letter of the word. Answer with the result.
</p>
',

"answer" => function () use ($words, $r3, $r4) {

	$result = "";
	$len = strlen($words[$r3][$r4]);
	for($i = 1; $i < $len-1; $i++) {
		$result .= $words[$r3][$r4][$i];
	}
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the format operator to print out: "My "string" has "integer" "string"". Use the values: "' . $format1[$r1][0] . '", ' . $format1[$r1][1] . ' and "' . $format1[$r1][2] . '". Answer with the result.
</p>
',

"answer" => function () use ($format1, $r1) {

    return "My " . $format1[$r1][0] . " has " . $format1[$r1][1] . " " . $format1[$r1][2];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use "find" and "slice" on the string: "' . $findSlice[$r2] . '" to get the word inside the parenthesis. Answer with the word as a string.
</p>
',

"answer" => function () use ($findSlice, $r2) {

    $a = strpos($findSlice[$r2], "(");
    $b = strpos($findSlice[$r2], ")");
    $result = "";

    for($i = $a+1; $i < $b; $i++) {
    	$result .= $findSlice[$r2][$i];
    }

    return $result;
},

],



/**
 * Closing up this section.
 */
], // EOF questions
], // EOF section



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Files",

"intro" => "
<p>This section uses the text file: 'httpd-access.txt'</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Count the number of times a line starts with "81". Answer with the result as an integer.
</p>
',

"answer" => function () {

   return 112;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Find out the last 4 digits on line 821 in the file. Answer with the result as an integer.
</p>
',

"answer" => function () {
	return 2154;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Find out which ip adress (first serie of numbers on each line) that has the highest amount of entries in the file. Test with the adresses: "81.226.253.26" and "95.19.133.73". Answer with the highest amount of entries as an integer. 
</p>
',

"answer" => function () {
	return 93;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Count the number of periods (.) there are in the file. Use the built-in function count() on the file after you have converted it to a string. Answer with the result as an integer. 
</p>
',

"answer" => function () {
	return 5199;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Find the characters on line 637 from index 65 to index 75. Make sure that the character at index 75 also gets included. Answer with the piece of string you found.
</p>
',

"answer" => function () {
	return "source.php?";
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Find the last digit on each line and sum all that are even. Answer with the result as an integer.
</p>
',

"answer" => function () {
	return 2226;
},

],



/**
 * Closing up this section.
 */
], // EOF questions
], // EOF section



/** -----------------------------------------------------------------------------------
 * Closing up all sections.
 */
] // EOF sections



/**
 * Closing up this lab.
 */
]; // EOF the enritre lab
