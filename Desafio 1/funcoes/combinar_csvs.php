<?php

require_once("classes/Pedidos.php");
require_once("classes/Produtos.php");
require_once("classes/Dados_Combinados.php");

function combinar_csv($array_produtos, $array_pedidos): array
{
    $array_dados_combinados = [];
    foreach ($array_produtos as $produto) {
        $id_produto = $produto->get_id();
        $preco_produto = $produto->get_preco();

        $data_ultima_venda = 0;
        $quantidade_total_vendida = 0;
        $valor_total_vendido = 0;

        foreach ($array_pedidos as $pedido) {
            if ($id_produto == $pedido->get_id_produto()) {
                $data_string = $pedido->get_data_venda();
                $data_formatada = (new DateTime($data_string))->format('Y-m-d H:i');
                if ($data_ultima_venda < $data_formatada) {
                    $data_ultima_venda = $data_formatada;
                }
                $quantidade_total_vendida += $pedido->get_qtd_vendido();
            }
        }
        $valor_total_vendido = $quantidade_total_vendida * $preco_produto;

        $dados_combinados = new Dados_Combinados($id_produto, $preco_produto, $data_ultima_venda, $quantidade_total_vendida, $valor_total_vendido);
        $array_dados_combinados[] = $dados_combinados;
    }

    return $array_dados_combinados;
}