# Swagger\Client\DailyHighTemperatureApi

All URIs are relative to *http://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dailyHighTemperatureByAsset**](DailyHighTemperatureApi.md#dailyHighTemperatureByAsset) | **GET** /daily-high-temperature/{asset-uuid} | Daily High Temperature by asset
[**dailyHighTemperatureByLocation**](DailyHighTemperatureApi.md#dailyHighTemperatureByLocation) | **GET** /daily-high-temperature/{latitude}/{longitude} | Daily High Temperature by location
[**dailyHighTemperatureContoursByAsset**](DailyHighTemperatureApi.md#dailyHighTemperatureContoursByAsset) | **GET** /daily-high-temperature/{asset-uuid}/contours | Daily High Temperature contours by asset


# **dailyHighTemperatureByAsset**
> \Swagger\Client\Model\DailyProductByAssetData dailyHighTemperatureByAsset($asset_uuid, $start, $end, $unit)

Daily High Temperature by asset

Provides a daily time series for temperature within a user-defined  timespan at the centroid of an asset, along with the area-weighted  arithmetic mean and range of temperature over that asset.  Time series values are for the centroid of the asset. The default response contains results on a Celsius temperature scale for up to the next 6 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailyHighTemperatureApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->dailyHighTemperatureByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyHighTemperatureApi->dailyHighTemperatureByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyProductByAssetData**](../Model/DailyProductByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailyHighTemperatureByLocation**
> \Swagger\Client\Model\DailyProductByLocationData dailyHighTemperatureByLocation($latitude, $longitude, $start, $end, $unit)

Daily High Temperature by location

Provides a daily time series of high temperatures within a user-defined  timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results on a Celsius temperature scale for up to  the next 6 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailyHighTemperatureApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->dailyHighTemperatureByLocation($latitude, $longitude, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyHighTemperatureApi->dailyHighTemperatureByLocation: ', $e->getMessage(), PHP_EOL;
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
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyProductByLocationData**](../Model/DailyProductByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailyHighTemperatureContoursByAsset**
> \Swagger\Client\Model\DailyHighTemperatureContoursByAssetData dailyHighTemperatureContoursByAsset($asset_uuid, $start, $end, $unit)

Daily High Temperature contours by asset

Provides a contoured representation (GeoJSON) of high temperatures  over a date range, clipped to an asset boundary. The default response contains results for up to the next 6 days on a Celsius temperature scale.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailyHighTemperatureApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->dailyHighTemperatureContoursByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyHighTemperatureApi->dailyHighTemperatureContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyHighTemperatureContoursByAssetData**](../Model/DailyHighTemperatureContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

