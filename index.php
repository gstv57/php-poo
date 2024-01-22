<?php

include("Model/Pessoa.php");
include("Model/Carro.php");

// $pessoa = new Pessoa('Gustavo', 'gustavo@example.com', '10203040');
// $pessoa->login();

$carro = new Carro();
$carro->modelo = 'Corsa';
$carro->cor = 'Preto';
$carro->ano = 2024;
$carro->andar();
$carro->parar();