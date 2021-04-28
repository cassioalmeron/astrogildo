<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$tel = $_POST['telefone'];
$data = $_POST['data_Nascimento'];

echo "<strong>Nome:</strong> {$nome}<br><strong>Endereço:</strong> {$endereco}<br><strong>Telefone:</strong> {$tel}<br>Data de Nascimento: {$data}";