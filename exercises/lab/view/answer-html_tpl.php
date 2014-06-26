<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="style/style.css">
<style>
<?=file_get_contents("style/style.css")?>
</style>
</head>
<body>

<code><?=$key?></code>
<p><i>Generated for <?=$acronym?> at <?=$created?>.</i></p>
<hr>
<h1><?=$title?></h1>
<p>Solve the exercises in the file <code>answer.js</code> and reload this file to se the outcome.</p>

<?php
$sectionId = 0;
foreach ($sections as $section) {
    $sectionId++;
    $questionId = 0;

    foreach ($section['questions'] as $question) {
        $questionId++;

        echo "<div id='answer$sectionId.$questionId'></div>\n";
    }
}?>


<hr>
<p><i>Generated for <?=$acronym?> at <?=$created?>.</i></p>
<code><?=$key?></code>

<script type="text/javascript">

var dbwebb = {

    "answers": {
    
        <?php 
        $sectionId = 0;
        foreach ($sections as $section) {
            $sectionId++;
            $questionId = 0;

            foreach ($section['questions'] as $question) {
                $questionId++;

                echo "\t\t\"$sectionId.$questionId\": \"" . $question['answer']() . "\",\n";
            }
        }?>

    },
    "assert": function(question, answer) {
        var element = document.getElementById("answer" + question),
            status,
            noanswer = "Replace this text with the answer to the exercise, always wrap as string.";

        if (answer === noanswer) {
            status = question + " NOT YET DONE."
        } else if (answer === this.answers.question) {
            status = question + " CORRECT. Well done!"
        } else {
            status = question + " FAIL. Hint:\n" + this.answers.question;
        }

        console.log(status);
        element.innerHTML = status;
    }
}
</script>
<script src="answer.js" type="text/javascript"></script>

</body>
</html>
