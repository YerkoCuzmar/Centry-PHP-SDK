<?php

require_once "./00_common.php";

$endpoint = "conexion/v1/products/" . "5df11dee9622f91356515879" . ".json";
$method = "PUT";

$payload = array(
    "price_compare"=>190990,
);

$response = $sdk->request($endpoint, $method, null, $payload);