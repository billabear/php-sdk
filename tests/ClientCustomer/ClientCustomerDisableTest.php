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

namespace Tests\BillaBear\PhpSdk\ClientCustomer;

use BillaBear\PhpSdk\Client;
use BillaBear\PhpSdk\Exception\NotFoundException;
use BillaBear\PhpSdk\Exception\UnexpectedResponseException;
use BillaBear\PhpSdk\RequestSenderInterface;
use BillaBear\PhpSdk\Response;
use PHPUnit\Framework\TestCase;

class ClientCustomerDisableTest extends TestCase
{
    public function testDisableCustomerNotFound()
    {
        $this->expectException(NotFoundException::class);

        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = [];
        $response = new Response(404, $expected);

        $requestSender->expects($this->once())->method('send')->with('POST', '/v1/customer/id-here/disable')->willReturn($response);

        $client = new Client($requestSender);
        $client->disableCustomer('id-here');
    }

    public function testDisableCustomerUnexpectedResponse()
    {
        $this->expectException(UnexpectedResponseException::class);

        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = [];
        $response = new Response(500, $expected);

        $requestSender->expects($this->once())->method('send')->with('POST', '/v1/customer/id-here/disable')->willReturn($response);

        $client = new Client($requestSender);
        $client->disableCustomer('id-here');
    }

    public function testDisableCustomerValidResponse()
    {
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = [];
        $response = new Response(202, $expected);

        $requestSender->expects($this->once())->method('send')->with('POST', '/v1/customer/id-here/disable')->willReturn($response);

        $client = new Client($requestSender);
        $client->disableCustomer('id-here');
    }
}
