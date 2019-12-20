<?php

require_once "./00_common.php";

$endpoint = "conexion/v1/variants/". "5df1372f25561f368d02cb50" .".json";
$method = "DELETE";

$response = $sdk->request($endpoint, $method);
echo json_encode($response);