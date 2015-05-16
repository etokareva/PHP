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

				echo $value['name'].'<br>';
				echo $value['price'].'<br>';
				echo $value['country'].'<br>';

				
				$temp = $value['name'];
				$value['name'] = $value['price'];
				$value['price']=$value['country'];
				$value['country'] = $temp;

				echo '<br>';

				echo $value['name'].'<br>';
				echo $value['price'].'<br>';
				echo $value['country'].'<br>';
				echo '<hr>';

		}

		echo $products[2]['country'];
    ?> 
</body>
</html>