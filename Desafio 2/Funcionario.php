<?php

require("Conexao.php");
class Funcionario
{
    private int $id;
    private string $nome;
    private string $genero;
    private int $idade;
    private float $salario;

    public function __construct(int $id, string $nome, string $genero, int $idade, float $salario)
    {

        $this->id = $id;
        $this->nome = $nome;
        $this->genero = $genero;
        $this->idade = $idade;
        $this->salario = $salario;

    }
    // Getters
    public function get_id_funcionario(): int
    {
        return $this->id;
    }

    public function get_nome(): string
    {
        return $this->nome;
    }

    public function get_genero(): string
    {
        return $this->genero;
    }

    public function get_idade(): int
    {
        return $this->idade;
    }

    public function get_salario(): float
    {
        return $this->salario;
    }

    // Setters
    public function set_id_funcionario(int $id): void
    {
        $this->id = $id;
    }

    public function set_nome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function set_genero(string $genero): void
    {
        $this->genero = $genero;
    }

    public function set_idade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function set_salario(float $salario): void
    {
        $this->salario = $salario;
    }
    public function aumentar_salario($percentual)
    {
        $this->salario += $this->salario * ($percentual / 100);
    }

    public static function adicionar_funcionario(int $id, string $nome, string $genero, int $idade, float $salario)
    {
        $conn = new Conexao();
        $conexao = $conn->conecta_no_banco();
        $funcionario = new Funcionario($id, $nome, $genero, $idade, $salario);
        print_r((array) $funcionario);

        pg_insert($conexao, 'funcionarios', (array) $funcionario);
    }

    public static function remover_funcionarios(int $id_funcionario)
    {


    }
    public static function listar_funcionarios()
    {


    }
    public function atualizar_funcionario()
    {


    }


}