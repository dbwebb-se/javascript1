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
$r2 < 0 ? $r2 = 9 : $r2 += 0; 
$r3 = $r2-1;
$r3 < 0 ? $r3 = 9 : $r3 += 0;
$print1 = "My name is " . $obj[$r1]["name"];
$print2 = $print1 . " and I am a " . $obj[$r1]["color"] . " " . $obj[$r1]["animal"];
$print3 = $print2 . ". I appear in the movie " . $obj[$r1]["appearIn"] . ".";
$print3New = "My name is " . $obj[$r2]["name"] . " and I am a " . $obj[$r2]["color"] . " " . $obj[$r2]["animal"] . ". I appear in the movie " . $obj[$r2]["appearIn"] . ".";
$acc = [
["Savings", "56892", 1000],
["Private", "85691", 12000],
["Food", "15899", 4500],
["Travel", "85223", 4520],
["Family", "66952", 5000],
["Clothes", "42136", 650],
["Salary", "20156", 16000],
["Secret", "49653", 109],
["Budget", "98755", 45064],
["Shopping", "74563", 3000],
];
$bigR = 1045; // -1000 - 10000 ?

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
<p>Make a deep-copy of your object and call it "myObj2". Change its attributes to name: "' . $obj[$r2]["name"] . '", animal: "' . $obj[$r2]["animal"] . '", color: "' . $obj[$r2]["color"] . '", appearIn: "' . $obj[$r2]["appearIn"] . '". Use the new objects "print3" as your answer.
</p>
',

"answer" => function () use ($print3New) {

    return $print3New;
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
<p>Create an object-class called "Account". Give it the attributes: "name", "number", "balance" and a print-method that prints out its information as a string: "Account: ?, Number: ?, Balance: ? ". Initiate "name" and "number" with the string "unknown" and initiate "balance" with 0.0. Call the print-method on the object-class and answer with the printed result.
</p>
',

"answer" => function () {

    return "Account: unknown, Number: unknown, Balance: 0.0";
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create an instance of the Account-class, called "acc1" and assign the values: name: "' . $acc[$r1][0] . '", number: "' . $acc[$r1][1] . '", balance: "' . $acc[$r1][2] . '". Answer with the print-method.
</p>
',

"answer" => function () use ($acc, $r1) {

    return "Account: " . $acc[$r1][0] . ", Number: " . $acc[$r1][1] . ", Balance: " . $acc[$r1][2];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create another instance of the Account-class, called "acc2" and assign the values: name: "' . $acc[$r2][0] . '", number: "' . $acc[$r2][1] . '", balance: "' . $acc[$r2][2] . '". Answer with the print-method.
</p>
',

"answer" => function () use ($acc, $r2) {

    return "Account: " . $acc[$r2][0] . ", Number: " . $acc[$r2][1] . ", Balance: " . $acc[$r2][2];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create one more instance of the Account-class, called "acc3" and assign the values: name: "' . $acc[$r3][0] . '", number: "' . $acc[$r3][1] . '", balance: "' . $acc[$r3][2] . '". Answer with the print-method.
</p>
',

"answer" => function () use ($acc, $r3) {

    return "Account: " . $acc[$r3][0] . ", Number: " . $acc[$r3][1] . ", Balance: " . $acc[$r3][2];
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a method in the Account class, called "transfer". It should take one argument, the amount to transfer, and change its own balance with the corresponding argument. Answer with the print-method after you used your new method on "acc3" with the argument: ' . $bigR . '. 
</p>
',

"answer" => function () use ($acc, $r3, $bigR) {

	$temp = $bigR += $acc[$r3][2];

    return "Account: " . $acc[$r3][0] . ", Number: " . $acc[$r3][1] . ", Balance: " . $temp;
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
