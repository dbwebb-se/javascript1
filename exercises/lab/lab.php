<?php
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


// Incoming
$doLab        = isset($_GET['lab']) ? true : false;
$doAnswers    = isset($_GET['answers']) ? true : false;
$key          = isset($_GET['key']) ? $_GET['key'] : null;



// Check or die
(isset($doLab) || isset($doAnswers)) or die("Missing what to do.");
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


$acronym = $res->acronym;
$course = $res->course;
$lab = $res->lab;
$created = $res->created;



// Generate
if ($course == 'javascript1' && $lab == 'lab1') {
    
    extract(include "config/lab1.php");
    // shuffle questions

} else {
    die("Not a valid combination.");
}


if ($doLab && $doAnswers) {
    include "view/lab_tpl.php";
} else if ($doLab) {
    include "view/lab_tpl.php";
} else if ($doAnswers) {
    include "view/answers_tpl.php";
} else {
    die("Nothing to do.");
}
