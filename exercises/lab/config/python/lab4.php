<?php

/**
 * Titel and introduction to the lab.
 */
$dictNames = [
["Baggins", "Aragorn", "Smaug"],
["Solo", "Skywalker", "Vader"],
["Chandler", "Monica", "Ross"],
["Clinton", "Obama", "Bush"],
["Jagger", "Diamond", "Cash"]
];
$dictNrs = [
[55523412, 55564222, 55567894],
[55511243, 55568711, 55590858],
[55523645, 55564452, 55545872],
[55590899, 55567345, 55564533],
[55537654, 55598078, 55587768]
];
$r1 = 2; // 0-4
$sr1 = 1; // 0-2


return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 4 - python",

"intro" => "
<p>???????
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Dictionaries",

"intro" => "
<p>???????????</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a small phonebook using a dictionary. Use the names as keys and numbers as values. Use "' . implode(", ", $dictNames[$r1]) . '" and corresponding numbers: ' . implode(", ", $dictNrs[$r1]) . '. Answer with the keys comma-separated, sorted in an alphabetical and ascending order and in a string.
</p>
',

"answer" => function () use ($dictNames, $r1) {
	
	$res = $dictNames[$r1];
	asort($res);
    return implode(",", $res);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use your phonebook and answer with the values (phonenumbers) comma-separated, in ascending order and as a string. 
</p>
',

"answer" => function () use ($dictNrs, $r1) {
	
	$res = $dictNrs[$r1];
	asort($res);
    return (string)implode(",", $res);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the "get() method" on your phonebook and answer with ' . $dictNames[$r1][$sr1] . '\'s phonenumber. Answer with an integer. 
</p>
',

"answer" => function () use ($dictNrs, $r1, $sr1) {
	
    return (int)$dictNrs[$r1][$sr1];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the "get() method" on your phonebook and answer with ' . $dictNames[$r1][$sr1] . '\'s phonenumber. Answer with an integer. 
</p>
',

"answer" => function () use ($dictNrs, $r1, $sr1) {
	
    return (int)$dictNrs[$r1][$sr1];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Open "alice.txt" and create a dictionary that holds all words as separate keys and the frequency as values. Find out how many times the word: "youth" is used in the text and answer with the right integer. 
</p>
',

"answer" => function () {
	// Use: line = line.translate(str.maketrans("", "", string.punctuation))
	// Dont use: line = line.translate(string.punctuation)
    return 6;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use your dictionary over "alice.txt" and find all keys that have a value of 4 and has exactly 5 characters. Answer with the keys in a comma-separated string. 
</p>
',

"answer" => function () {
	
	return "other";
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
"title" => "Tuples",

"intro" => "
<p>???????????</p>
",

"shuffle" => false,

"questions" => [



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
]; // EOF the enritre lab
