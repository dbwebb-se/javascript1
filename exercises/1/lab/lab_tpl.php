<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1><?=$title?></h1>
<?=$intro?>

<?php 
$sectionId = 0;
$questionId = 0;

foreach ($sections as $section) : 
$sectionId++;
?>

<h2><?=$sectionId . ". " . $section['title']?></h2>
<?=$section['intro']?>

<?php 
foreach ($section['questions'] as $question) : 
$questionId++;
?>

<h3>Exercise <?="$sectionId.$questionId"?></h3>
<?=$question['text']?>

<h4>Solution</h4>
<pre><?=$question['solution']()?></pre>






<?php endforeach; ?>

<?php endforeach; ?>

</body>
</html>