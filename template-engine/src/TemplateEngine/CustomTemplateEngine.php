<?php

namespace TemplateEngine;

/**
* CustomTemplateEngine class
*
* simple but flexible template engine
*
* @version 1.0
* @author foysal mamun <mamun.foysal@yahoo.com>
* @project TemplateEngine
*/
class CustomTemplateEngine {

	/**
	* template render
	*
	* This function process template file and replace the placeholder by provided array or object
	*
	* @param string $fileName
	* @param array/object $values
	* @return string
	*/
	public function render($fileName, $values ) {

		if(!file_exists($fileName)) {
			return "template file [$this->fileName] not exists";
		}
		$output = file_get_contents($fileName);

		// convert values object to array if values provided as object
    	$values = is_object($values) ? (array) $values : $values;

		$keys = array_keys($values);
		$pattern = '${{(' . implode('|', array_map('preg_quote', $keys)) . ')}}$';

	    $output = preg_replace_callback($pattern, function($match) use ($values) {
	        return $values[$match[1]];
	    }, $output);

	    return $output;

	}

}