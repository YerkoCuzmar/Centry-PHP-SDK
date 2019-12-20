<?php
/*
 * Script que recupera los primeros 20 productos de la cuenta para mostrarlos en
 * una tabla.
 */

require_once "./00_common.php";

$endpoint = "conexion/v1/products.json";
$method = "GET";
$params = array(
  "limit" => 20,
  "offset" => 0
);

$products = $sdk->request($endpoint, $method, $params);

?><!DOCTYPE html>
<html lang="es">
<head>
  <title>Demo App Centry - Listado de productos</title>
</head>
<body>
  <h1>Listado de Productos</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Categoría</th>
        <th>Cantidad de variantes</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product): ?>
        <tr>
          <td><?= $product->_id ?></td>
          <td><?= $product->name ?></td>
          <td><?= $product->brand_name ?></td>
          <td><?= $product->category_name ?></td>
          <td><?= count($product->variants) ?></td>
          <td><a href="04_product_read.php?id=<?= $product->_id ?>">Ver</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
