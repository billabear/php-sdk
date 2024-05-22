# BillaBear\PricesApi

All URIs are relative to *https://{customerId}.billabear.cloud/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPrice**](PricesApi.md#createprice) | **POST** /product/{productId}/price | Create
[**listPrice**](PricesApi.md#listprice) | **GET** /product/{productId}/price | List

# **createPrice**
> string createPrice($body, $product_id)

Create

Create a price

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BillaBear\Model\Price(); // \BillaBear\Model\Price | 
$product_id = "product_id_example"; // string | The id of the product to retrieve

try {
    $result = $apiInstance->createPrice($body, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->createPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillaBear\Model\Price**](../Model/Price.md)|  |
 **product_id** | **string**| The id of the product to retrieve |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPrice**
> \BillaBear\Model\InlineResponse20010 listPrice($product_id, $limit, $last_key)

List

List all prices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = "product_id_example"; // string | The id of the product to retrieve
$limit = 56; // int | How many items to return at one time (max 100)
$last_key = "last_key_example"; // string | The key to be used in pagination to say what the last key of the previous page was

try {
    $result = $apiInstance->listPrice($product_id, $limit, $last_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->listPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| The id of the product to retrieve |
 **limit** | **int**| How many items to return at one time (max 100) | [optional]
 **last_key** | **string**| The key to be used in pagination to say what the last key of the previous page was | [optional]

### Return type

[**\BillaBear\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

