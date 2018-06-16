<?php

class Carro {
    public $marca;
    public $modelo;
    public $preco;
    public $ano;
    public $cor;
    public $consumo;
    public $motor;
}

echo "<pre>";

$carro1 = new Carro();
$carro1->marca = "Honda";
$carro1->modelo = "Civic";
$carro1->preco = 120000;
$carro1->ano = 2018;
$carro1->cor = "prata";
$carro1->consumo = "10 km/l";
$carro1->motor = 2.0;
var_dump( $carro1 );

$carro2 = new Carro();
$carro2->marca = "Honda";
$carro2->modelo = "FIT";
$carro2->preco = 80000;
$carro2->ano = 2018;
$carro2->cor = "branco";
$carro2->consumo = "11 km/l";
$carro2->motor = 1.5;
var_dump( $carro2 );
