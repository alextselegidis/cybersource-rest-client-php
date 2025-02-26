<?php
/**
 * VasV2PaymentsPost201ResponseOrderInformationLineItems
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
 * VasV2PaymentsPost201ResponseOrderInformationLineItems Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VasV2PaymentsPost201ResponseOrderInformationLineItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'vasV2PaymentsPost201Response_orderInformation_lineItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'taxDetails' => '\CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationTaxDetails[]',
        'jurisdiction' => '\CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationJurisdiction[]',
        'exemptAmount' => 'string',
        'taxableAmount' => 'string',
        'taxAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'taxDetails' => null,
        'jurisdiction' => null,
        'exemptAmount' => null,
        'taxableAmount' => null,
        'taxAmount' => null
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
        'taxDetails' => 'taxDetails',
        'jurisdiction' => 'jurisdiction',
        'exemptAmount' => 'exemptAmount',
        'taxableAmount' => 'taxableAmount',
        'taxAmount' => 'taxAmount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'taxDetails' => 'setTaxDetails',
        'jurisdiction' => 'setJurisdiction',
        'exemptAmount' => 'setExemptAmount',
        'taxableAmount' => 'setTaxableAmount',
        'taxAmount' => 'setTaxAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'taxDetails' => 'getTaxDetails',
        'jurisdiction' => 'getJurisdiction',
        'exemptAmount' => 'getExemptAmount',
        'taxableAmount' => 'getTaxableAmount',
        'taxAmount' => 'getTaxAmount'
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
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
        $this->container['jurisdiction'] = isset($data['jurisdiction']) ? $data['jurisdiction'] : null;
        $this->container['exemptAmount'] = isset($data['exemptAmount']) ? $data['exemptAmount'] : null;
        $this->container['taxableAmount'] = isset($data['taxableAmount']) ? $data['taxableAmount'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
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
     * Gets taxDetails
     * @return \CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationTaxDetails[]
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     * @param \CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationTaxDetails[] $taxDetails
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets jurisdiction
     * @return \CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationJurisdiction[]
     */
    public function getJurisdiction()
    {
        return $this->container['jurisdiction'];
    }

    /**
     * Sets jurisdiction
     * @param \CyberSource\Model\VasV2PaymentsPost201ResponseOrderInformationJurisdiction[] $jurisdiction
     * @return $this
     */
    public function setJurisdiction($jurisdiction)
    {
        $this->container['jurisdiction'] = $jurisdiction;

        return $this;
    }

    /**
     * Gets exemptAmount
     * @return string
     */
    public function getExemptAmount()
    {
        return $this->container['exemptAmount'];
    }

    /**
     * Sets exemptAmount
     * @param string $exemptAmount Exempt amount for the lineItem. Returned only if the `taxInformation.showTaxPerLineItem` field is set to `Yes`.
     * @return $this
     */
    public function setExemptAmount($exemptAmount)
    {

        $this->container['exemptAmount'] = $exemptAmount;

        return $this;
    }

    /**
     * Gets taxableAmount
     * @return string
     */
    public function getTaxableAmount()
    {
        return $this->container['taxableAmount'];
    }

    /**
     * Sets taxableAmount
     * @param string $taxableAmount Portion of the item amount that is taxable.
     * @return $this
     */
    public function setTaxableAmount($taxableAmount)
    {

        $this->container['taxableAmount'] = $taxableAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     * @param string $taxAmount Total tax for the item. This value is the sum of all taxes applied to the item.
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {

        $this->container['taxAmount'] = $taxAmount;

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


