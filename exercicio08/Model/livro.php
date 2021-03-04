<?php

class Livro
 
{
    /**
    * @var string
    */
    private $_titulo;
    
    /**
    * @var string
    */
    private $_autor;
    
    /**
    * @var int
    */
    private $_totPaginas;
    
    /**
    * @var int
    */
    private $_pagAtual;
    
    /**
    * @var boolean
    */
    private $_aberto;
    
    /**
    * @var Pessoa
    */
    private $_leitor;

    public function getTitulo() 
    {
        return $this->_titulo;
    }

    public function setTitulo($titulo) 
    {
        $this->_titulo = $titulo;
    }

    public function getAutor() 
    {
        return $this->_autor;
    }

    public function setAutor($autor)
    {
        $this->_autor = $autor;
    }

    public function getTotPaginas()
    {
        return $this->_totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->_totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->_pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->_pagAtual = $pagAtual;
    }
    public function getAberto()
    {
        if ($this->_aberto == true) {
            return 'Aberto';
        } else {
            return 'Fechado';
        }
    }

    public function setAberto($aberto)
    {
        $this->_aberto = $aberto;
    }
    public function getLeitor()
    {
        return $this->_leitor->getNome();
    }

    public function setLeitor($leitor)
    {
        $this->_leitor = $leitor;
    }
}

?>