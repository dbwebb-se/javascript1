<?php

/**
 * Titel and introduction to the lab.
 */
$firstWord = "JavaScript";
$secondWord = "rocks!";

$numberOne = 10; // 100-999
$numberTwo = 6;  // 100-999

$serie1 = [347, -221, 54, 435];  // 100-999



return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 1 - javascript1",

"intro" => "
<p>Intro text to explain stuff.
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects
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

"answer" => function () {
    global $numberOne, $numberTwo;

    //$numberOne = 10;
    //$numberTwo = 5;
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
"title" => "Builtin Number-functions",

"intro" => "
<p>Math library
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number
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
"title" => "Builtin Math-functions",

"intro" => "
<p>Math library
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math
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
    //global $serie1;

    /*
    $f = function($serie[0], $serie[1]) use $serie1 {
        //specific functions stuff
    };
    return $f();
    */

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
<p>Create a variable, named "firstWord", that holds the word "' . $firstWord . '". Create a second variable, named "secondWord", that holds the word "' . $secondWord . '". Create a third variable, named "bothWords", and put together firstWord and secondWord with a space between the words. Print out the result.</p>
',

"answer" => function () {
    global $firstWord, $secondWord;

    //$firstWord = "JavaScript";
    //$secondWord = "rocks!";
    $bothWords = $firstWord . " " . $secondWord;
    return $bothWords;
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
"title" => "Builtin String-functions",

"intro" => "
<p>String library
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String</p>
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
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date
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
