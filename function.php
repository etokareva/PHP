<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Test</title>
    </head>
    <body>
        <?php        	
			
			function nameByAge($age) {
				$result = '';
				if($age<20){
	        		$result =  'Все впереди, Катя!';
	        	} elseif (($age>=20)&&($age<=30)) {
	        		$result =  'Самое время взяться за ум, Катя!';
	        	} else {
	        		$result =  'У вас есть чему поучиться, Катя!';
	        	}

	        	return $result;
			}

			for($i=1; $i<=100; $i++) {
				echo nameByAge($i).'<br>';
			}

         ?> 
    </body>
</html>