<?php
require_once('/Users/lrobb/Documents/Source/insight-api-docs/swagger/insightphp/SwaggerClient-php/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setDebug(true);
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('114e04e1');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('d22d2cc81614aee4afe2f804238e3959');

$api_instance = new Swagger\Client\Api\AssetsApi();

// $api_instance = new Swagger\Client\Api\HourlyPrecipitationApi();
// $api_instance->getApiClient()->selectHeaderContentType()
$body = file_get_contents("asset.json");
$asset = json_decode($body);
// $asset->features[0]->properties["Name"] = "Omaha";
$asset->features[0]->properties->Name = "Omaha";


$result = null;

try {
    $result = $api_instance->assetCreation(json_encode($asset));
    $result = $api_instance->assetList();
    // $result = $api_instance->hourlyPrecipitationByLocation(35, -97);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetCreation: ', $e->getMessage(), PHP_EOL;
    // print_r($result);
}
