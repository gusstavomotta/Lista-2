<?php
require("Requisicao.php");
require("Roteador.php");

$requisicao = new Requisicao();
$roteador = new Roteador();

$route = $requisicao->testa_requisicao();
$roteador->decodifica_url($route);

//http://localhost:8000/index.php/?page=1
//http://localhost:8000/pokemon/charmander