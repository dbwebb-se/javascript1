/**                                               
 * @preserve <?=$key?> generated for <?=$acronym?> at <?=$created?> 
 */                                               
(function(){
    "use strict";

    var ANSWER = null,
        output;



<?php 
$sectionId = 0;

foreach ($sections as $section) {
    $sectionId++;
    $questionId = 0;

    foreach ($section['questions'] as $question) {
        $questionId++;

?>
/**
 * Exercise <?="$sectionId.$questionId"?> 
 * 
 * <?=wordwrap(trim(strip_tags($question['text']), "\n"), 75, "\n * ", true)?> 
 *
 * Write your code below and put the answer into the variable ANSWER.
 */




ANSWER = "Replace this text with the answer to the exercise, always wrap as string.";

dbwebb.assert("<?="$sectionId.$questionId"?>", ANSWER); // Is the answer as expected?



<?php 
    }
}
?>

}());
