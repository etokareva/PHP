<?php
header('Content-type: text/html; charset=utf-8');

$lines = array_reverse(file("hipster.txt"));
//reverse of paragraphs
// $new_lines =implode("", array_reverse($lines));
// fwrite($fp, $new_lines);
//reverse of paragraphs

$search_word = "coffee";
$change_word = "Чебурашка";
//$lines = array_reverse($lines);
foreach ($lines as $line_num => &$line) {
	if (($line_num % 2) == 1) {
		unset($lines[$line_num]);
	} else {
		$line = str_replace($search_word, $change_word, $line);
	}
}

$lines[0] = $lines[0] . "\n";
fwrite(fopen("result.txt", "w"), implode("", $lines));
// fwrite($fp, $lines);

?>