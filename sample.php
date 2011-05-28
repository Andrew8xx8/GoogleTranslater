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

// Create GT Object
    $gt = new GoogleTranslater();

// Translate text
// Usage: GoogleTranslater :: translateText(string $text, string $fromLanguage, string $tolanguage, bool $translit = false)
    $translatedText = $gt->translateText("Try to translate this text.", "en", "ru");
    if ($translatedText !== false) {
        echo $translatedText;
    } else {
        //If some errors present
        echo $gt->getErrors(); 
    }

// Crasy stuff. Translate array
// Usage: GoogleTranslater :: translateArray(array $array, string $fromLanguage, string $tolanguage, bool $translit = false)
    $translatedArray = $gt->translateArray(array("Some", "Words", "To", "Translate"), "en", "ru");
    if ($translatedArray !== false) {
        print_r($translatedArray);
    } else {
        echo $gt->getErrors(); 
    }    
?>
