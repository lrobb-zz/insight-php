# Swagger\Client\HourlySolarRadiationApi

<<<<<<< HEAD
All URIs are relative to *https://insight.api.wdtinc.com*
=======
All URIs are relative to *http://insight.api.wdtinc.com*
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2

Method | HTTP request | Description
------------- | ------------- | -------------
[**hourlySolarRadiationByAsset**](HourlySolarRadiationApi.md#hourlySolarRadiationByAsset) | **GET** /hourly-solar-radiation/{asset-uuid} | Hourly Solar Radiation by asset
[**hourlySolarRadiationByLocation**](HourlySolarRadiationApi.md#hourlySolarRadiationByLocation) | **GET** /hourly-solar-radiation/{latitude}/{longitude} | Hourly Solar Radiation by location
[**hourlySolarRadiationContoursByAsset**](HourlySolarRadiationApi.md#hourlySolarRadiationContoursByAsset) | **GET** /hourly-solar-radiation/{asset-uuid}/contours | Hourly Solar Radiation contours by asset


# **hourlySolarRadiationByAsset**
> \Swagger\Client\Model\HourlyProductByAssetData hourlySolarRadiationByAsset($asset_uuid, $start, $end)

Hourly Solar Radiation by asset

Provides the total amount of solar radiation within a user-defined  timespan at the centroid of an asset, along with the area-weighted  arithmetic mean and range of solar radiation over that asset.  Includes an hourly time series. Time series values are for the centroid of the asset. The default response contains results in Watts per square meter for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlySolarRadiationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlySolarRadiationByAsset($asset_uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlySolarRadiationApi->hourlySolarRadiationByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]

### Return type

[**\Swagger\Client\Model\HourlyProductByAssetData**](../Model/HourlyProductByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

<<<<<<< HEAD
 - **Content-Type**: application/json
=======
 - **Content-Type**: application/vnd.wdt+json; version=1
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlySolarRadiationByLocation**
> \Swagger\Client\Model\HourlyProductByLocationData hourlySolarRadiationByLocation($latitude, $longitude, $start, $end)

Hourly Solar Radiation by location

Provides the total amount of solar radiation along with an  hourly time series within a user-defined timespan at a specific location.  The location is represented by a latitude/longitude pair. The default response contains results in Watts per square meter for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlySolarRadiationApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlySolarRadiationByLocation($latitude, $longitude, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlySolarRadiationApi->hourlySolarRadiationByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]

### Return type

[**\Swagger\Client\Model\HourlyProductByLocationData**](../Model/HourlyProductByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

<<<<<<< HEAD
 - **Content-Type**: application/json
=======
 - **Content-Type**: application/vnd.wdt+json; version=1
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlySolarRadiationContoursByAsset**
> \Swagger\Client\Model\HourlySolarRadiationContoursByAssetData hourlySolarRadiationContoursByAsset($asset_uuid, $start, $end)

Hourly Solar Radiation contours by asset

Provides a contoured representation (GeoJSON) of the total amount  of solar radiation within a user-defined timespan, clipped to an asset boundary. The default response contains results in Watts per square meter for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlySolarRadiationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlySolarRadiationContoursByAsset($asset_uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlySolarRadiationApi->hourlySolarRadiationContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time. Start of 2015 to 5 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]

### Return type

[**\Swagger\Client\Model\HourlySolarRadiationContoursByAssetData**](../Model/HourlySolarRadiationContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

<<<<<<< HEAD
 - **Content-Type**: application/json
=======
 - **Content-Type**: application/vnd.wdt+json; version=1
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

