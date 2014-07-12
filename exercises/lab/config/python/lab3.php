<?php

/**
 * Titel and introduction to the lab.
 */
$words = ["Finland", "Sweden", "Norway", "Denmark", "Iceland"];
$listWords = [
["table", "wall", "desk", "chair", "floor"],
["wasp", "fly", "butterfly", "bumblebee", "mosquito"],
["lion", "tiger", "ozelot", "bobcat", "cougar"],
["Dafoe", "Sheen", "Berenger", "Depp", "Whitaker"],
["flute", "guitar", "drums", "piano", "bass"]
];
$listSent = [
"The?sun?is?shining",
"The?snow?is?falling",
"The?rain?is?pouring",
"The?wind?is?blowing",
"The?grass?is?growing"
];
$listNumbers = [
[98,5,12,369,1],
[123,4,125,69,155],
[67,50,2,39,15],
[567,23,12,36,7],
[45,22,2,498,78]
];
$r1 = 1; // 0-4
$r2 = 2; // 0-4
$r3 = 3; // 0-4
$r4 = 4; // 0-4


return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 3 - python",

"intro" => "
<p>Lists
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "SECTION 1",

"intro" => "
<p>????
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Concatinate the two lists [' . $listWords[$r1][0] . ', ' . $listWords[$r1][1] . '] and [' . $listWords[$r1][2] . ', ' . $listWords[$r1][3] . ']. Answer with your list. 
</p>
',

"answer" => function () use ($listwords, $r1) {

	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the list [' . implode(",", $listWords[$r2]) . ']. Update it with the words: "' . $words[$r2] . '" and "' . $words[$r4] . '" as the second and third element. Answer with the modified list.
</p>
',

"answer" => function () use ($listwords, $r2, $r4, $words) {

	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the list [' . implode(",", $listWords[$r3]) . ']. Replace the third word with: "' . $words[$r3] . '". Answer with the modified list.
</p>
',

"answer" => function () use ($listwords, $r3, $words) {

	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the list [' . implode(",", $listWords[0]) . ']. Extend it with the list: [' . implode(",", $listWords[1]) . ']. Answer with the modified list.
</p>
',

"answer" => function () use ($listwords) {
//0 and 1
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Sort the list [' . implode(",", $listWords[$r3]) . ']. Answer with the sorted list.
</p>
',

"answer" => function () use ($listwords, $r3) {
//0 and 1
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use pop() to delete the second and the last element in the list: [' . implode(",", $listWords[$r2]) . ']. Answer with the modified list.
</p>
',

"answer" => function () use ($listwords, $r2) {
//0 and 1
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use remove() to delete the word: "' . $listWords[$r3][$r3] . '" from the list: [' . implode(",", $listWords[$r3]) . ']. Answer with the modified list.
</p>
',

"answer" => function () use ($listwords, $r3) {
//0 and 1
	
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
"title" => "Built-in list functions",

"intro" => "
<p>????
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a built-in function to sum all numbers in the list: [' . implode(",",$listNumbers[$r1]) . ']. Answer with the result as an integer.
</p>
',

"answer" => function () use ($listNumbers, $r1) {

    return array_sum($listNumbers[$r1]);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a built-in function to get the average value of the list: [' . implode(",",$listNumbers[$r3]) . ']. Answer with the result as a float.
</p>
',

"answer" => function () use ($listNumbers, $r3) {

    return floatval(array_sum($listNumbers[$r3])/count($listNumbers[$r3]));
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a built-in function to get the lowest number in the list: [' . implode(",",$listNumbers[$r4]) . ']. Answer with the result as a integer.
</p>
',

"answer" => function () use ($listNumbers, $r4) {

    return min($listNumbers[$r4]);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the built-in functions split() and join() to fix this string: "' . $listSent[$r2] . '" into a real sentence, (without "?"). Answer with the fixed string.
</p>
',

"answer" => function () use ($listSent, $r2) {

    $a = explode("?", $listSent[$r2]);
    $b = join($a, " ");
    return $b;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Open the file "httpd-access.txt" and answer with the first four characters of the eighth element on line 893. Answer as a string.
</p>
',

"answer" => function () {

    return "HTTP";
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
"title" => "Lists as arguments",

"intro" => "
<p>????
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that returns the list passed as argument sorted in numerical and ascending order. Use the list: [' . implode(",", $listNumbers[$r2]) . ']. Answer with the sorted list.
</p>
',

"answer" => function () use ($listNumbers, $r2) {

    $a = $listNumbers[$r2];
    asort($a);
    return implode(",",$a);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that takes the list: [' . implode(",",$listNumbers[$r1]) . '] as argument. The function should multiply all even numbers by 2 and add ' . $r4 . ' to all odd numbers. Answer with the modified list sorted in numerical order, descending.
</p>
',

"answer" => function () use ($listNumbers, $r4, $r1) {

	$result = $listNumbers[$r1];
	for($i = 0; $i < count($result); $i++) {
		if($result[$i]%2===0) {
			$result[$i] *= 2;
		}
		else {
			$result[$i] += $r4;	
		}
	}
    arsort($result);
    return implode(",", $result);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>
</p>
',

"answer" => function () {

    
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>
</p>
',

"answer" => function () {

},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>
</p>
',

"answer" => function () {

    
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
]; // EOF the entire lab
