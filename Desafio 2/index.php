<?php
require("Funcionario.php");

$func = new Funcionario(0, '', '', 0, 0);

$funcionario1 = new Funcionario(1, 'Gustavo', 'Masculino', 20, 2000);
$funcionario2 = new Funcionario(2, 'Felipe', 'Masculino', 23, 4000);
$funcionario3 = new Funcionario(3, 'Luan', 'Masculino', 22, 8000);
$funcionario4 = new Funcionario(4, 'Caua', 'Masculino', 21, 1000);

$conn = new Conexao();
$conexao = $conn->conecta_no_banco();

$func->remover_funcionarios($conexao, 1);
$func->remover_funcionarios($conexao, 2);
$func->remover_funcionarios($conexao, 3);
$func->remover_funcionarios($conexao, 4);

$func->adicionar_funcionario($conexao, $funcionario1);
$func->adicionar_funcionario($conexao, $funcionario2);
$func->adicionar_funcionario($conexao, $funcionario3);
$func->adicionar_funcionario($conexao, $funcionario4);

$func->listar_todos($conexao);

$func->atualizar_funcionario($conexao, 1, 'nome', 'ovatsug');
$func->atualizar_funcionario($conexao, 2, 'nome', 'epilef');
$func->atualizar_funcionario($conexao, 3, 'nome', 'naul');
$func->atualizar_funcionario($conexao, 4, 'nome', 'auac');

$func->aumentar_salario($conexao, 1, 15);
$func->aumentar_salario($conexao, 2, 10);
$func->aumentar_salario($conexao, 3, 5);
$func->aumentar_salario($conexao, 4, 20);

$func->listar_todos($conexao);
$func->listar_por_id($conexao, 3);

$idFuncionario = 2;
unset($funcionario1);
$funcionario5 = (new Funcionario(0, '', '', 0, 0))->listar_por_id($conexao, $idFuncionario);
print_r($funcionario5);

pg_close($conexao);