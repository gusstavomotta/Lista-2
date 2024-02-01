<?php

require("Conexao.php");
class Funcionario
{
    public int $id;
    public string $nome;
    public string $genero;
    public int $idade;
    public float $salario;

    public function __construct(int $id, string $nome, string $genero, int $idade, float $salario)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->genero = $genero;
        $this->idade = $idade;
        $this->salario = $salario;
    }
    public function aumentar_salario(int $id, int $percentual)
    {
        $this->salario += $this->salario * ($percentual / 100);
    }

    public function adicionar_funcionario(int $id, string $nome, string $genero, int $idade, float $salario)
    {
        $conn = new Conexao();
        $conexao = $conn->conecta_no_banco();
        $funcionario = new Funcionario($id, $nome, $genero, $idade, $salario);
        pg_insert($conexao, 'funcionarios', (array) $funcionario);
        pg_close($conexao);
    }

    public function remover_funcionarios($conexao, int $id_funcionario)
    {
        $query = 'DELETE FROM funcionarios WHERE id = $1';
        $id = array($id_funcionario);
        pg_query_params($conexao, $query, $id);
    }

    public function listar_todos($conexao)
    {
        $query = pg_query($conexao, 'SELECT * FROM funcionarios');
        while ($linha = pg_fetch_row($query)) {
            echo "<br>ID: $linha[0]<br> Nome: $linha[1]<br> Gênero: $linha[2]<br> Idade: $linha[3]<br> Salário: $linha[4]<br>";
        }
    }

    public function listar_por_id($conexao, int $id)
    {
        $query = pg_query_params($conexao, 'SELECT * FROM funcionarios WHERE id = $1', array($id));
        while ($linha = pg_fetch_row($query)) {
            echo "<br>ID: $linha[0]<br> Nome: $linha[1]<br> Gênero: $linha[2]<br> Idade: $linha[3]<br> Salário: $linha[4]<br>";
        }
    }

    public function atualizar_funcionario($conexao, $id, $atributo, $novo_atributo)
    {


    }
}