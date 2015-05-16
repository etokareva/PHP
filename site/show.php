<?php
	if (! empty($_GET)) {
		$message = "";

		foreach ($_GET as $key => $value) {
			$message .= $key . ":" . $value ."<br>";
		}

		echo $message;
	} 
?>