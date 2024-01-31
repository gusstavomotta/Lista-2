<?php 
class Dados_Combinados{

    private string $id_produto;
    private float $preco_unitario;
    private string $data_venda;
    private string $quantidade_total_vendida;
    private string $valor_total_vendido;

    public function __construct(string $id_produto,$preco_unitario,$data_venda,$quantidade_total_vendida,$valor_total_vendido){
        $this->id_produto = $id_produto;
        $this->preco_unitario = $preco_unitario;
        $this->data_venda = $data_venda;
        $this->quantidade_total_vendida = $quantidade_total_vendida;
        $this->valor_total_vendido = $valor_total_vendido;
    }

    public function get_Id_produto(){
        return $this->id_produto;
    }

    public function set_Id_produto(string $id_produto){
        $this->id_produto = $id_produto;
    }

    public function get_Preco_unitario(){
        return $this->preco_unitario;
    }

    public function set_Preco_unitario(float $preco_unitario){
        $this->preco_unitario = $preco_unitario;
    }

    public function get_Data_venda(){
        return $this->data_venda;
    }

    public function set_Data_venda(string $data_venda){
        $this->data_venda = $data_venda;
    }

    public function get_Quantidade_total_vendida(){
        return $this->quantidade_total_vendida;
    }

    public function set_Quantidade_total_vendida(string $quantidade_total_vendida){
        $this->quantidade_total_vendida = $quantidade_total_vendida;
    }

    public function get_Valor_total_vendido(){
        return $this->valor_total_vendido;
    }

    public function set_Valor_total_vendido(string $valor_total_vendido){
        $this->valor_total_vendido = $valor_total_vendido;
    }
}