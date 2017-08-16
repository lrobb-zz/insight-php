# Swagger\Client\ClimatologyDailyPrecipitationApi

All URIs are relative to *http://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**climoDailyPrecipitationByAsset**](ClimatologyDailyPrecipitationApi.md#climoDailyPrecipitationByAsset) | **GET** /climatology/daily-precipitation/{asset-uuid} | Climatology Daily Precipitation by asset
[**climoDailyPrecipitationByLocation**](ClimatologyDailyPrecipitationApi.md#climoDailyPrecipitationByLocation) | **GET** /climatology/daily-precipitation/{latitude}/{longitude} | Climatology Daily Precipitation by location
[**climoDailyPrecipitationContoursByAsset**](ClimatologyDailyPrecipitationApi.md#climoDailyPrecipitationContoursByAsset) | **GET** /climatology/daily-precipitation/{asset-uuid}/contours | Climatology Daily Precipitation contours by asset


# **climoDailyPrecipitationByAsset**
> \Swagger\Client\Model\DailyPrecipitationByAssetData climoDailyPrecipitationByAsset($asset_uuid, $start, $end, $unit)

Climatology Daily Precipitation by asset

Provides a daily climatological time series for precipitation within a user-defined timespan at the centroid of an asset, along with the area-weighted arithmetic mean and range of temperature over that asset. Time series values are for the centroid of the asset. The default response contains results in millimeters for 30 year climatological results based on the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ClimatologyDailyPrecipitationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. A valid ISO 8601 month and day (MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date. A valid ISO 8601 month and day (MM-DD)
$unit = "unit_example"; // string | Unit of measure

try {
    $result = $api_instance->climoDailyPrecipitationByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimatologyDailyPrecipitationApi->climoDailyPrecipitationByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. A valid ISO 8601 month and day (MM-DD) | [optional]
 **end** | **\DateTime**| End date. A valid ISO 8601 month and day (MM-DD) | [optional]
 **unit** | **string**| Unit of measure | [optional]

### Return type

[**\Swagger\Client\Model\DailyPrecipitationByAssetData**](../Model/DailyPrecipitationByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **climoDailyPrecipitationByLocation**
> \Swagger\Client\Model\DailyPrecipitationByLocationData climoDailyPrecipitationByLocation($latitude, $longitude, $start, $end, $unit)

Climatology Daily Precipitation by location

Provides a daily climatological precipitation time series within a user-defined timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results in millimeters for 30 year climatological results based on the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ClimatologyDailyPrecipitationApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. A valid ISO 8601 month and day. (MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). A valid ISO 8601 month and day. (MM-DD)
$unit = "unit_example"; // string | Unit of measure

try {
    $result = $api_instance->climoDailyPrecipitationByLocation($latitude, $longitude, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimatologyDailyPrecipitationApi->climoDailyPrecipitationByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start date. A valid ISO 8601 month and day. (MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). A valid ISO 8601 month and day. (MM-DD) | [optional]
 **unit** | **string**| Unit of measure | [optional]

### Return type

[**\Swagger\Client\Model\DailyPrecipitationByLocationData**](../Model/DailyPrecipitationByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **climoDailyPrecipitationContoursByAsset**
> \Swagger\Client\Model\DailyPrecipitationContoursByAssetData climoDailyPrecipitationContoursByAsset($asset_uuid, $start, $end, $unit)

Climatology Daily Precipitation contours by asset

Provides a contoured representation (GeoJSON) of climatological precipitation over a date range, clipped to an asset boundary. The default response contains results in millimeters for climatological results based on the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ClimatologyDailyPrecipitationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. A valid ISO 8601 month and day (MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date. A valid ISO 8601 month and day (MM-DD)
$unit = "unit_example"; // string | Unit of measure

try {
    $result = $api_instance->climoDailyPrecipitationContoursByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimatologyDailyPrecipitationApi->climoDailyPrecipitationContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. A valid ISO 8601 month and day (MM-DD) | [optional]
 **end** | **\DateTime**| End date. A valid ISO 8601 month and day (MM-DD) | [optional]
 **unit** | **string**| Unit of measure | [optional]

### Return type

[**\Swagger\Client\Model\DailyPrecipitationContoursByAssetData**](../Model/DailyPrecipitationContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

