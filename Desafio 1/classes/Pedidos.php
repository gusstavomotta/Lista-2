<?php 

class Pedidos {

    private string $id_pedido;
    private string $id_produto;
    private string $data_venda;
    private int $qtd_vendido;

    public function __construct(string $id_pedido, string $id_produto, string $data_venda, int $qtd_vendido) {
        $this->id_pedido = $id_pedido;
        $this->id_produto = $id_produto;
        $this->data_venda = $data_venda;
        $this->qtd_vendido = $qtd_vendido;
    }
    public function get_id_pedido(): string {
        return $this->id_pedido;
    }
    public function get_id_produto(): string {
        return $this->id_produto;
    }
    public function get_data_venda(): string {
        return $this->data_venda;
    }
    public function get_qtd_vendido(): int {
        return $this->qtd_vendido;
    }
    public function set_id_pedido(string $id_pedido){
        $this->id_pedido = $id_pedido;
    }
    public function set_id_produto(string $id_produto){
        $this->id_produto = $id_produto;
    }
    
    public function set_data_venda(string $data_venda){
        $this->data_venda = $data_venda;
    }
    public function set_qtd_vendido(int $qtd_vendido){
        $this->qtd_vendido = $qtd_vendido;
    }

    
}