# BillaBear\PaymentDetailsApi

All URIs are relative to *https://{customerId}.billabear.cloud/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**completeFrontendPaymentDetails**](PaymentDetailsApi.md#completefrontendpaymentdetails) | **POST** /customer/{customerId}/payment-methods/frontend-payment-token | Complete Frontend Detail Collection
[**deletePaymentDetails**](PaymentDetailsApi.md#deletepaymentdetails) | **DELETE** /customer/{customerId}/payment-methods/{paymentDetailsId} | Delete
[**listPaymentDetails**](PaymentDetailsApi.md#listpaymentdetails) | **GET** /customer/{customerId}/payment-methods | List Customer&#x27;s Payment Details
[**makeDefaultPaymentDetails**](PaymentDetailsApi.md#makedefaultpaymentdetails) | **POST** /customer/{customerId}/payment-methods/{paymentDetailsId}/default | Make Default
[**startFrontendPaymentDetails**](PaymentDetailsApi.md#startfrontendpaymentdetails) | **GET** /customer/{customerId}/payment-methods/frontend-payment-token | Start Frontend Detail Collection

# **completeFrontendPaymentDetails**
> \BillaBear\Model\PaymentDetails completeFrontendPaymentDetails($body, $customer_id)

Complete Frontend Detail Collection

Complete frontend payment details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\PaymentDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BillaBear\Model\FrontendToken(); // \BillaBear\Model\FrontendToken | 
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->completeFrontendPaymentDetails($body, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDetailsApi->completeFrontendPaymentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillaBear\Model\FrontendToken**](../Model/FrontendToken.md)|  |
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\PaymentDetails**](../Model/PaymentDetails.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaymentDetails**
> string deletePaymentDetails($customer_id, $payment_details_id)

Delete

Delete Payment Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\PaymentDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve
$payment_details_id = "payment_details_id_example"; // string | The id of the payment details

try {
    $result = $apiInstance->deletePaymentDetails($customer_id, $payment_details_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDetailsApi->deletePaymentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |
 **payment_details_id** | **string**| The id of the payment details |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPaymentDetails**
> \BillaBear\Model\InlineResponse2005 listPaymentDetails($customer_id)

List Customer's Payment Details

List all customers <br><br>Added in version 1.1

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\PaymentDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->listPaymentDetails($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDetailsApi->listPaymentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **makeDefaultPaymentDetails**
> string makeDefaultPaymentDetails($customer_id, $payment_details_id)

Make Default

Delete Payment Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\PaymentDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve
$payment_details_id = "payment_details_id_example"; // string | The id of the payment details

try {
    $result = $apiInstance->makeDefaultPaymentDetails($customer_id, $payment_details_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDetailsApi->makeDefaultPaymentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |
 **payment_details_id** | **string**| The id of the payment details |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startFrontendPaymentDetails**
> \BillaBear\Model\FrontendToken startFrontendPaymentDetails($customer_id)

Start Frontend Detail Collection

Start frontend payment details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\PaymentDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->startFrontendPaymentDetails($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentDetailsApi->startFrontendPaymentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\FrontendToken**](../Model/FrontendToken.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

