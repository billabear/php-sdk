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

namespace BillaBear\PhpSdk;

use BillaBear\PhpSdk\Exception\MissingFieldsException;
use BillaBear\PhpSdk\Exception\NotFoundException;
use BillaBear\PhpSdk\Exception\ServerValidationException;
use BillaBear\PhpSdk\Exception\UnexpectedResponseException;

final class Client implements ClientInterface
{
    public function __construct(private RequestSenderInterface $requestSender)
    {
    }

    public static function createClient(string $apiKey, string $apiUrl): self
    {
        $requestSender = new RequestSender($apiKey, $apiUrl);

        return new self($requestSender);
    }

    public function createCustomer(array $input): array
    {
        $missingFields = [];
        if (!isset($input['email'])) {
            $missingFields[] = 'email';
        }

        if (!empty($missingFields)) {
            throw new MissingFieldsException($missingFields);
        }

        $response = $this->requestSender->send('POST', '/v1/customer', $input);

        if (201 === $response->getStatusCode()) {
            return (array) $response->getContent();
        }

        if (400 === $response->getStatusCode()) {
            throw new ServerValidationException($response->getContent()['errors']);
        }

        throw new UnexpectedResponseException($response);
    }

    public function fetchCustomer(string $id): array
    {
        $response = $this->requestSender->send('GET', sprintf('/v1/customer/%s', $id));

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Can't find customer for id '%d'", $id));
        }

        if (200 === $response->getStatusCode()) {
            return $response->getContent();
        }

        throw new UnexpectedResponseException($response);
    }

    public function updateCustomer(string $id, array $input): array
    {
        $missingFields = [];
        if (!isset($input['email'])) {
            $missingFields[] = 'email';
        }

        if (!empty($missingFields)) {
            throw new MissingFieldsException($missingFields);
        }

        $response = $this->requestSender->send('PUT', sprintf('/v1/customer/%s', $id), $input);

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Didn't find customer for '%d'", $id));
        }

        if (201 === $response->getStatusCode()) {
            return (array) $response->getContent();
        }

        if (400 === $response->getStatusCode()) {
            throw new ServerValidationException($response->getContent()['errors']);
        }

        throw new UnexpectedResponseException($response);
    }

    public function disableCustomer(string $id): void
    {
        $response = $this->requestSender->send('POST', sprintf('/v1/customer/%s/disable', $id));

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Didn't find customer for '%d'", $id));
        }

        if (202 === $response->getStatusCode()) {
            return;
        }

        throw new UnexpectedResponseException($response);
    }

    public function enableCustomer(string $id): void
    {
        $response = $this->requestSender->send('POST', sprintf('/v1/customer/%s/enable', $id));

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Didn't find customer for '%d'", $id));
        }

        if (202 === $response->getStatusCode()) {
            return;
        }

        throw new UnexpectedResponseException($response);
    }

    public function fetchCustomerLimits(string $id): array
    {
        $response = $this->requestSender->send('GET', sprintf('/v1/customer/%s/limits', $id));

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Can't find customer for id '%d'", $id));
        }

        if (200 === $response->getStatusCode()) {
            return $response->getContent();
        }

        throw new UnexpectedResponseException($response);
    }

    public function fetchCustomerPayments(string $id, int $limit = 25, string $lastKey = null): array
    {
        if ($lastKey) {
            $url = sprintf('/v1/customer/%s/payments?limit=%d&last_key=%s', $id, $limit, $lastKey);
        } else {
            $url = sprintf('/v1/customer/%s/payments?limit=%d', $id, $limit);
        }

        $response = $this->requestSender->send('GET', $url);

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Can't find customer for id '%d'", $id));
        }

        if (200 === $response->getStatusCode()) {
            return $response->getContent();
        }

        throw new UnexpectedResponseException($response);
    }

    public function fetchCustomerRefunds(string $id, int $limit = 25, string $lastKey = null): array
    {
        if ($lastKey) {
            $url = sprintf('/v1/customer/%s/refunds?limit=%d&last_key=%s', $id, $limit, $lastKey);
        } else {
            $url = sprintf('/v1/customer/%s/refunds?limit=%d', $id, $limit);
        }

        $response = $this->requestSender->send('GET', $url);

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Can't find customer for id '%d'", $id));
        }

        if (200 === $response->getStatusCode()) {
            return $response->getContent();
        }

        throw new UnexpectedResponseException($response);
    }

    public function fetchRefund(string $id): array
    {
        $response = $this->requestSender->send('GET', sprintf('/v1/refund/%s', $id));

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Can't find refund for id '%d'", $id));
        }

        if (200 === $response->getStatusCode()) {
            return $response->getContent();
        }

        throw new UnexpectedResponseException($response);
    }

    public function fetchFrontendToken(string $id): string
    {
        $response = $this->requestSender->send('GET', sprintf('/v1/customer/%s/payment-methods/frontend-payment-token', $id));

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Can't find refund for id '%d'", $id));
        }

        if (200 === $response->getStatusCode()) {
            return $response->getContent()['token'];
        }

        throw new UnexpectedResponseException($response);
    }

    public function completeFrontendToken(string $id, string $token): array
    {
        $missingFields = [];
        if (empty($token)) {
            $missingFields[] = 'token';
        }

        if (!empty($missingFields)) {
            throw new MissingFieldsException($missingFields);
        }

        $response = $this->requestSender->send('POST', sprintf('/v1/customer/%s/payment-methods/frontend-payment-token', $id), ['token' => $token]);

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Didn't find customer for '%d'", $id));
        }

        if (201 === $response->getStatusCode()) {
            return (array) $response->getContent();
        }

        if (400 === $response->getStatusCode()) {
            throw new ServerValidationException($response->getContent()['errors']);
        }

        throw new UnexpectedResponseException($response);
    }

    public function deletePaymentDetails(string $customerId, string $paymentDetailsId): void
    {
        $response = $this->requestSender->send('DELETE', sprintf('/v1/customer/%s/payment-methods/%s', $customerId, $paymentDetailsId));

        if (404 === $response->getStatusCode()) {
            throw new NotFoundException(sprintf("Didn't find customer for '%d'", $customerId));
        }

        if (202 === $response->getStatusCode()) {
            return;
        }

        throw new UnexpectedResponseException($response);
    }
}
