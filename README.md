<p align="center">
  <img width="450px" src="https://ha-static-data.s3.eu-central-1.amazonaws.com/github-readme-logo.png">
</p>

<p align="center">
  <h1 style="text-align: center">BillaBear - PHP SDK</h1>
</p>

This is the offical PHP SDK for [BillaBear - The Subscription Management and Billing System](https://billabear.com).

## Resources

* [Main BillaBear Repository](https://github.com/billabear/billabear)
* [Docs](https://docs.billabear.com/?utm_source=php_sdk)

## Getting Started

```
composer require billabear/php-sdk symfony/http-client nyholm/psr7
```

## Examples

### Create Client

```php
<?php

use BillaBear\PhpSdk\Client;

$apiKey = "example-key"; // Fetch one from BillaBear's application.
$apiUrl = "http://billabear.example.org/"; // The URL the API is available at.

$client = Client::createClient($apiKey, $apiUrl);
```

### Create Customer

For more info https://swagger.billabear.com/#tag/Customers/operation/v1CreateCustomer

```php
<?php
// ...
$customerInput = [
    'email' => 'customer@example.org', // Required
    'billing_type' => 'card', // Optional - card or invoice are allowed
    'reference' => 'a reference', // Optional
    'external_reference' => null, // Optional - Stripe Reference
    'locale' => 'en', // Optional - defaults to en if null
    'brand' => 'default', // Optional - defaults to default if null,
    'address' => [
        'company_name' => null, // Optional
        'street_line_one' => null, // Optional
        'street_line_two' = null // Optional
        'city' => null, // Optional
        'region' => null, // Optional
        'country' => null, // Optional - country code
        'postcode' => null, // 
    ]
];

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
try {
    $customerData = $client->createCustomer($customerInput);
} catch (\BillaBear\PhpSdk\Exception\MissingFieldsException $missingFieldsException) {
    // Local validation error
} catch (\BillaBear\PhpSdk\Exception\ServerValidationException $serverValidationException) {
    // Server validation error
} catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Fetch Customer Info

For more info https://swagger.billabear.com/#tag/Customers/operation/v1ShowCustomerById

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';

try {
    $customerData = $client->fetchCustomer($customerId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Update Customer Info

More info https://swagger.billabear.com/#tag/Customers/operation/v1UpdateCustomer

```php
<?php
// ...
$customerInput = [
    'email' => 'customer@example.org', // Required
    'billing_type' => 'card', // Optional - card or invoice are allowed
    'reference' => 'a reference', // Optional
    'external_reference' => null, // Optional - Stripe Reference
    'locale' => 'en', // Optional - defaults to en if null
    'brand' => 'default', // Optional - defaults to default if null,
    'address' => [
        'company_name' => null, // Optional
        'street_line_one' => null, // Optional
        'street_line_two' = null // Optional
        'city' => null, // Optional
        'region' => null, // Optional
        'country' => null, // Optional - country code
        'postcode' => null, // 
    ]
];
$customerId = 'id-here';
$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
try {
    $customerData = $client->updateCustomer($customerId, $customerInput);
} catch (\BillaBear\PhpSdk\Exception\MissingFieldsException $missingFieldsException) {
    // Local validation error
} catch (\BillaBear\PhpSdk\Exception\ServerValidationException $serverValidationException) {
    // Server validation error
} catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Disable Customer

For more info https://swagger.billabear.com/#tag/Customers/operation/v1DisableCustomer

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';

try {
    $customerData = $client->disableCustomer($customerId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Enable Customer

for more info https://swagger.billabear.com/#tag/Customers/operation/v1EnableCustomer

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';

try {
    $customerData = $client->enableCustomer($customerId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Fetch Customer Limits

For more info https://swagger.billabear.com/#tag/Customers/operation/v1ShowCustomerLimitsById

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';

try {
    $customerLimits = $client->fetchCustomerLimits($customerId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Fetch Customer Payments

For more info https://swagger.billabear.com/#tag/Customers/operation/v1ListCustomerPayment

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';
$limit = 25;
$lastKey = null; // Use last key from previous response

try {
    $customerPayments = $client->fetchCustomerPayments($customerId, $limit, $lastKey);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```
### Fetch Customer Payment Details

For more info https://swagger.billabear.com/#tag/PaymentDetails/operation/v1ListPaymentDetails

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';

try {
    $customerLimits = $client->fetchPaymentDetails($customerId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```
### Fetch Customer Refunds

For more info https://swagger.billabear.com/#tag/Customers/operation/v1ListCustomerRefund

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';
$limit = 25;
$lastKey = null; // Use last key from previous response

try {
    $customerRefunds = $client->fetchCustomerRefunds($customerId, $limit, $lastKey);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Fetch Refund Info

For more info https://swagger.billabear.com/#tag/Refunds/operation/v1ShowRefundById

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$refundId = 'id-here';

try {
    $refundData = $client->fetchRefund($refundId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Get Stripe.JS token

For more info https://swagger.billabear.com/#tag/PaymentDetails/operation/v1StartFrontendPaymentDetails

For more info on Stripe.JS - https://stripe.com/docs/js

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';

try {
    $customerData = $client->fetchFrontendToken($customerId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```
### Process token from Stripe.JS

For more info https://swagger.billabear.com/#tag/PaymentDetails/operation/v1CompleteFrontendPaymentDetails

For more info on Stripe.JS - https://stripe.com/docs/js

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';
$token = "What we get back from the Stripe.JS response";

try {
    $paymentDetailsData = $client->completeFrontendToken($customerId, $token);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\MissingFieldsException $missingFieldsException) {
    // Local validation error
} catch (\BillaBear\PhpSdk\Exception\ServerValidationException $serverValidationException) {
    // Server validation error
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Delete payment details

For more info https://swagger.billabear.com/#tag/PaymentDetails/operation/v1DeletePaymentDetails

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';
$paymentDetailsId = "payment-details-id";

try {
    $client->deletePaymentDetails($customerId, $paymentDetailsId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```
### Make payment details default

For more info https://swagger.billabear.com/#tag/PaymentDetails/operation/v1makeDefaultPaymentDetails

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';
$paymentDetailsId = "payment-details-id";

try {
    $client->makePaymentDetailsDefault($customerId, $paymentDetailsId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Start Subscription

For more info https://swagger.billabear.com/#tag/Subscriptions/operation/v1CustomerStartSubscription

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';
$subscriptionPlanId = "subscription-plan-id";
$priceId = 'price-id';

try {
    $client->startSubscriptionWithIds($customerId, $subscriptionPlanId, $priceId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```
### Start Subscription with codes

For more info https://swagger.billabear.com/#tag/Subscriptions/operation/v1CustomerStartSubscription

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$customerId = 'id-here';
$subscriptionPlanCodeName = "subscription-plan";
$currency = "USD";
$schedule = "year";

try {
    $client->startSubscriptionWithCurrencyAndSchedule($customerId, $subscriptionPlanId, $currency, $schedule);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Cancel Subscription

For more info https://swagger.billabear.com/#tag/Subscriptions/operation/v1CancelSubscription

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$subscriptionId = 'id-here';
$when = 'end-of-run';
$refundType = 'none';

try {
    $client->cancelSubscription($subscriptionId, $when, $refundType);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Change Subscription

For more info https://swagger.billabear.com/#tag/Subscriptions/operation/v1CustomerChangeSubscriptionPlan

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$subscriptionId = 'id-here';
$when = 'end-of-run';
$subscriptionPlanId = "subscription-plan-id";
$priceId = 'price-id';

try {
    $client->chaangeSubscription($subscriptionId, $subscriptionPlanId, $priceId, $when);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```

### Fetch Subscription Information

For more info https://swagger.billabear.com/#tag/Subscriptions/operation/v1ShowSubscriptionById

```php
<?php
// ...

$client = \BillaBear\PhpSdk\Client::createClient($apiKey, $apiUrl);
$subscriptionId = 'id-here';

try {
    $subscriptionData =BillaBear\PhpSdk\ $client->fetchSubscription($subscriptionId);
} catch (\BillaBear\PhpSdk\Exception\NotFoundException $exception) {
    // No such customer
}  catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
}
```