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

namespace Tests\BillaBear\PhpSdk\ClientSubscription;

use BillaBear\PhpSdk\Client;
use BillaBear\PhpSdk\Exception\NotFoundException;
use BillaBear\PhpSdk\Exception\UnexpectedResponseException;
use BillaBear\PhpSdk\RequestSenderInterface;
use BillaBear\PhpSdk\Response;
use PHPUnit\Framework\TestCase;

class ClientSubscriptionCancelTest extends TestCase
{
    public function testStartSubscriptionNotFound()
    {
        $this->expectException(NotFoundException::class);
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = ['id' => 'subscription-id'];
        $response = new Response(404, $expected);
        $requestSender->expects($this->once())->method('send')->with('POST', '/v1/subscription/subscription-id-here/cancel', ['when' => 'end-of-run', 'refund_type' => 'none'])->willReturn($response);

        $client = new Client($requestSender);
        $client->cancelSubscription('subscription-id-here');
    }

    public function testStartSubscriptionUnexpected()
    {
        $this->expectException(UnexpectedResponseException::class);
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = ['id' => 'subscription-id'];
        $response = new Response(500, $expected);
        $requestSender->expects($this->once())->method('send')->with('POST', '/v1/subscription/subscription-id-here/cancel', ['when' => 'end-of-run', 'refund_type' => 'none'])->willReturn($response);

        $client = new Client($requestSender);
        $client->cancelSubscription('subscription-id-here');
    }

    public function testStartSubscriptionCreated()
    {
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = ['id' => 'subscription-id'];
        $response = new Response(202, $expected);
        $requestSender->expects($this->once())->method('send')->with('POST', '/v1/subscription/subscription-id-here/cancel', ['when' => 'end-of-run', 'refund_type' => 'none'])->willReturn($response);

        $client = new Client($requestSender);
        $client->cancelSubscription('subscription-id-here');
    }

    public function testStartSubscriptionCreatedWithWhen()
    {
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = ['id' => 'subscription-id'];
        $response = new Response(202, $expected);
        $requestSender->expects($this->once())->method('send')->with('POST', '/v1/subscription/subscription-id-here/cancel', ['when' => 'instantly', 'refund_type' => 'none'])->willReturn($response);

        $client = new Client($requestSender);
        $client->cancelSubscription('subscription-id-here', 'instantly');
    }

    public function testStartSubscriptionCreatedWithWhenAndRefundType()
    {
        $requestSender = $this->createMock(RequestSenderInterface::class);
        $expected = ['id' => 'subscription-id'];
        $response = new Response(202, $expected);
        $requestSender->expects($this->once())->method('send')->with('POST', '/v1/subscription/subscription-id-here/cancel', ['when' => 'instantly', 'refund_type' => 'full'])->willReturn($response);

        $client = new Client($requestSender);
        $client->cancelSubscription('subscription-id-here', 'instantly', 'full');
    }
}
