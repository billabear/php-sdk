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

use BillaBear\PhpSdk\RequestSender;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

class RequestSenderTest extends TestCase
{
    public function testSendRequest()
    {
        $url = 'https://localhost';
        $apiKey = 'api-key';
        $method = 'POST';
        $requestUrl = '/api/v1/info';

        $client = $this->createMock(ClientInterface::class);
        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $streamFactory = $this->createMock(StreamFactoryInterface::class);
        $request = $this->createMock(RequestInterface::class);
        $response = $this->createMock(ResponseInterface::class);
        $stream = $this->createMock(StreamInterface::class);

        $requestFactory->method('createRequest')->with($method, $url.$requestUrl)->willReturn($request);
        $request->method('withHeader')->with('X-API-KEY', $apiKey)->willReturnSelf();
        $client->expects($this->once())->method('sendRequest')->with($request)->willReturn($response);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn($stream);

        $requestSender = new RequestSender($apiKey, $url, $client, $requestFactory, $streamFactory);
        $response = $requestSender->send($method, $requestUrl);

        $this->assertNull($response);
    }
}
