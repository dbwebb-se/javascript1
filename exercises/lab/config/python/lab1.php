<?php

/**
 * Titel and introduction to the lab.
 */

$wordSerie1 = ["storage", "memory", "device", "syntax", "computer", "error", "print", "screen", "program", "input"];
$wordRand1 = 7; // 0-9 for the word array
$wordRand2 = 3; // 0-9 for the word array

$intOne = 78; // 20-999
$intTwo = 123;  // 20-999
$intThree = 45; // 20-99
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
<p>The foundation of variables, numbers and basic arithmetic.</p>
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



/**
 * Closing up this section.
 */
], // EOF questions
], // EOF section



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Variables, expressions and statements",

"intro" => "
<p>some intro text about this...
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a 
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
