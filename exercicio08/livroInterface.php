<?php

require_once __DIR__ .'/Model/livro.php';

function abrirLivro(Livro $livro) 
{
    $livro->setAberto(true);
    $livro->setPagAtual(1);
    return $livro;
}

function fecharLivro(Livro $livro)
{
    $livro->setAberto(false);
    $livro->setPagAtual(0);
    return $livro;

}

function folhear(Livro $livro, $pagina)
{
    $paginaAtual = $livro->getPagAtual();
    $paginaAtual = $paginaAtual + $pagina;
    $livro->setPagAtual($paginaAtual);
    return $livro;
}

function avancarPag(Livro $livro)
{
    $pag = 1;
    $pag = $livro->getPagAtual() + $pag;
    $livro->setPagAtual($pag);
    return $livro;
}

function voltarPag(Livro $livro)
{
    $pag = -1;
    $pag = $livro->getPagAtual() + $pag;
    $livro->setPagAtual($pag);
    return $livro;
}