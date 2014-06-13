<?php

return [

    "title" => "Lab 1 - javascript1",

    "intro" => "
        <p>Intro</p>
        <p>Intro</p>
        ",

    "sections" => [
        [
            "title" => "Variables",

            "intro" => "
                <p>Variables intro</p>
                <p>Intro</p>
                ",

            "questions" => [
                [
                    "text" => '
                        <p>Create a variable, named "firstWord", that holds the word "Javascript". Create a second variable, named "secondWord", that holds the word "rocks!". Create a third variable, named "bothWords", and put together firstWord and secondWord with a space between the words. Print out the result.</p>
                        ',

                    "solution" => function () {
                        $firstWord = "JavaScript";
                        $secondWord = "rocks!";
                        $bothWords = $firstWord . " " . $secondWord;
                        return $bothWords;
                    },
                ],
                [
                    "text" => '
                        <p>Create a variable called "numberOne" and give it the value 10. Create another variable called "numberTwo" and give it the value 5. Create a third variable called "sum" and assign to it the sum of the first two variables. Print out the result.</p>
                        ',

                    "solution" => function () {
                        $numberOne = 10;
                        $numberTwo = 5;
                        $sum = $numberOne + $numberTwo;
                        return $sum;
                    },
                ],
            ],
        ],

    ]


/*



A good thing is that we do not need to use one variable for each word. Create a variable called "sentence" and assign to it the text: "This was convenient" and print it out.

Use a for-loop to print out the numbers 1 to 10.

Use a for-loop to print out the numbers 10 to 1.

Use a while-loop to print out the numbers 1 to 10.

Use a while-loop to print out the numbers 10 to 1.

Use if else statements to print out "yes" if 10 is larger than 5, else print out "no".

You can compare variables in different ways. Compare the number 10 and a string that holds 10 ("10"). Use double equals when comparing (==). Use if else statements to print out "yes" if 10 equals "10", else print out "no".

As you saw in question 10, they are equal. This is because the double equal (==), do a type conversion of the variables. To get around that, you can use a triple equal (===). Then there is no type conversion done and the compare is made on both value and type. Use if else statements to print out "yes" if 10 equals "10", else print out "no". Use triple equals (===).

*/

];
