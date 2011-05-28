<?php
/**
 * Sample. How to use GoogleTranslater.
 *
 * @author Andrew Kulakov <avk@8xx8.ru>
 * @version 1.0.0
 * @license https://github.com/Andrew8xx8/GoogleTranslater/blob/master/MIT-LICENSE.txt
 * @copyright Andrew Kulakov (c) 2011
 * @licenze CI
 */ 

require_once("GoogleTranslater.php");

// Try to translate text
$ga = new GoogleTranslater();
$translatedText = $ga->translateText("Try to translate this text.", "en", "ru");
if ($translatedText !== false) {
    echo $translatedText;
} else {
    echo $ga->getErrors(); 
}

// Crasy stuff. Translate array
$translatedArray = $ga->translateArray(array("Some", "Words", "To", "Translate"), "en", "ru");
if ($translatedArray !== false) {
    print_r($translatedArray);
} else {
    echo $ga->getErrors(); 
}    
?>
