<?php
/**
 * RefundsApi
 * PHP version 5
 *
 * @category Class
 * @package  BillaBear
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BillaBear
 *
 * The REST API provided by BillaBear
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@billabear.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.56
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BillaBear\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BillaBear\ApiException;
use BillaBear\Configuration;
use BillaBear\HeaderSelector;
use BillaBear\ObjectSerializer;

/**
 * RefundsApi Class Doc Comment
 *
 * @category Class
 * @package  BillaBear
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listCustomerRefund
     *
     * List Customer Refunds
     *
     * @param  string $customer_id The id of the customer to retrieve (required)
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \BillaBear\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BillaBear\Model\InlineResponse2002
     */
    public function listCustomerRefund($customer_id, $limit = null, $last_key = null, $name = null)
    {
        list($response) = $this->listCustomerRefundWithHttpInfo($customer_id, $limit, $last_key, $name);
        return $response;
    }

    /**
     * Operation listCustomerRefundWithHttpInfo
     *
     * List Customer Refunds
     *
     * @param  string $customer_id The id of the customer to retrieve (required)
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \BillaBear\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BillaBear\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function listCustomerRefundWithHttpInfo($customer_id, $limit = null, $last_key = null, $name = null)
    {
        $returnType = '\BillaBear\Model\InlineResponse2002';
        $request = $this->listCustomerRefundRequest($customer_id, $limit, $last_key, $name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BillaBear\Model\InlineResponse2002',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BillaBear\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listCustomerRefundAsync
     *
     * List Customer Refunds
     *
     * @param  string $customer_id The id of the customer to retrieve (required)
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listCustomerRefundAsync($customer_id, $limit = null, $last_key = null, $name = null)
    {
        return $this->listCustomerRefundAsyncWithHttpInfo($customer_id, $limit, $last_key, $name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listCustomerRefundAsyncWithHttpInfo
     *
     * List Customer Refunds
     *
     * @param  string $customer_id The id of the customer to retrieve (required)
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listCustomerRefundAsyncWithHttpInfo($customer_id, $limit = null, $last_key = null, $name = null)
    {
        $returnType = '\BillaBear\Model\InlineResponse2002';
        $request = $this->listCustomerRefundRequest($customer_id, $limit, $last_key, $name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listCustomerRefund'
     *
     * @param  string $customer_id The id of the customer to retrieve (required)
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listCustomerRefundRequest($customer_id, $limit = null, $last_key = null, $name = null)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null || (is_array($customer_id) && count($customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_id when calling listCustomerRefund'
            );
        }

        $resourcePath = '/customer/{customerId}/refund';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if ($last_key !== null) {
            $queryParams['last_key'] = ObjectSerializer::toQueryValue($last_key, null);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }

        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                '{' . 'customerId' . '}',
                ObjectSerializer::toPathValue($customer_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listRefund
     *
     * List
     *
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \BillaBear\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BillaBear\Model\InlineResponse2002
     */
    public function listRefund($limit = null, $last_key = null, $name = null)
    {
        list($response) = $this->listRefundWithHttpInfo($limit, $last_key, $name);
        return $response;
    }

    /**
     * Operation listRefundWithHttpInfo
     *
     * List
     *
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \BillaBear\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BillaBear\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function listRefundWithHttpInfo($limit = null, $last_key = null, $name = null)
    {
        $returnType = '\BillaBear\Model\InlineResponse2002';
        $request = $this->listRefundRequest($limit, $last_key, $name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BillaBear\Model\InlineResponse2002',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BillaBear\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listRefundAsync
     *
     * List
     *
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRefundAsync($limit = null, $last_key = null, $name = null)
    {
        return $this->listRefundAsyncWithHttpInfo($limit, $last_key, $name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listRefundAsyncWithHttpInfo
     *
     * List
     *
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRefundAsyncWithHttpInfo($limit = null, $last_key = null, $name = null)
    {
        $returnType = '\BillaBear\Model\InlineResponse2002';
        $request = $this->listRefundRequest($limit, $last_key, $name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listRefund'
     *
     * @param  int $limit How many items to return at one time (max 100) (optional)
     * @param  string $last_key The key to be used in pagination to say what the last key of the previous page was (optional)
     * @param  string $name The name to search for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listRefundRequest($limit = null, $last_key = null, $name = null)
    {

        $resourcePath = '/refund';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if ($last_key !== null) {
            $queryParams['last_key'] = ObjectSerializer::toQueryValue($last_key, null);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation showRefundById
     *
     * Detail
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \BillaBear\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BillaBear\Model\Refund
     */
    public function showRefundById($refund_id)
    {
        list($response) = $this->showRefundByIdWithHttpInfo($refund_id);
        return $response;
    }

    /**
     * Operation showRefundByIdWithHttpInfo
     *
     * Detail
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \BillaBear\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BillaBear\Model\Refund, HTTP status code, HTTP response headers (array of strings)
     */
    public function showRefundByIdWithHttpInfo($refund_id)
    {
        $returnType = '\BillaBear\Model\Refund';
        $request = $this->showRefundByIdRequest($refund_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BillaBear\Model\Refund',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BillaBear\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation showRefundByIdAsync
     *
     * Detail
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function showRefundByIdAsync($refund_id)
    {
        return $this->showRefundByIdAsyncWithHttpInfo($refund_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation showRefundByIdAsyncWithHttpInfo
     *
     * Detail
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function showRefundByIdAsyncWithHttpInfo($refund_id)
    {
        $returnType = '\BillaBear\Model\Refund';
        $request = $this->showRefundByIdRequest($refund_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'showRefundById'
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function showRefundByIdRequest($refund_id)
    {
        // verify the required parameter 'refund_id' is set
        if ($refund_id === null || (is_array($refund_id) && count($refund_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refund_id when calling showRefundById'
            );
        }

        $resourcePath = '/refund/{refundId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($refund_id !== null) {
            $resourcePath = str_replace(
                '{' . 'refundId' . '}',
                ObjectSerializer::toPathValue($refund_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
