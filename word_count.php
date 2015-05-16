<?php 
	
	$string ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit consequuntur fugit nesciunt similique ut temporibus nemo officia, velit alias laboriosam eligendi minima voluptas? Corporis voluptate, quisquam iure dicta minus ab.";
	$result = "";
	foreach (explode(" ", $string) as $word) {
		$firstLetter = mb_substr($word, 0, 1);
		$lastLetter = mb_substr($word, 0, -1);
		$middleLetters = mb_substr($word, 1, mb_strlen($word)-1);
		$result .=$firstLetter . str_shuffle($middleLetters) .$lastLetter ." ";

	}

?>