# BillaBear\CustomersApi

All URIs are relative to *https://{customerId}.billabear.cloud/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSeatsSubscriptions**](CustomersApi.md#addseatssubscriptions) | **POST** /subscription/{subscriptionId}/seats/add | Add Seats
[**applyVoucherToCustomer**](CustomersApi.md#applyvouchertocustomer) | **POST** /customer/{customerId}/voucher | Apply voucher
[**createCustomer**](CustomersApi.md#createcustomer) | **POST** /customer | Create
[**createCustomerUsageLimit**](CustomersApi.md#createcustomerusagelimit) | **POST** /customer/{customerId}/uasge-limit | Create Usage Limit
[**customerCustomerIdUasgeLimitLimitIdDelete**](CustomersApi.md#customercustomeriduasgelimitlimitiddelete) | **DELETE** /customer/{customerId}/uasge-limit/{limitId} | Delete Usage Limit
[**disableCustomer**](CustomersApi.md#disablecustomer) | **POST** /customer/{customerId}/disable | Disable Customer
[**enableCustomer**](CustomersApi.md#enablecustomer) | **POST** /customer/{customerId}/enable | Enable Customer
[**getActiveForCustomer**](CustomersApi.md#getactiveforcustomer) | **GET** /customer/{customerId}/subscription/active | List Customer Active Subscriptions
[**getAllCustomers**](CustomersApi.md#getallcustomers) | **GET** /customer | List
[**getCustomerById**](CustomersApi.md#getcustomerbyid) | **GET** /customer/{customerId} | Detail
[**getCustomerCosts**](CustomersApi.md#getcustomercosts) | **GET** /customer/{customerId}/costs | Usage Cost Estimate
[**getCustomerLimitsById**](CustomersApi.md#getcustomerlimitsbyid) | **GET** /customer/{customerId}/limits | Fetch Customer Limits
[**getCustomerUsageLimitsById**](CustomersApi.md#getcustomerusagelimitsbyid) | **GET** /customer/{customerId}/uasge-limit | Fetch Customer Usage Limits
[**getForCustomer**](CustomersApi.md#getforcustomer) | **GET** /customer/{customerId}/subscription | List Customer Subscriptions
[**getInvoicesForCustomer**](CustomersApi.md#getinvoicesforcustomer) | **GET** /customer/{customerId}/invoices | List Customer Invoices
[**getPaymentsForCustomer**](CustomersApi.md#getpaymentsforcustomer) | **GET** /customer/{customerId}/payment | List Customer Payments
[**getRefundsForCustomer**](CustomersApi.md#getrefundsforcustomer) | **GET** /customer/{customerId}/refund | List Customer Refunds
[**listPaymentDetails**](CustomersApi.md#listpaymentdetails) | **GET** /customer/{customerId}/payment-methods | List Customer&#x27;s Payment Details
[**removeSeatsSubscriptions**](CustomersApi.md#removeseatssubscriptions) | **POST** /subscription/{subscriptionId}/seats/remove | Remove Seats
[**updateCustomer**](CustomersApi.md#updatecustomer) | **PUT** /customer/{customerId} | Update

# **addSeatsSubscriptions**
> \BillaBear\Model\InlineResponse20013 addSeatsSubscriptions($body, $subscription_id)

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

[**\BillaBear\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applyVoucherToCustomer**
> applyVoucherToCustomer($body, $customer_id)

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
$body = new \BillaBear\Model\VoucherCode(); // \BillaBear\Model\VoucherCode | 
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $apiInstance->applyVoucherToCustomer($body, $customer_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->applyVoucherToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillaBear\Model\VoucherCode**](../Model/VoucherCode.md)|  |
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

void (empty response body)

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

# **createCustomerUsageLimit**
> \BillaBear\Model\UsageLimit createCustomerUsageLimit($body, $customer_id)

Create Usage Limit

Create Usage Limit for the custoemr

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
$body = new \BillaBear\Model\CustomerIdUasgelimitBody(); // \BillaBear\Model\CustomerIdUasgelimitBody | 
$customer_id = "customer_id_example"; // string | The id of the customer to retrieve

try {
    $result = $apiInstance->createCustomerUsageLimit($body, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomerUsageLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BillaBear\Model\CustomerIdUasgelimitBody**](../Model/CustomerIdUasgelimitBody.md)|  |
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\UsageLimit**](../Model/UsageLimit.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerIdUasgeLimitLimitIdDelete**
> customerCustomerIdUasgeLimitLimitIdDelete($customer_id, $usage_limit_id)

Delete Usage Limit

Delete Usage Limit for the custoemr

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
$usage_limit_id = "usage_limit_id_example"; // string | The id of the usage limit

try {
    $apiInstance->customerCustomerIdUasgeLimitLimitIdDelete($customer_id, $usage_limit_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerCustomerIdUasgeLimitLimitIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |
 **usage_limit_id** | **string**| The id of the usage limit |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableCustomer**
> disableCustomer($customer_id)

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
    $apiInstance->disableCustomer($customer_id);
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

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableCustomer**
> enableCustomer($customer_id)

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
    $apiInstance->enableCustomer($customer_id);
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

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveForCustomer**
> \BillaBear\Model\InlineResponse2008 getActiveForCustomer($customer_id)

List Customer Active Subscriptions

List all Active customer subscriptions

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
    $result = $apiInstance->getActiveForCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getActiveForCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCustomers**
> \BillaBear\Model\InlineResponse200 getAllCustomers($limit, $last_key, $email, $country, $reference, $external_reference, $company_name)

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
$company_name = "company_name_example"; // string | The company name to search for

try {
    $result = $apiInstance->getAllCustomers($limit, $last_key, $email, $country, $reference, $external_reference, $company_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getAllCustomers: ', $e->getMessage(), PHP_EOL;
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
 **company_name** | **string**| The company name to search for | [optional]

### Return type

[**\BillaBear\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerById**
> \BillaBear\Model\Customer getCustomerById($customer_id)

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
    $result = $apiInstance->getCustomerById($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerById: ', $e->getMessage(), PHP_EOL;
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

# **getCustomerCosts**
> \BillaBear\Model\InlineResponse2001 getCustomerCosts($customer_id)

Usage Cost Estimate

The estimated costs from usage based billing for a customer

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
    $result = $apiInstance->getCustomerCosts($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerCosts: ', $e->getMessage(), PHP_EOL;
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

# **getCustomerLimitsById**
> \BillaBear\Model\InlineResponse2002 getCustomerLimitsById($customer_id)

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
    $result = $apiInstance->getCustomerLimitsById($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerLimitsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The id of the customer to retrieve |

### Return type

[**\BillaBear\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerUsageLimitsById**
> \BillaBear\Model\InlineResponse2005 getCustomerUsageLimitsById($customer_id)

Fetch Customer Usage Limits

Usage Limits for a specific customer

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
    $result = $apiInstance->getCustomerUsageLimitsById($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerUsageLimitsById: ', $e->getMessage(), PHP_EOL;
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

# **getForCustomer**
> \BillaBear\Model\InlineResponse2008 getForCustomer($customer_id)

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

[**\BillaBear\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoicesForCustomer**
> \BillaBear\Model\InlineResponse2006 getInvoicesForCustomer($customer_id)

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
    $result = $apiInstance->getInvoicesForCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getInvoicesForCustomer: ', $e->getMessage(), PHP_EOL;
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

# **getPaymentsForCustomer**
> \BillaBear\Model\InlineResponse2004 getPaymentsForCustomer($customer_id, $limit, $last_key, $name)

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
    $result = $apiInstance->getPaymentsForCustomer($customer_id, $limit, $last_key, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getPaymentsForCustomer: ', $e->getMessage(), PHP_EOL;
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

[**\BillaBear\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRefundsForCustomer**
> \BillaBear\Model\InlineResponse2003 getRefundsForCustomer($customer_id, $limit, $last_key, $name)

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
    $result = $apiInstance->getRefundsForCustomer($customer_id, $limit, $last_key, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getRefundsForCustomer: ', $e->getMessage(), PHP_EOL;
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

# **listPaymentDetails**
> \BillaBear\Model\InlineResponse2007 listPaymentDetails($customer_id)

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

[**\BillaBear\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeSeatsSubscriptions**
> \BillaBear\Model\InlineResponse20013 removeSeatsSubscriptions($body, $subscription_id)

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

[**\BillaBear\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
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

