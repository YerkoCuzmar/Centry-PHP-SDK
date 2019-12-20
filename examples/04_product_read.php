<?php
/*
 * Script que muestra el detalle de un producto y sus variantes. Ojo, no se
 * muestran todos los campos.
 */

require_once "./00_common.php";

$endpoint = "conexion/v1/products/{$_GET["id"]}.json";
$method = "GET";

$product = $sdk->request($endpoint, $method);

?><!DOCTYPE html>
<html lang="es">
<head>
  <title>Demo App Centry - Detalle de producto</title>
</head>
<body>
  <h1>Detalle de Producto</h1>
  <table>
    <tbody>
      <tr>
        <th>ID</th>
        <td><?= $product->_id ?></td>
      </tr>
      <tr>
        <th>Nombre</th>
        <td><?= $product->name ?></td>
      </tr>
      <tr>
        <th>Marca</th>
        <td><?= $product->brand_name ?></td>
      </tr>
      <tr>
        <th>Categoría</th>
        <td><?= $product->category_name ?></td>
      </tr>
      <tr>
        <th>Descripción</th>
        <td><?= $product->description ?></td>
      </tr>
      <tr>
        <th>Listado de características</th>
        <td><?= $product->shortdescription ?></td>
      </tr>
      <tr>
        <th>Condición</th>
        <td><?= $product->condition ?></td>
      </tr>
      <tr>
        <th>Imágen principal</th>
        <td><img src="<?= $product->cover_url ?>" style="max-height: 60px"/></td>
      </tr>
      <tr>
        <th>Fecha de creación</th>
        <td><?= $product->created_at ?></td>
      </tr>
      <tr>
        <th>Fecha de la última modificación</th>
        <td><?= $product->updated_at ?></td>
      </tr>
      <tr>
        <th>Tiempo de entrega</th>
        <td><?= $product->deliverytimesupplier ?></td>
      </tr>
      <tr>
        <th>Género</th>
        <td><?= $product->gender_name ?></td>
      </tr>
      <tr>
        <th>Alto del empaque</th>
        <td><?= $product->packageheight ?></td>
      </tr>
      <tr>
        <th>Largo del empaque</th>
        <td><?= $product->packagelength ?></td>
      </tr>
      <tr>
        <th>Ancho del empaque</th>
        <td><?= $product->packagewidth ?></td>
      </tr>
      <tr>
        <th>Peso del empaque</th>
        <td><?= $product->packageweight ?></td>
      </tr>
      <tr>
        <th>Precio normal o de referencia</th>
        <td><?= $product->price_compare ?></td>
      </tr>
      <tr>
        <th>Precio de oferta</th>
        <td><?= $product->price ?></td>
      </tr>
      <tr>
        <th>Fecha de inicio de la oferta</th>
        <td><?= $product->salestartdate ?></td>
      </tr>
      <tr>
        <th>Fecha de término de la oferta</th>
        <td><?= $product->saleenddate ?></td>
      </tr>
      <tr>
        <th>Temporada</th>
        <td><?= $product->season ?></td>
      </tr>
      <tr>
        <th>Año de temporada</th>
        <td><?= $product->seasonyear ?></td>
      </tr>
      <tr>
        <th>SKU</th>
        <td><?= $product->sku ?></td>
      </tr>
      <tr>
        <th>Garantía</th>
        <td><?= $product->warranty ?></td>
      </tr>
      <tr>
        <th>SEO Título</th>
        <td><?= $product->seo_title ?></td>
      </tr>
      <tr>
        <th>SEO Descripción</th>
        <td><?= $product->seo_description ?></td>
      </tr>
    </tbody>
  </table>

  <h2>Variantes</h2>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>SKU</th>
        <th>Código de barra</th>
        <th>Color</th>
        <th>Talla</th>
        <th>Stock</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($product->variants as $variant): ?>
        <tr>
          <td><?= $variant->_id ?></td>
          <td><?= $variant->sku ?></td>
          <td><?= $variant->barcode ?></td>
          <td><?= $variant->color_name ?></td>
          <td><?= $variant->size_name ?></td>
          <td><?= $variant->quantity ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
