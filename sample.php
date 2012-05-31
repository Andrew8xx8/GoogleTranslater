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

header("Content-Type: text/html; charset= UTF-8");

require_once("GoogleTranslater.php");

// Create GT Object
$gt = new GoogleTranslater();

// Translate text
// Usage: GoogleTranslater :: translateText(string $text, string $fromLanguage, string $tolanguage, bool $translit = false)
$translatedText = $gt->translateText("Some words to translate", "en", "ru");
if ($translatedText !== false) {
	echo $translatedText;
} else {
	//If some errors present
	echo $gt->getErrors(); 
}

// Translate Array
// Usage: GoogleTranslater :: translateArray(array $array, string $fromLanguage, string $tolanguage, bool $translit = false)
$translatedArray = $gt->translateArray(array("Some", "words", "to", "translate"), "en", "ru");
if ($translatedArray !== false) {
	print_r($translatedArray);
} else {
	echo $gt->getErrors(); 
}

?>
