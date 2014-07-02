#!/usr/bin/env python3

"""                                               
<?=$key?> generated for <?=$acronym?> at <?=$created?> 
"""

from Dbwebb import Dbwebb

dbwebb = Dbwebb()
print("Ready to begin.");


<?php 
$sectionId = 0;

foreach ($sections as $section) {
    $sectionId++;
    $questionId = 0;

    foreach ($section['questions'] as $question) {
        $questionId++;

?>
"""
Exercise <?="$sectionId.$questionId"?> 
 
<?=wordwrap(trim(strip_tags($question['text']), "\n"), 75, "\n", true)?> 

Write your code below and put the answer into the variable ANSWER.
"""





ANSWER = "Replace this text with the answer or the variable holding it."

# Is the answer as expected?
# When you get stuck - change False to True to get a hint.
print(dbwebb.assertEqual("<?="$sectionId.$questionId"?>", ANSWER, False))

<?php 
    }
}
?>

print("All done.");
