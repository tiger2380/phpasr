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
		/* String Legenth */
		 $length      = strlen($this->source);
		/* Handle the code char by char */
		$each = preg_split('/\s+/', $this->source);
		/* Foreach explode */
		$output = $this->source;
		foreach($each as $key) {
			// echo $key . '<br />';
			$key = trim($key);
			if(isset($theme['CODE']) && in_array($key, $theme['CODE'])) {
				$output = str_replace($key, '<span style="color: ' . $theme['COLORS']['CODE'] . '">' . $key . '</span>', $output);
			}
			if(isset($theme['CODE2']) && in_array($key, $theme['CODE2'])) {
				$output = str_replace($key, '<span style="color: ' . $theme['COLORS']['CODE2'] . '">' . $key . '</span>', $output);
			}
			if(isset($theme['SYMBOLS']) && in_array($key, $theme['SYMBOLS'])) {
				$output = str_replace($key, '<span style="color: ' . $theme['COLORS']['SYMBOLS'] . '">' . $key . '</span>', $output);
			}
		}
		
		//foreach($theme['SYMBOLS'] as $key) {
			// $output = str_replace($key, '<span style="color: ' . $theme['COLORS']['SYMBOLS'] . '">' . $key . '</span>', $output);
		// }
		
		// foreach($theme as $key => $value) {
			// $code = str_replace($key, '<span style="color: ' . $value . '">' . $key . '</span>', $code);
		// }
		
		// $code = preg_replace('/\$([A-Za-z0-9]+)( =)|\$(.*)(;)/is', '<span style="color: ' . $theme['variable'] . '">$$1$3</span>$2$4', $code);
		
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
