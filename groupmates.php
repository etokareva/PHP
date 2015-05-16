<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$groupmates =[
			[
				'name' => 'Юрий',
				'surname' => 'Соколов',
				'city' => 'СПб',
				'vk_id' => 'http://vk.com/opmyukka',
				'interests' => 'music is my religion, Люблю сыр',
			],
			[
				'name' => 'Дмитрий',
				'surname' => 'Лебедев',
				'city' => 'СПб',
				'vk_id' => 'http://vk.com/dimitrylebedev',
				'interests' => 'none',
			],
			[
				'name' => 'Екатерина',
				'surname' => 'Курылева',
				'city' => 'СПб',
				'vk_id' => 'http://vk.com/kayia',
				'interests' => 'http://york-in.ru',
			],
			[
				'name' => 'Наталья',
				'surname' => 'Лоскутова',
				'city' => 'город К.',
				'vk_id' => 'http://vk.com/nutzzz',
				'interests' => 'Люблю поспать, читаю в метро.	Собираю пазлы',
			],
		];

		foreach ($groupmates as $value) {

			echo '<section><h2>'.$value['name'].' '.$value['surname'].'</h2><p>'.$value['vk_id'].'</p></section>';
		}
    ?> 
</body>
</html>