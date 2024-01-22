<?php 



abstract class Banco {

    protected $saldo;
    protected  $limiteSaque;
    protected $juros;

    abstract protected function withdraw($s);

    abstract protected function deposit($d);

    public function setBalance($balance)
    {
        $this->saldo = $balance;
    }

    public function getBalance()
    {
        return $this->saldo;
    }

}

Class Itau extends Banco{
    
    public function withdraw($w)
    {
        $this->saldo -= $w;
        echo "o valor de" . $w . " foi sacado com sucesso da sua conta.<br>";
    }

    public function deposit($d)
    {
        $this->saldo += $d;
        echo "o valor de " . $d . " foi depositado com sucesso da sua conta.<br>";
    }
}
