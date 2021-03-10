<?php

class Livro {
  /**
   * @var string
   */
  private $titulo;

  /**
   * @var string
   */
  private $autor;

  /**
   * @var int
   */
  private $totPaginas;

  /**
    * @var int
    */
  private $pagAtual;

  /**
   * @var bool
   */
  private $aberto;

  /**
   * @var Pessoa
   */
  private $leitor;

  public function getTitulo() {
    return $this->titulo;
  }

  public function setTitulo($titulo) {
    $this->titulo = $titulo;
  }

  public function getAutor() {
    return $this->autor;
  }

  public function setAutor($autor) {
    $this->autor = $autor;
  }

  public function getTotPaginas() {
    return $this->totPaginas;
  }

  public function setTotPaginas($totPaginas) {
    $this->totPaginas = $totPaginas;
  }

  public function getPagAtual() {
    return $this->pagAtual;
  }

  public function setPagAtual($pagAtual) {
    $this->pagAtual = $pagAtual;
  }

  public function getAberto() {
    if ($this->aberto == TRUE) {
      return 'Aberto';
    }

    else {
      return 'Fechado';
    }
  }

  public function setAberto($aberto) {
    $this->aberto = $aberto;
  }

  public function getLeitor() {
    return $this->leitor->getNome();
  }

  public function setLeitor($leitor) {
    $this->leitor = $leitor;
  }

  /**
   * Função para setar o livro como aberto.
   *
   * @param Livro $livro
   * @return void
   */
  public function abrirLivro(Livro $livro) {
    $livro->setAberto(TRUE);
    $livro->setPagAtual(1);
    return $livro;
  }

  /**
   * Função para setar o livro como fechado.
   *
   * @param Livro $livro
   * @return void
   */
  public function fecharLivro(Livro $livro) {
    $livro->setAberto(FALSE);
    $livro->setPagAtual(0);
    return $livro;
  }

  /**
   * Função para avançar x páginas.
   *
   * @param Livro $livro
   * @param [type] $pagina
   * @return void
   */
  public function folhear(Livro $livro, int $pagina) {
    $paginaAtual = $livro->getPagAtual();
    $paginaAtual = $paginaAtual + $pagina;
    $livro->setPagAtual($paginaAtual);
    return $livro;
  }

  /**
   * Função para avançar página no livro.
   *
   * @param Livro $livro
   * @return void
   */
  public function avancarPag(Livro $livro) {
    $pag = 1;
    $pag = $livro->getPagAtual() + $pag;
    $livro->setPagAtual($pag);
    return $livro;
  }

  /**
   * Função para voltar página no livro.
   *
   * @param Livro $livro
   * @return void
   */
  public function voltarPag(Livro $livro) {
    $pag = -1;
    $pag = $livro->getPagAtual() + $pag;
    $livro->setPagAtual($pag);
    return $livro;
  }
}

?>