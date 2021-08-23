<?php
require '../vendor/autoload.php';
use GuzzleHttp\Client;

$token = '3|zxyBOJvlQRsy1B4LPffQrG0GnZRnUDxX60L7Dmnz';

$client = new Client([
    'base_uri' => 'http://localhost:8000/',
    'headers' => [
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer '.$token,
    ]
]);

$response = $client->get("api/products/");
$responseBody = json_decode($response->getBody(), true);

print_r($responseBody);


