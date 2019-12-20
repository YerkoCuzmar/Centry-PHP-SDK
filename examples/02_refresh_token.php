<?php
/*
 * Script que se encarga solicitar un nuevo par de tokens basado en
 * `refresh_token`.
 */

require_once "./00_common.php";

if (!isset($accessToken) || !isset($refreshToken)) {
  die("No tokens to refresh.");
}

$sdk->refresh();
$_SESSION["centry_demo_access_token"] = $sdk->accessToken;
$_SESSION["centry_demo_refresh_token"] = $sdk->refreshToken;
echo "Refreshed tokens.";
