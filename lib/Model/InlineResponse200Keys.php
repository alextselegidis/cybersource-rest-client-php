<?php
/**
 * InlineResponse200Keys
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
 * InlineResponse200Keys Class Doc Comment
 *
 * @category    Class
 * @description KeyResponseEntry
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200Keys implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_keys';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organizationId' => 'string',
        'merchantName' => 'string',
        'keyId' => 'string',
        'keyType' => 'string',
        'status' => 'string',
        'expirationDate' => '\DateTime',
        'dateAdded' => '\DateTime',
        'addedBy' => 'string',
        'dateModified' => '\DateTime',
        'modifiedBy' => 'string',
        'version' => 'string',
        'serialNumber' => 'string',
        'issuerName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organizationId' => null,
        'merchantName' => null,
        'keyId' => null,
        'keyType' => null,
        'status' => null,
        'expirationDate' => 'date',
        'dateAdded' => 'date',
        'addedBy' => null,
        'dateModified' => 'date',
        'modifiedBy' => null,
        'version' => null,
        'serialNumber' => null,
        'issuerName' => null
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
        'organizationId' => 'organizationId',
        'merchantName' => 'merchantName',
        'keyId' => 'keyId',
        'keyType' => 'keyType',
        'status' => 'status',
        'expirationDate' => 'expirationDate',
        'dateAdded' => 'dateAdded',
        'addedBy' => 'addedBy',
        'dateModified' => 'dateModified',
        'modifiedBy' => 'modifiedBy',
        'version' => 'version',
        'serialNumber' => 'serialNumber',
        'issuerName' => 'issuerName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'organizationId' => 'setOrganizationId',
        'merchantName' => 'setMerchantName',
        'keyId' => 'setKeyId',
        'keyType' => 'setKeyType',
        'status' => 'setStatus',
        'expirationDate' => 'setExpirationDate',
        'dateAdded' => 'setDateAdded',
        'addedBy' => 'setAddedBy',
        'dateModified' => 'setDateModified',
        'modifiedBy' => 'setModifiedBy',
        'version' => 'setVersion',
        'serialNumber' => 'setSerialNumber',
        'issuerName' => 'setIssuerName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'organizationId' => 'getOrganizationId',
        'merchantName' => 'getMerchantName',
        'keyId' => 'getKeyId',
        'keyType' => 'getKeyType',
        'status' => 'getStatus',
        'expirationDate' => 'getExpirationDate',
        'dateAdded' => 'getDateAdded',
        'addedBy' => 'getAddedBy',
        'dateModified' => 'getDateModified',
        'modifiedBy' => 'getModifiedBy',
        'version' => 'getVersion',
        'serialNumber' => 'getSerialNumber',
        'issuerName' => 'getIssuerName'
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['merchantName'] = isset($data['merchantName']) ? $data['merchantName'] : null;
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['keyType'] = isset($data['keyType']) ? $data['keyType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['dateAdded'] = isset($data['dateAdded']) ? $data['dateAdded'] : null;
        $this->container['addedBy'] = isset($data['addedBy']) ? $data['addedBy'] : null;
        $this->container['dateModified'] = isset($data['dateModified']) ? $data['dateModified'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['issuerName'] = isset($data['issuerName']) ? $data['issuerName'] : null;
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
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId Merchant Id
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets merchantName
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     * @param string $merchantName Merchant Name
     * @return $this
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets keyId
     * @return string
     */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
     * Sets keyId
     * @param string $keyId Key Id
     * @return $this
     */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;

        return $this;
    }

    /**
     * Gets keyType
     * @return string
     */
    public function getKeyType()
    {
        return $this->container['keyType'];
    }

    /**
     * Sets keyType
     * @param string $keyType Key Type
     * @return $this
     */
    public function setKeyType($keyType)
    {
        $this->container['keyType'] = $keyType;

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
     * @param string $status Status can be active/inactive
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets expirationDate
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     * @param \DateTime $expirationDate Expiry Date. example - 2028-07-15 22:11:56 UTC
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->container['expirationDate'] = $expirationDate;

        return $this;
    }

    /**
     * Gets dateAdded
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->container['dateAdded'];
    }

    /**
     * Sets dateAdded
     * @param \DateTime $dateAdded Date Addded. example - 2018-04-25 22:11:56 UTC
     * @return $this
     */
    public function setDateAdded($dateAdded)
    {
        $this->container['dateAdded'] = $dateAdded;

        return $this;
    }

    /**
     * Gets addedBy
     * @return string
     */
    public function getAddedBy()
    {
        return $this->container['addedBy'];
    }

    /**
     * Sets addedBy
     * @param string $addedBy Added By
     * @return $this
     */
    public function setAddedBy($addedBy)
    {
        $this->container['addedBy'] = $addedBy;

        return $this;
    }

    /**
     * Gets dateModified
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /**
     * Sets dateModified
     * @param \DateTime $dateModified Modified Date.
     * @return $this
     */
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * Gets modifiedBy
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     * @param string $modifiedBy Modified By
     * @return $this
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;

        return $this;
    }

    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version Version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets serialNumber
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
     * Sets serialNumber
     * @param string $serialNumber Serial Number
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * Gets issuerName
     * @return string
     */
    public function getIssuerName()
    {
        return $this->container['issuerName'];
    }

    /**
     * Sets issuerName
     * @param string $issuerName Issuer Name
     * @return $this
     */
    public function setIssuerName($issuerName)
    {
        $this->container['issuerName'] = $issuerName;

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


