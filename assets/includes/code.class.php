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
		/* Load Theme Array */
		include(CORE_PATH . 'assets/themes/' . $this->theme . '.theme.php');
		
		/* Safe Code */
		$code = htmlentities($code);
		
		foreach($theme as $key => $value) {
			$code = str_replace($key, '<span style="color: ' . $value . '">' . $key . '</span>', $code);
		}
		
		$code = preg_replace('/\$([A-Za-z0-9]+)( =)|\$(.*)(;)/is', '<span style="color: ' . $theme['variable'] . '">$$1$3</span>$2$4', $code);
		
		return $code;
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
