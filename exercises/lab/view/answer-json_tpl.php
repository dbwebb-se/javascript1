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

                $json .= "\t\t\"$sectionId.$questionId\":\t\"" . $question['answer']() . "\",\n";
            }
        }
        echo substr($json, 0, -2) . "\n";?>
    }
}
