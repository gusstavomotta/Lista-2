<?php
require("Controlador.php");
class Roteador
{

    function decodifica_url($route)
    {
        $controlador = new Controlador();
        if (preg_match('/\/\?page=[0-9]+/', $route)) {
            return $controlador->desafio2($route);
        } elseif (preg_match('/\/pokemon\/.+/', $route))
            return $controlador->desafio3($route);
    }
}