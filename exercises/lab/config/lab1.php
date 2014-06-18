<?php

/**
 * Titel and introduction to the lab.
 */
$firstWord = "JavaScript";
$secondWord = "rocks!";

$numberOne = 10; // 100-999
$numberTwo = 6;  // 100-999
$numberThree = 56; // 100-999
$floatOne = 12.55; // 100-999
$floatTwo = 5.22; // 100-999 
$lowNr = 15; // 0 - 100
$highNr = 625; // 500 - 999
$smallNr = 2; // 1-3
$smallRandNr = 5; // 0-9

$serie1 = [347, -221, 54, 435];  // 100-999
$wordSerie1 = ['dog', 'cat', 'chicken', 'mouse', 'horse', 'bird', 'fox', 'wolf', 'cow', 'pig'];
$sentenceSerie1 = ['I am in a glass case of emotion', 'If peeing your pants is cool, consider me Miles Davies', 'Do you want to hear the most annoying sound in the world?', 'Thank you very little', 'Tigers love pepper, they hate cinnamon.', 'I wake up in the morning and I piss excellence', 'I think most Scottish cuisine is based on a dare', 'I do not know, I mostly just hurt people.', 'I aim to misbehave.', ' I wish monkeys could Skype'];



return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 1 - javascript1",

"intro" => "
<p>Intro text to explain stuff. <br>
MDN Overview: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects <br>
MDN Numbers: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number <br>
MDN Math: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math <br>
MDN Strings: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String <br>
MDN Date: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date <br>
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Integers, floats and variables",

"intro" => "
<p>Grunderna i variabler, siffror, strängar, basic arithmetic + - / *.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $numberOne . '. Create another variable called "numberTwo" and give it the value ' . $numberTwo . '. Create a third variable called "sum" and assign to it the sum of the first two variables. Print out the result.</p>
',

"answer" => function () use ($numberOne, $numberTwo) {

    $sum = $numberOne + $numberTwo;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create three variables, "numberOne", "numberTwo" and "numberThree" and give them the values: ' . $numberOne . ', ' . $numberTwo . ' and '. $numberThree . '. Create a fourth variable, called "sum" and assign to it the sum of all three variables. Print out the result.
</p>
',

"answer" => function () use ($numberOne, $numberTwo, $numberThree) {

    $sum = $numberOne + $numberTwo + $numberThree;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $numberOne . '. Create another variable called "numberTwo" and give it the value ' . $numberTwo . '. Create a third variable called "sum" and assign to it the product of the first two variables. Print out the result.
</p>
',

"answer" => function () use ($numberOne, $numberTwo) {

    $sum = $numberOne * $numberTwo;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create three variables, "numberOne", "numberTwo" and "numberThree" and give them the values: ' . $numberOne . ', ' . $numberTwo . ' and '. $numberThree . '. Create a fourth variable, called "sum" and assign to it the product of "numberOne" and "numberTwo" and subtract "numberThree". Print out the result.
</p>
',

"answer" => function () use ($numberOne, $numberTwo, $numberThree) {

    $sum = ($numberOne * $numberTwo) - $numberThree;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create two variables, "numberOne", "numberTwo" and give them the values: ' . $numberOne . ' and ' . $numberTwo . '. Create a fourth variable, called "sum" and assign to it the quotient of them. Print out the result.
</p>
',

"answer" => function () use ($numberOne, $numberTwo) {

    $sum = $numberOne / $numberTwo;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create two variables, "floatOne" and "floatTwo". Give them the values: ' . $floatOne . ' and ' . $floatTwo . '. Create a fourth variable, called "sum" and assign to it the sum of them. Print out the result.
</p>
',

"answer" => function () use ($floatOne, $floatTwo) {

    $sum = $floatOne / $floatTwo;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create two variables, "floatOne" and "numberOne". Give them the values: ' . $floatOne . ' and ' . $numberOne . '. Create a fourth variable, called "sum" and assign to it the product of them. Print out the result.
</p>
',

"answer" => function () use ($floatOne, $numberOne) {

    $sum = $floatOne * $numberOne;
    return $sum;
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
"title" => "Builtin Number-functions",

"intro" => "
<p>Math library
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the built-in function Number.parseInt to find out the integer representation of the variable. Create a variable called "floatOne" and give it the value ' . $floatOne . '. Create a variable called "sum" and print the result.
</p>
',

"answer" => function () use ($floatOne) {

    return (int)$floatOne;
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
"title" => "Builtin Math-functions",

"intro" => "
<p>Math library
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.max to find out the highest number in the serie: " . implode(', ', $serie1) . ".
</p>
",

"answer" => function () use ($serie1) {

    return max($serie1);
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.min to find out the lowest number in the serie: " . implode(', ', $serie1) . ".
</p>
",

"answer" => function () use ($serie1) {

    return min($serie1);
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.random to randomize a number between (and including) two given ones: " . $lowNr . " and " . $highNr . ".
</p>
",

"answer" => function () use ($lowNr, $highNr) {

    return rand($lowNr, $highNr);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.round to round the float number: " . $floatTwo . " to the closest integer.
</p>
",

"answer" => function () use ($floatTwo) {

    return round($floatTwo);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.PI to print out float value 'Pi'.
</p>
",

"answer" => function () {

    return pi();
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.pow to find the power of (base) " .  $numberOne . " and (exponent) " .  $smallNr . ".
</p>
",

"answer" => function () use ($numberOne, $smallNr) {

    return pow($numberOne, $smallNr);
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
"title" => "Strings and variables",

"intro" => "
<p>Grunderna i variabler, siffror, strängar, basic arithmetic + - / *.</p>
",

"shuffle" => false,

"questions" => [


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable, named "firstWord", that holds the word "' . $firstWord . '". Create a second variable, named "secondWord", that holds the word "' . $secondWord . '". Create a third variable, named "bothWords", and put together firstWord and secondWord with a space between. Print out the result.</p>
',

"answer" => function () use ($firstWord, $secondWord) {

    $bothWords = $firstWord . " " . $secondWord;
    return $bothWords;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>A good thing is that we do not need to use one variable for each word. Create a variable called 'sentence' and assign to it the text: '". $sentenceSerie1[$smallRandNr] ."' and print it out.</p>
",

"answer" => function () use ($smallRandNr, $sentenceSerie1) {
    $sentence = $sentenceSerie1[$smallRandNr];
    return $sentence;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create a varibale called 'wordOne' and assign to it: '" .  $wordSerie1[$smallRandNr] . "'. Create another varible called 'numberOne' and assign to it the value: " .  $numberTwo . ". Add them up to in a variable called 'sum' and print out the result.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr, $numberTwo) {
    $sum = $wordSerie1[$smallRandNr] . $numberTwo;
    return $sum;
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
"title" => "Builtin String-functions",

"intro" => "
<p>String library
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.max to find out the highest number in the serie: " . implode(', ', $serie1) . ".
</p>
",

"answer" => function () {
    global $serie1;

    return max($serie1);
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
"title" => "Builtin Date-functions",

"intro" => "
<p>Math library
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.max to find out the highest number in the serie: " . implode(', ', $serie1) . ".
</p>
",

"answer" => function () {
    global $serie1;

    return max($serie1);
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
"title" => "If, else if and else",

"intro" => "
<p>Intro text, && and ||, boolean?</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use if else statements to print out 'yes' if $numberOne is larger than $numberTwo, else print out 'no'.
</p>
",

"answer" => function () {
    global $numberOne, $numberTwo;

    return $numberOne > $numberTwo ? "yes" : "no";
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>You can compare variables in different ways. Compare the number 10 and a string that holds 10 ("10"). Use double equals when comparing (==). Use if else statements to print out "yes" if 10 equals "10", else print out "no".
</p>
',

"answer" => function () {
    $sentence = "This was convenient";
    return $sentence;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>As you saw in question 10, they are equal. This is because the double equal (==), do a type conversion of the variables. To get around that, you can use a triple equal (===). Then there is no type conversion done and the compare is made on both value and type. Use if else statements to print out "yes" if 10 equals "10", else print out "no". Use triple equals (===).
</p>
',

"answer" => function () {
    $sentence = "This was convenient";
    return $sentence;
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
"title" => "Switch, case",

"intro" => "
<p>Intro</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Build switch case statement.
</p>
",

"answer" => function () {
    global $numberOne, $numberTwo;

    return $numberOne > $numberTwo ? "yes" : "no";
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
"title" => "For loops",

"intro" => "
<p>Variables intro text</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a for-loop to print out the numbers 1 to 10.</p>
',

"answer" => function () {
    $sentence = "This was convenient";
    return $sentence;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a for-loop to print out the numbers 10 to 1.</p>
',

"answer" => function () {
    $sentence = "This was convenient";
    return $sentence;
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
"title" => "While loops",

"intro" => "
<p>Variables intro text</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a while-loop to print out the numbers 1 to 10.</p>
',

"answer" => function () {
    $sentence = "This was convenient";
    return $sentence;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a while-loop to print out the numbers 10 to 1.</p>
',

"answer" => function () {
    $sentence = "This was convenient";
    return $sentence;
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
