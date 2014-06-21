<?php

/**
 * Titel and introduction to the lab.
 */
$firstWord = "JavaScript";
$secondWord = "rocks!";

$numberOne = 10; // 100-999
$numberTwo = 6;  // 100-999
$numberThree = 56; // 100-999
$floatOne = 12.55; // 100-999
$floatTwo = 5.22; // 100-999 
$lowNr = 15; // 0 - 100
$highNr = 625; // 500 - 999
$smallNr = 2; // 1-5
$smallRandNr = 5; // 0-9
$qRandNr = 2; // 0-4 for the questions

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
"title" => "Basic functions",

"intro" => "
<p>????</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function called "sumNumbers" that returns the sum of two numbers. The function should take two arguments: ' . $numberOne . ' and ' . $numberTwo . '. Print out the result.</p>
',

"answer" => function () use ($numberOne, $numberTwo) {

    function sumNumbers($a,$b) {
        return $a+$b;
    }
    return sumNumbers($numberOne, $numberTwo);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that returns the product of two numbers. The function should be called "productNumbers" and take two arguments ' . $numberTwo . ' and ' . $numberThree . '. Print out the result.
</p>
',

"answer" => function () use ($numberTwo, $numberThree) {

    function productNumbers($a,$b) {
        return $a*$b;
    }
    return productNumbers($numberOne, $numberTwo);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that returns the sum of all numbers between two chosen numbers. The function should take two arguments, one representing the lowest boundary and one that represents the highest boundary. Use the values ' . $smallRandNr . ' and ' . ($numberOne+10) . '. For example the arguments 10 and 20 should return the sum of 11+12+13...+19. Name the function "sumRangeNumbers" and print out the result.
</p>
',

"answer" => function () use ($smallRandNr, $numberOne) {

    function sumRangeNumbers($a,$b) {
        $result = 0;
        for($i = ($a+1); $i < $b; $i++) {
            $result += $i;
        }
        return $result;
    }
    return sumRangeNumbers($smallRandNr, $numberOne+10);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that returns a phrase. Your word is "' . $wordSerie2[$smallRandNr] . '". Pass the argument to the function and the returned phrase should be: "My favorite color is ' . $wordSerie2[$smallRandNr] . '". Name the function "stringPhrase" and print out the result.
</p>
',

"answer" => function () use ($wordSerie2, $smallRandNr) {

    function stringPhrase($word) {
        $result = 'My favorite color is ' . $word;
        return $result;
    }
    return stringPhrase($wordSerie2[$smallRandNr]);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that gives an answer to the exact question "' . $questionSerie1[$qRandNr] . '". The answer should be "' . $answerSerie1[$qRandNr] . '". Name the function "stringResponse" and print out the result.
</p>
',

"answer" => function () use ($questionSerie1, $answerSerie1, $qRandNr) {

    function stringResponse($phrase) {
        $result = '';
        for($i = 0; $i < count($questionSerie1); $i++) {
            if($phrase === $questionSerie1[$i]) {
                $result = $answerSerie1[$i];
            }
        }
        return $result;
    }
    return stringResponse($questionSerie1[$qRandNr]);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>
</p>
',

"answer" => function () use () {

    
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>
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
"title" => "Builtin Number-functions",

"intro" => "
<p>Math library
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use the built-in function Number.parseInt to find out the integer representation of the variable. Create a variable called "floatOne" and give it the value ' . $floatOne . '. Create a variable called "sum" and print the result.
</p>
',

"answer" => function () use ($floatOne) {

    return (int)$floatOne;
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

    return max($serie1);
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.min to find out the lowest number in the serie: " . implode(', ', $serie1) . ".
</p>
",

"answer" => function () use ($serie1) {

    return min($serie1);
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.random to randomize a number between (and including) two given ones: " . $lowNr . " and " . $highNr . ".
</p>
",

"answer" => function () use ($lowNr, $highNr) {

    return rand($lowNr, $highNr);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.round to round the float number: " . $floatTwo . " to the closest integer.
</p>
",

"answer" => function () use ($floatTwo) {

    return round($floatTwo);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.PI to print out float value 'Pi'.
</p>
",

"answer" => function () {

    return pi();
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.pow to find the power of (base) " .  $numberOne . " and (exponent) " .  $smallNr . ".
</p>
",

"answer" => function () use ($numberOne, $smallNr) {

    return pow($numberOne, $smallNr);
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
<p>Create a variable, named "firstWord", that holds the word "' . $firstWord . '". Create a second variable, named "secondWord", that holds the word "' . $secondWord . '". Create a third variable, named "bothWords", and put together firstWord and secondWord with a space between. Print out the result.</p>
',

"answer" => function () use ($firstWord, $secondWord) {

    $bothWords = $firstWord . " " . $secondWord;
    return $bothWords;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>A good thing is that we do not need to use one variable for each word. Create a variable called 'sentence' and assign to it the text: '". $sentenceSerie1[$smallRandNr] ."' and print it out.</p>
",

"answer" => function () use ($smallRandNr, $sentenceSerie1) {
    $sentence = $sentenceSerie1[$smallRandNr];
    return $sentence;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create a varibale called 'wordOne' and assign to it: '" .  $wordSerie1[$smallRandNr] . "'. Create another varible called 'numberOne' and assign to it the value: " .  $numberTwo . ". Add them up to in a variable called 'sum' and print out the result.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr, $numberTwo) {
    $sum = $wordSerie1[$smallRandNr] . $numberTwo;
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
"title" => "Builtin String-functions",

"intro" => "
<p>String library
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.bold to add the html element <b> to the string: '" .  $wordSerie1[$smallRandNr] . "' and make the text bold. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr) {
    $result = '<b>'. $wordSerie1[$smallRandNr] . '</b>';
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.charAt to return the character at a given index. Create a variable with the word: '" .  $wordSerie1[$smallRandNr] . "' and return the character at index: " . ($smallNr-1) . ". Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr, $smallNr) {
    $result = $wordSerie1[$smallRandNr]{$smallNr-1};
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.toUppercase to transform the string: '" . $sentenceSerie1[$smallRandNr] . "' to uppercase. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($sentenceSerie1, $smallRandNr) {
    $result = strtoupper($sentenceSerie1[$smallRandNr]);
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.repeat to create a new string that contains the string: '" . $wordSerie1[$smallRandNr] . "' repeated " . $smallNr+10 . " number of times. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr, $smallNr) {
    $result = str_repeat($wordSerie1[$smallRandNr], $smallNr+10);
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.length to find out the length of the string: '" . $wordSerie1[$smallRandNr] . "'. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr) {
    $result = strlen($wordSerie1[$smallRandNr]);
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.concat to transform two strings into one. Create two variables 'stringOne' and 'stringTwo'. Assign to them the strings: '" . $wordSerie1[$smallRandNr] . "' and '" . $wordSerie1[$smallRandNr-1] . "'. Return the result as a varibale called: 'result'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr) {
    $result = $wordSerie1[$smallRandNr] . $wordSerie1[$smallRandNr-1];
    return $result;
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
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create a Date object. Use the built-in function Date.getMinutes to get the minutes from your Date object. Return the result in a varible called 'result'.
</p>
",

"answer" => function () {

    return date('i');
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create a Date object. Use the built-in function Date.getFullYear to get the year from your Date object. Return the result in a varible called 'result'.
</p>
",

"answer" => function () {

    return date('Y');
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
<p>Use if else statements to print out 'yes' if " . $numberOne . " is larger than " . $numberTwo . ", else print out 'no'.
</p>
",

"answer" => function () use ($numberOne, $numberTwo) {

    return $numberOne > $numberTwo ? "yes" : "no";
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>You can compare variables in different ways. Compare the number ' . $numberOne . ' and a string that holds the same value ("' . $numberOne . '"). Use triple equals when comparing (===). Use if else statements to print out "yes" if they are equal, else print out "no".
</p>
',

"answer" => function () use ($numberOne) {
    
    return $numberOne === strval($numberOne) ? "yes" : "no";
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use if else statements to print out "higher" if the length of an array containing these words: "' . implode(', ', $wordSerie1) . '", are greater than ' . $smallRandNr . '. If it is smaller, print out "lower" and if it is equal, print out "equal".
</p>
',

"answer" => function () use ($wordSerie1, $smallRandNr) {
    
    $result = '';
    if(count($wordSerie1) < $smallRandNr) {
        $result = 'lower';
    }
    else if(count($wordSerie1) > $smallRandNr) {
        $result = 'higher';
    }
    else {
        $result = 'equal';
    }
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use if else statements to print out "yes" if ' . $numberThree . ', are higher than ' . $smallNr . ' AND if ' . $smallNr . ' is lower than 5. If the numbers are equal, print out "equal", else print out "no".
</p>
',

"answer" => function () use ($numberThree, $smallNr) {
    
    $result = '';
    if($numberThree > $smallNr && $smallNr < 5) {
        $result = 'yes';
    }
    else if($numberThree === $smallNr) {
        $result = 'equal';
    }
    else {
        $result = 'no';
    }
    
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use if else statements to print out "yes" if ' . $numberThree . ', are higher than or equal to ' . $numberTwo . ' OR  if ' . $smallNr . ' is lower than 5. If the numbers are equal, print out "equal", else print out "no".
</p>
',

"answer" => function () use ($numberThree, $numberTwo, $smallNr) {
    
    $result = '';
    if($numberThree >= $numberTwo || $smallNr < 5) {
        $result = 'yes';
    }
    else if($numberThree === $numberTwo && $smallNr === $numberThree) {
        $result = 'equal';
    }
    else {
        $result = 'no';
    }
    
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use if else statements to print out "true" or "1" if ' . $numberOne . ', are less than or equal to ' . $numberTwo . '. Else print out "false" or "0". Return a boolean variable called "result".
</p>
',

"answer" => function () use ($numberOne, $numberTwo) {
    
    $result = false;
    if($numberTwo <= $numberTwo) {
        $result = true;
    }
    
    return $result;
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
<p>Build a switch case statement that uses the number " . $numberOne . " to test if it is 'higher', 'lower' or 'equal' to " . $numberThree . ". Print out the result (higher, lower or equal) with a variable called 'result'.
</p>
",

"answer" => function () use ($numberOne, $numberThree) {
    
    $result = '';

    switch ($numberOne) {
        case ($numberOne > $numberThree) : 
        $result = 'higher';
        break;
        case ($numberOne < $numberThree) :
        $result = 'lower';
        break;
        default: $result = 'equal';
    }
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Build a switch case statement with the cases: " . implode(', ', $wordSerie1) . ". Return a string, something like: 'My favorite animal is (your word)'. Use the word: '" . $wordSerie1[$smallRandNr] . "'. Return the string in a variable called 'result' and the switch case should work on all animals! If you try with an animal that you do not have in your statement it should return 'I dont like animals.'.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr) {
    
    $result = 'My favorite animal is ';

    switch ($wordSerie1[$smallRandNr]) {
        case ($wordSerie1[0]) : 
        $result .= $wordSerie1[0];
        break;
        case ($wordSerie1[1]) : 
        $result .= $wordSerie1[1];
        break;
        case ($wordSerie1[2]) : 
        $result .= $wordSerie1[2];
        break;
        case ($wordSerie1[3]) : 
        $result .= $wordSerie1[3];
        break;
        case ($wordSerie1[4]) : 
        $result .= $wordSerie1[4];
        break;
        case ($wordSerie1[5]) : 
        $result .= $wordSerie1[5];
        break;
        case ($wordSerie1[6]) : 
        $result .= $wordSerie1[6];
        break;
        case ($wordSerie1[7]) : 
        $result .= $wordSerie1[7];
        break;
        case ($wordSerie1[8]) : 
        $result .= $wordSerie1[8];
        break;
        case ($wordSerie1[9]) : 
        $result .= $wordSerie1[9];
        break;
        default: $result = 'I dont like animals.';
    }
    return $result;
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
<p>Use a for loop to increment ' . $numberTwo . ' with the value ' . $smallNr . ', 10 times. Return the result.
</p>
',

"answer" => function () use ($numberTwo, $smallNr) {
    
    $result = 0;
    for($i = 0; $i < 10; $i++) {
        $result += $smallNr;
    }   
    return $result;
},

],




/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a for loop to subtract ' . $smallNr . ' from ' . $numberOne . ', 10 times. Return the result.
</p>
',

"answer" => function () use ($numberOne, $smallNr) {
    
    $result = $numberOne;
    for($i = 0; $i < 10; $i++) {
        $result -= $smallNr;
    }   
    return $result;
},

],




/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a for loop to add all the values in the range -' . $numberOne . ' to ' . $numberOne . ' to a string. Return the result.
</p>
',

"answer" => function () use ($numberOne) {
    
    $result = '';
    for($i = $numberOne * -1; $i <= $numberOne; $i++) {
        $result .= $i . ', ';
    }   
    return $result;
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
<p>Use a while loop to increment ' . $numberThree . ' with the value ' . $smallNr . ', 5 times. Return the result.
</p>',

"answer" => function () use ($numberThree, $smallNr) {
    $result = $numberThree;
    $counter = 0;
    while($counter < 5) {
        $result += $smallNr;
        $counter += 1;
    }
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a while loop to subtract ' . $smallNr . ' from ' . $numberTwo . ', 20 times. Return the result.
</p>
',

"answer" => function () use ($smallNr, $numberTwo) {
    $result = $numberThree;
    $counter = 20;
    while($counter > 0) {
        $result -= $smallNr;
        $counter -= 1;
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
