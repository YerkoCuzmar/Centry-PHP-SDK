<?php
/*
 * Script común a todos los ejemplos, se debe completar con datos de una aplicación válida.
 */

require_once "../CentrySDK.php";

session_start();

$clientId = "5b070249a2bf6e5c067892dde8d4cd61636f1e38cba86b952fd90c4dcd639157";
$clientSecret = "b604fb0cb37861f4c5f6c54b8fc623f2d3e65f84d02e0a19ee20948cbde179ad";
$redirectUri = "urn:ietf:wg:oauth:2.0:oob";
// $redirectUri = "https://my-web-application.com/CentryTest/SDK/01_authorization.php";
$accessToken = isset($_SESSION["centry_demo_access_token"]) ? $_SESSION["centry_demo_access_token"] : null;
$refreshToken = isset($_SESSION["centry_demo_refresh_token"]) ? $_SESSION["centry_demo_refresh_token"] : null;

$sdk = new \Centry\Sdk($clientId, $clientSecret, $redirectUri, $accessToken, $refreshToken);
