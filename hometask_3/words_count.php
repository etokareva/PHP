<?php 
	

	function wordsCount($str){
		$str_array = explode(" ", $str);
		return count($str_array);
	}

	function evenLengthCount($str){
		$even_sum = 0;
		foreach (explode(" ", $str) as $value) {
			if( (mb_strlen($value) % 2) == 0 ) {
				$even_sum++;
			}
		}
		return $even_sum;
	}


	function evenToUpper($string) {
		for ($i=0; $i <mb_strlen($string) ; $i++) { 
			if ( ($i % 2) == 1 ) {
				$string[$i] = strtoupper($string[$i]);
			}
		}

		return $string;
	}


	function shuffleLetters($str){
		$result = '';

		foreach (explode(' ', $str) as $word) {
	    	$firstLetter = mb_substr($word, 0, 1);
	    	$lastLetter = mb_substr($word, -1);
	    	$middleLetters = mb_substr($word, 1, mb_strlen($word) - 1);
	    	$result .= $firstLetter . str_shuffle($middleLetters) . $lastLetter . ' ';
	 	}
	 	return $result;
	}
	

	function getFileName($file){
		$dot = strpos($file, ".");
		$length = strlen($file);
		return substr($file, 0, $dot);
	}


?>