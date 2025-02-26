<?php
/**
 * RiskV1AddressVerificationsPost201ResponseAddressVerificationInformation
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
 * RiskV1AddressVerificationsPost201ResponseAddressVerificationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1AddressVerificationsPost201ResponseAddressVerificationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1AddressVerificationsPost201Response_addressVerificationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addressType' => 'string',
        'barCode' => '\CyberSource\Model\RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationBarCode',
        'applicableRegion' => 'string',
        'errorCode' => 'string',
        'statusCode' => 'string',
        'careOf' => 'string',
        'matchScore' => 'int',
        'standardAddress' => '\CyberSource\Model\RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationStandardAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addressType' => null,
        'barCode' => null,
        'applicableRegion' => null,
        'errorCode' => null,
        'statusCode' => null,
        'careOf' => null,
        'matchScore' => null,
        'standardAddress' => null
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
        'addressType' => 'addressType',
        'barCode' => 'barCode',
        'applicableRegion' => 'applicableRegion',
        'errorCode' => 'errorCode',
        'statusCode' => 'statusCode',
        'careOf' => 'careOf',
        'matchScore' => 'matchScore',
        'standardAddress' => 'standardAddress'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'addressType' => 'setAddressType',
        'barCode' => 'setBarCode',
        'applicableRegion' => 'setApplicableRegion',
        'errorCode' => 'setErrorCode',
        'statusCode' => 'setStatusCode',
        'careOf' => 'setCareOf',
        'matchScore' => 'setMatchScore',
        'standardAddress' => 'setStandardAddress'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'addressType' => 'getAddressType',
        'barCode' => 'getBarCode',
        'applicableRegion' => 'getApplicableRegion',
        'errorCode' => 'getErrorCode',
        'statusCode' => 'getStatusCode',
        'careOf' => 'getCareOf',
        'matchScore' => 'getMatchScore',
        'standardAddress' => 'getStandardAddress'
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
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['barCode'] = isset($data['barCode']) ? $data['barCode'] : null;
        $this->container['applicableRegion'] = isset($data['applicableRegion']) ? $data['applicableRegion'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['careOf'] = isset($data['careOf']) ? $data['careOf'] : null;
        $this->container['matchScore'] = isset($data['matchScore']) ? $data['matchScore'] : null;
        $this->container['standardAddress'] = isset($data['standardAddress']) ? $data['standardAddress'] : null;
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
     * Gets addressType
     * @return string
     */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
     * Sets addressType
     * @param string $addressType Contains the record type of the postal code with which the address was matched.  #### U.S. Addresses Depending on the quantity and quality of the address information provided, this field contains one or two characters:  - One character: sufficient correct information was provided to result in accurate matching. - Two characters: standardization would provide a better address if more or better input address information were available. The second character is D (default).  Blank fields are unassigned. When an address cannot be standardized, how the input data was parsed determines the address type. In this case, standardization may indicate a street, rural route, highway contract, general delivery, or PO box. For possible values, see the description for the `dav_address_type` reply field in [CyberSource Verification Services Using the SCMP API](https://apps.cybersource.com/library/documentation/dev_guides/Verification_Svcs_SCMP_API/html/)  #### All Other Countries This field contains one of the following values: - P: Post. - S: Street. - x: Unknown.
     * @return $this
     */
    public function setAddressType($addressType)
    {

        $this->container['addressType'] = $addressType;

        return $this;
    }

    /**
     * Gets barCode
     * @return \CyberSource\Model\RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationBarCode
     */
    public function getBarCode()
    {
        return $this->container['barCode'];
    }

    /**
     * Sets barCode
     * @param \CyberSource\Model\RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationBarCode $barCode
     * @return $this
     */
    public function setBarCode($barCode)
    {
        $this->container['barCode'] = $barCode;

        return $this;
    }

    /**
     * Gets applicableRegion
     * @return string
     */
    public function getApplicableRegion()
    {
        return $this->container['applicableRegion'];
    }

    /**
     * Sets applicableRegion
     * @param string $applicableRegion Value can be - Canada - US - International The values of errorCode and statusCode mean different things depending on the applicable region. Refer to the guide for more info.
     * @return $this
     */
    public function setApplicableRegion($applicableRegion)
    {

        $this->container['applicableRegion'] = $applicableRegion;

        return $this;
    }

    /**
     * Gets errorCode
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     * @param string $errorCode Four-character error code returned for Canadian, US and international addresses. For possible values, see Verification Services guide. The meaning of the errorCode depends on value of applicableRegion.
     * @return $this
     */
    public function setErrorCode($errorCode)
    {

        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets statusCode
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     * @param string $statusCode Four-to-ten character status code returned for Canadian, US and international addresses. For possible values, see Verification Services guide. The meaning of the errorCode depends on value of applicableRegion.
     * @return $this
     */
    public function setStatusCode($statusCode)
    {

        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets careOf
     * @return string
     */
    public function getCareOf()
    {
        return $this->container['careOf'];
    }

    /**
     * Sets careOf
     * @param string $careOf Care of data dropped from the standard address.
     * @return $this
     */
    public function setCareOf($careOf)
    {

        $this->container['careOf'] = $careOf;

        return $this;
    }

    /**
     * Gets matchScore
     * @return int
     */
    public function getMatchScore()
    {
        return $this->container['matchScore'];
    }

    /**
     * Sets matchScore
     * @param int $matchScore Indicates the probable correctness of the address match. Returned for U.S. and Canadian addresses. Returns a value from 0-9, where 0 is most likely to be correct and 9 is least likely to be correct, or -1 if there is no address match.
     * @return $this
     */
    public function setMatchScore($matchScore)
    {
        $this->container['matchScore'] = $matchScore;

        return $this;
    }

    /**
     * Gets standardAddress
     * @return \CyberSource\Model\RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationStandardAddress
     */
    public function getStandardAddress()
    {
        return $this->container['standardAddress'];
    }

    /**
     * Sets standardAddress
     * @param \CyberSource\Model\RiskV1AddressVerificationsPost201ResponseAddressVerificationInformationStandardAddress $standardAddress
     * @return $this
     */
    public function setStandardAddress($standardAddress)
    {
        $this->container['standardAddress'] = $standardAddress;

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


