<?php

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    // public - acessivel por todos que quiserem acessá-los
    // protected - herdeiros possam ver os atributos e metodos como se fossem publicos
    // private  - somente pela classe que a declarou

    public function andar()
    {
        echo "O veiculo está andando... <br>";
    }

    public function parar()
    {
        echo "O veiculo está parando... <br>";
    }
}
