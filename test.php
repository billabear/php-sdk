<?php

/*
 * The PHP SDK for BillaBear.
 * Copyright (C) 2023  Humbly Arrogant Software Limited
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 */

include 'vendor/autoload.php';

$customerInput = [
    'email' => 'test@example.org', // Required
    'billing_type' => 'card', // Optional - card or invoice are allowed
    'address' => ['country' => 'US'],
];
$client = \BillaBear\PhpSdk\Client::createClient('425e4ec2b3eecb5291ed606d209b914061a9f76a3af14273', 'https://vastoutreach-dev.billabearhosted.com/api');
try {
    $customerData = $client->createCustomer($customerInput);
    $customerId = $customerData['id'];
} catch (\BillaBear\PhpSdk\Exception\MissingFieldsException $missingFieldsException) {
    // Local validation error
} catch (\BillaBear\PhpSdk\Exception\ServerValidationException $serverValidationException) {
    // Server validation error
    echo 'error';
} catch (\BillaBear\PhpSdk\Exception\UnauthorizedException $unauthorizedException) {
    // Authorization error
    echo 'auth error';
} catch (\BillaBear\PhpSdk\Exception\UnexpectedResponseException $unexpectedResponseException) {
    // Unexpected response error
    echo 'unexpected response';
    var_dump($unexpectedResponseException);
}
