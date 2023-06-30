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

use BillaBear\PhpSdk\Exception\InvalidResponseException;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface as PsrClientInterface;
use Psr\Http\Message\RequestFactoryInterface as PsrRequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

class RequestSender implements RequestSenderInterface
{
    private PsrClientInterface $client;
    private PsrRequestFactoryInterface $requestFactory;
    private StreamFactoryInterface $streamFactory;

    public function __construct(private string $apiKey, private string $baseUrl, PsrClientInterface $client = null, PsrRequestFactoryInterface $requestFactory = null, StreamFactoryInterface $streamFactory = null)
    {
        $this->client = $client ?? Psr18ClientDiscovery::find();
        $this->requestFactory = $requestFactory ?? Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = $streamFactory ?? Psr17FactoryDiscovery::findStreamFactory();
    }

    public function send(string $method, string $url, array $payload = null): ?array
    {
        $fullUrl = sprintf('%s/%s', rtrim($this->baseUrl, '/'), ltrim($url, '/'));

        $request = $this->requestFactory->createRequest($method, $fullUrl);
        $request = $request->withHeader('X-API-KEY', $this->apiKey);
        if ($payload) {
            $request->withBody($this->streamFactory->createStream(json_encode($payload)));
        }

        $response = $this->client->sendRequest($request);

        $jsonData = json_decode($response->getBody()->getContents(), true);

        if (200 !== $response->getStatusCode()) {
            throw new InvalidResponseException(sprintf('Got a %d response code', $response->getStatusCode()));
        }

        return $jsonData;
    }
}
