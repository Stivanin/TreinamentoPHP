<?php

class Pessoa
{
    /**
    * @var string
    */
    private $_nome;
    
    /**
    * @var string
    */
    private $_sexo;
    
    /**
    * @var int
    */
    private $_idade;

    public function getNome() 
    {
        return $this->_nome;
    }

    public function setNome($nome) 
    {
        $this->_nome = $nome;
    }

    public function getSexo() 
    {
        return $this->_sexo;
    }

    public function setSexo($sexo)
    {
        $this->_sexo = $sexo;
    }

    public function getIdade()
    {
        return $this->_idade;
    }

    public function setIdade($idade)
    {
        $this->_idade = $idade;
    }
}

?>