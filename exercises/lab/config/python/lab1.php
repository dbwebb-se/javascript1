<?php

/**
 * Titel and introduction to the lab.
 */

$wordSerie1 = ["storage", "memory", "device", "syntax", "computer", "error", "print", "screen", "program", "input"];
$wordRand1 = 7; // 0-9 for the word array
$wordRand2 = 3; // 0-9 for the word array

$numSerie1 = [123,22.43,342,2,54.22,2.564,43,45.33,435,2.33];

$intOne = 78; // 20-499
$intTwo = 123;  // 20-499
$intThree = 45; // 1-100
$bigInt = 654; // 500-999
$floatOne = 5.77; // FLOATS! 10.0-999.99
$floatTwo = 654.34; // FLOATS! 10.0-999.99 




return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 1 - python",

"intro" => "
<p>blablabla python blablablabla
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Integers, floats and basic arithmetics",

"intro" => "
<p>The foundation of numbers and basic arithmetic.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $intOne . '. Create another variable called "numberTwo" and give it the value ' . $intTwo . '. Create a third variable called "result" and assign to it the sum of the first two variables. Print out the result.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

    $result = $intOne + $intTwo;
    return $result;
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $intOne . '. Create another variable called "numberTwo" and give it the value ' . $intThree . '. Subtract "numberTwo" from "numberOne" and print out the result.
</p>
',

"answer" => function () use ($intOne, $intThree) {

    return $intOne-$intThree;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $intOne . '. Create another variable called "numberTwo" and give it the value ' . $intTwo . '. Print out the product of the two numbers.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

    return $intOne*$intTwo;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $intTwo . '. Divide "numberOne" with ' . $intOne . '. Print out the result.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

    return $intTwo/$intOne;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "floatOne" and give it the value ' . $floatOne . '. Create another variable called "floatTwo" and give it the value ' . $floatTwo . '. Create a third variable called "result" and assign to it the sum of the first two variables. Print out the result.
</p>
',

"answer" => function () use ($floatOne, $floatTwo) {

    return $floatOne+$floatTwo;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "floatOne" and give it the value ' . $floatOne . '. Create another variable called "floatTwo" and give it the value ' . $floatTwo . '. Subtract "floatTwo" from "floatOne" and print out the result.
</p>
',

"answer" => function () use ($floatOne, $floatTwo) {

    return $floatOne-$floatTwo;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "floatOne" and give it the value ' . $floatOne . '. Create another variable called "floatTwo" and give it the value ' . $floatTwo . '. Print out the product of the two numbers.
</p>
',

"answer" => function () use ($floatOne, $floatTwo) {

    return $floatOne*$floatTwo;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create three variables, "numberOne", "numberTwo" and "numberThree" and give them the values: ' . $intOne . ', ' . $intTwo . ' and '. $intThree . '. Sum up "numberOne" and "numberTwo". Subtract "numberThree" and print out the result.
</p>
',

"answer" => function () use ($intOne, $intTwo, $intThree) {

    return ($intOne+$intTwo)-$intThree;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Print out the result of ' . $intOne . ' modulo (%) ' . $wordRand1 . '.
</p>
',

"answer" => function () use ($intOne, $wordRand1) {

    return $intOne%$wordRand1;
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
"title" => "Conditions, exceptions, booleans, if, else and elif",

"intro" => "
<p>loops n stuff
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Print out the boolean value of: ' . $intOne . ' < ' . $intTwo . '.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

	return $intOne < $intTwo;  
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Print out the boolean value of: ' . $intOne . ' > ' . $intTwo . '.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

	return $intOne > $intTwo;
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Print out the boolean value of: ' . $intOne . ' == ' . $intTwo . '.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

	return $intOne == $intTwo;
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create an if statement to see if ' . ($intOne*2) . ' is bigger than ' . ($intTwo*2) . '. If it is true, print out "yes", else print out "no".
</p>
',

"answer" => function () use ($intOne, $intTwo) {

	$result = "no";
	if(($intOne*2) > ($intTwo*2)) {
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
<p>Create an if statement to see if ' . $intOne . ' is bigger than ' . $intTwo . ' and smaller than ' . $bigInt . '. If it is true, print out "yes", else print out "no".
</p>
',

"answer" => function () use ($intOne, $intTwo, $bigInt) {

	$result = "no";
	if($intOne > $intTwo && $intOne < $bigInt) {
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
<p>Create an elif statement that checks in what range a value belongs to. The ranges should be: below 10, 10 to 25, 26 to 50, 51 to 75 and 76 to 100. If the number is 24, you should print out: "10 to 25" and if the number is 5, print out "below 10". Use the number ' . $intThree . ' and print out the corresponding result. It should work with any number between 0 and 100.
</p>
',

"answer" => function () use ($intThree) {

	$result = "";
	if($intThree < 10) {
		$result = "below 10";
	}
	if($intThree > 9 && $intThree <= 25) {
		$result = "10 to 25";
	}
	if($intThree > 25 && $intThree <= 50) {
		$result = "26 to 50";
	}
	if($intThree > 50 && $intThree <= 75) {
		$result = "51 to 75";
	}
	if($intThree > 75 && $intThree <= 100) {
		$result = "75 to 100";
	}
	
	return $result; 
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a try/except statement that should print whether a value is a float or an integer. If the value is an integer, then print "integer". If the value is a float, print "float". Otherwise print "neither". Use the value: ' . $numSerie1[$wordRand2] . ' when you submit your answer.
</p>
',

"answer" => function () use ($numSerie1, $wordRand2) {

	$result = "neither";
	if(is_int($numSerie1[$wordRand2])) {
		$result = "integer";
	}
	if(is_float($numSerie1[$wordRand2])) {
		$result = "float";
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
"title" => "Functions",

"intro" => "
<p>functions n stuff
</p>
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



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Iteration and loops",

"intro" => "
<p>functions n stuff
</p>
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
