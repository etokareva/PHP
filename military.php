<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
        	
		$age = 22;
		$result = "";


		if (($age>0)&&($age<=100)) {
			if (($age<18)||($age>59)){
			   $result = 'заполняющий находится в непризывном возрасте';
			} 

			if (($age>=18)&&($age<=27)) {
			   $result = 'заполняющий подлежит призыву на срочную службу или может служить по контракту';
			} 

			if (($age>=28)&&($age<=59)) {
			   $result = 'заполняющий может служить по контракту';
			}
		}

		else {
			$result = 'Постарайтесь указать правильное значение возраста';
		}
         ?> 
    </body>
</html>