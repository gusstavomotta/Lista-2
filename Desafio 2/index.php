<?php
require("Funcionario.php");

$func = new Funcionario(0, '', '', 0, 0);
/*
$func->adicionar_funcionario(1, 'Gustavo', 'Masculino', 20, 2000);
$func->adicionar_funcionario(2, 'Felipe', 'Masculino', 23, 4000);
$func->adicionar_funcionario(3, 'Luan', 'Masculino', 22, 8000);
$func->adicionar_funcionario(4, 'Caua', 'Masculino', 21, 1000);
*/
$conn = new Conexao();
$conexao = $conn->conecta_no_banco();

/*
$func->remover_funcionarios($conexao, 1);
$func->remover_funcionarios($conexao, 2);
$func->remover_funcionarios($conexao, 3);
$func->remover_funcionarios($conexao, 4);
*/
$func->listar_todos($conexao);
$func->listar_por_id($conexao, 3);

pg_close($conexao);