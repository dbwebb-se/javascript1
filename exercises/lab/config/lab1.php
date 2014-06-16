<?php

return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 1 - javascript1",

"intro" => "
<p>Intro text to explain stuff.</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Variables",

"intro" => "
<p>Variables intro text</p>
",

"questions" => [


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable, named "firstWord", that holds the word "Javascript". Create a second variable, named "secondWord", that holds the word "rocks!". Create a third variable, named "bothWords", and put together firstWord and secondWord with a space between the words. Print out the result.</p>
',

"answer" => function () {
    $firstWord = "JavaScript";
    $secondWord = "rocks!";
    $bothWords = $firstWord . " " . $secondWord;
    return $bothWords;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value 10. Create another variable called "numberTwo" and give it the value 5. Create a third variable called "sum" and assign to it the sum of the first two variables. Print out the result.</p>
',

"answer" => function () {
    $numberOne = 10;
    $numberTwo = 5;
    $sum = $numberOne + $numberTwo;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>A good thing is that we do not need to use one variable for each word. Create a variable called "sentence" and assign to it the text: "This was convenient" and print it out.</p>
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
"title" => "Calculate with variables",

"intro" => "
<p>Intro text</p>
",

"questions" => [



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
<p>Intro text</p>
",

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use if else statements to print out "yes" if 10 is larger than 5, else print out "no".
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
"title" => "Loops",

"intro" => "
<p>Variables intro text</p>
",

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
