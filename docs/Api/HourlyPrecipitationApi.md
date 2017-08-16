# Swagger\Client\HourlyPrecipitationApi

<<<<<<< HEAD
All URIs are relative to *https://insight.api.wdtinc.com*
=======
All URIs are relative to *http://insight.api.wdtinc.com*
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2

Method | HTTP request | Description
------------- | ------------- | -------------
[**hourlyPrecipitationByAsset**](HourlyPrecipitationApi.md#hourlyPrecipitationByAsset) | **GET** /hourly-precipitation/{asset-uuid} | Hourly Precipitation by asset
[**hourlyPrecipitationByLocation**](HourlyPrecipitationApi.md#hourlyPrecipitationByLocation) | **GET** /hourly-precipitation/{latitude}/{longitude} | Hourly Precipitation by location
[**hourlyPrecipitationContoursByAsset**](HourlyPrecipitationApi.md#hourlyPrecipitationContoursByAsset) | **GET** /hourly-precipitation/{asset-uuid}/contours | Hourly Precipitation contours by asset


# **hourlyPrecipitationByAsset**
> \Swagger\Client\Model\HourlyPrecipitationByAssetData hourlyPrecipitationByAsset($asset_uuid, $start, $end, $unit)

Hourly Precipitation by asset

Provides the total amount of precipitation within a user-defined timespan  at the centroid of an asset, along with the area-weighted arithmetic mean  and range of precipitation over that asset. Includes an hourly time series.  Time series values are for the centroid of the asset. The default response contains results for up to the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyPrecipitationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | Unit of measure

try {
    $result = $api_instance->hourlyPrecipitationByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyPrecipitationApi->hourlyPrecipitationByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **unit** | **string**| Unit of measure | [optional]

### Return type

[**\Swagger\Client\Model\HourlyPrecipitationByAssetData**](../Model/HourlyPrecipitationByAssetData.md)

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

# **hourlyPrecipitationByLocation**
> \Swagger\Client\Model\HourlyPrecipitationByLocationData hourlyPrecipitationByLocation($latitude, $longitude, $start, $end, $unit)

Hourly Precipitation by location

Provides the total amount of precipitation within a user-defined  timespan at a specific location. The location is represented by a  latitude/longitude pair. Includes an hourly time series.  The valid time of each element in the series defines the end of its hourly accumulation period. The default response contains results in millimeters for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyPrecipitationApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | Unit of measure

try {
    $result = $api_instance->hourlyPrecipitationByLocation($latitude, $longitude, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyPrecipitationApi->hourlyPrecipitationByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **unit** | **string**| Unit of measure | [optional]

### Return type

[**\Swagger\Client\Model\HourlyPrecipitationByLocationData**](../Model/HourlyPrecipitationByLocationData.md)

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

# **hourlyPrecipitationContoursByAsset**
> \Swagger\Client\Model\HourlyPrecipitationContoursByAssetData hourlyPrecipitationContoursByAsset($asset_uuid, $start, $end, $unit)

Hourly Precipitation contours by asset

Provides a contoured representation (GeoJSON) of the total amount  of precipitation within a user-defined timespan, clipped to an asset boundary. The default response contains results in millimeters for the next 24 hours.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\HourlyPrecipitationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time. Start of 2015 to 7 days in the future.  (YYYY-MM-DDTHH:MM:SSZ)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ)
$unit = "unit_example"; // string | Unit of measure

try {
    $result = $api_instance->hourlyPrecipitationContoursByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HourlyPrecipitationApi->hourlyPrecipitationContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start time. Start of 2015 to 7 days in the future.  (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **end** | **\DateTime**| End time. Start of 2015 to 7 days in the future. (YYYY-MM-DDTHH:MM:SSZ) | [optional]
 **unit** | **string**| Unit of measure | [optional]

### Return type

[**\Swagger\Client\Model\HourlyPrecipitationContoursByAssetData**](../Model/HourlyPrecipitationContoursByAssetData.md)

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

