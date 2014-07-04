{
    "details":  "Generated for <?=$acronym?> at <?=$created?>.",
    "key":      "<?=$key?>",
    "answers":  {
        <?php 
        $sectionId = 0;
        $json = "";
        foreach ($sections as $section) {
            $sectionId++;
            $questionId = 0;

            foreach ($section['questions'] as $question) {
                $questionId++;
                $answer = formatAnswerJSON($question['answer']());
                $json .= "\t\t\"$sectionId.$questionId\":\t\t$answer,\n";
            }
        }
        echo substr($json, 0, -2) . "\n";?>
    }
}
