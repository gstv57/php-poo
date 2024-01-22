<?php

class Pessoa {
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha){
        $this->setNome($nome); 
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    // prática referente a setters e getters.
    // set =  detentores
    // get =  obtentores  

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    
    public function getSenha()
    {
        return $this->senha;   
    }
    public function login()
    {
        if($this->email == 'gustavo@example.com' and $this->senha == '10203040')
        {
            echo "logado com sucesso<br></br>";
        } else {
            die("dados de login incorreto.");
        }
    }
}
