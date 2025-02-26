<?php
/**
 * UmsV1UsersGet200ResponseAccountInformation
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
 * UmsV1UsersGet200ResponseAccountInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UmsV1UsersGet200ResponseAccountInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'umsV1UsersGet200Response_accountInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userName' => 'string',
        'roleId' => 'string',
        'permissions' => 'string[]',
        'status' => 'string',
        'createdTime' => '\DateTime',
        'lastAccessTime' => '\DateTime',
        'languagePreference' => 'string',
        'timezone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'userName' => null,
        'roleId' => null,
        'permissions' => null,
        'status' => null,
        'createdTime' => 'date-time',
        'lastAccessTime' => 'date-time',
        'languagePreference' => null,
        'timezone' => null
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
        'userName' => 'userName',
        'roleId' => 'roleId',
        'permissions' => 'permissions',
        'status' => 'status',
        'createdTime' => 'createdTime',
        'lastAccessTime' => 'lastAccessTime',
        'languagePreference' => 'languagePreference',
        'timezone' => 'timezone'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'userName' => 'setUserName',
        'roleId' => 'setRoleId',
        'permissions' => 'setPermissions',
        'status' => 'setStatus',
        'createdTime' => 'setCreatedTime',
        'lastAccessTime' => 'setLastAccessTime',
        'languagePreference' => 'setLanguagePreference',
        'timezone' => 'setTimezone'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'userName' => 'getUserName',
        'roleId' => 'getRoleId',
        'permissions' => 'getPermissions',
        'status' => 'getStatus',
        'createdTime' => 'getCreatedTime',
        'lastAccessTime' => 'getLastAccessTime',
        'languagePreference' => 'getLanguagePreference',
        'timezone' => 'getTimezone'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastAccessTime'] = isset($data['lastAccessTime']) ? $data['lastAccessTime'] : null;
        $this->container['languagePreference'] = isset($data['languagePreference']) ? $data['languagePreference'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
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
     * Gets userName
     * @return string
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

        return $this;
    }

    /**
     * Gets roleId
     * @return string
     */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
     * Sets roleId
     * @param string $roleId
     * @return $this
     */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;

        return $this;
    }

    /**
     * Gets permissions
     * @return string[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     * @param string[] $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

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
     * @param string $status Valid values: - active - inactive - locked - disabled - forgotpassword - deleted
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets createdTime
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     * @param \DateTime $createdTime
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets lastAccessTime
     * @return \DateTime
     */
    public function getLastAccessTime()
    {
        return $this->container['lastAccessTime'];
    }

    /**
     * Sets lastAccessTime
     * @param \DateTime $lastAccessTime
     * @return $this
     */
    public function setLastAccessTime($lastAccessTime)
    {
        $this->container['lastAccessTime'] = $lastAccessTime;

        return $this;
    }

    /**
     * Gets languagePreference
     * @return string
     */
    public function getLanguagePreference()
    {
        return $this->container['languagePreference'];
    }

    /**
     * Sets languagePreference
     * @param string $languagePreference
     * @return $this
     */
    public function setLanguagePreference($languagePreference)
    {
        $this->container['languagePreference'] = $languagePreference;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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


