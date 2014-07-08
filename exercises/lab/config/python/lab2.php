<?php

/**
 * Titel and introduction to the lab.
 */

$firstWord = "Python";
$secondWord = "";

$wordSerie1 = ['red', 'blue', 'green', 'black', 'purple', 'yellow', 'pink', 'grey', 'brown', 'white'];
$words = [
['melon', 'banana', 'apple', 'orange', 'lemon'],
['potato', 'carrot', 'onion', 'leek', 'cabbage'],
['milk', 'juice', 'lemonade', 'soda', 'water'],
['candy', 'cake', 'cupcakes', 'lollipop', 'pringles'],
['car', 'bus', 'plane', 'helicopter', 'train']
];
$r1 = 1; // 0-4 for the words
$r2 = 2; // 0-4 for the words
$r3 = 3; // 0-4 for the words
$r4 = 4; // 0-4 for the words

$numberOne = 10; // 20-999
$numberTwo = 6;  // 20-999
/*
$numberThree = 56; // 20-999
$numberFour = 348; // 110 - 450
$floatOne = 12.55; // 100-999
$floatTwo = 5.22; // 100-999 
$lowNr = 15; // 0 - 100
$highNr = 625; // 500 - 999
$smallNr = 2; // 1-5
$smallRandNr = 3; // 0-9
$caseNrs = [1, 2, 3, 4, 5];
$smallestRandNr = 1; // 0-2
$aYear = 2014;
$aMonth = 'Aug';
$aDay = 5;
$aDate = "$aMonth $aDay, $aYear";


$serie1 = [347, -221, 54, 435];  // 100-999
$wordSerie1 = ['bulldog', 'rabbit', 'chicken', 'mouse', 'horse', 'camel', 'crocodile', 'werewolf', 'reindeer', 'elephant'];
$wordSerie2 = ['guitar', 'violin', 'drums'];
$sentenceSerie1 = ['I am in a glass case of emotion', 'If peeing your pants is cool, consider me Miles Davis', 'Do you want to hear the most annoying sound in the world?', 'Thank you very little', 'Tigers love pepper, they hate cinnamon.', 'I wake up in the morning and I piss excellence', 'I think most Scottish cuisine is based on a dare', 'I do not know, I mostly just hurt people.', 'I aim to misbehave.', ' I wish monkeys could Skype'];
$someIntText = $numberOne . ".$numberTwo " . $wordSerie1[$smallRandNr]; 
*/



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



/**
 * Closing up this section.
 */
], // EOF questions
], // EOF section



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Strings in functions",

"intro" => "
<p>Some excercises when working with strings in functions</p>
",

"shuffle" => false,

"questions" => [



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
<p>files files files and some files</p>
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
]; // EOF the enritre lab
