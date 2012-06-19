<?php
/*
@File:  Code Syntax Highlighter
@About: Loads a theme and colors codes the code
*/
class code {
	/*
	Set Variables
	*/
	public $theme;
	public $includedTheme;
	public $source;
	
	/*
		User Input
	*/
	function __construct($theme = 'default') {
		$this->theme = $theme;
	}
	
	/*
	@Info: Highlights the code
	*/
	public function highlighter($code) {
		/* Set Source code */
		$this->source = $code;
		/* Load Theme Array */
		include(CORE_PATH . 'assets/themes/' . $this->theme . '.theme.php');
		/* Replace all lines to a common form */
        $this->source = str_replace("\r\n", "\n", $this->source);
        $this->source = str_replace("\r", "\n", $this->source);
        /* Replace all spaces to a common form */
		$this->source = "\n" . $this->source . "\n";
		/* Remove first \n line break */
		$this->source = substr($this->source, strpos($this->source, "\n") + 1);
		/* String Legenth */
		 $length      = strlen($this->source);
		/* Handle the code char by char */
		$each = preg_split('/\s+/', $this->source);
		/* Foreach explode */
		$output = $this->source;
		
		/* Color the Strings */
			$output = preg_replace('/"(.*)"/i', '<span style="color: ' . $theme['COLORS']['SYMBOLS2'] . '">"</span><span style="color: ' . $theme['COLORS']['STRINGS'] . '">$1</span><span style="color: ' . $theme['COLORS']['SYMBOLS2'] . '">"</span>', $output);
			$output = preg_replace('/\'(.*)\'/i', '<span style="color: ' . $theme['COLORS']['SYMBOLS2'] . '">\'</span><span style="color: ' . $theme['COLORS']['STRINGS'] . '">$1</span><span style="color: ' . $theme['COLORS']['SYMBOLS2'] . '">\'</span>', $output);
		/* Comments */
			$output = preg_replace('#/\*(.*)\*/#i', '<span style="color: ' . $theme['COLORS']['COMMENTS'] . '">/*$1*/</span>', $output); /* Type: This */
			$output = preg_replace('/\#(\s+)([A-Za-z0-9 ]+)/i', '<span style="color: ' . $theme['COLORS']['COMMENTS'] . '">#$1$2</span>', $output); /* Type: # */
			$output = preg_replace('#\//(\s+)([A-Za-z0-9 ]+)#i', '<span style="color: ' . $theme['COLORS']['COMMENTS'] . '">//$1$2</span>', $output); /* Type: // */
		/* This */
			$output = preg_replace('/\$this->([A-Za-z0-9]+)(\s|=)/i', '<span style="color: ' . $theme['COLORS']['CODE'] . '">$this-></span><span style="color: ' . $theme['COLORS']['MASTER'] . '">$1</span>$2', $output);
		
		/* Variables */
			$output = preg_replace('/\$([A-Za-z0-9]+)(\s|=|\[|;)/i', '<span style="color: ' . $theme['COLORS']['VARIABLES'] . '">$$1</span>$2', $output);
		
		/* Symbols */
			$output = preg_replace('/({|}|\(|\)|\[|\])/i', '<span style="color: ' . $theme['COLORS']['SYMBOLS'] . '">$1</span>', $output);
			$output = preg_replace('/(@|\%|\&|\|)/i', '<span style="color: ' . $theme['COLORS']['SYMBOLS2'] . '">$1</span>', $output);
			$output = preg_replace('#(?!/)(\*)|(\*)(?!/)#i', '<span style="color: ' . $theme['COLORS']['SYMBOLS2'] . '">$1</span>', $output);
		
		/* Codes */
		/* WE uses this mess of code as not to duplicate highlights */
		$change_code = array();
		$change_code2 = array();
		/* Search exploded list */
		foreach($each as $key) {
			/* Trim space */
			$key = trim($key);
			/* Check what values exist */
			if(isset($theme['CODE']) && in_array($key, $theme['CODE'])) {
				$change_code[] = $key;
			}
			if(isset($theme['CODE2']) && in_array($key, $theme['CODE2'])) {
				$change_code2[]= $key;
			}
		}
		/* Call only one value so we dont have duplicates */
		$change_code = array_unique($change_code);
		foreach($change_code as $key) {
			$output = str_replace($key, '<span style="color: ' . $theme['COLORS']['CODE'] . '">' . $key . '</span>', $output);
		}
		$change_code2 = array_unique($change_code2);
		foreach($change_code2 as $key) {
			$output = str_replace($key, '<span style="color: ' . $theme['COLORS']['CODE'] . '">' . $key . '</span>', $output);
		}
		/* Return highlighted code */
		return $output;
	}
	
	function startsWith($haystack,$needle,$case=true) {
		if($case){return (strcmp(substr($haystack, 0, strlen($needle)),$needle)===0);}
		return (strcasecmp(substr($haystack, 0, strlen($needle)),$needle)===0);
	}
	
	public function value_in_array($array, $find){
		$exists = FALSE;
			if(!is_array($array)){
			return;
		}
		foreach ($array as $key => $value) {
			if($find == $value){
				$exists = TRUE;
			}
		}
		return $exists;
	}
	
	function preg_replace_array($pattern, $replacement, $subject, $limit=-1) {
		if (is_array($subject)) {
			foreach ($subject as &$value) $value=preg_replace_array($pattern, $replacement, $value, $limit);
			return $subject;
		} else {
			return preg_replace($pattern, $replacement, $subject, $limit);
		}
	}
}
?>
