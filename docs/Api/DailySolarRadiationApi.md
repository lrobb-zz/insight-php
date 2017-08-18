# Swagger\Client\DailySolarRadiationApi

All URIs are relative to *https://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dailySolarRadiationByAsset**](DailySolarRadiationApi.md#dailySolarRadiationByAsset) | **GET** /daily-solar-radiation/{asset-uuid} | Daily Solar Radiation by asset
[**dailySolarRadiationByLocation**](DailySolarRadiationApi.md#dailySolarRadiationByLocation) | **GET** /daily-solar-radiation/{latitude}/{longitude} | Daily Solar Radiation by location
[**dailySolarRadiationContoursByAsset**](DailySolarRadiationApi.md#dailySolarRadiationContoursByAsset) | **GET** /daily-solar-radiation/{asset-uuid}/contours | Daily Solar Radiation contours by asset


# **dailySolarRadiationByAsset**
> \Swagger\Client\Model\DailySolarRadiationByAssetData dailySolarRadiationByAsset($asset_uuid, $start, $end)

Daily Solar Radiation by asset

Provides the total amount of solar radiation within a user-defined  timespan at the centroid of an asset, along with the area-weighted  arithmetic mean and range of solar radiation over that asset.  Includes a daily time series. Time series values are for the centroid of the asset. The default response contains results in Megajoules per square meter for up to the next 4 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailySolarRadiationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 5 days in the future.
$end = new \DateTime("2013-10-20"); // \DateTime | End date. Start of 2015 to 5 days in the future.

try {
    $result = $api_instance->dailySolarRadiationByAsset($asset_uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailySolarRadiationApi->dailySolarRadiationByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. Start of 2015 to 5 days in the future. | [optional]
 **end** | **\DateTime**| End date. Start of 2015 to 5 days in the future. | [optional]

### Return type

[**\Swagger\Client\Model\DailySolarRadiationByAssetData**](../Model/DailySolarRadiationByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailySolarRadiationByLocation**
> \Swagger\Client\Model\DailySolarRadiationByLocationData dailySolarRadiationByLocation($latitude, $longitude, $start, $end)

Daily Solar Radiation by location

Provides the total amount of solar radiation along with a daily  time series within a user-defined timespan at a specific location.  The location is represented by a latitude/longitude pair. The default response contains results in Megajoules per square meter  for up to the next 4 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailySolarRadiationApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 5 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date. Start of 2015 to 5 days in the future. (YYYY-MM-DD)

try {
    $result = $api_instance->dailySolarRadiationByLocation($latitude, $longitude, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailySolarRadiationApi->dailySolarRadiationByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) | [optional]

### Return type

[**\Swagger\Client\Model\DailySolarRadiationByLocationData**](../Model/DailySolarRadiationByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailySolarRadiationContoursByAsset**
> \Swagger\Client\Model\DailySolarRadiationContoursByAssetData dailySolarRadiationContoursByAsset($asset_uuid, $start, $end)

Daily Solar Radiation contours by asset

Provides a contoured representation (GeoJSON) of the total amount  of solar radiation within a user-defined timespan, clipped to an asset boundary. The default response contains results in Megajoules per square meter for up to the next 4 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailySolarRadiationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 5 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date. Start of 2015 to 5 days in the future. (YYYY-MM-DD)

try {
    $result = $api_instance->dailySolarRadiationContoursByAsset($asset_uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailySolarRadiationApi->dailySolarRadiationContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date. Start of 2015 to 5 days in the future. (YYYY-MM-DD) | [optional]

### Return type

[**\Swagger\Client\Model\DailySolarRadiationContoursByAssetData**](../Model/DailySolarRadiationContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

