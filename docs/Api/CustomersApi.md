# BillaBear\CustomersApi

All URIs are relative to *https://{customerId}.billabear.cloud/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSeatsSubscriptions**](CustomersApi.md#addseatssubscriptions) | **POST** /subscription/{subscriptionId}/seats/add | Add Seats
[**applyVoucherToCustomer**](CustomersApi.md#applyvouchertocustomer) | **POST** /customer/{customerId}/voucher | Apply voucher
[**createCustomer**](CustomersApi.md#createcustomer) | **POST** /customer | Create
[**disableCustomer**](CustomersApi.md#disablecustomer) | **POST** /customer/{customerId}/disable | Disable Customer
[**enableCustomer**](CustomersApi.md#enablecustomer) | **POST** /customer/{customerId}/enable | Enable Customer
[**fetchCustomerById**](CustomersApi.md#fetchcustomerbyid) | **GET** /customer/{customerId} | Detail
[**getForCustomer**](CustomersApi.md#getforcustomer) | **GET** /customer/{customerId}/subscription | List Customer Subscriptions
[**listCustomerInvoices**](CustomersApi.md#listcustomerinvoices) | **GET** /customer/{customerId}/invoices | List Customer Invoices
[**listCustomerPayment**](CustomersApi.md#listcustomerpayment) | **GET** /customer/{customerId}/payment | List Customer Payments
[**listCustomerRefund**](CustomersApi.md#listcustomerrefund) | **GET** /customer/{customerId}/refund | List Customer Refunds
[**listCustomers**](CustomersApi.md#listcustomers) | **GET** /customer | List
[**listPaymentDetails**](CustomersApi.md#listpaymentdetails) | **GET** /customer/{customerId}/payment-methods | List Customer&#x27;s Payment Details
[**removeSeatsSubscriptions**](CustomersApi.md#removeseatssubscriptions) | **POST** /subscription/{subscriptionId}/seats/remove | Remove Seats
[**showCustomerLimitsById**](CustomersApi.md#showcustomerlimitsbyid) | **GET** /customer/{customerId}/limits | Fetch Customer Limits
[**updateCustomer**](CustomersApi.md#updatecustomer) | **PUT** /customer/{customerId} | Update

# **addSeatsSubscriptions**
> \BillaBear\Model\InlineResponse20012 addSeatsSubscriptions($body, $subscription_id)

Add Seats

Adds seats to a per seat subscription<br><br><strong>Since 1.1.4</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BillaBear\Model\SeatsAddBody(); // \BillaBear\Model\SeatsAddBody | 
$subscription_id = "subscription_id_example"; // string | The id of the subscription to retrieve

try {
    $result = $apiInstance->addSeatsSubscriptions($body, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->addSeatsSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillaBear\Model\SeatsAddBody**](../Model/SeatsAddBody.md)|  |
 **subscription_id** | **string**| The id of the subscription to retrieve |

### Return type

[**\BillaBear\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applyVoucherToCustomer**
> string applyVoucherToCustomer($body, $customer_id)

Apply voucher

Apply Voucher to Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BillaBear\Model\CustomerIdVoucherBody(); // \BillaBear\Model\CustomerIdVoucherBody | 
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->applyVoucherToCustomer($body, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->applyVoucherToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillaBear\Model\CustomerIdVoucherBody**](../Model/CustomerIdVoucherBody.md)|  |
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomer**
> \BillaBear\Model\Customer createCustomer($body)

Create

Create a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BillaBear\Model\Customer(); // \BillaBear\Model\Customer | 

try {
    $result = $apiInstance->createCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillaBear\Model\Customer**](../Model/Customer.md)|  |

### Return type

[**\BillaBear\Model\Customer**](../Model/Customer.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableCustomer**
> string disableCustomer($customer_id)

Disable Customer

Disable customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->disableCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->disableCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableCustomer**
> string enableCustomer($customer_id)

Enable Customer

Enable a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->enableCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->enableCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchCustomerById**
> \BillaBear\Model\Customer fetchCustomerById($customer_id)

Detail

Info for a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->fetchCustomerById($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->fetchCustomerById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\Customer**](../Model/Customer.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getForCustomer**
> \BillaBear\Model\InlineResponse2006 getForCustomer($customer_id)

List Customer Subscriptions

List all customer subscriptions<br><br><strong>Since 1.1</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->getForCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getForCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomerInvoices**
> \BillaBear\Model\InlineResponse2004 listCustomerInvoices($customer_id)

List Customer Invoices

List Customer Invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->listCustomerInvoices($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomerInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomerPayment**
> \BillaBear\Model\InlineResponse2003 listCustomerPayment($customer_id, $limit, $last_key, $name)

List Customer Payments

List Customer Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
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
    $result = $apiInstance->listCustomerPayment($customer_id, $limit, $last_key, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomerPayment: ', $e->getMessage(), PHP_EOL;
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

[**\BillaBear\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new BillaBear\Api\CustomersApi(
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
    echo 'Exception when calling CustomersApi->listCustomerRefund: ', $e->getMessage(), PHP_EOL;
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

# **listCustomers**
> \BillaBear\Model\InlineResponse200 listCustomers($limit, $last_key, $email, $country, $reference, $external_reference)

List

List all customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | How many items to return at one time (max 100)
$last_key = "last_key_example"; // string | The key to be used in pagination to say what the last key of the previous page was
$email = "email_example"; // string | The email to search for
$country = "country_example"; // string | The country code to search for
$reference = "reference_example"; // string | The reference to search for
$external_reference = "external_reference_example"; // string | The external reference to search for

try {
    $result = $apiInstance->listCustomers($limit, $last_key, $email, $country, $reference, $external_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many items to return at one time (max 100) | [optional]
 **last_key** | **string**| The key to be used in pagination to say what the last key of the previous page was | [optional]
 **email** | **string**| The email to search for | [optional]
 **country** | **string**| The country code to search for | [optional]
 **reference** | **string**| The reference to search for | [optional]
 **external_reference** | **string**| The external reference to search for | [optional]

### Return type

[**\BillaBear\Model\InlineResponse200**](../Model/InlineResponse200.md)

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

$apiInstance = new BillaBear\Api\CustomersApi(
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
    echo 'Exception when calling CustomersApi->listPaymentDetails: ', $e->getMessage(), PHP_EOL;
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

# **removeSeatsSubscriptions**
> \BillaBear\Model\InlineResponse20012 removeSeatsSubscriptions($body, $subscription_id)

Remove Seats

Remove seats to a per seat subscription<br><br><strong>Since 1.1.4</strong>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BillaBear\Model\SeatsRemoveBody(); // \BillaBear\Model\SeatsRemoveBody | 
$subscription_id = "subscription_id_example"; // string | The id of the subscription to retrieve

try {
    $result = $apiInstance->removeSeatsSubscriptions($body, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->removeSeatsSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillaBear\Model\SeatsRemoveBody**](../Model/SeatsRemoveBody.md)|  |
 **subscription_id** | **string**| The id of the subscription to retrieve |

### Return type

[**\BillaBear\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **showCustomerLimitsById**
> \BillaBear\Model\InlineResponse2001 showCustomerLimitsById($customer_id)

Fetch Customer Limits

Limits for a specific customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->showCustomerLimitsById($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->showCustomerLimitsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \BillaBear\Model\Customer updateCustomer($body, $customer_id)

Update

Update a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = BillaBear\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BillaBear\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new BillaBear\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BillaBear\Model\Customer(); // \BillaBear\Model\Customer | 
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->updateCustomer($body, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillaBear\Model\Customer**](../Model/Customer.md)|  |
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\Customer**](../Model/Customer.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

