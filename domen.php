<?php 
	
	$products =[

				'name' => '   FiRsT ',
				'price' => 11,
				'country' => ' RuSsIa   ',
		];
	
	function getDomain($email){
		$at = strpos($email, "@");
		$length = strlen($email);
		return substr($email, $at+1, $length);
	}

	echo getDomain("etokareva1990@gmail.com")."<br>";


	function trimArray($array){
		$resultString = "";
		foreach ($array as $key => $value) {
			$value = strtolower(trim($value));
			$resultString .= $key .":" . $value . "<br>";
		}
		 
		return $resultString;
	}

	echo trimArray($products);

?>