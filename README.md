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
$apiUrl = "http://billabear.example.org/api"; // The URL the API is available at.

$client = Client::createClient($apiKey, $apiUrl);
```

### Create Customer

For more info https://swagger.billabear.com/#tag/Customers/operation/createCustomer

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

For more info https://swagger.billabear.com/#tag/Customers/operation/showCustomerById

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

More info https://swagger.billabear.com/#tag/Customers/operation/UpdateCustomer

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