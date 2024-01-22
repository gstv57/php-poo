<?php 

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar()
    {
        echo "O veiculo está andando... <br>";
    }

    public function parar()
    {
        echo "O veiculo está parando... <br>";
    }

}