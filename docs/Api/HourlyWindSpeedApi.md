# Swagger\Client\HourlyWindSpeedApi

All URIs are relative to *http://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hourlyWindSpeedByAsset**](HourlyWindSpeedApi.md#hourlyWindSpeedByAsset) | **GET** /hourly-wind-speed/{asset-uuid} | Hourly Wind Speed by asset
[**hourlyWindSpeedByLocation**](HourlyWindSpeedApi.md#hourlyWindSpeedByLocation) | **GET** /hourly-wind-speed/{latitude}/{longitude} | Hourly Wind Speed by location
[**hourlyWindSpeedContoursByAsset**](HourlyWindSpeedApi.md#hourlyWindSpeedContoursByAsset) | **GET** /hourly-wind-speed/{asset-uuid}/contours | Hourly Wind Speed contours by asset


# **hourlyWindSpeedByAsset**
> \Swagger\Client\Model\HourlyProductByAssetData hourlyWindSpeedByAsset($asset_uuid, $start, $end, $unit)

Hourly Wind Speed by asset

Provides an hourly time series for wind speed within a user-defined  timespan at the centroid of an asset. Time series values are for the centroid of the asset. The default response contains results in kilometers per hour for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyWindSpeedApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | unit of distance

try {
    $result = $api_instance->hourlyWindSpeedByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyWindSpeedApi->hourlyWindSpeedByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **unit** | **string**| unit of distance | [optional]

### Return type

[**\Swagger\Client\Model\HourlyProductByAssetData**](../Model/HourlyProductByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyWindSpeedByLocation**
> \Swagger\Client\Model\HourlyProductByLocationData hourlyWindSpeedByLocation($latitude, $longitude, $start, $end, $unit)

Hourly Wind Speed by location

Provides an hourly time series of wind speed within a user-defined  timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results in kilometers per hour for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyWindSpeedApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | unit of distance

try {
    $result = $api_instance->hourlyWindSpeedByLocation($latitude, $longitude, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyWindSpeedApi->hourlyWindSpeedByLocation: ', $e->getMessage(), PHP_EOL;
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
 **unit** | **string**| unit of distance | [optional]

### Return type

[**\Swagger\Client\Model\HourlyProductByLocationData**](../Model/HourlyProductByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyWindSpeedContoursByAsset**
> \Swagger\Client\Model\HourlyWindSpeedContoursByAssetData hourlyWindSpeedContoursByAsset($asset_uuid, $unit, $valid_time)

Hourly Wind Speed contours by asset

Provides a contoured representation (GeoJSON) of hourly windspeed at  a particular valid time, clipped to an asset boundary. The default response contains results in kilometers per hour for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyWindSpeedApi();
$asset_uuid = 1.2; // double | Unique asset id.
$unit = "unit_example"; // string | unit of distance
$valid_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlyWindSpeedContoursByAsset($asset_uuid, $unit, $valid_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyWindSpeedApi->hourlyWindSpeedContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **unit** | **string**| unit of distance | [optional]
 **valid_time** | **\DateTime**| Valid time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]

### Return type

[**\Swagger\Client\Model\HourlyWindSpeedContoursByAssetData**](../Model/HourlyWindSpeedContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

