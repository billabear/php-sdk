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

        return [];
    }
}
