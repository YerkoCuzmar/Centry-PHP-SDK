<?php
/*
 * Script que muestra el detalle de un producto y sus variantes. Ojo, no se
 * muestran todos los campos.
 */

require_once "./00_common.php";

$endpoint = "conexion/v1/company_info.json ";
$method = "GET";
$company = $sdk->request($endpoint, $method);

$company_id = $company->_id;
$endpoint = "conexion/v1/variants.json ";
$method = "POST";
$payload = array(
    "product_id"=>"5df11dee9622f91356515879",
    "sku"=> "sku_var_php"
);

$product = $sdk->request($endpoint, $method,null, $payload);
echo json_encode($product);
