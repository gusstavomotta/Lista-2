<?php

function escrever_no_csv($array_dados)
{

    $arquivo = fopen("arquivos/combinados.csv", "w");

    fputcsv($arquivo, ['id_produto', 'preco_unitario', 'ultima_data_de_venda', 'quantidade_total_vendida', 'valor_total_vendido']);
    fputcsv($arquivo, [""]);
    foreach ($array_dados as $dados) {
        $array = (array) $dados;
        fputcsv($arquivo, $array);
    }
}