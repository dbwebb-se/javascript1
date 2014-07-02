<?php

/**
 * Titel and introduction to the lab.
 */

$firstWord = "JavaScript";
$secondWord = "rocks!";

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
"title" => "Lab 1 - python",

"intro" => "
<p>If you need to peek at examples or just want to know more, take a look at the references at MDN's (Mozilla Developers Network) page: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference. Here you will find everything this lab will go through and much more.
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Integers, floats and variables",

"intro" => "
<p>The foundation of variables, numbers, strings and basic arithmetic.</p>
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
<p>Create a variable called "numberOne" and give it the value ' . $numberOne . '. Create another variable called "numberTwo" and give it the value ' . $numberTwo . '. Create a third variable called "sum" and assign to it the sum of the first two variables. Print out the result.</p>
',

"answer" => function () use ($numberOne, $numberTwo) {

    $sum = $numberOne + $numberTwo;
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
"title" => "Integers, floats and variables",

"intro" => "
<p>The foundation of variables, numbers, strings and basic arithmetic.</p>
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
<p>Create a variable called "numberOne" and give it the value ' . $numberOne . '. Create another variable called "numberTwo" and give it the value ' . $numberTwo . '. Create a third variable called "sum" and assign to it the sum of the first two variables. Print out the result.</p>
',

"answer" => function () use ($numberOne, $numberTwo) {

    $sum = $numberOne + $numberTwo;
    return $sum;
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
