<?php 

if (!isset($_GET['number1']) || !isset($_GET['number2']) || !isset($_GET['number3'])) {
	echo "Dados não Encontrados!";
} else {
	$number1 = $_GET['number1'];
	$number2 = $_GET['number2'];
	$number3 = $_GET['number3'];

	$maior = $number1;

	if ($number2 > $maior)
		$maior = $number2;

	if ($number3 > $maior)
		$maior = $number3;

	echo "Entre os números $number1, $number2, $number3, o maior é o $maior";
}

 ?>