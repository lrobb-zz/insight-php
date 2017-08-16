# Swagger\Client\HourlyWindDirectionApi

<<<<<<< HEAD
All URIs are relative to *https://insight.api.wdtinc.com*
=======
All URIs are relative to *http://insight.api.wdtinc.com*
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2

Method | HTTP request | Description
------------- | ------------- | -------------
[**hourlyWindDirectionByAsset**](HourlyWindDirectionApi.md#hourlyWindDirectionByAsset) | **GET** /hourly-wind-direction/{asset-uuid} | Hourly Wind Direction by asset
[**hourlyWindDirectionByLocation**](HourlyWindDirectionApi.md#hourlyWindDirectionByLocation) | **GET** /hourly-wind-direction/{latitude}/{longitude} | Hourly Wind Direction by location


# **hourlyWindDirectionByAsset**
> \Swagger\Client\Model\HourlyWindDirectionByAssetData hourlyWindDirectionByAsset($asset_uuid, $start, $end)

Hourly Wind Direction by asset

Provides an hourly time series for wind direction within a user-defined timespan at the centroid of an asset. Time series values are for the centroid of the asset. The default response contains results for the next 24 hours in degrees clockwise from north.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyWindDirectionApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlyWindDirectionByAsset($asset_uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyWindDirectionApi->hourlyWindDirectionByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]

### Return type

[**\Swagger\Client\Model\HourlyWindDirectionByAssetData**](../Model/HourlyWindDirectionByAssetData.md)

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

# **hourlyWindDirectionByLocation**
> \Swagger\Client\Model\HourlyProductByLocationData hourlyWindDirectionByLocation($latitude, $longitude, $start, $end)

Hourly Wind Direction by location

Provides an hourly time series of wind direction within a user-defined  timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results for the next 24 hours in degrees clockwise from north.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyWindDirectionApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlyWindDirectionByLocation($latitude, $longitude, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyWindDirectionApi->hourlyWindDirectionByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]

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

