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
$smallNr = 2; // 1-5
$smallRandNr = 5; // 0-9

$serie1 = [347, -221, 54, 435];  // 100-999
$wordSerie1 = ['canine', 'rabbit', 'chicken', 'mouse', 'horse', 'camel', 'crocodile', 'werewolf', 'reindeer', 'elephant'];
$sentenceSerie1 = ['I am in a glass case of emotion', 'If peeing your pants is cool, consider me Miles Davis', 'Do you want to hear the most annoying sound in the world?', 'Thank you very little', 'Tigers love pepper, they hate cinnamon.', 'I wake up in the morning and I piss excellence', 'I think most Scottish cuisine is based on a dare', 'I do not know, I mostly just hurt people.', 'I aim to misbehave.', ' I wish monkeys could Skype'];


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
<p>Use the built-in function String.bold to add the html element <b> to the string: '" .  $wordSerie1[$smallRandNr] . "' and make the text bold. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr) {
    $result = '<b>'. $wordSerie1[$smallRandNr] . '</b>';
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.charAt to return the character at a given index. Create a variable with the word: '" .  $wordSerie1[$smallRandNr] . "' and return the character at index: " . ($smallNr-1) . ". Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr, $smallNr) {
    $result = $wordSerie1[$smallRandNr]{$smallNr-1};
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.toUppercase to transform the string: '" . $sentenceSerie1[$smallRandNr] . "' to uppercase. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($sentenceSerie1, $smallRandNr) {
    $result = strtoupper($sentenceSerie1[$smallRandNr]);
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.repeat to create a new string that contains the string: '" . $wordSerie1[$smallRandNr] . "' repeated " . $smallNr+10 . " number of times. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr, $smallNr) {
    $result = str_repeat($wordSerie1[$smallRandNr], $smallNr+10);
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.length to find out the length of the string: '" . $wordSerie1[$smallRandNr] . "'. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr) {
    $result = strlen($wordSerie1[$smallRandNr]);
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.concat to transform two strings into one. Create two variables 'stringOne' and 'stringTwo'. Assign to them the strings: '" . $wordSerie1[$smallRandNr] . "' and '" . $wordSerie1[$smallRandNr-1] . "'. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr) {
    $result = $wordSerie1[$smallRandNr] . $wordSerie1[$smallRandNr-1];
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
<p>Create a Date object. Use the built-in function Date.getMinutes to get the minutes from your Date object. Return the result in a varible called 'result'.
</p>
",

"answer" => function () {

    return date('i');
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create a Date object. Use the built-in function Date.getFullYear to get the year from your Date object. Return the result in a varible called 'result'.
</p>
",

"answer" => function () {

    return date('Y');
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
<p>Use if else statements to print out 'yes' if " . $numberOne . " is larger than " . $numberTwo . ", else print out 'no'.
</p>
",

"answer" => function () use ($numberOne, $numberTwo) {

    return $numberOne > $numberTwo ? "yes" : "no";
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>You can compare variables in different ways. Compare the number ' . $numberOne . ' and a string that holds the same value ("' . $numberOne . '"). Use triple equals when comparing (===). Use if else statements to print out "yes" if they are equal, else print out "no".
</p>
',

"answer" => function () use ($numberOne) {
    
    return $numberOne === strval($numberOne) ? "yes" : "no";
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use if else statements to print out "higher" if the length of an array containing these words: "' . implode(', ', $wordSerie1) . '", are greater than ' . $smallRandNr . '. If it is smaller, print out "lower" and if it is equal, print out "equal".
</p>
',

"answer" => function () use ($wordSerie1, $smallRandNr) {
    
    $result = '';
    if(count($wordSerie1) < $smallRandNr) {
        $result = 'lower';
    }
    else if(count($wordSerie1) > $smallRandNr) {
        $result = 'higher';
    }
    else {
        $result = 'equal';
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



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a for loop to increment ' . $numberTwo . ' with the value ' . $smallNr . ', 10 times. Return the result.
</p>
',

"answer" => function () use ($numberTwo, $smallNr) {
    
    $result = 0;
    for($i = 0; $i < 10; $i++) {
        $result += $smallNr;
    }   
    return $result;
},

],




/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a for loop to subtract ' . $smallNr . ' from ' . $numberOne . ', 10 times. Return the result.
</p>
',

"answer" => function () use ($numberOne, $smallNr) {
    
    $result = $numberOne;
    for($i = 0; $i < 10; $i++) {
        $result -= $smallNr;
    }   
    return $result;
},

],




/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>NOT DONE. Return the result.
</p>
',

"answer" => function () use ($numberOne, $smallNr) {
    
    $result = $numberOne;
    for($i = 0; $i < 10; $i++) {
        $result -= $smallNr;
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
