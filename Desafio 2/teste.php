<?php
//echo "testandoooooo";
//phpinfo();

$conn = pg_connect("host=db port=5432 dbname=postgres user=postgres password=root");
if (!$conn) {
    echo "Erro de conexão.";
} else {
    echo "Banco conectado";
    pg_close($conn);
}