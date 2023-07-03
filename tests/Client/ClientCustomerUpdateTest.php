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

namespace Tests\BillaBear\PhpSdk\Client;

use BillaBear\PhpSdk\Client;
use BillaBear\PhpSdk\Exception\MissingFieldsException;
use BillaBear\PhpSdk\Exception\ServerValidationException;
use BillaBear\PhpSdk\Exception\UnexpectedResponseException;
use BillaBear\PhpSdk\RequestSenderInterface;
use BillaBear\PhpSdk\Response;
use PHPUnit\Framework\TestCase;

class ClientCustomerUpdateTest extends TestCase
{
    public function testCreateCustomerFailsNoEmail()
    {
        $this->expectException(MissingFieldsException::class);
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $id = 'id-here';

        $client = new Client($requestSender);
        $client->createCustomer([]);
    }

    public function testCreateCustomerSendsRequest()
    {
        $payload = ['email' => 'iain.cambridge@example.org'];
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = ['id' => 'id-here'];
        $response = new Response(201, $expected);
        $id = 'id-here';

        $requestSender->method('send')->with('PUT', '/v1/customer/'.$id, $payload)->willReturn($response);

        $client = new Client($requestSender);
        $actual = $client->updateCustomer($id, $payload);
        $this->assertEquals($expected, $actual);
    }

    public function testCreateCustomerSendsRequestFailsValidation()
    {
        $this->expectException(ServerValidationException::class);

        $payload = ['email' => 'iain.cambridge@example'];
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = ['errors' => ['email' => 'not valid']];
        $response = new Response(400, $expected);
        $id = 'id-here';

        $requestSender->method('send')->with('PUT', '/v1/customer/'.$id, $payload)->willReturn($response);

        $client = new Client($requestSender);
        $client->updateCustomer($id, $payload);
    }

    public function testCreateCustomerSendsRequestUnexpectedResponse()
    {
        $this->expectException(UnexpectedResponseException::class);
        $payload = ['email' => 'iain.cambridge@example'];
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = [];
        $response = new Response(404, $expected);
        $id = 'id-here';

        $requestSender->method('send')->with('PUT', '/v1/customer/'.$id, $payload)->willReturn($response);

        $client = new Client($requestSender);
        $client->updateCustomer($id, $payload);
    }
}
