<?php
/**
 * GoogleTranslater is PHP interface for http://translate.google.com/
 * It send request to google translate service, get response and provide 
 * translated text.
 *
 * @author Andrew Kulakov <avk@8xx8.ru>
 * @version 1.0.0
 * @license https://github.com/Andrew8xx8/GoogleTranslater/blob/master/MIT-LICENSE.txt
 * @copyright Andrew Kulakov (c) 2011
 * @licenze CI
 */

class GioogleTranslater 
{
    private $_errors = "";
  
    public function _construct() 
    {
        if (!function_exists('curl_init'))
            $this->_errors = "No CURL support";
    }   
    
    public function translateText($text, $fromLanguage = "en", $toLanguage = "ru") 
    {
        if (!empty($this->_errors)) {
            
        } else
            return false;
    } 
    
    public function translateArray($array, $fromLanguage = "en", $toLanguage = "ru") 
    {
        if (!empty($this->_errors)) {
            
        } else
            return false;
    }

    public function getLanguages()
    {
        if (!empty($this->_errors)) {
            
        } else
            return false; 
    }
    
    public function getErrors(){
        return $this->_errors;
    }
}
?>
