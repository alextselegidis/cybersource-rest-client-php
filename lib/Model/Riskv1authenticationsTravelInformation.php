<?php
/**
 * Riskv1authenticationsTravelInformation
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
 * Riskv1authenticationsTravelInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1authenticationsTravelInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1authentications_travelInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'legs' => '\CyberSource\Model\Riskv1decisionsTravelInformationLegs[]',
        'numberOfPassengers' => 'int',
        'passengers' => '\CyberSource\Model\Riskv1decisionsTravelInformationPassengers[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'legs' => null,
        'numberOfPassengers' => null,
        'passengers' => null
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
        'legs' => 'legs',
        'numberOfPassengers' => 'numberOfPassengers',
        'passengers' => 'passengers'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'legs' => 'setLegs',
        'numberOfPassengers' => 'setNumberOfPassengers',
        'passengers' => 'setPassengers'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'legs' => 'getLegs',
        'numberOfPassengers' => 'getNumberOfPassengers',
        'passengers' => 'getPassengers'
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
        $this->container['legs'] = isset($data['legs']) ? $data['legs'] : null;
        $this->container['numberOfPassengers'] = isset($data['numberOfPassengers']) ? $data['numberOfPassengers'] : null;
        $this->container['passengers'] = isset($data['passengers']) ? $data['passengers'] : null;
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
     * Gets legs
     * @return \CyberSource\Model\Riskv1decisionsTravelInformationLegs[]
     */
    public function getLegs()
    {
        return $this->container['legs'];
    }

    /**
     * Sets legs
     * @param \CyberSource\Model\Riskv1decisionsTravelInformationLegs[] $legs
     * @return $this
     */
    public function setLegs($legs)
    {
        $this->container['legs'] = $legs;

        return $this;
    }

    /**
     * Gets numberOfPassengers
     * @return int
     */
    public function getNumberOfPassengers()
    {
        return $this->container['numberOfPassengers'];
    }

    /**
     * Sets numberOfPassengers
     * @param int $numberOfPassengers Number of passengers for whom the ticket was issued. If you do not include this field in your request, CyberSource uses a default value of 1. Required for American Express SafeKey (U.S.) for travel-related requests.
     * @return $this
     */
    public function setNumberOfPassengers($numberOfPassengers)
    {
        $this->container['numberOfPassengers'] = $numberOfPassengers;

        return $this;
    }

    /**
     * Gets passengers
     * @return \CyberSource\Model\Riskv1decisionsTravelInformationPassengers[]
     */
    public function getPassengers()
    {
        return $this->container['passengers'];
    }

    /**
     * Sets passengers
     * @param \CyberSource\Model\Riskv1decisionsTravelInformationPassengers[] $passengers
     * @return $this
     */
    public function setPassengers($passengers)
    {
        $this->container['passengers'] = $passengers;

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


