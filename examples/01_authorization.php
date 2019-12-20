<?php
/*
 * Script que se encarga de procesar el código de autorización.
 */

require_once "./00_common.php";

if (!isset($accessToken) && !$_GET["code"]) {
  // Si no se tiene registrado un access_token y tampoco viene en la URL un parámetro `code`, entonces se redirecciona a Centry solicitando autorización.
  // Ej: http://localhost/CentrySDK/examples/01_authorization.php
  header("Location: " . $sdk->authorizationURL("public read_orders write_orders read_products write_products read_integration_config write_integration_config read_user write_user read_webhook write_webhook"));
  die();
}

if (isset($_GET["code"])) {
  // Si en la URL viene un parámetro `code` entonces se intenta obtener el primer access_token y refresh_token guardándolos en sesion.
  // Ej: http://localhost/CentrySDK/examples/01_authorization.php?code=bfc011457db5c7971a35675bee8dfdd0483c797f28e4fcbbc3e8eb023e941ae0
  // Ojo, no se atiende el caso en que el código sea inválido.
  $sdk->authorize($_GET["code"]);
  $_SESSION["centry_demo_access_token"] = $sdk->accessToken;
  $_SESSION["centry_demo_refresh_token"] = $sdk->refreshToken;
  echo "Success";
  echo "Access Token: " . $sdk->accessToken;
} else {
  // En cualquier otro caso, se muestra un mensaje de error.
  echo "Fail";
}
