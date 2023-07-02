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
composer require billabear/php-sdk
```

### Create Client

```php
<?php

use BillaBear\PhpSdk\Client;

$apiKey = "example-key"; // Fetch one from BillaBear's application.
$apiUrl = "http://billabear.example.org/api"; // The URL the API is available at.

$client = Client::createClient($apiKey, $apiUrl);
```