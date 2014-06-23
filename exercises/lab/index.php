<?php
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

date_default_timezone_set("UTC");



/**
 * Check that database exists and open it
 */
if (!is_writable(__DIR__)) {
    echo "<p>You must make this directory writable. Then click <a href='?init'>this link to generate the database tables</a>.</p>";
    exit;
}


$db = new PDO("sqlite:db.sqlite");


if (isset($_GET['init'])) {
    $sql = "
create table if not exists lab
(
    int id primary key,
    gen_key string key,
    acronym string,
    course string,
    lab string,
    created datetime
)
";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}



/**
 * Generate a lab
 */
$action     = isset($_GET['action']) ? $_GET['action'] : null;
$acronym    = isset($_GET['acronym']) ? $_GET['acronym'] : null;
$course     = isset($_GET['course']) ? $_GET['course'] : null;
$lab        = isset($_GET['lab']) ? $_GET['lab'] : null;
$created    = date('Y-m-d H:i:s');
$gen_key    = md5($acronym . $course . $lab . $created);

$generate = null;

if (isset($_GET['doGenerate'])) {
    $sql = "
insert into lab
(acronym, course, lab, created, gen_key)
values 
(?, ?, ?, ?, ?)
";
    $stmt = $db->prepare($sql);
    $stmt->execute([$acronym, $course, $lab, $created, $gen_key]);

    $generate <<<EOD
<p>
<a href="lab.php?lab&key=$gen_key">Lab</a> | 
<a href="lab.php?lab&answers&key=$gen_key">Lab with answers</a> | 
<a href="lab.php?answers&key=$gen_key">Answers</a> | 
</p>
EOD;

    if ($action == "only-key") {
        die($gen_key);
    }
}





?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lab generation</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>


<h1>Lab utility</h1>

<p><a href="?">Clear</a></p>



<h2>Generate a lab</h2>

<?=$generate?>


<form>

<p>
    <label>Course:</br>
    <select name="course">
        <option value="javascript1">javascript1</option>
        <option value="python">python</option>
    </select></label>
</p>

<p>
    <label>Lab:</br>
    <select name="lab">
        <option value="lab1">Lab 1</option>
        <option value="lab2">Lab 2</option>
        <option value="lab3">Lab 3</option>
        <option value="lab4">Lab 4</option>
        <option value="lab5">Lab 5</option>
    </select></label>
</p>

<p>
    <label>Acronym:<br>
        <input type="text" name="acronym" placeholder="Enter acronym">
    </label>
</p>

<p>
    <input type="submit" name="doGenerate" value="Submit">
</p>

</form>



<h2>Get details for an existing lab</h2>

<?php

$key    = isset($_GET['key']) ? $_GET['key'] : null;

if (isset($_GET['doKey'])) {
    $sql = "
select * from lab
where 
    gen_key = ?
";
    $stmt = $db->prepare($sql);
    $stmt->execute([$key]);
    $res = $stmt->fetch(PDO::FETCH_OBJ);

    $gen_key = $res->gen_key;

    echo <<<EOD
<p>
Acronym: {$res->acronym}</br>
Course: {$res->course}</br>
Lab: {$res->lab}</br>
Created: {$res->created}</br>
Key: {$res->gen_key}</br>
</p>
<p>
<a href="lab.php?lab&key=$gen_key">Lab</a> | 
<a href="lab.php?lab&answers&key=$gen_key">Lab with answers</a> | 
<a href="lab.php?answers&key=$gen_key">Answers</a> | 
</p>
EOD;

}

?>


<form>

<p>
    <label>Lab key:<br>
    <input type="text" name="key" placeholder="Enter lab key">
    </acronym>
</p>

<p>
    <input type="submit" name="doKey" value="Submit">
</p>

</form>



</body>
</html>
