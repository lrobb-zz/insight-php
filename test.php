<?php
require_once(__DIR__ . '/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setDebug(true);
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('b4012dbc');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('76a656b4ab031cc44fd8d84940b7ea43');

$api_instance = new Swagger\Client\Api\AssetsApi();
// $api_instance->getApiClient()->selectHeaderContentType()
$body = file_get_contents("test.geojson");
$result = null;

try {
    // $result = $api_instance->assetCreation($body);
    $result = $api_instance->assetList();
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetCreation: ', $e->getMessage(), PHP_EOL;
    // print_r($result);
}
