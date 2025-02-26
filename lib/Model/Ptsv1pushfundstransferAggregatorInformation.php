<?php
/**
 * Ptsv1pushfundstransferAggregatorInformation
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
 * Ptsv1pushfundstransferAggregatorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv1pushfundstransferAggregatorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv1pushfundstransfer_aggregatorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aggregatorId' => 'string',
        'name' => 'string',
        'subMerchant' => '\CyberSource\Model\Ptsv1pushfundstransferAggregatorInformationSubMerchant'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aggregatorId' => null,
        'name' => null,
        'subMerchant' => null
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
        'aggregatorId' => 'aggregatorId',
        'name' => 'name',
        'subMerchant' => 'subMerchant'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'aggregatorId' => 'setAggregatorId',
        'name' => 'setName',
        'subMerchant' => 'setSubMerchant'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'aggregatorId' => 'getAggregatorId',
        'name' => 'getName',
        'subMerchant' => 'getSubMerchant'
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
        $this->container['aggregatorId'] = isset($data['aggregatorId']) ? $data['aggregatorId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subMerchant'] = isset($data['subMerchant']) ? $data['subMerchant'] : null;
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
     * Gets aggregatorId
     * @return string
     */
    public function getAggregatorId()
    {
        return $this->container['aggregatorId'];
    }

    /**
     * Sets aggregatorId
     * @param string $aggregatorId Value that identifies you as a payment aggregator. Get this value from the processor.  FDC Compass This value must consist of uppercase letters.  Visa Platform Connect The value for this field corresponds to the following data in the TC 33 capture file: - `Record`: CP01 TCR6 - `Position`: 95-105 - `Field`: Market Identifier / Payment Facilitator ID
     * @return $this
     */
    public function setAggregatorId($aggregatorId)
    {

        $this->container['aggregatorId'] = $aggregatorId;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Your payment aggregator business name.  Visa Platform COnnect With American Express, the maximum length of the aggregator name depends on the length of the sub-merchant name. The combined length for both values must not exceed 36 characters. The value for this field does not map to the TC 33 capture file5.  FDC Compass This value must consist of uppercase characters.  For processor-specific information, see the aggregator_name field in Credit Card Services Using the SCMP API.
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subMerchant
     * @return \CyberSource\Model\Ptsv1pushfundstransferAggregatorInformationSubMerchant
     */
    public function getSubMerchant()
    {
        return $this->container['subMerchant'];
    }

    /**
     * Sets subMerchant
     * @param \CyberSource\Model\Ptsv1pushfundstransferAggregatorInformationSubMerchant $subMerchant
     * @return $this
     */
    public function setSubMerchant($subMerchant)
    {
        $this->container['subMerchant'] = $subMerchant;

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


