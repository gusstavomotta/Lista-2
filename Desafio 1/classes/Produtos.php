<?php 

 class Produtos{

    private string $id;
    private string $nome;
    private float $preco;

    public function __construct(string $id, string $nome,float $preco){
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }
    public function get_id(): string{ 
        return $this->id;
     }
     public function get_nome(): string{
            return $this->nome;
     }
     public function get_preco(): float{
        return $this->preco;
     }
     public function set_id(string $id){
        $this->id = $id;
     }
     public function set_nome(string $nome){
            $this->nome = $nome;
     }
     public function set_preco(float $preco){
        $this->preco = $preco;
     }
    
 }