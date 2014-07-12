<?php

$text = $key . "\n";
$text .= "--------------------------------\n";

foreach ($sections as $section) {

    foreach ($section['questions'] as $question) {

        $text .= formatAnswerPrintable($question['answer']()) . "\n";


    }
}


$text .= "--------------------------------\n";
$text .= $key . "\n";


header('Content-type: text/plain');
echo $text;
