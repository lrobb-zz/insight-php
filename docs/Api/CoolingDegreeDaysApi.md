# Swagger\Client\CoolingDegreeDaysApi

All URIs are relative to *http://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coolingDegreeDaysByAsset**](CoolingDegreeDaysApi.md#coolingDegreeDaysByAsset) | **GET** /cooling-degree-days/{asset-uuid} | Cooling degree days by asset
[**coolingDegreeDaysByLocation**](CoolingDegreeDaysApi.md#coolingDegreeDaysByLocation) | **GET** /cooling-degree-days/{latitude}/{longitude} | Cooling degree days by location
[**coolingDegreeDaysContoursByAsset**](CoolingDegreeDaysApi.md#coolingDegreeDaysContoursByAsset) | **GET** /cooling-degree-days/{asset-uuid}/contours | Cooling degree days contours by asset


# **coolingDegreeDaysByAsset**
> \Swagger\Client\Model\DegreeDaysByAssetData coolingDegreeDaysByAsset($asset_uuid, $base, $unit, $start, $end)

Cooling degree days by asset

Provides the cooling degree days and daily time series data for a  user-defined base temperature and date range at the centroid of an asset,  along with the area-weighted arithmetic mean and range of  cooling degree days over that asset. Time series values are for the centroid of the asset. The default response contains results for up to the next 6 days,  on a Celsius temperature scale, for a base temperature of 16 degrees with a daily time series.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CoolingDegreeDaysApi();
$asset_uuid = 1.2; // double | Unique asset id.
$base = 1.2; // double | Base temperature
$unit = "unit_example"; // string | Temperature unit
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)

try {
    $result = $api_instance->coolingDegreeDaysByAsset($asset_uuid, $base, $unit, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoolingDegreeDaysApi->coolingDegreeDaysByAsset: ', $e->getMessage(), PHP_EOL;
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

# **coolingDegreeDaysByLocation**
> \Swagger\Client\Model\DegreeDaysByLocationData coolingDegreeDaysByLocation($latitude, $longitude, $base, $unit, $start, $end)

Cooling degree days by location

Provides the accumulated cooling degree days at a specific location  along with daily time series data for a user-defined base temperature  and date range. The location is represented by a latitude/longitude pair. The default response contains results for up to the next 6 days,  on a Celsius temperature scale, for a base temperature of 20 degrees with a daily time series.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CoolingDegreeDaysApi();
$latitude = 1.2; // double | 
$longitude = 1.2; // double | 
$base = 1.2; // double | Base temperature
$unit = "unit_example"; // string | Temperature unit
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)

try {
    $result = $api_instance->coolingDegreeDaysByLocation($latitude, $longitude, $base, $unit, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoolingDegreeDaysApi->coolingDegreeDaysByLocation: ', $e->getMessage(), PHP_EOL;
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

# **coolingDegreeDaysContoursByAsset**
> \Swagger\Client\Model\DegreeDaysContoursByAssetData coolingDegreeDaysContoursByAsset($asset_uuid, $base, $unit, $start, $end)

Cooling degree days contours by asset

Provides a contoured representation (GeoJSON) of cooling degree days for a  user-defined base temperature and date range, clipped to an asset boundary. The default response contains results for up to the next 6 days,  on a Celsius temperature scale, for a base temperature of 16 degrees with a daily time series.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\CoolingDegreeDaysApi();
$asset_uuid = 1.2; // double | Unique asset id.
$base = 1.2; // double | Base temperature
$unit = "unit_example"; // string | Temperature unit
$start = new \DateTime("2013-10-20"); // \DateTime | Start date. Start of 2015 to 7 days in the future. (YYYY-MM-DD)
$end = new \DateTime("2013-10-20"); // \DateTime | End date (inclusive). Start of 2015 to 7 days in the future. (YYYY-MM-DD)

try {
    $result = $api_instance->coolingDegreeDaysContoursByAsset($asset_uuid, $base, $unit, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoolingDegreeDaysApi->coolingDegreeDaysContoursByAsset: ', $e->getMessage(), PHP_EOL;
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

