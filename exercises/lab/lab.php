<?php
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

date_default_timezone_set("UTC");

// Incoming
$doLab        = isset($_GET['lab']) ? true : false;
$doAnswers    = isset($_GET['answers']) ? true : false;
$doAnswerHtml = isset($_GET['answer-html']) ? true : false;
$doAnswerJs   = isset($_GET['answer-js']) ? true : false;
$doAnswerPy   = isset($_GET['answer-py']) ? true : false;
$doAnswerPyAssert = isset($_GET['answer-py-assert']) ? true : false;
$doAnswerJson = isset($_GET['answer-json']) ? true : false;
$key          = isset($_GET['key']) ? $_GET['key'] : null;



// Check or die
(isset($doLab) || isset($doAnswers) || isset($doAnswerHtml) || isset($doAnswerJs) || isset($doAnswerPy) || isset($doAnswerJson) || isset($doAnswerPyAssert)) or die("Missing what to do.");
isset($key) or die("No key supplied.");



// Get the details to generate the lab
$db = new PDO("sqlite:db.sqlite");

$sql = "
select * from lab
where 
    gen_key = ?
";
$stmt = $db->prepare($sql);
$stmt->execute([$key]);
$res = $stmt->fetch(PDO::FETCH_OBJ);

if (!$res) {
    die("Key did not match!");
}

$acronym = $res->acronym;
$course = $res->course;
$lab = $res->lab;
$created = $res->created;



// Generate
if ($course == 'javascript1' && $lab == 'lab1') {
    
    extract(include "config/lab1.php");
    // shuffle questions

} else if ($course == 'javascript1' && $lab == 'lab2') {
    
    extract(include "config/lab2.php");
    // shuffle questions

} else if ($course == 'javascript1' && $lab == 'lab3') {
    
    extract(include "config/lab3.php");
    // shuffle questions

} else if ($course == 'javascript1' && $lab == 'lab4') {
    
    extract(include "config/lab4.php");
    // shuffle questions

} else if ($course == 'javascript1' && $lab == 'lab5') {
    
    extract(include "config/lab5.php");
    // shuffle questions

} else if ($course == 'python' && $lab == 'lab1') {
    
    extract(include "config/python/lab1.php");
    // shuffle questions

} else if ($course == 'python' && $lab == 'lab2') {
    
    extract(include "config/python/lab2.php");
    // shuffle questions

} else if ($course == 'python' && $lab == 'lab3') {
    
    extract(include "config/python/lab3.php");
    // shuffle questions

} else if ($course == 'python' && $lab == 'lab4') {
    
    extract(include "config/python/lab4.php");
    // shuffle questions

} else if ($course == 'python' && $lab == 'lab5') {
    
    extract(include "config/python/lab5.php");
    // shuffle questions

} else if ($lab == 'labtest') {
    
    extract(include "config/labtest.php");
    // shuffle questions

} else {
    die("Not a valid combination.");
}



/**
 * Format the answer for print in HTML
 */
function formatAnswerPrintable($answer) 
{
    if (is_bool($answer)) {
        $answer = $answer ? "true" : "false";
    }

    return $answer;
}


/**
 * Format the answer for a JSON object
 */
function formatAnswerJSON($answer) 
{
    if (is_int($answer) || is_float($answer)) {
        //$answer
    } else if (is_string($answer)) {
        $answer = "\"$answer\"";
    } else if (is_bool($answer)) {
        $answer = $answer ? "true" : "false";
    }
    // add checks for array and object and null

    return $answer;
}




if ($doLab && $doAnswers) {
    include "view/lab_tpl.php";
} else if ($doLab) {
    include "view/lab_tpl.php";
} else if ($doAnswers) {
    include "view/answers_tpl.php";
} else if ($doAnswerHtml) {
    include "view/answer-html_tpl.php";
} else if ($doAnswerJs) {
    include "view/answer-js_tpl.php";
} else if ($doAnswerPy) {
    include "view/answer-py_tpl.php";
} else if ($doAnswerJson) {
    include "view/answer-json_tpl.php";
} else if ($doAnswerPyAssert) {
    include "view/answer-py-assert_tpl.php";
} else {
    die("Nothing to do.");
}
