<?php 

if (!isset($_GET['name']) || !isset($_GET['grade1']) || !isset($_GET['grade2']) || !isset($_GET['grade3'])) {
	echo "Dados não Encontrados!";
} else {
	$name = $_GET['name'];

	$grade1 = $_GET['grade1'];
	$grade2 = $_GET['grade2'];
	$grade3 = $_GET['grade3'];

	$media = ($grade1 + $grade2 + $grade3) / 3;

	echo "Média do estudante $name: $media";
}

 ?>