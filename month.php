<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
        	
			$n = 10;
			$days = array(
						'mon' => '';
						'tue' => '';
						'' => '';
					);
        	echo '<table>';
			echo '<tr>';
			for ($j=1; $j<=$n; $j++){
				echo '<th>'.$j.'</th>';
			}
			echo '</tr>';

			for ($i=1; $i<=$n; $i++) {
				echo '<tr>';
				for ($j=1; $j<=$n; $j++){
						echo '<td>'.$i*$j.'</td>';
				}
				echo '</tr>';
			}
			echo '</table>';
			
         ?> 
    </body>
</html>