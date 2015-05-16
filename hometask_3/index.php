<?php 

	include 'form.php';
	include 'show.php';
	include 'words_count.php';

	$string = isset($_GET['string']) ? $_GET['string']:'';
	$function = isset($_GET['function']) ? $_GET['function']:'wordsCount';

		switch($function){
			case "wordsCount":
				echo wordsCount($string);
				break;
			case "evenLengthCount":
				echo evenLengthCount($string);
				break;
			case "evenToUpper":
				echo evenToUpper($string);
				break;
			case "shuffleLetters":
				echo shuffleLetters($string);
				break;
			case "getFileName":
				echo getFileName($string);
				break;
			default: 
				echo "Not supported yet.";
				break;
		}

?>