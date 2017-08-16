# Swagger\Client\HourlyEvapotranspirationTallCropApi

All URIs are relative to *https://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hourlyEvapotranspirationTallCropByAsset**](HourlyEvapotranspirationTallCropApi.md#hourlyEvapotranspirationTallCropByAsset) | **GET** /hourly-evapotranspiration-tall-crop/{asset-uuid} | Hourly Evapotranspiration Tall Crop by asset
[**hourlyEvapotranspirationTallCropByLocation**](HourlyEvapotranspirationTallCropApi.md#hourlyEvapotranspirationTallCropByLocation) | **GET** /hourly-evapotranspiration-tall-crop/{latitude}/{longitude} | Hourly Evapotranspiration Tall Crop by location
[**hourlyEvapotranspirationTallCropContoursByAsset**](HourlyEvapotranspirationTallCropApi.md#hourlyEvapotranspirationTallCropContoursByAsset) | **GET** /hourly-evapotranspiration-tall-crop/{asset-uuid}/contours | Hourly Evapotranspiration Tall Crop contours by asset


# **hourlyEvapotranspirationTallCropByAsset**
> \Swagger\Client\Model\HourlyProductByAssetData hourlyEvapotranspirationTallCropByAsset($asset_uuid, $start, $end, $unit)

Hourly Evapotranspiration Tall Crop by asset

Provides a hourly time series for evapotranspiration-tall-crop within a user-defined timespan at the centroid of an asset, along with the area-weighted arithmetic mean and range of temperature over that asset. Time series values are for the centroid of the asset. The default response contains results in millimeters per hour for up to the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyEvapotranspirationTallCropApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | et unit

try {
    $result = $api_instance->hourlyEvapotranspirationTallCropByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyEvapotranspirationTallCropApi->hourlyEvapotranspirationTallCropByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start time. June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **unit** | **string**| et unit | [optional]

### Return type

[**\Swagger\Client\Model\HourlyProductByAssetData**](../Model/HourlyProductByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyEvapotranspirationTallCropByLocation**
> \Swagger\Client\Model\HourlyProductByLocationData hourlyEvapotranspirationTallCropByLocation($latitude, $longitude, $start, $end, $unit)

Hourly Evapotranspiration Tall Crop by location

Provides a hourly time series of evapotranspiration-tall-crop within a user-defined timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results in millimeters per hour up to the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyEvapotranspirationTallCropApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | et unit

try {
    $result = $api_instance->hourlyEvapotranspirationTallCropByLocation($latitude, $longitude, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyEvapotranspirationTallCropApi->hourlyEvapotranspirationTallCropByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start time. June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **unit** | **string**| et unit | [optional]

### Return type

[**\Swagger\Client\Model\HourlyProductByLocationData**](../Model/HourlyProductByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hourlyEvapotranspirationTallCropContoursByAsset**
> \Swagger\Client\Model\HourlyEvapotranspirationTallCropContoursByAssetData hourlyEvapotranspirationTallCropContoursByAsset($asset_uuid, $unit, $valid_time)

Hourly Evapotranspiration Tall Crop contours by asset

Provides a contoured representation (GeoJSON) of evapotranspiration-tall-crop over a date range, clipped to an asset boundary. The default response contains results in millimeters per hour for up to the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyEvapotranspirationTallCropApi();
$asset_uuid = 1.2; // double | Unique asset id.
$unit = "unit_example"; // string | et unit
$valid_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid time. June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ)

try {
    $result = $api_instance->hourlyEvapotranspirationTallCropContoursByAsset($asset_uuid, $unit, $valid_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyEvapotranspirationTallCropApi->hourlyEvapotranspirationTallCropContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **unit** | **string**| et unit | [optional]
 **valid_time** | **\DateTime**| Valid time. June 1, 2016 to 5 days in the future (YYYY-MM-DDTHH:MM:SSZ) | [optional]

### Return type

[**\Swagger\Client\Model\HourlyEvapotranspirationTallCropContoursByAssetData**](../Model/HourlyEvapotranspirationTallCropContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

