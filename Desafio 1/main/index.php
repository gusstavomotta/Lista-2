<?php
//importa os arquivos necessários para rodar

require("funcoes/ler_csv_pedidos.php");
require("funcoes/ler_csv_produtos.php");
require("funcoes/combinar_csvs.php");
require("funcoes/escrever_no_csv.php");
require("funcoes/enviar_email.php");
$arquivo = 'arquivos/combinados.csv';

$array_pedidos = ler_csv_pedidos();
$array_produtos = ler_csv_produtos();
$array_dados_combinados = combinar_csv($array_produtos, $array_pedidos);
escrever_no_csv($array_dados_combinados);
enviar_email($arquivo);
$arquivo = 'arquivos/combinados.csv';