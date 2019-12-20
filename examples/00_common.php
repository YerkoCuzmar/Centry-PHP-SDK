<?php
/*
 * Script común a todos los ejemplos, se debe completar con datos de una aplicación válida.
 */

require_once "../CentrySDK.php";

session_start();

$clientId = "e96f28a4b596fa0a101278e98326aa7537b759f2a899d47782156db2db0b618b";
$clientSecret = "a1b7c2dc4df6b84bb162d31f38f77ad35ddc3e4e21b9ab690ef9614b2f74295e";
$redirectUri = "urn:ietf:wg:oauth:2.0:oob";
// $redirectUri = "https://my-web-application.com/CentryTest/SDK/01_authorization.php";
$accessToken = isset($_SESSION["centry_demo_access_token"]) ? $_SESSION["centry_demo_access_token"] : null;
$refreshToken = isset($_SESSION["centry_demo_refresh_token"]) ? $_SESSION["centry_demo_refresh_token"] : null;

$sdk = new \Centry\Sdk($clientId, $clientSecret, $redirectUri, $accessToken, $refreshToken);
