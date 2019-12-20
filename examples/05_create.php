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
$endpoint = "conexion/v1/products.json ";
$method = "POST";
$payload = array(
    "barcode"=>"111422",
    "brand_id"=>"57f63ffe4c266d1dec1edfb6",
    "category_id"=>"5769714df82f456e800001aa",
    "company_id"=>$company_id,
    "description"=>"Describiendo el asombroso producto que venderás",
    "name"=>"Un Nombre Fantástico, para un producto fantástico",
    "price"=>10000,
    "sku"=>"YOS0YUN54U",
);

$product = $sdk->request($endpoint, $method,null, $payload);
echo json_encode($product);
