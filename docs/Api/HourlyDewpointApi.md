# Swagger\Client\HourlyDewpointApi

All URIs are relative to *https://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hourlyDewpointByAsset**](HourlyDewpointApi.md#hourlyDewpointByAsset) | **GET** /hourly-dewpoint/{asset-uuid} | Hourly Dewpoint by asset
[**hourlyDewpointByLocation**](HourlyDewpointApi.md#hourlyDewpointByLocation) | **GET** /hourly-dewpoint/{latitude}/{longitude} | Hourly Dewpoint by location
[**hourlyDewpointContoursByAsset**](HourlyDewpointApi.md#hourlyDewpointContoursByAsset) | **GET** /hourly-dewpoint/{asset-uuid}/contours | Hourly Dewpoint contours by asset


# **hourlyDewpointByAsset**
> \Swagger\Client\Model\HourlyProductByAssetData hourlyDewpointByAsset($asset_uuid, $start, $end, $unit)

Hourly Dewpoint by asset

Provides an hourly time series for dewpoint within a user-defined  timespan at the centroid of an asset, along with the area-weighted  arithmetic mean and range of temperature over that asset.  Time series values are for the centroid of the asset. The default response contains results on a Celsius temperature scale for up to the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyDewpointApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->hourlyDewpointByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyDewpointApi->hourlyDewpointByAsset: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyDewpointByLocation**
> \Swagger\Client\Model\HourlyProductByLocationData hourlyDewpointByLocation($latitude, $longitude, $start, $end, $unit)

Hourly Dewpoint by location

Provides an hourly time series of dewpoint within a user-defined  timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results on a Celsius temperature scale for up to the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyDewpointApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->hourlyDewpointByLocation($latitude, $longitude, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyDewpointApi->hourlyDewpointByLocation: ', $e->getMessage(), PHP_EOL;
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
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\HourlyProductByLocationData**](../Model/HourlyProductByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyDewpointContoursByAsset**
> \Swagger\Client\Model\HourlyDewpointContoursByAssetData hourlyDewpointContoursByAsset($asset_uuid, $unit, $valid_time)

Hourly Dewpoint contours by asset

Provides a contoured representation (GeoJSON) of hourly dewpoint at a  particular valid time, clipped to an asset boundary. The default response contains results for up to the next 24 hours on a Celsius temperature scale.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyDewpointApi();
$asset_uuid = 1.2; // double | Unique asset id.
$unit = "unit_example"; // string | temperature unit
$valid_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid time. June 01, 2016 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlyDewpointContoursByAsset($asset_uuid, $unit, $valid_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyDewpointApi->hourlyDewpointContoursByAsset: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\HourlyDewpointContoursByAssetData**](../Model/HourlyDewpointContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

