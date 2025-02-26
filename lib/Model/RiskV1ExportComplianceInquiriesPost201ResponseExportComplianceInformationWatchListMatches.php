<?php
/**
 * RiskV1ExportComplianceInquiriesPost201ResponseExportComplianceInformationWatchListMatches
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
 * RiskV1ExportComplianceInquiriesPost201ResponseExportComplianceInformationWatchListMatches Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1ExportComplianceInquiriesPost201ResponseExportComplianceInformationWatchListMatches implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1ExportComplianceInquiriesPost201Response_exportComplianceInformation_watchList_matches';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addresses' => 'string[]',
        'sanctionList' => 'string',
        'aliases' => 'string[]',
        'programs' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addresses' => null,
        'sanctionList' => null,
        'aliases' => null,
        'programs' => null
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
        'addresses' => 'addresses',
        'sanctionList' => 'sanctionList',
        'aliases' => 'aliases',
        'programs' => 'programs'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'addresses' => 'setAddresses',
        'sanctionList' => 'setSanctionList',
        'aliases' => 'setAliases',
        'programs' => 'setPrograms'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'addresses' => 'getAddresses',
        'sanctionList' => 'getSanctionList',
        'aliases' => 'getAliases',
        'programs' => 'getPrograms'
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
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['sanctionList'] = isset($data['sanctionList']) ? $data['sanctionList'] : null;
        $this->container['aliases'] = isset($data['aliases']) ? $data['aliases'] : null;
        $this->container['programs'] = isset($data['programs']) ? $data['programs'] : null;
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
     * Gets addresses
     * @return string[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param string[] $addresses Address found on the list specified in export_matchN_list for the entity (name and address) in the request.
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets sanctionList
     * @return string
     */
    public function getSanctionList()
    {
        return $this->container['sanctionList'];
    }

    /**
     * Sets sanctionList
     * @param string $sanctionList List on which the first Denied Parties List check match appears. For a list of codes, see \"Denied Parties List Check Codes,\" page 56.
     * @return $this
     */
    public function setSanctionList($sanctionList)
    {

        $this->container['sanctionList'] = $sanctionList;

        return $this;
    }

    /**
     * Gets aliases
     * @return string[]
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     * @param string[] $aliases Name found on the list specified in export_matchN_list for the entity (name and address) in the request.
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->container['aliases'] = $aliases;

        return $this;
    }

    /**
     * Gets programs
     * @return string[]
     */
    public function getPrograms()
    {
        return $this->container['programs'];
    }

    /**
     * Sets programs
     * @param string[] $programs Sub-lists matched by the order data. List members are separated by carets (^).
     * @return $this
     */
    public function setPrograms($programs)
    {
        $this->container['programs'] = $programs;

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


