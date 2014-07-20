<?php

/**
 * Titel and introduction to the lab.
 */
$obj = 
[
['name'=>'Roo', 'animal'=>'kangaroo', 'appearIn'=>'Winnie the pooh', 'color'=>"brown"],
['name'=>'Eeyore', 'animal'=>'donkey', 'appearIn'=>'Winnie the pooh', 'color'=>'gray'],
['name'=>'Sid', 'animal'=>'sloth', 'appearIn'=>'Ice Age', 'color'=>'yellow'],
['name'=>'Manny', 'animal'=>'mammoth', 'appearIn'=>'Ice Age', 'color'=>'brown'],
['name'=>'Kermit', 'animal'=>'frog', 'appearIn'=>'The Muppets', 'color'=>'green'],
['name'=>'Piglet', 'animal'=>'pig', 'appearIn'=>'Winnie-the-pooh', 'color'=>'pink'],
['name'=>'Stripe', 'animal'=>'gremlin', 'appearIn'=>'Gremlins', 'color'=>'green'],
['name'=>'Nemo', 'animal'=>'clownfish', 'appearIn'=>'Finding Nemo', 'color'=>'orange'],
['name'=>'Bruce', 'animal'=>'shark', 'appearIn'=>'Finding Nemo', 'color'=>'gray'],
['name'=>'Falcor', 'animal'=>'luckdragon', 'appearIn'=>'The Neverending story', 'color'=>'pink']
];
$r1 = 6; // 0-9
$r2 = $r1-1;
$r2 < 0 ? $r2=9 : $r2+=0; 
$print1 = "My name is " . $obj[$r1]["name"];
$print2 = $print1 . " and I am a " . $obj[$r1]["color"] . " " . $obj[$r1]["animal"];
$print3 = $print2 . ". I appear in the movie " . $obj[$r1]["appearIn"] . ".";

return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 5 - python",

"intro" => "
<p>In this section you should answer with a 'print-method' to all questions. The first print-method should be called 'print1', the next 'print2' etc...
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Objects sect 1",

"intro" => "
<p>?????????????
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create an object-class called "Character". Create an instance of the object and call it: "myObj". Give it two attributes: "name" and "print1". The name should be "' . $obj[$r1]["name"] . '". Answer with the print-method and present your object\'s name: "My name is  ' . $obj[$r1]["name"] . '".
</p>
',

"answer" => function () use ($print1) {

    return $print1;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Give your object some more attributes: "color" and "animal". Use the values: "' . $obj[$r1]["color"] . '" and "' . $obj[$r1]["animal"] . '". Answer with a new print-method in the format: "' . $print2 . '".
</p>
',

"answer" => function () use ($print2) {

    return $print2;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Give your object a last attribute: "appearIn". Use the value: "' . $obj[$r1]["appearIn"] . '". Answer with a new print-method in the format: "' . $print3 . '".
</p>
',

"answer" => function () use ($print3) {

    return $print3;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Make a deep-copy of your object and call it "myObj2". Change its attributes to 
</p>
',

"answer" => function () use ($print3) {

    return $print3;
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
"title" => "Objects sect 2",

"intro" => "
<p>?????????????
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
