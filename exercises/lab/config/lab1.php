<?php

/**
 * Titel and introduction to the lab.
 */
$firstWord = "JavaScript";
$secondWord = "rocks!";

$numberOne = 10; // 20-999
$numberTwo = 6;  // 20-999
$numberThree = 56; // 20-999
$numberFour = 348; // 110 - 450
$floatOne = 12.55; // 100-999
$floatTwo = 5.22; // 100-999 
$lowNr = 15; // 0 - 100
$highNr = 625; // 500 - 999
$smallNr = 2; // 1-5
$smallRandNr = 3; // 0-9
$caseNrs = [1, 2, 3, 4, 5];
$smallestRandNr = 1; // 0-2
$aYear = 2014;
$aMonth = 'Aug';
$aDay = 5;
$aDate = "$aMonth $aDay, $aYear";


$serie1 = [347, -221, 54, 435];  // 100-999
$wordSerie1 = ['bulldog', 'rabbit', 'chicken', 'mouse', 'horse', 'camel', 'crocodile', 'werewolf', 'reindeer', 'elephant'];
$wordSerie2 = ['guitar', 'violin', 'drums'];
$sentenceSerie1 = ['I am in a glass case of emotion', 'If peeing your pants is cool, consider me Miles Davis', 'Do you want to hear the most annoying sound in the world?', 'Thank you very little', 'Tigers love pepper, they hate cinnamon.', 'I wake up in the morning and I piss excellence', 'I think most Scottish cuisine is based on a dare', 'I do not know, I mostly just hurt people.', 'I aim to misbehave.', ' I wish monkeys could Skype'];
$someIntText = $numberOne . ".$numberTwo " . $wordSerie1[$smallRandNr]; 

return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 1 - javascript1",

"intro" => "
<p>If you need to peek at examples or just want to know more, take a look at the references at MDN's (Mozilla Developers Network) page: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference. Here you will find everything this lab will go through and much more.
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Integers, floats and variables",

"intro" => "
<p>The foundation of variables, numbers, strings and basic arithmetic.</p>
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

"answer" => function () use ($numberOne, $numberTwo) {

    $sum = $numberOne + $numberTwo;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create three variables, "numberOne", "numberTwo" and "numberThree" and give them the values: ' . $numberOne . ', ' . $numberTwo . ' and '. $numberThree . '. Create a variable "sum" and assign to it the sum of all three variables. Print out the result.
</p>
',

"answer" => function () use ($numberOne, $numberTwo, $numberThree) {

    $sum = $numberOne + $numberTwo + $numberThree;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $numberOne . '. Create another variable called "numberTwo" and give it the value ' . $numberTwo . '. Create a third variable called "sum" and assign to it the product of the first two variables. Print out the result.
</p>
',

"answer" => function () use ($numberOne, $numberTwo) {

    $sum = $numberOne * $numberTwo;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create three variables, "numberOne", "numberTwo" and "numberThree" and give them the values: ' . $numberOne . ', ' . $numberTwo . ' and '. $numberThree . '. Create a fourth variable, called "sum" and assign to it the product of "numberOne" and "numberTwo" and subtract "numberThree". Print out the result.
</p>
',

"answer" => function () use ($numberOne, $numberTwo, $numberThree) {

    $sum = ($numberOne * $numberTwo) - $numberThree;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create two variables, "floatOne" and "floatTwo". Give them the values: ' . $floatOne . ' and ' . $floatTwo . '. Create a third variable, called "sum" and assign to it the sum of them. Print out the result.
</p>
',

"answer" => function () use ($floatOne, $floatTwo) {

    $sum = $floatOne + $floatTwo;
    return $sum;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create two variables, "floatOne" and "numberOne". Give them the values: ' . $floatOne . ' and ' . $numberOne . '. Create a third variable, called "sum" and assign to it the product of them. Print out the result.
</p>
',

"answer" => function () use ($floatOne, $numberOne) {

    $sum = $floatOne * $numberOne;
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
<p>If you need a hint, take a look at: <br> https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable "someIntText" and give it a value of "' . $someIntText . '". Use the built-in function Number.parseInt to find out the integer representation of the variable. Print the result.
</p>
',

"answer" => function () use ($someIntText) {

    return (int)$someIntText;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable "someIntText" and give it a value of "' . $someIntText . '". Use the built-in function Number.parseFloat to find out the float representation of the variable. Print the result.
</p>
',

"answer" => function () use ($someIntText) {

    return (float)$someIntText;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable "someIntText" and give it a value of "' . $someIntText . '". Use the built-in function Number.isInteger to find out if it is a number. Print out true or false (boolean).
</p>
',

"answer" => function () use ($someIntText) {
    
    $result = "false";

    if(is_int($someIntText)) {
        $result = "true";
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
"title" => "Builtin Math-functions",

"intro" => "
<p>If you need a hint, take a look at: <br> 
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

"text" => '
<p>Create two variables, "numberOne", "numberTwo" and give them the values: ' . $numberOne . ' and ' . $numberTwo . '. Create a third variable, called "sum" and assign to it the quotient of them. Use the built-in function Math.floor to get only the integer value. Print out the result.
</p>
',

"answer" => function () use ($numberOne, $numberTwo) {

    $sum = $numberOne / $numberTwo;
    return floor($sum);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function Math.PI to print out float value of 'Pi'. Round the result to 4 decimals.
</p>
",

"answer" => function () {

    return round(pi(), 4);
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
<p>Create a variable called 'sentence' and assign to it the text: '". $sentenceSerie1[$smallRandNr] ."' and print it out.</p>
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
<p>Create a variable called 'wordOne' and assign to it: '" .  $wordSerie1[$smallRandNr] . "'. Create another variable called 'numberOne' and assign to it the value: " .  $numberTwo . ". Add them up into a variable called 'sum' and print out the result.
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
<p>If you need a hint, take a look at: <br>
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String 
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function 'charAt' on a string to return the character at a given index. Create a variable with the word: '" .  $wordSerie1[$smallRandNr] . "' and print out the character at index: " . ($smallNr-1) . ".
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
<p>Use the built-in function String.toUpperCase to transform the string: '" . $sentenceSerie1[$smallRandNr] . "' to uppercase. Print out the result.
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
<p>Use the built-in function String.repeat to create a new string that contains the string: '" . $wordSerie1[$smallRandNr] . "' repeated " . ($smallNr+10) . " number of times. Print out the result.
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
<p>Use the built-in function String.length to find out the length of the string: '" . $wordSerie1[$smallRandNr] . "'. Print out the result.
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
<p>Use the built-in function String.substr to extract the last three characters of the word: '" . $wordSerie1[$smallRandNr] . "'. Print out the result.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr) {
    $result = substr($wordSerie1[$smallRandNr], (strlen($wordSerie1[$smallRandNr])-3));
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use the built-in function String.trim to remove the first and last letter from the word: '" . $wordSerie1[$smallRandNr] . "'. Print out the result.
</p>
",

"answer" => function () use ($wordSerie1, $smallRandNr) {
    $last = strlen($wordSerie1[$smallRandNr])-1;
    $res = $wordSerie1[$smallRandNr][0] . $wordSerie1[$smallRandNr][$last];
    $result = trim($wordSerie1[$smallRandNr], $res);
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
"title" => "Built-in Date-functions",

"intro" => "
<p>If you need a hint, take a look at: <br>
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
<p>Create a Date object called 'myDate' and initiate it with: '" . $aDate . "'. Use the built-in function Date.getFullYear to get the year from your Date object. Print out the result.
</p>
",

"answer" => function () use ($aYear) {

    return $aYear;
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Create a new Date object that is equal to 'myDate' plus 30 days. Use Date.getDate to print out the day of the month.
</p>
",

"answer" => function () use ($aDate) {
    $myDate = new DateTime($aDate);
    $interval = new DateInterval("P30D");
    $myDate->add($interval);
    
    return $myDate->format('d');
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
<p>If you need a hint, take a look at: <br>
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/if...else
</p>
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
<p>Compare the number ' . $numberOne . ' and a string that holds the same value ("' . $numberOne . '"). Use triple equals when comparing (===). Use if else statements to print out "yes" if they are equal, else print out "no".
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
<p>Use if else statements to print out "yes" if ' . $numberOne . ' is higher than ' . $smallNr . '. If the numbers are equal print out "equal". Else print out "no".
</p>
',

"answer" => function () use ($numberOne, $smallNr) {
    
    $result = '';
    if($numberOne > $smallNr) {
        $result = 'yes';
    }
    else if($numberOne === $smallNr) {
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
<p>Use if else statements to print out "yes" if ' . $numberFour . ' is higher than ' . $highNr . ' OR  lower than ' . $lowNr . '. Else print out "no".
</p>
',

"answer" => function () use ($numberFour, $lowNr, $highNr) {
    
    $result = '';
    if($numberFour < $lowNr || $numberFour > $highNr) {
        $result = 'yes';
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
<p>Use if else statements to print out "true" if ' . $numberOne . ', are less than or equal to ' . $numberTwo . '. Else print out "false". Print out the result with a boolean.
</p>
',

"answer" => function () use ($numberOne, $numberTwo) {
    
    $result = "false";
    if($numberOne <= $numberTwo) {
        $result = "true";
    }
    
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Use if else statements to see if " . $numberOne . " is 'higher', 'lower' or 'equal' to " . $numberThree . ". Print out the result (higher, lower or equal).
</p>
",

"answer" => function () use ($numberOne, $numberThree) {
    
    $result = '';

    if($numberOne > $numberThree) {
        $result = 'higher';
    }
    else if($numberOne < $numberThree) {
        $result = 'lower';
    }
    else {
        $result = 'equal';
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
<p>If you need a hint, take a look at: <br>
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/switch
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Pass the number " . $smallNr . " to a switch case statement with the cases: " . implode(',', $caseNrs) . ". Return a variable with the initial value of " . $highNr . ". Add your number to it and print out the result.
</p>
",

"answer" => function () use ($smallNr, $caseNrs, $highNr) {
    
    $result = $highNr;
    switch ($smallNr) {
        case (1) : 
        $result += 1;
        break;
        case (2) : 
        $result += 2;
        break;
        case (3) : 
        $result += 3;
        break;
        case (4) : 
        $result += 4;
        break;
        case (5) : 
        $result += 5;
        break;
        default: $result = $highNr;
    }
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => "
<p>Build a switch case statement with the cases: " . implode(',', $wordSerie2) . ". Print out a string, like: 'My favorite instrument is (your word)'. Use the word: '" . $wordSerie2[$smallestRandNr] . "'. If you try with an instrument that you do not have in your cases it should print out 'I dont like music.'.
</p>
",

"answer" => function () use ($wordSerie2, $smallestRandNr) {
    
    $result = 'My favorite instrument is ';

    switch ($wordSerie2[$smallestRandNr]) {
        case ('guitar') : 
        $result .= 'guitar';
        break;
        case ('violin') : 
        $result .= 'violin';
        break;
        case ('drums') : 
        $result .= 'drums';
        break;
        default: $result = 'I dont like music.';
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
<p>If you need a hint, take a look at: <br>
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/for
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a for loop to increment ' . $numberTwo . ' with the value ' . $smallNr . ', 10 times. Print the result.
</p>
',

"answer" => function () use ($numberTwo, $smallNr) {
    
    $result = $numberTwo;
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
<p>Use a for loop to subtract ' . $smallNr . ' from ' . $numberOne . ', 10 times. Print the result.
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
<p>Use a for loop to add all the values in the range -' . $numberOne . ' to ' . $numberOne . ' to a string. Print the result separated by comma (,).
</p>
',

"answer" => function () use ($numberOne) {
    
    $result = '';
    for($i = $numberOne * -1; $i <= $numberOne; $i++) {
        $result .= $i . ',';
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
<p>If you need a hint, take a look at: <br>
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/while
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a while loop to increment ' . $lowNr . ' with the value ' . $smallNr . ' until ' . $lowNr . ' has reached or passed 1000. Print out the amount of steps needed.
</p>',

"answer" => function () use ($lowNr, $smallNr) {
    $result = 0;
    $countThis = $lowNr;
    while($countThis <= 1000) {
        
        $result += 1;
        $countThis += $smallNr;
    }
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use a while loop to subtract ' . ($smallNr+1). ' from ' . $highNr . ' until ' . $highNr . ' has reached or passed 0. Print  out the amount of steps needed.
</p>
',

"answer" => function () use ($smallNr, $highNr) {
    $result = 0;
    $countThis = $highNr;
    while($countThis >= 0) {
        
        $result += 1;
        $countThis -= ($smallNr+1);
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
