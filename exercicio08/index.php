<?php

/**
 * @file
 * Página index da aplicação.
 */

require_once '/Model/pessoa.php';
require_once '/Model/livro.php';
require_once 'livroInterface.php';

function getPessoas() {

  $pessoas = [];

  $pessoa1 = new Pessoa();
  $pessoa1->setNome('Pessoa 1');
  $pessoa1->setSexo('Masculino');
  $pessoa1->setIdade(24);
  $pessoas[] = $pessoa1;

  $pessoa2 = new Pessoa();
  $pessoa2->setNome('Pessoa 2');
  $pessoa2->setSexo('Feminino');
  $pessoa2->setIdade(25);
  $pessoas[] = $pessoa2;

  $pessoa3 = new Pessoa();
  $pessoa3->setNome('Pessoa 3');
  $pessoa3->setSexo('Masculino');
  $pessoa3->setIdade(40);
  $pessoas[] = $pessoa3;

  return $pessoas;
}

function getLivros($leitores) {
  $livros = [];

  $livros1 = new Livro();
  $livros1->setTitulo('Livro 1');
  $livros1->setAutor('Autor 1');
  $livros1->setTotPaginas(24);
  $livros1->setPagAtual(5);
  $livros1->setAberto(FALSE);
  $livros1->setLeitor($leitores[0]);
  $livros[] = $livros1;

  $livros2 = new Livro();
  $livros2->setTitulo('Livro 2');
  $livros2->setAutor('Autor 2');
  $livros2->setTotPaginas(48);
  $livros2->setPagAtual(10);
  $livros2->setAberto(TRUE);
  $livros2->setLeitor($leitores[1]);
  $livros[] = $livros2;

  $livros3 = new Livro();
  $livros3->setTitulo('Livro 3');
  $livros3->setAutor('Autor 3');
  $livros3->setTotPaginas(96);
  $livros3->setPagAtual(15);
  $livros3->setAberto(FALSE);
  $livros3->setLeitor($leitores[2]);
  $livros[] = $livros3;

  $livros4 = new Livro();
  $livros4->setTitulo('Livro 4');
  $livros4->setAutor('Autor 4');
  $livros4->setTotPaginas(192);
  $livros4->setPagAtual(30);
  $livros4->setAberto(TRUE);
  $livros4->setLeitor($leitores[0]);
  $livros[] = $livros4;

  return $livros;
}

$pessoas = [];
$livros = [];

$pessoas = getPessoas();
$livros = getLivros($pessoas);

echo "Lista de Pessoas cadastradas: <br \><br \>";

foreach ($pessoas as $pessoa) {
  echo "Nome: ", $pessoa->getNome(), "<br \>";
  echo "Sexo: ", $pessoa->getSexo(), "<br \>";
  echo "Idade: ", $pessoa->getIdade(), "<br \><br \>";
}

echo "<br \><br \>";
echo "Lista de livros cadastrados: <br \><br \>";

foreach ($livros as $livro) {
  echo "Título deo Livro: ", $livro->getTitulo(), "<br \>";
  echo "Autor: ", $livro->getAutor(), "<br \>";
  echo "Total de Páginas: ", $livro->getTotPaginas(), "<br \>";
  echo "Página Atual: ", $livro->getPagAtual(), "<br \>";
  echo "Aberto ou Fechado: ", $livro->getAberto(), "<br \>";
  echo "Leitor: ", $livro->getLeitor(), "<br \><br \>";
}
