<?php 
//importa os arquivos necessários para rodar

require("/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/funcoes/ler_csv_pedidos.php");
require("/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/funcoes/ler_csv_produtos.php");
require("/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/funcoes/combinar_csvs.php");
require("/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/funcoes/escrever_no_csv.php");
require("/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/funcoes/enviar_email.php");
$arquivo = '/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/arquivos/combinados.csv';

$array_pedidos = ler_csv_pedidos();
$array_produtos = ler_csv_produtos();
$array_dados_combinados = combinar_csv($array_produtos, $array_pedidos);
escrever_no_csv($array_dados_combinados);
enviar_email($arquivo);$arquivo = '/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/arquivos/combinados.csv';