<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$products =[
			[
				'name' => 'first',
				'price' => 11,
				'country' => 'Russia',
			],
			[
				'name' => 'second',
				'price' => 22,
				'country' => 'UK',
			],
			[
				'name' => 'third',
				'price' => 33,
				'country' => 'US',
			],
			[
				'name' => 'fourth',
				'price' => 44,
				'country' => 'Spain',
			]
		];

		foreach ($products as $key => $value) {
			foreach ($value as $key2 => $value2) {
				echo $value2.'<br>';
			}
			echo '<hr>';

		}
    ?> 
</body>
</html>