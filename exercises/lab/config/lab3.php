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
$arrRand = 3; // 0-4 for the array words

$serie1 = [347, -221, 54, 435];  // 100-999
$serie2 = [33, 2, -54, 17, 95, 99, 17, 54, 17, 5]; // array with duplicates

$wordSerie2 = ['red', 'blue', 'green', 'black', 'purple', 'yellow', 'pink', 'grey', 'brown', 'white'];
$questionSerie1 = ['How are you?', 'How is the weather?', 'What is your name?', 'Where are you going?', 'Where are you from?'];
$answerSerie1 = ['I have never been better.', 'Cloudy, with a chance of meatballs', 'I am Batman', 'I am going to Gotham City', 'Krypton'];

$arrWords1 = [
['melon', 'banana', 'apple', 'orange', 'lemon'],
['potato', 'carrot', 'onion', 'leek', 'cabbage'],
['milk', 'juice', 'lemonade', 'soda', 'water'],
['candy', 'cake', 'cupcakes', 'lollipop', 'pringles'],
['beef', 'chicken', 'pork', 'sausage', 'tofu']
];



return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 3 - javascript1",

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
<p>Create an array with the length of 5 and holds the numbers 1, 2, 3, 4, 5. Name the function "myFirstArray" and return the array.
</p>
',

"answer" => function () {
    
    $arr = [1,2,3,4,5];   
    
    return implode(',', $arr);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create an array that holds the words: ' . implode(", ", $arrWords1[$arrRand]) . '. Name the function "arrayStrings" and return the array.
</p>
',

"answer" => function () use ($arrWords1, $arrRand) {
    
    $arr = $arrWords1[$arrRand];    
    
    return implode(',', $arr);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create an array that holds the words: ' . implode(", ", $arrWords1[$arrRand]) . '. Name the function "returnOne" and only return the element on place: ' . $arrRand . '. Print out the result.</p>
',

"answer" => function () use ($arrWords1, $arrRand) {
    
    $word = $arrWords1[$arrRand][$arrRand];    
    
    return $word;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that merges two arrays: "' . implode(", ", $serie1) . '" and "' . implode(", ", $arrWords1[$arrRand]) . '" into a new array. Name the function "concArrays" and return the new array.
</p>
',

"answer" => function () use ($arrWords1, $arrRand, $serie1) {
    
    $result = array_merge($serie1, $arrWords1[$arrRand]);
        
    return implode(",", $result);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the array: "' . implode(", ", $arrWords1[$arrRand]) . '" to a function and reverse the order of the elements. Name the function "reverseArray" and return the array.
</p>
',

"answer" => function () use ($arrWords1, $arrRand) {
    
    $result = array_reverse($arrWords1[$arrRand]);
        
    return implode(",", $result);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that takes two arguments, an array and a value in the array. Use the array [' . implode(", ", $wordSerie2) . '] and the value "' . $wordSerie2[$smallRandNr] . '". The function should return the index in the array that the value is found at. For example, if the arguments are: [1, 2, 3] and 2, the function should return the index of 2, which in this case is 1. If the value does not exist in the array, it should return -1. Name the function "findIndex" and return the result.
</p>
',

"answer" => function () use ($wordSerie2, $smallRandNr) {
    
    $result = array_search($wordSerie2[$smallRandNr], $wordSerie2);
        
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the array: [' . implode(", ", $arrWords1[$arrRand]) . '] to a function and use a "forEach-loop" to change all items in the array to uppercase. Name the function "uppercaseArray" and return the array.
</p>
',

"answer" => function () use ($arrWords1, $arrRand) {
    
    $result = [];
    $i = 0;
    foreach ($arrWords1[$arrRand] as $val) {
        $result[$i] = strtoupper($val);
        $i++;
    }   
    return implode(",", $result);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the array: [' . implode(", ", $arrWords1[$arrRand]) . '] to a function and use a "forEach-loop" to add the text "is good for you" to all elements in the array. Name the function "changeArrayElements" and return the array.
</p>
',

"answer" => function () use ($arrWords1, $arrRand) {
    
    $result = [];
    $i = 0;
    foreach ($arrWords1[$arrRand] as $val) {
        $result[$i] .= $val . ' is good for you';
        $i++;
    }   
    return implode(",", $result);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the array: [' . implode(", ", $arrWords1[$arrRand]) . '] to a function and join it into a string. Use a space (" ") to separate the elements. Name the function "joinArray" and return the array.
</p>
',

"answer" => function () use ($arrWords1, $arrRand) {
    
    $result = join(" ",$arrWords1[$arrRand]);
    
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the array [' . implode(", ", $serie2) . '] to a function that returns the last index of the element 17. Name the function "lastIndex" and return the result.
</p>
',

"answer" => function () use ($serie2) {
    $result = -1;
    for($i = 0; $i < count($serie2); $i++) {
        if($serie2[$i] === 17) {
            $result = $i;
        }
    }
    return $result;    
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the array [' . implode(", ", $arrWords1[$arrRand]) . '] to a function and use "pop()" to remove the last element. Return a string that holds the array before you remove the element and after its removed. Also include the removed element. Return the string and name the function "popArray".
</p>
',

"answer" => function () use ($arrWords1, $arrRand) {
    $arrBefore = 'Before: [' . join(", ", $arrWords1[$arrRand]) . ']';
    $result = $arrBefore;
    $removed = ' Removed: ' . array_pop($arrWords1[$arrRand]);
    $arrAfter = ' After: [' . join(", ", $arrWords1[$arrRand]) . ']';
    $result .= $arrAfter . $removed;
    return $result;   
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that adds the element ' . $smallRandNr . ' to the array [' . implode(", ", $serie1) . ']. The function should take two arguments: the array and an element to add to it. Name the function "pushArray", return the array.
</p>
',

"answer" => function () use ($smallRandNr, $serie1) {
    $result = $serie1;
    array_push($result, $smallRandNr);
    return implode(",", $result);   
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the array [' . implode(", ", $arrWords1[$arrRand]) . '] to a function and use "shift()" to remove the first element. Return a string that holds the array before you remove the element and after its removed. Also include the removed element. Return the string and name the function "shiftArray".
</p>
',

"answer" => function () use ($arrWords1, $arrRand) {
    $arrBefore = 'Before: [' . join(", ", $arrWords1[$arrRand]) . ']';
    $result = $arrBefore;
    $removed = ' Removed: ' . array_shift($arrWords1[$arrRand]);
    $arrAfter = ' After: [' . join(", ", $arrWords1[$arrRand]) . ']';
    $result .= $arrAfter . $removed;
    return $result;   
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Pass the array [' . implode(", ", $serie2) . '] to a function that sort the array. Name the function "sortArray" and return the sorted array.
</p>
',

"answer" => function () use ($serie2) {
    $result = $serie2;
    sort($result);
    return implode(",", $result);   
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
