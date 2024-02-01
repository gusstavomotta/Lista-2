<?php
require_once("classes/Pedidos.php");

function ler_csv_pedidos(): array
{

    //abre o arquivo e le o cabeçalho
    $separador = ',';
    $arquivo = fopen("arquivos/orders.csv", 'r');
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
        $order_id = $registros['order_id'];
        $product_id = $registros['product_id'];
        $order_date = $registros['date'];
        $order_quantity = $registros['quantity'];
        // Cria um objeto passando as variaveis e adiciona no array
        $pedido = new Pedidos($order_id, $product_id, $order_date, $order_quantity);
        $array_pedidos[] = $pedido;

    }
    unset($arquivo);
    return $array_pedidos;
}