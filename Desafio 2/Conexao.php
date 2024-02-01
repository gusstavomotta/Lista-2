<?php
class Conexao
{
    function conecta_no_banco()
    {
        $conn = pg_connect("host=db port=5432 dbname=postgres user=postgres password=root");
        if (!$conn) {
            echo "Erro de conexão.";
        }
        return $conn;
    }
}