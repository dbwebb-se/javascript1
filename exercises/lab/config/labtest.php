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
"title" => "Testlab",

"intro" => "
<p>Lab test for testing various constructs.
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Return type is string",

"intro" => "
<p>Testing to return string as the correct answer.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable holding the value "Hello World".
</p>
',

"answer" => function () {

    return "Hello World";
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable holding the numeric value "42".
</p>
',

"answer" => function () {

    return "42";
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
"title" => "Return type is a value such as integer or float.",

"intro" => "
<p>Testing to return values as the correct answer.</p>
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable holding the value 42 
</p>
',

"answer" => function () {
    return 42;
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable holding the value 3.14 
</p>
',

"answer" => function () {
    return 3.14;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable holding the value -1 
</p>
',

"answer" => function () {
    return -1;
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
"title" => "Return type is boolean",

"intro" => "
<p>Testing to return boolean as the correct answer.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable holding the boolean value "true".
</p>
',

"answer" => function () {

    return true;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable holding the boolean value "false".
</p>
',

"answer" => function () {

    return false;
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
