# Swagger\Client\GrowingDegreeDaysApi

All URIs are relative to *http://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**growingDegreeDaysByAsset**](GrowingDegreeDaysApi.md#growingDegreeDaysByAsset) | **GET** /growing-degree-days/{asset-uuid} | Growing degree days by asset
[**growingDegreeDaysByLocation**](GrowingDegreeDaysApi.md#growingDegreeDaysByLocation) | **GET** /growing-degree-days/{latitude}/{longitude} | Growing degree days by location
[**growingDegreeDaysContoursByAsset**](GrowingDegreeDaysApi.md#growingDegreeDaysContoursByAsset) | **GET** /growing-degree-days/{asset-uuid}/contours | Growing degree days contours by asset


# **growingDegreeDaysByAsset**
> \Swagger\Client\Model\DegreeDaysByAssetData growingDegreeDaysByAsset($asset_uuid, $base, $unit, $start, $end)

Growing degree days by asset

Provides the growing degree days and daily time series data for a  user-defined base temperature and date range at the centroid of an asset,  along with the area-weighted arithmetic mean and range of growing degree days  over that asset. Time series values are for the centroid of the asset. The default response contains results for up to the next 6 days,  on a Celsius temperature scale, for a base temperature of 10 degrees with a daily time series.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\GrowingDegreeDaysApi();
$asset_uuid = 1.2; // double | Unique asset id.
$base = 1.2; // double | Base temperature
$unit = "unit_example"; // string | Temperature unit
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)

try {
    $result = $api_instance->growingDegreeDaysByAsset($asset_uuid, $base, $unit, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrowingDegreeDaysApi->growingDegreeDaysByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **base** | **double**| Base temperature | [optional]
 **unit** | **string**| Temperature unit | [optional]
 **start** | **\DateTime**| Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]

### Return type

[**\Swagger\Client\Model\DegreeDaysByAssetData**](../Model/DegreeDaysByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **growingDegreeDaysByLocation**
> \Swagger\Client\Model\DegreeDaysByLocationData growingDegreeDaysByLocation($latitude, $longitude, $base, $unit, $start, $end)

Growing degree days by location

Provides the accumulated growing degree days at a specific location  along with daily time series data for a user-defined base temperature and date range.  The location is represented by a latitude/longitude pair. The default response contains results for up to the next 6 days,  on a Celsius temperature scale, for a base temperature of 10 degrees with a daily time series.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\GrowingDegreeDaysApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$base = 1.2; // double | Base temperature
$unit = "unit_example"; // string | Temperature unit
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)

try {
    $result = $api_instance->growingDegreeDaysByLocation($latitude, $longitude, $base, $unit, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrowingDegreeDaysApi->growingDegreeDaysByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**|  |
 **longitude** | **double**|  |
 **base** | **double**| Base temperature | [optional]
 **unit** | **string**| Temperature unit | [optional]
 **start** | **\DateTime**| Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]

### Return type

[**\Swagger\Client\Model\DegreeDaysByLocationData**](../Model/DegreeDaysByLocationData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **growingDegreeDaysContoursByAsset**
> \Swagger\Client\Model\DegreeDaysContoursByAssetData growingDegreeDaysContoursByAsset($asset_uuid, $base, $unit, $start, $end)

Growing degree days contours by asset

Provides a contoured representation (GeoJSON) of growing degree days for a user-defined base temperature and date range, clipped to a asset boundary. The default response contains results for up to the next 6 days,  on a Celsius temperature scale, for a base temperature of 10 degrees with a daily time series.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\GrowingDegreeDaysApi();
$asset_uuid = 1.2; // double | Unique asset id.
$base = 1.2; // double | Base temperature
$unit = "unit_example"; // string | Temperature unit
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)

try {
    $result = $api_instance->growingDegreeDaysContoursByAsset($asset_uuid, $base, $unit, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrowingDegreeDaysApi->growingDegreeDaysContoursByAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **base** | **double**| Base temperature | [optional]
 **unit** | **string**| Temperature unit | [optional]
 **start** | **\DateTime**| Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]
 **end** | **\DateTime**| End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD) | [optional]

### Return type

[**\Swagger\Client\Model\DegreeDaysContoursByAssetData**](../Model/DegreeDaysContoursByAssetData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

