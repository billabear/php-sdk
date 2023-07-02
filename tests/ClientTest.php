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

namespace Tests\BillaBear\PhpSdk;

use BillaBear\PhpSdk\Client;
use BillaBear\PhpSdk\Exception\MissingFieldsException;
use BillaBear\PhpSdk\RequestSenderInterface;
use BillaBear\PhpSdk\Response;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testCreatesInstance()
    {
        $client = Client::createClient('pets', 'https://example.org');
        $this->assertInstanceOf(Client::class, $client);
    }

    public function testCreateCustomerFailsNoEmail()
    {
        $this->expectException(MissingFieldsException::class);
        $requestSender = $this->createMock(RequestSenderInterface::class);

        $client = new Client($requestSender);
        $client->createCustomer([]);
    }

    public function testCreateCustomerSendsRequest()
    {
        $payload = ['email' => 'iain.cambridge@example.org'];
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = ['id' => 'id-here'];
        $response = new Response(201, $expected);

        $requestSender->method('send')->with('POST', '/v1/customer', $payload)->willReturn($response);

        $client = new Client($requestSender);
        $actual = $client->createCustomer($payload);
        $this->assertEquals($expected, $actual);
    }
}
