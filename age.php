<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
        	$age = 24;

        	if($age<20){
        		echo 'Все впереди, Катя!';
        	} elseif (($age>20)&&($age<30)) {
        		echo 'Самое время взяться за ум, Катя!';
        	} else {
        		echo 'У вас есть чему поучиться, Катя!';
        	}
         ?> 
    </body>
</html>