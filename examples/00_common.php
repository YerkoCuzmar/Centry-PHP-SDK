<?php
/*
 * Script común a todos los ejemplos, se debe completar con datos de una aplicación válida.
 */

require_once "../CentrySDK.php";

session_start();

$clientId = "";
$clientSecret = "";
$redirectUri = "urn:ietf:wg:oauth:2.0:oob";
// $redirectUri = "https://my-web-application.com/CentryTest/SDK/01_authorization.php";
$accessToken = isset($_SESSION["centry_demo_access_token"]) ? $_SESSION["centry_demo_access_token"] : null;
$refreshToken = isset($_SESSION["centry_demo_refresh_token"]) ? $_SESSION["centry_demo_refresh_token"] : null;

$sdk = new \Centry\CentrySDK($clientId, $clientSecret, $redirectUri, $accessToken, $refreshToken);
