<?php
/**
 * ReportingV3ReportDefinitionsNameGet200ResponseDefaultSettings
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
 * ReportingV3ReportDefinitionsNameGet200ResponseDefaultSettings Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3ReportDefinitionsNameGet200ResponseDefaultSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3ReportDefinitionsNameGet200Response_defaultSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reportMimeType' => 'string',
        'reportFrequency' => 'string',
        'reportName' => 'string',
        'timezone' => 'string',
        'startTime' => 'string',
        'startDay' => 'int',
        'reportFilters' => 'map[string,string[]]',
        'reportPreferences' => '\CyberSource\Model\Reportingv3reportsReportPreferences'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reportMimeType' => null,
        'reportFrequency' => null,
        'reportName' => null,
        'timezone' => null,
        'startTime' => null,
        'startDay' => 'int32',
        'reportFilters' => null,
        'reportPreferences' => null
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
        'reportMimeType' => 'reportMimeType',
        'reportFrequency' => 'reportFrequency',
        'reportName' => 'reportName',
        'timezone' => 'timezone',
        'startTime' => 'startTime',
        'startDay' => 'startDay',
        'reportFilters' => 'reportFilters',
        'reportPreferences' => 'reportPreferences'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'reportMimeType' => 'setReportMimeType',
        'reportFrequency' => 'setReportFrequency',
        'reportName' => 'setReportName',
        'timezone' => 'setTimezone',
        'startTime' => 'setStartTime',
        'startDay' => 'setStartDay',
        'reportFilters' => 'setReportFilters',
        'reportPreferences' => 'setReportPreferences'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'reportMimeType' => 'getReportMimeType',
        'reportFrequency' => 'getReportFrequency',
        'reportName' => 'getReportName',
        'timezone' => 'getTimezone',
        'startTime' => 'getStartTime',
        'startDay' => 'getStartDay',
        'reportFilters' => 'getReportFilters',
        'reportPreferences' => 'getReportPreferences'
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
        $this->container['reportMimeType'] = isset($data['reportMimeType']) ? $data['reportMimeType'] : null;
        $this->container['reportFrequency'] = isset($data['reportFrequency']) ? $data['reportFrequency'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['startDay'] = isset($data['startDay']) ? $data['startDay'] : null;
        $this->container['reportFilters'] = isset($data['reportFilters']) ? $data['reportFilters'] : null;
        $this->container['reportPreferences'] = isset($data['reportPreferences']) ? $data['reportPreferences'] : null;
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
     * Gets reportMimeType
     * @return string
     */
    public function getReportMimeType()
    {
        return $this->container['reportMimeType'];
    }

    /**
     * Sets reportMimeType
     * @param string $reportMimeType Report Format Valid values:   - application/xml   - text/csv
     * @return $this
     */
    public function setReportMimeType($reportMimeType)
    {
        $this->container['reportMimeType'] = $reportMimeType;

        return $this;
    }

    /**
     * Gets reportFrequency
     * @return string
     */
    public function getReportFrequency()
    {
        return $this->container['reportFrequency'];
    }

    /**
     * Sets reportFrequency
     * @param string $reportFrequency Report Frequency Value Valid Values:   - DAILY   - WEEKLY   - MONTHLY   - ADHOC
     * @return $this
     */
    public function setReportFrequency($reportFrequency)
    {
        $this->container['reportFrequency'] = $reportFrequency;

        return $this;
    }

    /**
     * Gets reportName
     * @return string
     */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
     * Sets reportName
     * @param string $reportName Report Name
     * @return $this
     */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;

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
     * @param string $timezone Time Zone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets startTime
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param string $startTime Start Time
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets startDay
     * @return int
     */
    public function getStartDay()
    {
        return $this->container['startDay'];
    }

    /**
     * Sets startDay
     * @param int $startDay Start Day
     * @return $this
     */
    public function setStartDay($startDay)
    {
        $this->container['startDay'] = $startDay;

        return $this;
    }

    /**
     * Gets reportFilters
     * @return map[string,string[]]
     */
    public function getReportFilters()
    {
        return $this->container['reportFilters'];
    }

    /**
     * Sets reportFilters
     * @param map[string,string[]] $reportFilters List of filters to apply
     * @return $this
     */
    public function setReportFilters($reportFilters)
    {
        $this->container['reportFilters'] = $reportFilters;

        return $this;
    }

    /**
     * Gets reportPreferences
     * @return \CyberSource\Model\Reportingv3reportsReportPreferences
     */
    public function getReportPreferences()
    {
        return $this->container['reportPreferences'];
    }

    /**
     * Sets reportPreferences
     * @param \CyberSource\Model\Reportingv3reportsReportPreferences $reportPreferences
     * @return $this
     */
    public function setReportPreferences($reportPreferences)
    {
        $this->container['reportPreferences'] = $reportPreferences;

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


