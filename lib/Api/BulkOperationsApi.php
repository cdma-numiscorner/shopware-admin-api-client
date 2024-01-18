<?php
/**
 * BulkOperationsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shopware Admin API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.  For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints add the query parameter `type=jsonapi`.
 *
 * The version of the OpenAPI document: 6.5.8.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\ShopwareAdminApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\ShopwareAdminApiClient\ApiException;
use OpenAPI\ShopwareAdminApiClient\Configuration;
use OpenAPI\ShopwareAdminApiClient\HeaderSelector;
use OpenAPI\ShopwareAdminApiClient\ObjectSerializer;

/**
 * BulkOperationsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BulkOperationsApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation sync
     *
     * Bulk edit entities
     *
     * @param  \OpenAPI\ShopwareAdminApiClient\Model\InlineObject1[] $inline_object1 inline_object1 (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  string $indexing_behavior Controls the indexing behavior.     - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \OpenAPI\ShopwareAdminApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2001
     */
    public function sync($inline_object1, $fail_on_error = true, $indexing_behavior = null)
    {
        list($response) = $this->syncWithHttpInfo($inline_object1, $fail_on_error, $indexing_behavior);
        return $response;
    }

    /**
     * Operation syncWithHttpInfo
     *
     * Bulk edit entities
     *
     * @param  \OpenAPI\ShopwareAdminApiClient\Model\InlineObject1[] $inline_object1 (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  string $indexing_behavior Controls the indexing behavior.     - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \OpenAPI\ShopwareAdminApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function syncWithHttpInfo($inline_object1, $fail_on_error = true, $indexing_behavior = null)
    {
        $request = $this->syncRequest($inline_object1, $fail_on_error, $indexing_behavior);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2001' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2001', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2001';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation syncAsync
     *
     * Bulk edit entities
     *
     * @param  \OpenAPI\ShopwareAdminApiClient\Model\InlineObject1[] $inline_object1 (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  string $indexing_behavior Controls the indexing behavior.     - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncAsync($inline_object1, $fail_on_error = true, $indexing_behavior = null)
    {
        return $this->syncAsyncWithHttpInfo($inline_object1, $fail_on_error, $indexing_behavior)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation syncAsyncWithHttpInfo
     *
     * Bulk edit entities
     *
     * @param  \OpenAPI\ShopwareAdminApiClient\Model\InlineObject1[] $inline_object1 (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  string $indexing_behavior Controls the indexing behavior.     - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncAsyncWithHttpInfo($inline_object1, $fail_on_error = true, $indexing_behavior = null)
    {
        $returnType = '\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2001';
        $request = $this->syncRequest($inline_object1, $fail_on_error, $indexing_behavior);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'sync'
     *
     * @param  \OpenAPI\ShopwareAdminApiClient\Model\InlineObject1[] $inline_object1 (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  string $indexing_behavior Controls the indexing behavior.     - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function syncRequest($inline_object1, $fail_on_error = true, $indexing_behavior = null)
    {
        // verify the required parameter 'inline_object1' is set
        if ($inline_object1 === null || (is_array($inline_object1) && count($inline_object1) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inline_object1 when calling sync'
            );
        }

        $resourcePath = '/_action/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($fail_on_error !== null) {
            $headerParams['fail-on-error'] = ObjectSerializer::toHeaderValue($fail_on_error);
        }
        // header params
        if ($indexing_behavior !== null) {
            $headerParams['indexing-behavior'] = ObjectSerializer::toHeaderValue($indexing_behavior);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($inline_object1)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($inline_object1));
            } else {
                $httpBody = $inline_object1;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
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
