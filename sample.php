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
$translatedText = $gt->translateText("
    English literature is the literature written in the English language, including literature composed in English by writers not necessarily from England; for example, Robert Burns was Scottish, James Joyce was Irish, Joseph Conrad was born in Poland, Dylan Thomas was Welsh, Edgar Allan Poe was American, V.S. Naipaul was born in Trinidad, and Vladimir Nabokov was Russian, but all are considered important writers in the history of English literature. In other words, English literature is as diverse as the varieties and dialects of English spoken around the world. In academia, the term often labels departments and programmes practising English studies in secondary and tertiary educational systems. Despite the variety of authors of English literature, the works of William Shakespeare remain paramount throughout the English-speaking world.
    This article primarily deals with some of the literature from Britain written in English. For literature from specific English-speaking regions, consult the see also section, bottom of the page
    The first works in English, written in Old English, appeared in the early Middle Ages (the oldest surviving text is Cædmon's Hymn). The oral tradition was very strong in the early English culture and most literary works were written to be performed. Epic poems were thus very popular and many, including Beowulf, have survived to the present day in the rich corpus of Anglo-Saxon literature that closely resemble today's Icelandic, Norwegian, North Frisian and the Northumbrian and Scots English dialects of modern English. Much Old English verse in the extant manuscripts is probably a milder adaptation of the earlier Germanic war poems from the continent. When such poetry was brought to England it was still being handed down orally from one generation to another, and the constant presence of alliterative verse, or .consonant rhyme (today's newspaper headlines and marketing abundantly use this technique such as in Big is Better) helped the Anglo-Saxon people remember it. Such rhyme is a feature of Germanic languages and is opposed to vocalic or end-rhyme of Romance languages. But the first written literature dates to the early Christian monasteries founded by St. Augustine of Canterbury and his disciples and it is reasonable to believe that it was somehow adapted to suit to needs of Christian readers.
    ", "en", "ru");
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
