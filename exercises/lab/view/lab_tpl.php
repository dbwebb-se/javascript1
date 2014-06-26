<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
<style>
<?=file_get_contents("style/style.css")?>
</style>
</head>
<body>

<code><?=$key?></code>
<p><i>Generated for <?=$acronym?> at <?=$created?>.</i></p>
<hr>

<h1><?=$title?></h1>
<?=$intro?>

<?php 
$sectionId = 0;

foreach ($sections as $section) : 
$sectionId++;
$questionId = 0;
?>

<h2><?=$sectionId . ". " . $section['title']?></h2>
<?=$section['intro']?>

<?php 
foreach ($section['questions'] as $question) : 
$questionId++;
?>

<h3>Exercise <?="$sectionId.$questionId"?></h3>
<?=$question['text']?>


<?php if ($doAnswers) : ?>

<h4>Answer</h4>
<pre><?=$question['answer']()?></pre>

<?php endif; ?>



<?php endforeach; ?>

<?php endforeach; ?>

<hr>
<p><i>Generated for <?=$acronym?> at <?=$created?>.</i></p>
<code><?=$key?></code>

</body>
</html>
