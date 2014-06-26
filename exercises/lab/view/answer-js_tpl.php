/**                                               
 * @preserve <?=$key?> generated for <?=$acronym?> at <?=$created?> 
 */                                               
(function(dbwebb){
    "use strict";

    var ANSWER = null,
        output;

    console.log("Ready to begin.");


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




ANSWER = "Replace this text with the answer or the variable holding it.";

dbwebb.assert("<?="$sectionId.$questionId"?>", ANSWER, false); // Is the answer as expected?



<?php 
    }
}
?>

    console.log("All done.");

}(dbwebb));
