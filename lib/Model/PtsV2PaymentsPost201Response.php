<?php
/**
 * PtsV2PaymentsPost201Response
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
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

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * PtsV2PaymentsPost201Response Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseLinks',
        'id' => 'string',
        'submitTimeUtc' => 'string',
        'status' => 'string',
        'reconciliationId' => 'string',
        'errorInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformation',
        'clientReferenceInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseClientReferenceInformation',
        'processingInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessingInformation',
        'processorInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformation',
        'issuerInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseIssuerInformation',
        'paymentAccountInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentAccountInformation',
        'paymentInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInformation',
        'paymentInsightsInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInsightsInformation',
        'orderInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformation',
        'pointOfSaleInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponsePointOfSaleInformation',
        'installmentInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseInstallmentInformation',
        'tokenInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformation',
        'buyerInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseBuyerInformation',
        'riskInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformation',
        'consumerAuthenticationInformation' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseConsumerAuthenticationInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'id' => null,
        'submitTimeUtc' => null,
        'status' => null,
        'reconciliationId' => null,
        'errorInformation' => null,
        'clientReferenceInformation' => null,
        'processingInformation' => null,
        'processorInformation' => null,
        'issuerInformation' => null,
        'paymentAccountInformation' => null,
        'paymentInformation' => null,
        'paymentInsightsInformation' => null,
        'orderInformation' => null,
        'pointOfSaleInformation' => null,
        'installmentInformation' => null,
        'tokenInformation' => null,
        'buyerInformation' => null,
        'riskInformation' => null,
        'consumerAuthenticationInformation' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'links' => '_links',
        'id' => 'id',
        'submitTimeUtc' => 'submitTimeUtc',
        'status' => 'status',
        'reconciliationId' => 'reconciliationId',
        'errorInformation' => 'errorInformation',
        'clientReferenceInformation' => 'clientReferenceInformation',
        'processingInformation' => 'processingInformation',
        'processorInformation' => 'processorInformation',
        'issuerInformation' => 'issuerInformation',
        'paymentAccountInformation' => 'paymentAccountInformation',
        'paymentInformation' => 'paymentInformation',
        'paymentInsightsInformation' => 'paymentInsightsInformation',
        'orderInformation' => 'orderInformation',
        'pointOfSaleInformation' => 'pointOfSaleInformation',
        'installmentInformation' => 'installmentInformation',
        'tokenInformation' => 'tokenInformation',
        'buyerInformation' => 'buyerInformation',
        'riskInformation' => 'riskInformation',
        'consumerAuthenticationInformation' => 'consumerAuthenticationInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'submitTimeUtc' => 'setSubmitTimeUtc',
        'status' => 'setStatus',
        'reconciliationId' => 'setReconciliationId',
        'errorInformation' => 'setErrorInformation',
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'processingInformation' => 'setProcessingInformation',
        'processorInformation' => 'setProcessorInformation',
        'issuerInformation' => 'setIssuerInformation',
        'paymentAccountInformation' => 'setPaymentAccountInformation',
        'paymentInformation' => 'setPaymentInformation',
        'paymentInsightsInformation' => 'setPaymentInsightsInformation',
        'orderInformation' => 'setOrderInformation',
        'pointOfSaleInformation' => 'setPointOfSaleInformation',
        'installmentInformation' => 'setInstallmentInformation',
        'tokenInformation' => 'setTokenInformation',
        'buyerInformation' => 'setBuyerInformation',
        'riskInformation' => 'setRiskInformation',
        'consumerAuthenticationInformation' => 'setConsumerAuthenticationInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'submitTimeUtc' => 'getSubmitTimeUtc',
        'status' => 'getStatus',
        'reconciliationId' => 'getReconciliationId',
        'errorInformation' => 'getErrorInformation',
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'processingInformation' => 'getProcessingInformation',
        'processorInformation' => 'getProcessorInformation',
        'issuerInformation' => 'getIssuerInformation',
        'paymentAccountInformation' => 'getPaymentAccountInformation',
        'paymentInformation' => 'getPaymentInformation',
        'paymentInsightsInformation' => 'getPaymentInsightsInformation',
        'orderInformation' => 'getOrderInformation',
        'pointOfSaleInformation' => 'getPointOfSaleInformation',
        'installmentInformation' => 'getInstallmentInformation',
        'tokenInformation' => 'getTokenInformation',
        'buyerInformation' => 'getBuyerInformation',
        'riskInformation' => 'getRiskInformation',
        'consumerAuthenticationInformation' => 'getConsumerAuthenticationInformation'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }





    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reconciliationId'] = isset($data['reconciliationId']) ? $data['reconciliationId'] : null;
        $this->container['errorInformation'] = isset($data['errorInformation']) ? $data['errorInformation'] : null;
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['processorInformation'] = isset($data['processorInformation']) ? $data['processorInformation'] : null;
        $this->container['issuerInformation'] = isset($data['issuerInformation']) ? $data['issuerInformation'] : null;
        $this->container['paymentAccountInformation'] = isset($data['paymentAccountInformation']) ? $data['paymentAccountInformation'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['paymentInsightsInformation'] = isset($data['paymentInsightsInformation']) ? $data['paymentInsightsInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['pointOfSaleInformation'] = isset($data['pointOfSaleInformation']) ? $data['pointOfSaleInformation'] : null;
        $this->container['installmentInformation'] = isset($data['installmentInformation']) ? $data['installmentInformation'] : null;
        $this->container['tokenInformation'] = isset($data['tokenInformation']) ? $data['tokenInformation'] : null;
        $this->container['buyerInformation'] = isset($data['buyerInformation']) ? $data['buyerInformation'] : null;
        $this->container['riskInformation'] = isset($data['riskInformation']) ? $data['riskInformation'] : null;
        $this->container['consumerAuthenticationInformation'] = isset($data['consumerAuthenticationInformation']) ? $data['consumerAuthenticationInformation'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets links
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id An unique identification number generated by Cybersource to identify the submitted request. Returned by all services. It is also appended to the endpoint of the resource. On incremental authorizations, this value with be the same as the identification number returned in the original authorization response.
     * @return $this
     */
    public function setId($id)
    {

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets submitTimeUtc
     * @return string
     */
    public function getSubmitTimeUtc()
    {
        return $this->container['submitTimeUtc'];
    }

    /**
     * Sets submitTimeUtc
     * @param string $submitTimeUtc Time of request in UTC. Format: `YYYY-MM-DDThh:mm:ssZ` **Example** `2016-08-11T22:47:57Z` equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The `T` separates the date and the time. The `Z` indicates UTC.  Returned by Cybersource for all services.
     * @return $this
     */
    public function setSubmitTimeUtc($submitTimeUtc)
    {
        $this->container['submitTimeUtc'] = $submitTimeUtc;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of the submitted transaction.  Possible values:  - AUTHORIZED  - PARTIAL_AUTHORIZED  - AUTHORIZED_PENDING_REVIEW  - AUTHORIZED_RISK_DECLINED  - PENDING_AUTHENTICATION  - PENDING_REVIEW  - DECLINED  - INVALID_REQUEST
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reconciliationId
     * @return string
     */
    public function getReconciliationId()
    {
        return $this->container['reconciliationId'];
    }

    /**
     * Sets reconciliationId
     * @param string $reconciliationId Reference number for the transaction. Depending on how your Cybersource account is configured, this value could either be provided in the API request or generated by CyberSource. The actual value used in the request to the processor is provided back to you by Cybersource in the response.
     * @return $this
     */
    public function setReconciliationId($reconciliationId)
    {

        $this->container['reconciliationId'] = $reconciliationId;

        return $this;
    }

    /**
     * Gets errorInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformation
     */
    public function getErrorInformation()
    {
        return $this->container['errorInformation'];
    }

    /**
     * Sets errorInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseErrorInformation $errorInformation
     * @return $this
     */
    public function setErrorInformation($errorInformation)
    {
        $this->container['errorInformation'] = $errorInformation;

        return $this;
    }

    /**
     * Gets clientReferenceInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets processorInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformation
     */
    public function getProcessorInformation()
    {
        return $this->container['processorInformation'];
    }

    /**
     * Sets processorInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformation $processorInformation
     * @return $this
     */
    public function setProcessorInformation($processorInformation)
    {
        $this->container['processorInformation'] = $processorInformation;

        return $this;
    }

    /**
     * Gets issuerInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseIssuerInformation
     */
    public function getIssuerInformation()
    {
        return $this->container['issuerInformation'];
    }

    /**
     * Sets issuerInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseIssuerInformation $issuerInformation
     * @return $this
     */
    public function setIssuerInformation($issuerInformation)
    {
        $this->container['issuerInformation'] = $issuerInformation;

        return $this;
    }

    /**
     * Gets paymentAccountInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentAccountInformation
     */
    public function getPaymentAccountInformation()
    {
        return $this->container['paymentAccountInformation'];
    }

    /**
     * Sets paymentAccountInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentAccountInformation $paymentAccountInformation
     * @return $this
     */
    public function setPaymentAccountInformation($paymentAccountInformation)
    {
        $this->container['paymentAccountInformation'] = $paymentAccountInformation;

        return $this;
    }

    /**
     * Gets paymentInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

        return $this;
    }

    /**
     * Gets paymentInsightsInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInsightsInformation
     */
    public function getPaymentInsightsInformation()
    {
        return $this->container['paymentInsightsInformation'];
    }

    /**
     * Sets paymentInsightsInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInsightsInformation $paymentInsightsInformation
     * @return $this
     */
    public function setPaymentInsightsInformation($paymentInsightsInformation)
    {
        $this->container['paymentInsightsInformation'] = $paymentInsightsInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets pointOfSaleInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponsePointOfSaleInformation
     */
    public function getPointOfSaleInformation()
    {
        return $this->container['pointOfSaleInformation'];
    }

    /**
     * Sets pointOfSaleInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponsePointOfSaleInformation $pointOfSaleInformation
     * @return $this
     */
    public function setPointOfSaleInformation($pointOfSaleInformation)
    {
        $this->container['pointOfSaleInformation'] = $pointOfSaleInformation;

        return $this;
    }

    /**
     * Gets installmentInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseInstallmentInformation
     */
    public function getInstallmentInformation()
    {
        return $this->container['installmentInformation'];
    }

    /**
     * Sets installmentInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseInstallmentInformation $installmentInformation
     * @return $this
     */
    public function setInstallmentInformation($installmentInformation)
    {
        $this->container['installmentInformation'] = $installmentInformation;

        return $this;
    }

    /**
     * Gets tokenInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformation
     */
    public function getTokenInformation()
    {
        return $this->container['tokenInformation'];
    }

    /**
     * Sets tokenInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformation $tokenInformation
     * @return $this
     */
    public function setTokenInformation($tokenInformation)
    {
        $this->container['tokenInformation'] = $tokenInformation;

        return $this;
    }

    /**
     * Gets buyerInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseBuyerInformation
     */
    public function getBuyerInformation()
    {
        return $this->container['buyerInformation'];
    }

    /**
     * Sets buyerInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseBuyerInformation $buyerInformation
     * @return $this
     */
    public function setBuyerInformation($buyerInformation)
    {
        $this->container['buyerInformation'] = $buyerInformation;

        return $this;
    }

    /**
     * Gets riskInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformation
     */
    public function getRiskInformation()
    {
        return $this->container['riskInformation'];
    }

    /**
     * Sets riskInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseRiskInformation $riskInformation
     * @return $this
     */
    public function setRiskInformation($riskInformation)
    {
        $this->container['riskInformation'] = $riskInformation;

        return $this;
    }

    /**
     * Gets consumerAuthenticationInformation
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseConsumerAuthenticationInformation
     */
    public function getConsumerAuthenticationInformation()
    {
        return $this->container['consumerAuthenticationInformation'];
    }

    /**
     * Sets consumerAuthenticationInformation
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseConsumerAuthenticationInformation $consumerAuthenticationInformation
     * @return $this
     */
    public function setConsumerAuthenticationInformation($consumerAuthenticationInformation)
    {
        $this->container['consumerAuthenticationInformation'] = $consumerAuthenticationInformation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
	#[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


