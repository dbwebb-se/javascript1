<?php

/**
 * Titel and introduction to the lab.
 */
$q1 = 2;
$q2 = "This text is orange.";
$q3 = "sneeky";
$q4 = 15;
$q5 = "Hello! I am a smaller div.";
$q6 = 4;
$q7 = "Django";
$q8 = "This text is changed.";
$q9 = "rgb(43, 27, 23)";
$q10 = 322;



return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 5 - javascript1",

"intro" => "
<p>Intro text to explain stuff.
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Selectors",

"intro" => "
<p>
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Count the number of elements with the class name "left-side". Print out the result.
</p>
',

"answer" => function () use ($q1) {  
    
    return $q1;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Print out the text from the div called "center".
</p>
',

"answer" => function () use ($q2) {  
    
    return $q2;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Change the class name from "badColor" to "betterColor" and print out the text in the green div.
</p>
',

"answer" => function () use ($q3) {  
    
    return $q3;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Count the number of elements with the tag "td". Print our the result.
</p>
',

"answer" => function () use ($q4) {  
    
    return $q4;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Change the color of the text in the div "small" to black. Print our the text in the div.
</p>
',

"answer" => function () use ($q5) {  
    
    return $q5;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Remove the class "red" and "blue" from the elements "td" and print out the number in the first element "td".
</p>
',

"answer" => function () use ($q6) {  
    
    return $q6;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Print out the id of the fourth element with the tag "tr".
</p>
',

"answer" => function () use ($q7) {  
    
    return $q7;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Change the text on the "h4" element to "This text is changed.". Print out the text in "h4".
</p>
',

"answer" => function () use ($q8) {  
    
    return $q8;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>The element with the tag "h5" is styled inside the .html-file so find the color of the text and print it out.
</p>
',

"answer" => function () use ($q9) {  
    
    return $q9;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Add 15px padding to the left and 7px padding to the right in the element with id="larger". Print out the new width of the div.
</p>
',

"answer" => function () use ($q10) {  
    
    return $q10;
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
"title" => "More on objects",

"intro" => "
<p>
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>
</p>
",

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
