<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<?php

	require 'Pokemon.php';
	require 'Type.php';
	require 'Attack.php';
	require 'Weakness.php';
	require 'Resistance.php';
	require 'Pikachu.php';
	require 'Charmeleon.php';

	$Pikachu = new Pikachu('Pikachu');
	$Pikachu->setName('Herman');
	$Charmeleon = new Charmeleon('Charmeleon');

	//print_r($Pikachu);
	//print_r($Charmeleon);
	?>

	<div>
		<?php

		echo 'Pikachu: ' . $Pikachu->health . ' health.' . '<br>';
		echo 'Charmeleon: ' . $Charmeleon->health . ' health.' . '<br>';
		echo 'Pikachu used ' . $Pikachu->attacks[1]->attack . '.' . '<br>';
			$Pikachu->attack($Pikachu->attacks[1], $Charmeleon);
		echo 'Charmeleon: ' . $Charmeleon->health . ' health left.' . '<br>';
			 $Charmeleon->attack($Charmeleon->attacks[1], $Pikachu);
		echo 'Charmeleon used ' . $Charmeleon->attacks[1]->attack . '.' . '<br>';
		echo 'Pikachu: ' . $Pikachu->health . ' health left.';

		?>
	</div>
</body>
</html>