# Swagger\Client\DailyPrecipitationApi

All URIs are relative to *https://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dailyPrecipitationByAsset**](DailyPrecipitationApi.md#dailyPrecipitationByAsset) | **GET** /daily-precipitation/{asset-uuid} | Daily Precipitation by asset
[**dailyPrecipitationByLocation**](DailyPrecipitationApi.md#dailyPrecipitationByLocation) | **GET** /daily-precipitation/{latitude}/{longitude} | Daily Precipitation by location
[**dailyPrecipitationContoursByAsset**](DailyPrecipitationApi.md#dailyPrecipitationContoursByAsset) | **GET** /daily-precipitation/{asset-uuid}/contours | Daily Precipitation contours by asset


# **dailyPrecipitationByAsset**
> \Swagger\Client\Model\DailyPrecipitationByAssetData dailyPrecipitationByAsset($asset_uuid, $start, $end, $unit)

Daily Precipitation by asset

Provides the total amount of daily precipitation within a user-defined  timespan at the centroid of an asset, along with the area-weighted  arithmetic mean and range of precipitation over that asset.  Includes a daily time series. Time series values are for the centroid of the asset. The default response contains results in millimeters for up to the next 6 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailyPrecipitationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$unit = "unit_example"; // string | Unit of measure

try {
    $result = $api_instance->dailyPrecipitationByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyPrecipitationApi->dailyPrecipitationByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **unit** | **string**| Unit of measure | [optional]

### Return type

[**\Swagger\Client\Model\DailyPrecipitationByAssetData**](../Model/DailyPrecipitationByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailyPrecipitationByLocation**
> \Swagger\Client\Model\DailyPrecipitationByLocationData dailyPrecipitationByLocation($latitude, $longitude, $start, $end, $unit)

Daily Precipitation by location

Provides the total amount of daily precipitation along with a  daily time series within a user-defined timespan.  The location is represented by a latitude/longitude pair. The default response contains results in millimeters for up to the next 6 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailyPrecipitationApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$unit = "unit_example"; // string | Unit of measure

try {
    $result = $api_instance->dailyPrecipitationByLocation($latitude, $longitude, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyPrecipitationApi->dailyPrecipitationByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **unit** | **string**| Unit of measure | [optional]

### Return type

[**\Swagger\Client\Model\DailyPrecipitationByLocationData**](../Model/DailyPrecipitationByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailyPrecipitationContoursByAsset**
> \Swagger\Client\Model\DailyPrecipitationContoursByAssetData dailyPrecipitationContoursByAsset($asset_uuid, $start, $end, $unit)

Daily Precipitation contours by asset

Provides a contoured representation (GeoJSON) of the total  amount of precipitation within a user-defined timespan, clipped to an asset boundary. The default response contains results in millimeters for up to the next 6 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailyPrecipitationApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$unit = "unit_example"; // string | Unit of measure

try {
    $result = $api_instance->dailyPrecipitationContoursByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyPrecipitationApi->dailyPrecipitationContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **unit** | **string**| Unit of measure | [optional]

### Return type

[**\Swagger\Client\Model\DailyPrecipitationContoursByAssetData**](../Model/DailyPrecipitationContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

