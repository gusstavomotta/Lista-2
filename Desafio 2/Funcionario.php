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
    public function aumentar_salario($conexao, int $id, int $percentual)
    {
        $query = pg_query($conexao, "SELECT salario FROM funcionarios f WHERE f.id = $id");
        $linha = pg_fetch_assoc($query);

        $salario_atual = $linha['salario'];
        $salario_atualizado = $salario_atual + ($salario_atual * $percentual / 100);

        pg_query($conexao, "UPDATE funcionarios SET salario = $salario_atualizado WHERE id = $id");
    }
    public function adicionar_funcionario($conexao, Funcionario $funcionario)
    {
        pg_insert($conexao, 'funcionarios', (array) $funcionario);
    }
    public function remover_funcionarios($conexao, int $id_funcionario)
    {
        $query = "DELETE FROM funcionarios WHERE id = $id_funcionario";
        pg_query($conexao, $query);

    }
    public function listar_todos($conexao)
    {
        $query = pg_query($conexao, "SELECT * FROM funcionarios");

        while ($linha = pg_fetch_assoc($query)) {
            echo "<br>ID: {$linha['id']}<br> Nome: {$linha['nome']}<br> Gênero: {$linha['genero']}<br> Idade: {$linha['idade']}<br> Salário: {$linha['salario']}<br>";
        }
    }
    public function listar_por_id($conexao, int $id)
    {
        $query = "SELECT * FROM funcionarios WHERE id = $id";
        $retorno = pg_query($conexao, $query);
        $linhas = pg_fetch_assoc($retorno);

        $funcionario = new Funcionario(0, '', '', 0, 0);
        $funcionario->id = $linhas["id"];
        $funcionario->nome = $linhas["nome"];
        $funcionario->genero = $linhas["genero"];
        $funcionario->idade = $linhas["idade"];
        $funcionario->salario = $linhas["salario"];

        return $funcionario;

    }
    public function atualizar_funcionario($conexao, $id, $nome_atributo, $novo_atributo)
    {
        $query = "UPDATE funcionarios SET $nome_atributo = '$novo_atributo' WHERE id = '$id'";
        pg_query($conexao, $query);

    }
}