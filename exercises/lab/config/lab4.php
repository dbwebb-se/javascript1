<?php

/**
 * Titel and introduction to the lab.
 */
$p1 = array('firstName'=>'Isaac', 'lastName'=>'Newton', 'nationality'=>'England', 'born'=>new DateTime("Jan 4, 1643"));
$p2 = array('firstName'=>'Albert', 'lastName'=>'Einstein', 'nationality'=>'Germany', 'born'=>new DateTime("Mar 14, 1879"));
$print1 = "My name is " . $p1["firstName"];
$print2 = $print1 . " " . $p1["lastName"] . ", from " . $p1["nationality"];
$print10 = "My name is " . $p2["firstName"] . " " . $p2["lastName"] . ", from " . $p2["nationality"];

$x = [45,76,34]; // ?-?
$y = [34,77,234]; // ?-?
$h = [55,76,124]; // ?-?
$w = [231,45,94]; // ?-?

$xStep = 43; // -100-100
$yStep = -73; // -100-100


return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 4 - javascript1",

"intro" => "
<p>Intro text to explain stuff.
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Create object",

"intro" => "
<p>To succeed with this lab, create an empty object called 'person' with the object literal. Create it outside your functions to make it global. For each question, you should create a print method, print1, print2, print3...etc. In this method, your object should print the newly added properties.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Give your object the property "firstName" and name him "' . $p1["firstName"] . '". Also give him a method called "print1". This method should present your object with the first name: "My name is ' . $p1["firstName"] . '."  
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
<p>Give your object the properties "lastName" and "nationality". The attributes should be "' . $p1["lastName"] . '" and "' . $p1["nationality"] . '". Create the method print2 and add these to the prestentation: '. $print2 . '.
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
<p>Give your object the property "born" and add a Date object: "' . $p1["born"]->format('Y-m-d') . '". Add this to print3 and print it out: ' . $print2 . '. I am born '. $p1['born']->format('Y') . '.
</p>
',

"answer" => function () use ($p1, $print2) {

    return $print2 . ". I am born " . $p1['born']->format('Y');
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a second person, called "person2" from the first one using Object.create. Change his properties to: ' . $p2["firstName"] . ' ' . $p2["lastName"] . ', ' . $p2["nationality"] . '. Born: ' . $p2["born"]->format('Y-m-d') . '. Print out the second persons method "print3".
</p>
',

"answer" => function () use($p2, $print10) {

    return $print10 . ". I am born " . $p2['born']->format('Y');
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
<p>Create a object called 'shape' with the properties: 'x', 'y', 'height', 'width' and 'print'. Create a new object from 'shape' called 'shape1' and initiate the properties with: x: " . $x[0] . ", y: " . $y[0] . ", height: " . $h[0] . " and width: " . $w[0] . ". Use the 'print' method to print out the assigned values: 'X: ?, Y: ?, height: ?, width: ?'
</p>
",

"answer" => function () use ($x, $y, $h, $w) {

    return "X: " . $x[0] . ", Y: " . $y[0] . ", height: " . $h[0] . ", width: " . $w[0];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create another object from 'shape' called 'shape2' and initiate the properties with: x: " . $x[1] . ", y: " . $y[1] . ", height: " . $h[1] . " and width: " . $w[1] . ". Use the 'print' method to print out the assigned values.
</p>
",

"answer" => function () use ($x, $y, $h, $w) {

    return "X: " . $x[1] . ", Y: " . $y[1] . ", height: " . $h[1] . ", width: " . $w[1];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create one more object from 'shape' called 'shape3' and initiate the properties with: x: " . $x[2] . ", y: " . $y[2] . ", height: " . $h[2] . " and width: " . $w[2] . ". Use the 'print' method to print out the assigned values.
</p>
",

"answer" => function () use ($x, $y, $h, $w) {

    return "X: " . $x[2] . ", Y: " . $y[2] . ", height: " . $h[2] . ", width: " . $w[2];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create a method in 'shape' that allows the object to move a given number of steps. The method should take two arguments, " . $xStep . " and " . $yStep . ". The numbers represents the number of steps to move in x-axis and y-axis. Name the method 'move' and use 'print' on the second object to print out the new position. 
</p>
",

"answer" => function () use ($x, $y, $h, $w, $xStep, $yStep) {

    $x[1] += $xStep;
    $y[1] += $yStep;

    return "X: " . $x[1] . ", Y: " . $y[1] . ", height: " . $h[1] . ", width: " . $w[1];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create a method in 'shape', called 'printPos', that prints out the current position of the object: 'X: ?, Y: ?'. Put your three objects in an array and use a for each loop to print out all objects position. Each 'print' should be on its own line. 
</p>
",

"answer" => function () use ($x, $y, $xStep, $yStep) {

    $result = "";
    for($i = 0; $i < 3; $i++) {
        if($i === 1) {
            $result .= "X: " . ($x[$i]+=$xStep) . ", Y: " . ($y[$i]+=$yStep) . "<br>";
        }
        else {
            $result .= "X: " . $x[$i] . ", Y: " . $y[$i] . "<br>";
        }
    }
    return $result;
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
