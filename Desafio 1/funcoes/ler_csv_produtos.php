<?php
require_once("/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/classes/Produtos.php");

function ler_csv_produtos(): array
{

    //abre o arquivo e le o cabeçalho
    $separador = ',';
    $arquivo = fopen('/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/arquivos/products.csv', 'r');
    $cabecalho = fgetcsv($arquivo, 0, $separador);
    //enquanto não for o fim do arquivo o loop continua
    while (!feof($arquivo)) {
        //faz o get de cada linha do csv
        $linha = fgetcsv($arquivo, 0, $separador);
        if (!$linha) {
            continue;
        }
        // concatena o cabeçalho com as linhas do csv
        $registros = array_combine($cabecalho, $linha);
        // cada chave do csv é atribuída a uma variavel
        $product_id = $registros['product_id'];
        $product_name = $registros['name'];
        $product_price = $registros['price'];
        // Cria um objeto passando as variaveis e adiciona no array
        $produto = new Produtos($product_id, $product_name, $product_price);
        $array_produtos[] = $produto;

    }
    unset($arquivo);
    return $array_produtos;

}