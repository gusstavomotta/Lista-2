<?php 

function escrever_no_csv($array_dados) {

    $arquivo = fopen ("/home/imply/Documentos/GitHub/Lista-2-Desafios/Lista 2/Desafio 1/arquivos/combinados.csv","w");

    fputcsv($arquivo, ['id_produto', 'preco_unitario', 'ultima_data_de_venda', 'quantidade_total_vendida' , 'valor_total_vendido']);
    fputcsv($arquivo, [""]);
    foreach ($array_dados as $dados) {  
    $array = (array) $dados;
    fputcsv ($arquivo, $array);
    }
}