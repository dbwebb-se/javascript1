<?php

/**
 * Titel and introduction to the lab.
 */

$wordSerie1 = ["storage", "memory", "device", "syntax", "computer", "error", "print", "screen", "program", "input"];
$wordSerie2 = ["icecream", "sunshine", "beach", "music", "vacation", "barbeque", "resort", "water", "restaurant", "beverage"];
$wordRand1 = 7; // 0-9 for the word array
$wordRand2 = 3; // 0-9 for the word array

$numSerie1 = [123,22.43,342,2,54.22,2.564,43,45.33,435,2.33];
$numSerie2 = [6,8,95,2,12,152,4,78,621,45]; 
$intOne = 78; // 20-499
$intTwo = 123;  // 20-499
$intThree = 45; // 1-100
$bigInt = 654; // 500-999
$floatOne = 5.77; // FLOATS! 10.0-999.99
$floatTwo = 654.34; // FLOATS! 10.0-999.99 
$divNr1 = 25; // 5,10,15,20,25,30 etc
$divNr2 = 5;




return [



/**
 * Titel and introduction to the lab.
 */
"title" => "Lab 1 - python",

"intro" => "
<p>blablabla python blablablabla
</p>
",


"sections" => [



/** ===================================================================================
 * New section of exercises.
 */
[
"title" => "Integers, strings, floats and basic arithmetics",

"intro" => "
<p>The foundation of numbers and basic arithmetic.</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $intOne . '. Create another variable called "numberTwo" and give it the value ' . $intTwo . '. Create a third variable called "result" and assign to it the sum of the first two variables. Answer with the result.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

    $result = $intOne + $intTwo;
    return $result;
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $intOne . '. Create another variable called "numberTwo" and give it the value ' . $intThree . '. Subtract "numberTwo" from "numberOne" and answer with the result.
</p>
',

"answer" => function () use ($intOne, $intThree) {

    return $intOne-$intThree;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $intOne . '. Create another variable called "numberTwo" and give it the value ' . $intTwo . '. Answer with the product of the two numbers.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

    return $intOne*$intTwo;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "numberOne" and give it the value ' . $divNr1 . '. Divide "numberOne" with ' . $divNr2 . '. Answer with the result.
</p>
',

"answer" => function () use ($divNr1, $divNr2) {

    return $divNr1/$divNr2;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "floatOne" and give it the value ' . $floatOne . '. Create another variable called "floatTwo" and give it the value ' . $floatTwo . '. Create a third variable called "result" and assign to it the sum of the first two variables. Answer with the result.
</p>
',

"answer" => function () use ($floatOne, $floatTwo) {

    return $floatOne+$floatTwo;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "floatOne" and give it the value ' . $floatOne . '. Create another variable called "floatTwo" and give it the value ' . $floatTwo . '. Subtract "floatTwo" from "floatOne" and answer with the result.
</p>
',

"answer" => function () use ($floatOne, $floatTwo) {

    return $floatOne-$floatTwo;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a variable called "floatOne" and give it the value ' . $floatOne . '. Create another variable called "floatTwo" and give it the value ' . $floatTwo . '. Answer with the product of the two numbers.
</p>
',

"answer" => function () use ($floatOne, $floatTwo) {

    return $floatOne*$floatTwo;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create three variables, "numberOne", "numberTwo" and "numberThree" and give them the values: ' . $intOne . ', ' . $intTwo . ' and '. $intThree . '. Sum up "numberOne" and "numberTwo". Subtract "numberThree" and answer with the result.
</p>
',

"answer" => function () use ($intOne, $intTwo, $intThree) {

    return ($intOne+$intTwo)-$intThree;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Answer with the result of ' . $intOne . ' modulo (%) ' . $wordRand1 . '.
</p>
',

"answer" => function () use ($intOne, $wordRand1) {

    return $intOne%$wordRand1;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Add the word: "' . $wordSerie1[$wordRand2] . '" to the word: "' . $wordSerie2[$wordRand2] . '" and answer with the result.
</p>
',

"answer" => function () use ($wordSerie1, $wordRand2, $wordSerie2) {

    return $wordSerie2[$wordRand2] . $wordSerie1[$wordRand2];
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
"title" => "Conditions, exceptions, booleans, if, else and elif",

"intro" => "
<p>loops n stuff
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Print out the boolean value of: ' . $intOne . ' < ' . $intTwo . '.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

	return $intOne < $intTwo;  
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Answer with the boolean value of: ' . $intOne . ' > ' . $intTwo . '.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

	return $intOne > $intTwo;
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Answer with the boolean value of: ' . $intOne . ' == ' . $intTwo . '.
</p>
',

"answer" => function () use ($intOne, $intTwo) {

	return $intOne == $intTwo;
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create an if statement to see if ' . ($intOne*2) . ' is bigger than ' . ($intTwo*2) . '. If it is true, answer "yes", else answer "no".
</p>
',

"answer" => function () use ($intOne, $intTwo) {

	$result = "no";
	if(($intOne*2) > ($intTwo*2)) {
		$result = "yes";
	}
	return $result; 
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create an if statement to see if ' . $intOne . ' is bigger than ' . $intTwo . ' and smaller than ' . $bigInt . '. If it is true, answer "yes", else answer "no".
</p>
',

"answer" => function () use ($intOne, $intTwo, $bigInt) {

	$result = "no";
	if($intOne > $intTwo && $intOne < $bigInt) {
		$result = "yes";
	}
	return $result; 
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create an elif statement that checks what range a value belongs to. The ranges should be: below 10, 10 to 25, 26 to 50, 51 to 75 and 76 to 100. If the number is 24, you should print out: "10 to 25" and if the number is 5, print out "below 10". Use the number ' . $intThree . ' and answer with the corresponding result. It should work with any number between 0 and 100.
</p>
',

"answer" => function () use ($intThree) {

	$result = "";
	if($intThree < 10) {
		$result = "below 10";
	}
	if($intThree > 9 && $intThree <= 25) {
		$result = "10 to 25";
	}
	if($intThree > 25 && $intThree <= 50) {
		$result = "26 to 50";
	}
	if($intThree > 50 && $intThree <= 75) {
		$result = "51 to 75";
	}
	if($intThree > 75 && $intThree <= 100) {
		$result = "75 to 100";
	}
	
	return $result; 
},

],


/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a try/except statement that should try whether a value is a float or an integer. If the value is an integer, then answer "integer". If the value is a float, answer "float". Otherwise answer "neither". Use the value: ' . $numSerie1[$wordRand2] . ' when you submit your answer.
</p>
',

"answer" => function () use ($numSerie1, $wordRand2) {

	$result = "neither";
	if(is_int($numSerie1[$wordRand2])) {
		$result = "integer";
	}
	if(is_float($numSerie1[$wordRand2])) {
		$result = "float";
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
"title" => "Built-in functions",

"intro" => "
<p>Built-in functions n stuff
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use max() to print out the largest number of: ' . implode(",", $numSerie2) . '. 
</p>
',

"answer" => function () use ($numSerie2) {

	return max($numSerie2);
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use min() to print out the smallest number of: ' . implode(",", $numSerie2) . '. 
</p>
',

"answer" => function () use ($numSerie2) {

	return min($numSerie2);
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Use len() to print out the number of letters in the word: "' . $wordSerie1[$wordRand1] . '". 
</p>
',

"answer" => function () use ($wordSerie1, $wordRand1) {

	return strlen($wordSerie1[$wordRand1]);
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Convert the number: ' . $intOne . ' to a string and add it to the word: "' . $wordSerie1[$wordRand2] . '". 
</p>
',

"answer" => function () use ($wordSerie1, $wordRand2, $intOne) {

	return $wordSerie1[$wordRand2] .= $intOne;
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Convert the number: ' . $floatTwo . ' to an integer and then to a string. Add it to the beginning of the word: "' . $wordSerie1[$wordRand1] . '". 
</p>
',

"answer" => function () use ($wordSerie1, $wordRand1, $floatTwo) {

	$temp = intval($floatTwo);
	return $temp .= $wordSerie1[$wordRand1];
	
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
"title" => "Functions",

"intro" => "
<p>functions n stuff
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function called "prodNr" that returns the product of ' . $intTwo . ' and ' . $wordRand1 . '. Answer with a call of the function. 
</p>
',

"answer" => function () use ($intTwo, $wordRand1) {

	return $intTwo*$wordRand1;
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function called "funnyWord" that takes one argument and adds it to a string. If the argument is "water", the function should print: "water is a funny word". Use the argument: "' . $wordSerie1[$wordRand1] . '" and answer with the outcome.
</p>
',

"answer" => function () use ($wordSerie1, $wordRand1) {

	return $wordSerie1[$wordRand1] . " is a funny word";
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a function that returns "true" if the number ' . $intThree . ' is higher than 50 and less than 100. If the number is out of range, the function should return "false". The return type should be boolean. Name the function "inRange" and answer with a call of the function.
</p>
',

"answer" => function () use ($intThree) {

	$result = false;

    if($intThree > 50 && $intThree < 100) {
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
"title" => "Iteration and loops",

"intro" => "
<p>functions n stuff
</p>
",

"shuffle" => false,

"questions" => [



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a while-loop that adds ' . $wordRand2 . ' to the number: ' . $intThree . ', 20 times. Answer with the result. 
</p>
',

"answer" => function () use ($wordRand2, $intThree) {

	$result = $intThree;
	$i = 0;
	while($i < 20) {
		$result += $wordRand2;
		$i+=1;
	}
	return $result;
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a while-loop that subtracts ' . ($wordRand2*2) . ' from ' . ($intThree*2) . ', ' . $intThree . ' times. Answer with the result. 
</p>
',

"answer" => function () use ($wordRand2, $intThree) {

	$result = ($intThree*2);
	$i = 0;
	while($i < $intThree) {
		$result -= ($wordRand2*2);
		$i+=1;
	}
	return $result;
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a for-loop that counts the number of elements in the serie: ' . implode(",", $numSerie2) . '. Answer with the result. 
</p>
',

"answer" => function () use ($numSerie2) {

	return count($numSerie2);
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a for-loop that sums up the numbers ' . implode(",", $numSerie2) . '. Answer with the result. 
</p>
',

"answer" => function () use ($numSerie2) {

	$result = 0;
	
	for($i = 0; $i < count($numSerie2); $i++) {
		$result += $numSerie2[$i];
	}
	return $result;
	
},

],



/** -----------------------------------------------------------------------------------
 * A question.
 */
[

"text" => '
<p>Create a for-loop that finds the largest number in the serie ' . implode(",", $numSerie2) . '. Answer with the result. 
</p>
',

"answer" => function () use ($numSerie2) {

	$result = 0;
	
	for($i = 0; $i < count($numSerie2); $i++) {
		if($numSerie2[$i] > $result) {
			$result = $numSerie2[$i];
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
<p>Create a for-loop that goes through the numbers: ' . implode(",", $numSerie2) . '. If the current number is even, you should add it to a variable and if the current number is odd, you should subtract it from the variable. Answer with the result. 
</p>
',

"answer" => function () use ($numSerie2) {

	$result = 0;

	for($i = 0; $i < count($numSerie2); $i++) {
		if($numSerie2[$i] % 2 === 0) {
			$result += $numSerie2[$i];
		}
		else {
			$result -= $numSerie2[$i];
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
]; // EOF the entire lab
