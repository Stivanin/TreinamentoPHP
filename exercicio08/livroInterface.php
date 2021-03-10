<?php

require_once __DIR__ .'/Model/livro.php';

interface Publicacao {

  public function abrirLivro(Livro $livro);

  public function fecharLivro(Livro $livro);

  public function folhear(Livro $livro, $pagina);

  public function avancarPag(Livro $livro);

  public function voltarPag(Livro $livro);

}