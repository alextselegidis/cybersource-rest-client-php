<?php
/**
 * Upv1capturecontextsCheckoutApiInitialization
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
 * Upv1capturecontextsCheckoutApiInitialization Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Upv1capturecontextsCheckoutApiInitialization implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'upv1capturecontexts_checkoutApiInitialization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'profileId' => 'string',
        'accessKey' => 'string',
        'referenceNumber' => 'string',
        'transactionUuid' => 'string',
        'transactionType' => 'string',
        'currency' => 'string',
        'amount' => 'string',
        'locale' => 'string',
        'overrideCustomReceiptPage' => 'string',
        'unsignedFieldNames' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'profileId' => null,
        'accessKey' => null,
        'referenceNumber' => null,
        'transactionUuid' => null,
        'transactionType' => null,
        'currency' => null,
        'amount' => null,
        'locale' => null,
        'overrideCustomReceiptPage' => null,
        'unsignedFieldNames' => null
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
        'profileId' => 'profile_id',
        'accessKey' => 'access_key',
        'referenceNumber' => 'reference_number',
        'transactionUuid' => 'transaction_uuid',
        'transactionType' => 'transaction_type',
        'currency' => 'currency',
        'amount' => 'amount',
        'locale' => 'locale',
        'overrideCustomReceiptPage' => 'override_custom_receipt_page',
        'unsignedFieldNames' => 'unsigned_field_names'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'profileId' => 'setProfileId',
        'accessKey' => 'setAccessKey',
        'referenceNumber' => 'setReferenceNumber',
        'transactionUuid' => 'setTransactionUuid',
        'transactionType' => 'setTransactionType',
        'currency' => 'setCurrency',
        'amount' => 'setAmount',
        'locale' => 'setLocale',
        'overrideCustomReceiptPage' => 'setOverrideCustomReceiptPage',
        'unsignedFieldNames' => 'setUnsignedFieldNames'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'profileId' => 'getProfileId',
        'accessKey' => 'getAccessKey',
        'referenceNumber' => 'getReferenceNumber',
        'transactionUuid' => 'getTransactionUuid',
        'transactionType' => 'getTransactionType',
        'currency' => 'getCurrency',
        'amount' => 'getAmount',
        'locale' => 'getLocale',
        'overrideCustomReceiptPage' => 'getOverrideCustomReceiptPage',
        'unsignedFieldNames' => 'getUnsignedFieldNames'
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
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
        $this->container['transactionUuid'] = isset($data['transactionUuid']) ? $data['transactionUuid'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['overrideCustomReceiptPage'] = isset($data['overrideCustomReceiptPage']) ? $data['overrideCustomReceiptPage'] : null;
        $this->container['unsignedFieldNames'] = isset($data['unsignedFieldNames']) ? $data['unsignedFieldNames'] : null;
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
     * Gets profileId
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     * @param string $profileId
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets accessKey
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
     * Sets accessKey
     * @param string $accessKey
     * @return $this
     */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;

        return $this;
    }

    /**
     * Gets referenceNumber
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     * @param string $referenceNumber
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets transactionUuid
     * @return string
     */
    public function getTransactionUuid()
    {
        return $this->container['transactionUuid'];
    }

    /**
     * Sets transactionUuid
     * @param string $transactionUuid
     * @return $this
     */
    public function setTransactionUuid($transactionUuid)
    {
        $this->container['transactionUuid'] = $transactionUuid;

        return $this;
    }

    /**
     * Gets transactionType
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     * @param string $transactionType
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets locale
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets overrideCustomReceiptPage
     * @return string
     */
    public function getOverrideCustomReceiptPage()
    {
        return $this->container['overrideCustomReceiptPage'];
    }

    /**
     * Sets overrideCustomReceiptPage
     * @param string $overrideCustomReceiptPage
     * @return $this
     */
    public function setOverrideCustomReceiptPage($overrideCustomReceiptPage)
    {
        $this->container['overrideCustomReceiptPage'] = $overrideCustomReceiptPage;

        return $this;
    }

    /**
     * Gets unsignedFieldNames
     * @return string
     */
    public function getUnsignedFieldNames()
    {
        return $this->container['unsignedFieldNames'];
    }

    /**
     * Sets unsignedFieldNames
     * @param string $unsignedFieldNames
     * @return $this
     */
    public function setUnsignedFieldNames($unsignedFieldNames)
    {
        $this->container['unsignedFieldNames'] = $unsignedFieldNames;

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


