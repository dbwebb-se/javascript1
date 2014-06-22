<?php

/**
 * Titel and introduction to the lab.
 */
$numberOne = 10; // 100-999
$numberTwo = 6;  // 100-999
$numberThree = 56; // 100-999
$floatTwo = 5.22; // 100-999 
$lowNr = 15; // 0 - 100
$highNr = 625; // 500 - 999
$smallNr = 2; // 1-5
$smallRandNr = 5; // 0-9
$qRandNr = 2; // 0-4 for the questions
$fbStart = 1; // 1-5
$fbStop = 25; // 20-30

$serie1 = [347, -221, 54, 435];  // 100-999
$wordSerie2 = ['red', 'blue', 'green', 'black', 'purple', 'yellow', 'pink', 'grey', 'brown', 'white'];
$questionSerie1 = ['How are you?', 'How is the weather?', 'What is your name?', 'Where are you going?', 'Where are you from?'];
$answerSerie1 = ['I have never been better.', 'Cloudy, with a chance of meatballs', 'I am Batman', 'I am going to Gotham City', 'Krypton'];


return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 2 - javascript1",

"intro" => "
<p>Intro text to explain stuff.
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Arrays",

"intro" => "
<p>Some intro text.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>This is a question.</p>
',

"answer" => function () use () {

    
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
"title" => "This is a new section.",

"intro" => "
<p>Some intro text.
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>This is a question.
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
"title" => "This is a new section",

"intro" => "
<p>Some information...
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>This is a question.
</p>
",

"answer" => function () use () {

    
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
"title" => "This is a section",

"intro" => "
<p>Some intro text.</p>
",

"shuffle" => false,

"questions" => [


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>This is a question.</p>
',

"answer" => function () use () {

    
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
"title" => "This is a new section.",

"intro" => "
<p>Some intro text.
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>This is a question.
</p>
",

"answer" => function () use () {
    
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
"title" => "This is a new section.",

"intro" => "
<p>Some intro text.
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>This is a question.
</p>
",

"answer" => function () {

    return date('i');
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
"title" => "This  is a new section",

"intro" => "
<p>Some intro text.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>This is a question.
</p>
",

"answer" => function () use () {

    
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
"title" => "This is a new section.",

"intro" => "
<p>Some intro text</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>This is a question.
</p>
",

"answer" => function () use () {
    
    
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
"title" => "This is a new section.",

"intro" => "
<p>Some intro text.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>This is a question.
</p>
',

"answer" => function () use () {
    
    
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
"title" => "This is a new section.",

"intro" => "
<p>Some intro text.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>This is a question.
</p>',

"answer" => function () use () {
    
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
