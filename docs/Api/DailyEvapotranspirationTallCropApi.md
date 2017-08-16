# Swagger\Client\DailyEvapotranspirationTallCropApi

All URIs are relative to *https://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dailyEvapotranspirationTallCropByAsset**](DailyEvapotranspirationTallCropApi.md#dailyEvapotranspirationTallCropByAsset) | **GET** /daily-evapotranspiration-tall-crop/{asset-uuid} | Daily Evapotranspiration Tall Crop by asset
[**dailyEvapotranspirationTallCropByLocation**](DailyEvapotranspirationTallCropApi.md#dailyEvapotranspirationTallCropByLocation) | **GET** /daily-evapotranspiration-tall-crop/{latitude}/{longitude} | Daily Evapotranspiration Tall Crop by location
[**dailyEvapotranspirationTallCropContoursByAsset**](DailyEvapotranspirationTallCropApi.md#dailyEvapotranspirationTallCropContoursByAsset) | **GET** /daily-evapotranspiration-tall-crop/{asset-uuid}/contours | Daily Evapotranspiration Tall Crop contours by asset


# **dailyEvapotranspirationTallCropByAsset**
> \Swagger\Client\Model\DailyProductByAssetData dailyEvapotranspirationTallCropByAsset($asset_uuid, $start, $end, $unit)

Daily Evapotranspiration Tall Crop by asset

Provides a daily time series for evapotranspiration-tall-crop within a user-defined timespan at the centroid of an asset, along with the area-weighted arithmetic mean and range of temperature over that asset. Time series values are for the centroid of the asset. The default response contains results in millimeters per day for up to the next 4 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailyEvapotranspirationTallCropApi();
$asset_uuid = 1.2; // double | Unique asset id.
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. June 1, 2016 to 5 days in the future (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DD)
$unit = "unit_example"; // string | et unit

try {
    $result = $api_instance->dailyEvapotranspirationTallCropByAsset($asset_uuid, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyEvapotranspirationTallCropApi->dailyEvapotranspirationTallCropByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **start** | **\DateTime**| Start date. June 1, 2016 to 5 days in the future (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DD) | [optional]
 **unit** | **string**| et unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyProductByAssetData**](../Model/DailyProductByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailyEvapotranspirationTallCropByLocation**
> \Swagger\Client\Model\DailyProductByLocationData dailyEvapotranspirationTallCropByLocation($latitude, $longitude, $start, $end, $unit)

Daily Evapotranspiration Tall Crop by location

Provides a daily time series of evapotranspiration-tall-crop within a user-defined  timespan at a specific location. The location is represented by a latitude/longitude pair. The default response contains results in millimeters per day for up to the next 4 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailyEvapotranspirationTallCropApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. June 1, 2016 to 5 days in the future (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DD)
$unit = "unit_example"; // string | et unit

try {
    $result = $api_instance->dailyEvapotranspirationTallCropByLocation($latitude, $longitude, $start, $end, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyEvapotranspirationTallCropApi->dailyEvapotranspirationTallCropByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **start** | **\DateTime**| Start date. June 1, 2016 to 5 days in the future (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). June 1, 2016 to 5 days in the future (YYYY-MM-DD) | [optional]
 **unit** | **string**| et unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyProductByLocationData**](../Model/DailyProductByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dailyEvapotranspirationTallCropContoursByAsset**
> \Swagger\Client\Model\DailyEvapotranspirationTallCropContoursByAssetData dailyEvapotranspirationTallCropContoursByAsset($asset_uuid, $valid_date, $unit)

Daily Evapotranspiration Tall Crop contours by asset

Provides a contoured representation (GeoJSON) of evapotranspiration-tall-crop over a date range, clipped to an asset boundary. The default response contains results in millimeters per day for up to the next 4 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DailyEvapotranspirationTallCropApi();
$asset_uuid = 1.2; // double | Unique asset id.
$valid_date = new \DateTime("2013-10-20"); // \DateTime | valid date. June 1, 2016 to 5 days in the future. (YYYY-MM-DD)
$unit = "unit_example"; // string | et unit

try {
    $result = $api_instance->dailyEvapotranspirationTallCropContoursByAsset($asset_uuid, $valid_date, $unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DailyEvapotranspirationTallCropApi->dailyEvapotranspirationTallCropContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **valid_date** | **\DateTime**| valid date. June 1, 2016 to 5 days in the future. (YYYY-MM-DD) | [optional]
 **unit** | **string**| et unit | [optional]

### Return type

[**\Swagger\Client\Model\DailyEvapotranspirationTallCropContoursByAssetData**](../Model/DailyEvapotranspirationTallCropContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

