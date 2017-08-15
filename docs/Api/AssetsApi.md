# Swagger\Client\AssetsApi

All URIs are relative to *http://insight.api.wdtinc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assetCreation**](AssetsApi.md#assetCreation) | **POST** /assets | Asset Creation
[**assetInformation**](AssetsApi.md#assetInformation) | **GET** /assets/{asset-uuid} | Asset Information
[**assetList**](AssetsApi.md#assetList) | **GET** /assets | Asset List
[**assetRemoval**](AssetsApi.md#assetRemoval) | **DELETE** /assets/{asset-uuid} | Asset Removal
[**assetUpdate**](AssetsApi.md#assetUpdate) | **PUT** /assets/{asset-uuid} | Asset Update


# **assetCreation**
> \Swagger\Client\Model\Asset assetCreation($body)

Asset Creation

Asset Creation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AssetsApi();
$body = "body_example"; // string | 

try {
    $result = $api_instance->assetCreation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetCreation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  |

### Return type

[**\Swagger\Client\Model\Asset**](../Model/Asset.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetInformation**
> \Swagger\Client\Model\Asset assetInformation($asset_uuid)

Asset Information

Asset Information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_uuid = 1.2; // double | Unique asset id.

try {
    $result = $api_instance->assetInformation($asset_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |

### Return type

[**\Swagger\Client\Model\Asset**](../Model/Asset.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetList**
> \Swagger\Client\Model\Asset[] assetList()

Asset List

Asset List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AssetsApi();

try {
    $result = $api_instance->assetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Asset[]**](../Model/Asset.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetRemoval**
> \Swagger\Client\Model\Asset assetRemoval($asset_uuid)

Asset Removal

Asset Removal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_uuid = 1.2; // double | Unique asset id.

try {
    $result = $api_instance->assetRemoval($asset_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetRemoval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |

### Return type

[**\Swagger\Client\Model\Asset**](../Model/Asset.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetUpdate**
> \Swagger\Client\Model\Asset assetUpdate($asset_uuid, $body)

Asset Update

Asset Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_uuid = 1.2; // double | Unique asset id.
$body = "body_example"; // string | 

try {
    $result = $api_instance->assetUpdate($asset_uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_uuid** | **double**| Unique asset id. |
 **body** | **string**|  |

### Return type

[**\Swagger\Client\Model\Asset**](../Model/Asset.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.wdt+json; version=1
 - **Accept**: application/vnd.wdt+json; version=1, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

