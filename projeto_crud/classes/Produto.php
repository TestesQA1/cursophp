<?php

class Product {
  public $id;
  public $nome;
  public $preco;
  public $quant;
  public $categoria;
  public $minEstoque = 50;

  function formataMoeda($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
  }

  // function __construct($nome, $preco, $quant, $categoria) {
  //   $this->nome = $nome;
  //   $this->preco = $preco;
  //   $this->quant = $quant;
  //   $this->categoria = $categoria;
  // }

  function total() {
    return $this->formataMoeda($this->preco * $this->quant);
  }

  function situacaoEsqoque() {
    if ($this->quant < $this->minEstoque) {
      return '<h5> <center> <span class="badge badge-pill badge-danger" role="alert">BAIXO </span> </center> </h5>';
    } else {
      return '<h5> <center> <span class="badge badge-pill badge-success" role="alert">NORMAL</span> </center> </h5>';
    }
  }
}