<?php
// Habilita CORS (Cross-Origin Resource Sharing)
header("Access-Control-Allow-Origin: *");

// Obtiene la URL del recurso externo de la solicitud
$url = $_GET['url'];

if (!$url) {
    die("La URL del recurso externo es obligatoria.");
}

// Realiza la solicitud al recurso externo
$response = file_get_contents($url);

// Devuelve la respuesta del recurso externo
echo $response;
