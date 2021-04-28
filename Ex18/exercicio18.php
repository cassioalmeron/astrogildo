<?php 

if (!isset($_POST['username']) || !isset($_POST['password'])) {
	echo "Dados não Encontrados!";
} else {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username=='etec' && $password=='informática')
		echo "logado com sucesso!";
	else
		echo "Usuário ou senha incorreta!";
}

 ?>