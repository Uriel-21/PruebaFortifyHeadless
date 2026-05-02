<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

try {
    // Pegándole a la IP del contenedor del Backend
    $response = $client->request('GET', 'http://172.25.0.4/api/proveedores');

    echo "¡Conexión exitosa con la API del Profe!\n";
    echo "Respuesta del servidor:\n";
    echo $response->getBody();
} catch (\Exception $e) {
    echo "Error al conectar: " . $e->getMessage();
}
