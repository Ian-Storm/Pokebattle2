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
	$Charmeleon = new Charmeleon('Charmeleon');

	//print_r($Pikachu);
	//print_r($Charmeleon);
	?>

	<div>
		<?php

		echo 'Pikachu: ' . $Pikachu->getHealth() . ' health.' . '<br>';
		echo 'Charmeleon: ' . $Charmeleon->getHealth() . ' health.' . '<br>';
		echo 'Pikachu used ' . $Pikachu->getAttack()->attack . '.' . '<br>';
			$Pikachu->attack($Charmeleon);
		echo 'Charmeleon: ' . $Charmeleon->getHealth() . ' health left.' . '<br>';
			 $Charmeleon->attack($Pikachu);
		echo 'Charmeleon used ' . $Charmeleon->getAttack()->attack . '.' . '<br>';
		echo 'Pikachu: ' . $Pikachu->getHealth() . ' health left.';

		?>
	</div>
</body>
</html>