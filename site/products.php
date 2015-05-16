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
					'name' => 'fifth',
					'price' => 55,
					'country' => 'France',
				],
				[
					'name' => 'sixth',
					'price' => 66,
					'country' => 'Italy',
				],
				[
					'name' => 'seventh',
					'price' => 77,
					'country' => 'Ukraine',
				],
				[
					'name' => 'eighth',
					'price' => 88,
					'country' => 'Germany',
				],
			];


		$pageId = isset($_GET['pageId']) ? $_GET['pageId']:'1';

		if ($pageId <= count($products)-1) {
			for ( $i = ($pageId-1)*2; $i <= $pageId*2-1; $i++ ) {
				echo '<p>'.$products[$i]['name'].'<br>'.$products[$i]['price'].'<br>'.$products[$i]['country'].'</p>';
				echo '<hr>';
			}
		}

		
				
?>

<ul class="pagination">
    <li><a href="/epic/site/?page=products&pageId=1">1</a></li>
    <li><a href="/epic/site/?page=products&pageId=2">2</a></li>
    <li><a href="/epic/site/?page=products&pageId=3">3</a></li>
    <li><a href="/epic/site/?page=products&pageId=4">4</a></li>
</ul>