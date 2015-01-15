<?php

class Language {
    var $languages = array (
        'en' => 'english'
    );

    function get_language() {
	    // include the config to get the default language
	    include("application/config/config.php");
		$url = $_SERVER["REQUEST_URI"];
		$urlSegments = explode('/',$url);
		$langParam = $urlSegments[1];
		
		if(array_key_exists($langParam, $this->languages)){
			foreach ($this->languages as $key => $value) {
				if($key == $langParam){
					$GLOBALS['language'] = $value;
					$GLOBALS['language-abbr'] = $key;
				}
			}
		}else {
			$abbr = array_search($config['language'], $this->languages); 
			$GLOBALS['language'] = $config['language'];
			$GLOBALS['language-abbr'] = $abbr;
		}
		

}		
	
	
	
}
	
		
?>