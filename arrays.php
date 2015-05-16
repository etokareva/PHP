<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$data=[];
       	var_dump($data);

       	$data[] = 'first value';
       	$data[] = 'second value';
       	var_dump($data);

       	foreach ($data as $key => $value) {
       		//value - this is copy, first array doesn't change
       		echo $value.'<br>';
       		echo $data[$key].'<br>'
       	}

       	$data = [
       		'name' => 'Katy',
       		'age' => 24
       	];

       	var_dump($data);

       	unset($data[1]);
       	var_dump($data);
    ?> 
</body>
</html>