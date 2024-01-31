<?php

class Requisicao
{

    public function testa_requisicao()
    {
        $method = $_SERVER['REQUEST_METHOD']; # Extração do método HTTP da requisição.
        $route = $_SERVER['REQUEST_URI']; # Extração da rota para qual foi endereçada a requisição.

        header('Content-Type: application/json');
        http_response_code(200);

        if ($method !== 'GET') {
            http_response_code(400);

            echo json_encode(['message' => 'Invalid method provided.']);
            exit;
        }
        return $route;

    }
}