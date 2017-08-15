# Swagger\Client\ClimatologyDailyHighTemperatureApi

All URIs are relative to *http://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**climoDailyHighTemperatureByAsset**](ClimatologyDailyHighTemperatureApi.md#climoDailyHighTemperatureByAsset) | **GET** /climatology/daily-high-temperature/{asset-uuid} | Climatology Daily High Temperature by asset
[**climoDailyHighTemperatureByLocation**](ClimatologyDailyHighTemperatureApi.md#climoDailyHighTemperatureByLocation) | **GET** /climatology/daily-high-temperature/{latitude}/{longitude} | Climatology Daily High Temperature by location
[**climoDailyHighTemperatureContoursByAsset**](ClimatologyDailyHighTemperatureApi.md#climoDailyHighTemperatureContoursByAsset) | **GET** /climatology/daily-high-temperature/{asset-uuid}/contours | Climatology Daily High Temperature contours by asset


# **climoDailyHighTemperatureByAsset**
> \Swagger\Client\Model\DailyProductByAssetData climoDailyHighTemperatureByAsset($asset_uuid, $start, $end, $years, $unit)

Climatology Daily High Temperature by asset

Provides a daily climatological time series for high temperature within a user-defined timespan at the centroid of an asset, along with the area-weighted arithmetic mean and range of temperature over that asset. Time series values are for the centroid of the asset. The default response contains results on a Celsius temperature scale for 30 year climatological results based on the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ClimatologyDailyHighTemperatureApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. A valid ISO 8601 month and day (MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). A valid ISO 8601 month and day (MM-DD)
$years = 1.2; // double | number of years for aggregation
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->climoDailyHighTemperatureByAsset($asset_uuid, $start, $end, $years, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimatologyDailyHighTemperatureApi->climoDailyHighTemperatureByAsset: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **climoDailyHighTemperatureByLocation**
> \Swagger\Client\Model\DailyProductByLocationData climoDailyHighTemperatureByLocation($latitude, $longitude, $start, $end, $years, $unit)

Climatology Daily High Temperature by location

Provides a daily climatological high temperature time series within a user-defined timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results on a Celsius temperature scale for 30 year climatological results based on the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ClimatologyDailyHighTemperatureApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. a valid ISO 8601 month and day (MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). a valid ISO 8601 month and day (MM-DD)
$years = 1.2; // double | number of years for aggregation
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->climoDailyHighTemperatureByLocation($latitude, $longitude, $start, $end, $years, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimatologyDailyHighTemperatureApi->climoDailyHighTemperatureByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start date. a valid ISO 8601 month and day (MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). a valid ISO 8601 month and day (MM-DD) | [optional]
 **years** | **double**| number of years for aggregation | [optional]
 **unit** | **string**| temperature unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyProductByLocationData**](../Model/DailyProductByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **climoDailyHighTemperatureContoursByAsset**
> \Swagger\Client\Model\DailyHighTemperatureContoursByAssetData climoDailyHighTemperatureContoursByAsset($asset_uuid, $start, $end, $years, $unit)

Climatology Daily High Temperature contours by asset

Provides a contoured representation (GeoJSON) of climatological high temperatures over a date range, clipped to an asset boundary. The default response contains results on a Celsius temperature scale for climatological results based on the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\ClimatologyDailyHighTemperatureApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. A valid ISO 8601 month and day (MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). A valid ISO 8601 month and day (MM-DD)
$years = 1.2; // double | number of years for aggregation
$unit = "unit_example"; // string | temperature unit

try {
    $result = $api_instance->climoDailyHighTemperatureContoursByAsset($asset_uuid, $start, $end, $years, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClimatologyDailyHighTemperatureApi->climoDailyHighTemperatureContoursByAsset: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DailyHighTemperatureContoursByAssetData**](../Model/DailyHighTemperatureContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

