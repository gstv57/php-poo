<?php

include("Model/Pessoa.php");

$pessoa = new Pessoa('Gustavo', 'gustavo@example.com', '10203040');
$pessoa->login();