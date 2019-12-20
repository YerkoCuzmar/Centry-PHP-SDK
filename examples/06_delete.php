<?php
require_once "./00_common.php";

$endpoint = "conexion/v1/products/" . "5df13ef02773d93781217eb0" . ".json";
$method = "DELETE";
$company = $sdk->request($endpoint, $method);