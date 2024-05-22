# BillaBear\RefundsApi

All URIs are relative to *https://{customerId}.billabear.cloud/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCustomerRefund**](RefundsApi.md#listcustomerrefund) | **GET** /customer/{customerId}/refund | List Customer Refunds
[**listRefund**](RefundsApi.md#listrefund) | **GET** /refund | List
[**showRefundById**](RefundsApi.md#showrefundbyid) | **GET** /refund/{refundId} | Detail

# **listCustomerRefund**
> \BillaBear\Model\InlineResponse2002 listCustomerRefund($customer_id, $limit, $last_key, $name)

List Customer Refunds

List Customer Refund

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve
$limit = 56; // int | How many items to return at one time (max 100)
$last_key = "last_key_example"; // string | The key to be used in pagination to say what the last key of the previous page was
$name = "name_example"; // string | The name to search for

try {
    $result = $apiInstance->listCustomerRefund($customer_id, $limit, $last_key, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->listCustomerRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |
 **limit** | **int**| How many items to return at one time (max 100) | [optional]
 **last_key** | **string**| The key to be used in pagination to say what the last key of the previous page was | [optional]
 **name** | **string**| The name to search for | [optional]

### Return type

[**\BillaBear\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRefund**
> \BillaBear\Model\InlineResponse2002 listRefund($limit, $last_key, $name)

List

List all refund

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | How many items to return at one time (max 100)
$last_key = "last_key_example"; // string | The key to be used in pagination to say what the last key of the previous page was
$name = "name_example"; // string | The name to search for

try {
    $result = $apiInstance->listRefund($limit, $last_key, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->listRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many items to return at one time (max 100) | [optional]
 **last_key** | **string**| The key to be used in pagination to say what the last key of the previous page was | [optional]
 **name** | **string**| The name to search for | [optional]

### Return type

[**\BillaBear\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showRefundById**
> \BillaBear\Model\InlineResponse2008 showRefundById($refund_id)

Detail

Info for a specific Refund

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_id = "refund_id_example"; // string | The id of the refund

try {
    $result = $apiInstance->showRefundById($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->showRefundById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| The id of the refund |

### Return type

[**\BillaBear\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

