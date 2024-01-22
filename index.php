<?php

include("Model/Pessoa.php");

$pessoa = new Pessoa();
$nome = 'Gustavo';
$email = 'gustavo@example.com';
$senha = '10203040';
$pessoa->setNome($nome); 
$pessoa->setEmail($email);
$pessoa->setSenha($senha);
$pessoa->login();