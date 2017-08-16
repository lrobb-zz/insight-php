# Swagger\Client\ClimatologyDailyLowTemperatureApi

<<<<<<< HEAD
All URIs are relative to *https://insight.api.wdtinc.com*
=======
All URIs are relative to *http://insight.api.wdtinc.com*
>>>>>>> b4b592f0f75f5d6ba0501be7b1212d3e9f9102d2

Method | HTTP request | Description
------------- | ------------- | -------------
[**climoDailyLowTemperatureByAsset**](ClimatologyDailyLowTemperatureApi.md#climoDailyLowTemperatureByAsset) | **GET** /climatology/daily-low-temperature/{asset-uuid} | Climatology Daily Low Temperature by asset
[**climoDailyLowTemperatureByLocation**](ClimatologyDailyLowTemperatureApi.md#climoDailyLowTemperatureByLocation) | **GET** /climatology/daily-low-temperature/{latitude}/{longitude} | Climatology Daily Low Temperature by location
[**climoDailyLowTemperatureContoursByAsset**](ClimatologyDailyLowTemperatureApi.md#climoDailyLowTemperatureContoursByAsset) | **GET** /climatology/daily-low-temperature/{asset-uuid}/contours | Climatology Daily Low Temperature contours by asset


# **climoDailyLowTemperatureByAsset**
> \Swagger\Client\Model\DailyProductByAssetData climoDailyLowTemperatureByAsset($asset_uuid, $start, $end, $years, $unit)

Climatology Daily Low Temperature by asset

Provides a daily climatological time series for low temperature within a user-defined timespan at the centroid of an asset, along with the area-weighted arithmetic mean and range of temperature over that asset. Time series values are for the centroid of the asset. The default response contains results on a Celsius temperature scale for 30 year climatological results based on the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ClimatologyDailyLowTemperatureApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. A valid ISO 8601 month and day (MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). A valid ISO 8601 month and day (MM-DD)
$years = 1.2; // double | number of years for aggregation
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->climoDailyLowTemperatureByAsset($asset_uuid, $start, $end, $years, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimatologyDailyLowTemperatureApi->climoDailyLowTemperatureByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. A valid ISO 8601 month and day (MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). A valid ISO 8601 month and day (MM-DD) | [optional]
 **years** | **double**| number of years for aggregation | [optional]
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyProductByAssetData**](../Model/DailyProductByAssetData.md)

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

# **climoDailyLowTemperatureByLocation**
> \Swagger\Client\Model\DailyProductByLocationData climoDailyLowTemperatureByLocation($latitude, $longitude, $start, $end, $years, $unit)

Climatology Daily Low Temperature by location

Provides a daily climatological low temperature time series within a user-defined timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results on a Celsius temperature scale for 30 year climatological results based on the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ClimatologyDailyLowTemperatureApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. A valid ISO 8601 month and day (MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). A valid ISO 8601 month and day (MM-DD)
$years = 1.2; // double | number of years for aggregation
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->climoDailyLowTemperatureByLocation($latitude, $longitude, $start, $end, $years, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimatologyDailyLowTemperatureApi->climoDailyLowTemperatureByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start date. A valid ISO 8601 month and day (MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). A valid ISO 8601 month and day (MM-DD) | [optional]
 **years** | **double**| number of years for aggregation | [optional]
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyProductByLocationData**](../Model/DailyProductByLocationData.md)

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

# **climoDailyLowTemperatureContoursByAsset**
> \Swagger\Client\Model\DailyLowTemperatureContoursByAssetData climoDailyLowTemperatureContoursByAsset($asset_uuid, $start, $end, $years, $unit)

Climatology Daily Low Temperature contours by asset

Provides a contoured representation (GeoJSON) of climatological low temperatures over a date range, clipped to an asset boundary. The default response contains results on a Celsius temperature scale for climatological results based on the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ClimatologyDailyLowTemperatureApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. A valid ISO 8601 month and day  (MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). A valid ISO 8601 month and day  (MM-DD)
$years = 1.2; // double | number of years for aggregation
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->climoDailyLowTemperatureContoursByAsset($asset_uuid, $start, $end, $years, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimatologyDailyLowTemperatureApi->climoDailyLowTemperatureContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. A valid ISO 8601 month and day  (MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). A valid ISO 8601 month and day  (MM-DD) | [optional]
 **years** | **double**| number of years for aggregation | [optional]
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyLowTemperatureContoursByAssetData**](../Model/DailyLowTemperatureContoursByAssetData.md)

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

