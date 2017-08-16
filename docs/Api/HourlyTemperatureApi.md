# Swagger\Client\HourlyTemperatureApi

All URIs are relative to *http://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hourlyTemperatureByAsset**](HourlyTemperatureApi.md#hourlyTemperatureByAsset) | **GET** /hourly-temperature/{asset-uuid} | Hourly Temperature by asset
[**hourlyTemperatureByLocation**](HourlyTemperatureApi.md#hourlyTemperatureByLocation) | **GET** /hourly-temperature/{latitude}/{longitude} | Hourly Temperature by location
[**hourlyTemperatureContoursByAsset**](HourlyTemperatureApi.md#hourlyTemperatureContoursByAsset) | **GET** /hourly-temperature/{asset-uuid}/contours | Hourly Temperature contours by asset


# **hourlyTemperatureByAsset**
> \Swagger\Client\Model\HourlyProductByAssetData hourlyTemperatureByAsset($asset_uuid, $start, $end, $unit)

Hourly Temperature by asset

Provides an hourly time series for temperature within a user-defined  timespan at the centroid of an asset, along with the area-weighted  arithmetic mean and range of temperature over that asset.  Time series values are for the centroid of the asset. The default response contains results on a Celsius temperature scale for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyTemperatureApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->hourlyTemperatureByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyTemperatureApi->hourlyTemperatureByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\HourlyProductByAssetData**](../Model/HourlyProductByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyTemperatureByLocation**
> \Swagger\Client\Model\HourlyProductByLocationData hourlyTemperatureByLocation($latitude, $longitude, $start, $end, $unit)

Hourly Temperature by location

Provides an hourly time series of temperatures within a user-defined  timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results on a Celsius temperature scale for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyTemperatureApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->hourlyTemperatureByLocation($latitude, $longitude, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyTemperatureApi->hourlyTemperatureByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\HourlyProductByLocationData**](../Model/HourlyProductByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyTemperatureContoursByAsset**
> \Swagger\Client\Model\HourlyTemperatureContoursByAssetData hourlyTemperatureContoursByAsset($asset_uuid, $unit, $valid_time)

Hourly Temperature contours by asset

Provides a contoured representation (GeoJSON) of  hourly temperature at a particular valid time, clipped to an asset boundary. The default response contains results on a Celsius temperature scale for the  next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyTemperatureApi();
$asset_uuid = 1.2; // double | Unique asset id.
$unit = "unit_example"; // string | temperature unit
$valid_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlyTemperatureContoursByAsset($asset_uuid, $unit, $valid_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyTemperatureApi->hourlyTemperatureContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **unit** | **string**| temperature unit | [optional]
 **valid_time** | **\DateTime**| Valid time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]

### Return type

[**\Swagger\Client\Model\HourlyTemperatureContoursByAssetData**](../Model/HourlyTemperatureContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

