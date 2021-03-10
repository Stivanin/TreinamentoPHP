<?php

class Pessoa
{
  /**
   * @var string
   */
  private $nome;

  /**
   * @var string
   */
  private $sexo;

  /**
   * @var int
   */
  private $idade;

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getSexo() {
    return $this->sexo;
  }

  public function setSexo($sexo) {
    $this->sexo = $sexo;
  }

  public function getIdade() {
    return $this->idade;
  }

  public function setIdade($idade) {
    $this->idade = $idade;
  }
}

?>