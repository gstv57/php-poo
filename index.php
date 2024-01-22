<?php

include("Model/Pessoa.php");
include("Model/Carro.php");
include("Model/AbstractClass.php");

// $pessoa = new Pessoa('Gustavo', 'gustavo@example.com', '10203040');
// $pessoa->login();

// $carro = new Carro();
// $carro->modelo = 'Corsa';
// $carro->cor = 'Preto';
// $carro->ano = 2024;
// $carro->andar();
// $carro->parar();

$banco = new Itau();
$banco->deposit(15);
$banco->deposit(35);
$banco->deposit(15);
$banco->deposit(35);
$banco->deposit(15);
$banco->deposit(35);
$banco->deposit(45);
$banco->withdraw(22);
$banco->deposit(45);
$banco->withdraw(22);
$banco->deposit(45);
$banco->withdraw(22);
$dd = $banco->getBalance();
echo("Seu saldo disponivel é: R$ " . $dd);