<?php
/**
 * Push_FundsApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;
use \CyberSource\Logging\LogFactory as LogFactory;

/**
 * Push_FundsApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Push_FundsApi
{
    private static $logger = null;
    
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class()), $apiClient->merchantConfig->getLogConfiguration());
        }
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return Push_FundsApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createPushFundsTransfer
     *
     * Process a Push Funds Transfer
     *
     * @param \CyberSource\Model\PushFundsRequest $pushFundsRequest  (required)
     * @param string $contentType  (required)
     * @param string $xRequestid  (required)
     * @param string $vCMerchantId  (required)
     * @param string $vCPermissions  (required)
     * @param string $vCCorrelationId  (required)
     * @param string $vCOrganizationId  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PushFunds201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPushFundsTransfer($pushFundsRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId)
    {
        self::$logger->info('CALL TO METHOD createPushFundsTransfer STARTED');
        list($response, $statusCode, $httpHeader) = $this->createPushFundsTransferWithHttpInfo($pushFundsRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId);
        self::$logger->info('CALL TO METHOD createPushFundsTransfer ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createPushFundsTransferWithHttpInfo
     *
     * Process a Push Funds Transfer
     *
     * @param \CyberSource\Model\PushFundsRequest $pushFundsRequest  (required)
     * @param string $contentType  (required)
     * @param string $xRequestid  (required)
     * @param string $vCMerchantId  (required)
     * @param string $vCPermissions  (required)
     * @param string $vCCorrelationId  (required)
     * @param string $vCOrganizationId  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PushFunds201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPushFundsTransferWithHttpInfo($pushFundsRequest, $contentType, $xRequestid, $vCMerchantId, $vCPermissions, $vCCorrelationId, $vCOrganizationId)
    {
        // verify the required parameter 'pushFundsRequest' is set
        if ($pushFundsRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $pushFundsRequest when calling createPushFundsTransfer");
            throw new \InvalidArgumentException('Missing the required parameter $pushFundsRequest when calling createPushFundsTransfer');
        }
        // verify the required parameter 'contentType' is set
        if ($contentType === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $contentType when calling createPushFundsTransfer");
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling createPushFundsTransfer');
        }
        // verify the required parameter 'xRequestid' is set
        if ($xRequestid === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $xRequestid when calling createPushFundsTransfer");
            throw new \InvalidArgumentException('Missing the required parameter $xRequestid when calling createPushFundsTransfer');
        }
        // verify the required parameter 'vCMerchantId' is set
        if ($vCMerchantId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $vCMerchantId when calling createPushFundsTransfer");
            throw new \InvalidArgumentException('Missing the required parameter $vCMerchantId when calling createPushFundsTransfer');
        }
        // verify the required parameter 'vCPermissions' is set
        if ($vCPermissions === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $vCPermissions when calling createPushFundsTransfer");
            throw new \InvalidArgumentException('Missing the required parameter $vCPermissions when calling createPushFundsTransfer');
        }
        // verify the required parameter 'vCCorrelationId' is set
        if ($vCCorrelationId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $vCCorrelationId when calling createPushFundsTransfer");
            throw new \InvalidArgumentException('Missing the required parameter $vCCorrelationId when calling createPushFundsTransfer');
        }
        // verify the required parameter 'vCOrganizationId' is set
        if ($vCOrganizationId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $vCOrganizationId when calling createPushFundsTransfer");
            throw new \InvalidArgumentException('Missing the required parameter $vCOrganizationId when calling createPushFundsTransfer');
        }
        // parse inputs
        $resourcePath = "/pts/v1/push-funds-transfer";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($contentType !== null) {
            $headerParams['Content-Type'] = $this->apiClient->getSerializer()->toHeaderValue($contentType);
        }
        // header params
        if ($xRequestid !== null) {
            $headerParams['x-requestid'] = $this->apiClient->getSerializer()->toHeaderValue($xRequestid);
        }
        // header params
        if ($vCMerchantId !== null) {
            $headerParams['v-c-merchant-id'] = $this->apiClient->getSerializer()->toHeaderValue($vCMerchantId);
        }
        // header params
        if ($vCPermissions !== null) {
            $headerParams['v-c-permissions'] = $this->apiClient->getSerializer()->toHeaderValue($vCPermissions);
        }
        // header params
        if ($vCCorrelationId !== null) {
            $headerParams['v-c-correlation-id'] = $this->apiClient->getSerializer()->toHeaderValue($vCCorrelationId);
        }
        // header params
        if ($vCOrganizationId !== null) {
            $headerParams['v-c-organization-id'] = $this->apiClient->getSerializer()->toHeaderValue($vCOrganizationId);
        }
        // body params
        $_tempBody = null;
        if (isset($pushFundsRequest)) {
            $_tempBody = $pushFundsRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PushFunds201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PushFunds201Response',
                '/pts/v1/push-funds-transfer'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PushFunds201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PushFunds201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PushFunds400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PushFunds401Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PushFunds404Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PushFunds502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}