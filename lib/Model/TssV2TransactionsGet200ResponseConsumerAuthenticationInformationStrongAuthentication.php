<?php
/**
 * TssV2TransactionsGet200ResponseConsumerAuthenticationInformationStrongAuthentication
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
 * TssV2TransactionsGet200ResponseConsumerAuthenticationInformationStrongAuthentication Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponseConsumerAuthenticationInformationStrongAuthentication implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_consumerAuthenticationInformation_strongAuthentication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lowValueExemptionIndicator' => 'string',
        'riskAnalysisExemptionIndicator' => 'string',
        'trustedMerchantExemptionIndicator' => 'string',
        'secureCorporatePaymentIndicator' => 'string',
        'delegatedAuthenticationExemptionIndicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lowValueExemptionIndicator' => null,
        'riskAnalysisExemptionIndicator' => null,
        'trustedMerchantExemptionIndicator' => null,
        'secureCorporatePaymentIndicator' => null,
        'delegatedAuthenticationExemptionIndicator' => null
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
        'lowValueExemptionIndicator' => 'lowValueExemptionIndicator',
        'riskAnalysisExemptionIndicator' => 'riskAnalysisExemptionIndicator',
        'trustedMerchantExemptionIndicator' => 'trustedMerchantExemptionIndicator',
        'secureCorporatePaymentIndicator' => 'secureCorporatePaymentIndicator',
        'delegatedAuthenticationExemptionIndicator' => 'delegatedAuthenticationExemptionIndicator'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'lowValueExemptionIndicator' => 'setLowValueExemptionIndicator',
        'riskAnalysisExemptionIndicator' => 'setRiskAnalysisExemptionIndicator',
        'trustedMerchantExemptionIndicator' => 'setTrustedMerchantExemptionIndicator',
        'secureCorporatePaymentIndicator' => 'setSecureCorporatePaymentIndicator',
        'delegatedAuthenticationExemptionIndicator' => 'setDelegatedAuthenticationExemptionIndicator'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'lowValueExemptionIndicator' => 'getLowValueExemptionIndicator',
        'riskAnalysisExemptionIndicator' => 'getRiskAnalysisExemptionIndicator',
        'trustedMerchantExemptionIndicator' => 'getTrustedMerchantExemptionIndicator',
        'secureCorporatePaymentIndicator' => 'getSecureCorporatePaymentIndicator',
        'delegatedAuthenticationExemptionIndicator' => 'getDelegatedAuthenticationExemptionIndicator'
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
        $this->container['lowValueExemptionIndicator'] = isset($data['lowValueExemptionIndicator']) ? $data['lowValueExemptionIndicator'] : null;
        $this->container['riskAnalysisExemptionIndicator'] = isset($data['riskAnalysisExemptionIndicator']) ? $data['riskAnalysisExemptionIndicator'] : null;
        $this->container['trustedMerchantExemptionIndicator'] = isset($data['trustedMerchantExemptionIndicator']) ? $data['trustedMerchantExemptionIndicator'] : null;
        $this->container['secureCorporatePaymentIndicator'] = isset($data['secureCorporatePaymentIndicator']) ? $data['secureCorporatePaymentIndicator'] : null;
        $this->container['delegatedAuthenticationExemptionIndicator'] = isset($data['delegatedAuthenticationExemptionIndicator']) ? $data['delegatedAuthenticationExemptionIndicator'] : null;
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
     * Gets lowValueExemptionIndicator
     * @return string
     */
    public function getLowValueExemptionIndicator()
    {
        return $this->container['lowValueExemptionIndicator'];
    }

    /**
     * Sets lowValueExemptionIndicator
     * @param string $lowValueExemptionIndicator This field will contain the low value exemption indicator with one of the following values: Possible values: - `0`  ( low value exemption does not apply to the transaction) - `1` (Transaction exempt from SCA as the merchant/acquirer has determined it to be a low value payment)
     * @return $this
     */
    public function setLowValueExemptionIndicator($lowValueExemptionIndicator)
    {

        $this->container['lowValueExemptionIndicator'] = $lowValueExemptionIndicator;

        return $this;
    }

    /**
     * Gets riskAnalysisExemptionIndicator
     * @return string
     */
    public function getRiskAnalysisExemptionIndicator()
    {
        return $this->container['riskAnalysisExemptionIndicator'];
    }

    /**
     * Sets riskAnalysisExemptionIndicator
     * @param string $riskAnalysisExemptionIndicator This field will contain the transaction risk analysis exemption indicator with one of the following values: Possible values: - `0`  (TRA exemption does not apply to the transaction) - `1` (Transaction exempt from SCA as the merchant/acquirer has determined it to be low risk in accordance with the criteria defined by PSD2/RTS)
     * @return $this
     */
    public function setRiskAnalysisExemptionIndicator($riskAnalysisExemptionIndicator)
    {

        $this->container['riskAnalysisExemptionIndicator'] = $riskAnalysisExemptionIndicator;

        return $this;
    }

    /**
     * Gets trustedMerchantExemptionIndicator
     * @return string
     */
    public function getTrustedMerchantExemptionIndicator()
    {
        return $this->container['trustedMerchantExemptionIndicator'];
    }

    /**
     * Sets trustedMerchantExemptionIndicator
     * @param string $trustedMerchantExemptionIndicator Possible values: - `0`  (Trusted merchant exemption does not apply to the transaction) - `1` (Transaction exempt from SCA as it originated at a merchant trusted by the cardholder)
     * @return $this
     */
    public function setTrustedMerchantExemptionIndicator($trustedMerchantExemptionIndicator)
    {

        $this->container['trustedMerchantExemptionIndicator'] = $trustedMerchantExemptionIndicator;

        return $this;
    }

    /**
     * Gets secureCorporatePaymentIndicator
     * @return string
     */
    public function getSecureCorporatePaymentIndicator()
    {
        return $this->container['secureCorporatePaymentIndicator'];
    }

    /**
     * Sets secureCorporatePaymentIndicator
     * @param string $secureCorporatePaymentIndicator This field will contain the secure corporate payment exemption indicator with one of the following values: Possible values: - `0`  (SCA exemption does not apply to the transaction) - `1` (Transaction exempt from SCA as the merchant/acquirer has determined it as a secure corporate payment)
     * @return $this
     */
    public function setSecureCorporatePaymentIndicator($secureCorporatePaymentIndicator)
    {

        $this->container['secureCorporatePaymentIndicator'] = $secureCorporatePaymentIndicator;

        return $this;
    }

    /**
     * Gets delegatedAuthenticationExemptionIndicator
     * @return string
     */
    public function getDelegatedAuthenticationExemptionIndicator()
    {
        return $this->container['delegatedAuthenticationExemptionIndicator'];
    }

    /**
     * Sets delegatedAuthenticationExemptionIndicator
     * @param string $delegatedAuthenticationExemptionIndicator This field will contain the delegated authentication exemption indicator with one of the following values: Possible values: - `0`  (delegated Authentication exemption does not apply to the transaction) - `1` (Transaction exempt from SCA as authentication has been delegated to other provider (PSP,Acquirer))
     * @return $this
     */
    public function setDelegatedAuthenticationExemptionIndicator($delegatedAuthenticationExemptionIndicator)
    {

        $this->container['delegatedAuthenticationExemptionIndicator'] = $delegatedAuthenticationExemptionIndicator;

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


