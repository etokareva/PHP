<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
        	$sum = 1;
			for ($i=1; $i<=10; $i++) {
				echo $i.'<br>';
				$sum += $i;
			}
			echo 'summ of these numbers is:'.$sum;
         ?> 
    </body>
</html>