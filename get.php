<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
        	$name = 'name1';        	
			$descr = 'description1';
			$cat = 'category1';
			$price = 'price1';

			var_dump($_GET);
	        if (isset($_GET['name'])){
	        	echo $name.'<br>';
	        }
	        if (isset($_GET['descr'])){
	        	echo $descr.'<br>';
	        }
	        if (isset($_GET['cat'])){
	        	echo $cat.'<br>';
	        }
	        if (isset($_GET['price'])){
	        	echo $price.'<br>';
	        }
        	
         ?> 
    </body>
</html>