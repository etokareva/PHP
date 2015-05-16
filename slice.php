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
			],
			[
				'name' => 'fourth',
				'price' => 44,
				'country' => 'Spain',
			],
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
			],
			[
				'name' => 'fourth',
				'price' => 44,
				'country' => 'Spain',
			],
			[
				'name' => 'fourth',
				'price' => 44,
				'country' => 'Spain',
			],
		];

		$totalProducts = count($products);
		$firstCount = ceil($totalProducts/2);
		$secondCount = floor($totalProducts/2);

		$firstArray = array_slice($products, 0, $firstCount);
		$secondArray = array_slice($products, $totalProducts - $firstCount);
		
		echo '<h1>First</h1>';
		foreach ($firstArray as $key => $value) {
			var_dump($value);
		}
		echo '<h1>Second</h1>';
		foreach ($secondArray as $key => $value) {
			var_dump($value);
		}
    ?> 
</body>
</html>