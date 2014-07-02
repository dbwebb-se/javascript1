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
$monthNr = 7; // 1-12

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

    return $numberOne + $numberTwo;
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
    
    return $numberTwo * $numberThree;
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

    $result = 0;
    for($i = $smallRandNr+1; $i < $numberOne+10; $i++) {
            $result += $i;
    }
    return $result;
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

    return 'My favorite color is ' . $wordSerie2[$smallRandNr];
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

    $result = '';
    for($i = 0; $i < count($questionSerie1); $i++) {
        if($questionSerie1[$qRandNr] === $questionSerie1[$i]) {
            $result = $answerSerie1[$i];
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
<p>Create a function that returns a string with all numbers comma-separated, in a range of: ' . $numberThree . ' and ' . $numberTwo . '. Make sure that the order of the arguments should not matter. For example if the arguments are: 5 and 10, the function should print: 5,6,7,8,9,10. If the arguments are: 10 and 5, the function should print: 10,9,8,7,6,5,. If the arguments are the same, print out only that number. Name the function "printRange" and print out the result.
</p>
',

"answer" => function () use ($numberTwo, $numberThree) {
    
    $result = '';
    $i = 0;

    if($numberThree < $numberTwo) {
        for($i = $numberThree; $i < $numberTwo+1; $i++) {
            $result .= $i . ",";
        }
    }
    else if($numberThree > $numberTwo) {
        for($i = $numberThree; $i > $numberTwo-1; $i--) {
            $result .= $i . ",";
        }
    }
    else {
        $result = $numberThree;
    }
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that returns a string a specific number of times. The function should take 2 arguments, one string and one number: "' . $wordSerie2[$smallRandNr] . '" and ' . ($smallRandNr+5) . ' . The number represents the number of times the string should be added to a string. Name the function "stringRepeat" and print out the result.
</p>
',

"answer" => function () use ($wordSerie2, $smallRandNr) {
    
    $result = '';

    for($i = 0; $i < $smallRandNr+5; $i++) {
        $result .= $wordSerie2[$smallRandNr];
    }
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that returns the money you have, after years of interest, given three arguments: ' . $highNr . ', ' . $lowNr . ' and ' . $smallNr . '. First argument represents the start money, the second argument represents the number of years your money produces interest. The third argument is the interest rate in percent (%). Name the function "calculateInterest" and print out the result with a maximum of 4 decimals. 
</p>
',

"answer" => function () use ($highNr, $lowNr, $smallNr) {
   
    $result = $highNr; 
    $currentInterest = 0;

    for($i = 0; $i < $lowNr; $i++) {
        $currentInterest = ($result / 100) * $smallNr;
        $result += $currentInterest; 
    }
    return round($result, 4);
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that returns "true" if the number ' . $numberThree . ' is higher than 50 and less than 100. If the number is out of range, the function should return "false". The return type should be boolean. Name the function "inRange" and print out the result.
</p>
',

"answer" => function () use ($numberThree) {
    
    $result = false;

    if($numberThree > 50 && $numberThree < 100) {
       $result = true;
    }
    return $result;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that takes two arguments, ' . $fbStart . ' (start) and ' . $fbStop . ' (stop). The arguments represents the starting point and stop point of the game "Fizz Buzz" (http://en.wikipedia.org/wiki/Fizz_buzz). The function should run from start to stop and print out "Fizz", "Buzz" or both at appropriate numbers. If "stop" is equal or lower than "start", the function should return such information. Name the function "fizzBuzz" and print out the result.
</p>
',

"answer" => function () use ($fbStart, $fbStop) {
    
    $result = '';

    if($fbStop <= $fbStart) {
        $result = 'Stop is lower than start or they are the same. Try again!';
    }
    else {
        for($i = $fbStart; $i < $fbStop+1; $i++) {
            if($i % 3 === 0 && $i % 5 !== 0) {
                $result .= 'Fizz,';
            }
            else if($i % 5 === 0 && $i % 3 !== 0) {
                $result .= 'Buzz,';
            }
            else if($i % 3 === 0 && $i % 5 === 0) {
                $result .= 'Fizz Buzz,';
            }
            else {
                $result .= $i . ',';
            }
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



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Throw/catch exeptions",

"intro" => "
<p>something about it...
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that takes one argument, "monthNr". Use the number: ' . $monthNr . '. The function should return the name of the month representing the passed value, for example: monthNr = 2 should return "February". Create an exception for values out of range such if monthNr < 1 and > 12. Catch the exception and print it out. Name the function monthException and return a string.
</p>
',

"answer" => function () use ($monthNr) {

    function monthException($monthNr) {
        $newMonthNr = $monthNr -1;
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        if($newMonthNr < 0 || $newMonthNr >= 12) {
            throw new Exception('Month number ' . $monthNr . ' does not exist in this universe...yet.');
        }
        else{
            return $months[$newMonthNr];
        }
    }
    try {
        return monthException($monthNr);
    }
    catch (Exception $e){
        return 'Caught Exception: ' . $e->getMessage();
    }

},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that takes one argument, ' . $numberOne . '. The function should return a string "EVEN" or "ODD" depending on the number. Create an exception for both possibilities and use "catch" to print out the result. Name the function "oddOrEven".
</p>
',

"answer" => function () use ($numberOne) {

    function oddOrEven($nr) {
        if($nr % 2 === 0){
            throw new Exception("The number " . $nr . " is EVEN");
        }
        else {
            throw new Exception("The number " . $nr . " is ODD");
        }
    }
    try {
        return oddOrEven($numberOne);
    }
    catch (Exception $e){
        return $e->getMessage();
    }
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function called "colorCheck". The function should take one argument, a string with the color: "' . $wordSerie2[$smallRandNr] . '". Use try catch to print out "I do not have the color ' . $wordSerie2[$smallRandNr] . '" if it do not exist. If it exists, just return the color. The colors to check with are: "green", "red", "purple", "white" and "brown". 
</p>
',

"answer" => function () use ($wordSerie2, $smallRandNr) {

    function colorCheck($clr) {
        $result = '';
        if($clr === 'green' || $clr === 'red' || $clr === 'purple' || $clr === 'white' || $clr === 'brown'){
            $result = $clr;
        }
        else {
            throw new Exception("I do not have the color " . $clr . ".");
        }
        return $result;
    }
    try {
        return colorCheck($wordSerie2[$smallRandNr]);
    }
    catch (Exception $e){
        return $e->getMessage();
    }
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
