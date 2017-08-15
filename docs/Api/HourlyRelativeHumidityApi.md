# Swagger\Client\HourlyRelativeHumidityApi

All URIs are relative to *http://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hourlyRelativeHumidityByAsset**](HourlyRelativeHumidityApi.md#hourlyRelativeHumidityByAsset) | **GET** /hourly-relative-humidity/{asset-uuid} | Hourly Relative Humidity by asset
[**hourlyRelativeHumidityByLocation**](HourlyRelativeHumidityApi.md#hourlyRelativeHumidityByLocation) | **GET** /hourly-relative-humidity/{latitude}/{longitude} | Hourly Relative Humidity by location
[**hourlyRelativeHumidityContoursByAsset**](HourlyRelativeHumidityApi.md#hourlyRelativeHumidityContoursByAsset) | **GET** /hourly-relative-humidity/{asset-uuid}/contours | Hourly Relative Humidity contours by asset


# **hourlyRelativeHumidityByAsset**
> \Swagger\Client\Model\HourlyProductByAssetData hourlyRelativeHumidityByAsset($asset_uuid, $start, $end)

Hourly Relative Humidity by asset

Provides an hourly time series for relative humidity within a user-defined  timespan at the centroid of an asset, along with the area-weighted arithmetic mean and range over that asset. Time series values are for the centroid of the asset. The default response contains results as a percentage for up to the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyRelativeHumidityApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlyRelativeHumidityByAsset($asset_uuid, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyRelativeHumidityApi->hourlyRelativeHumidityByAsset: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\HourlyProductByAssetData**](../Model/HourlyProductByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyRelativeHumidityByLocation**
> \Swagger\Client\Model\HourlyProductByLocationData hourlyRelativeHumidityByLocation($latitude, $longitude, $start, $end)

Hourly Relative Humidity by location

Provides an hourly time series of relative humidity within a user-defined  timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results as a percentage for up to the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyRelativeHumidityApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlyRelativeHumidityByLocation($latitude, $longitude, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyRelativeHumidityApi->hourlyRelativeHumidityByLocation: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyRelativeHumidityContoursByAsset**
> \Swagger\Client\Model\HourlyRelativeHumidityContoursByAssetData hourlyRelativeHumidityContoursByAsset($asset_uuid, $valid_time)

Hourly Relative Humidity contours by asset

Provides a contoured representation (GeoJSON) of hourly relative humidity  at a particular valid time, clipped to an asset boundary. The default response contains results as a percentage for up to the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyRelativeHumidityApi();
$asset_uuid = 1.2; // double | Unique asset id.
$valid_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlyRelativeHumidityContoursByAsset($asset_uuid, $valid_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyRelativeHumidityApi->hourlyRelativeHumidityContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **valid_time** | **\DateTime**| Valid time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]

### Return type

[**\Swagger\Client\Model\HourlyRelativeHumidityContoursByAssetData**](../Model/HourlyRelativeHumidityContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

