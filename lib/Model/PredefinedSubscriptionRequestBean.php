<?php
/**
 * PredefinedSubscriptionRequestBean
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
 * PredefinedSubscriptionRequestBean Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PredefinedSubscriptionRequestBean implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'predefinedSubscriptionRequestBean';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reportDefinitionName' => 'string',
        'subscriptionType' => 'string',
        'reportName' => 'string',
        'reportMimeType' => 'string',
        'reportFrequency' => 'string',
        'reportInterval' => 'string',
        'timezone' => 'string',
        'startTime' => 'string',
        'startDay' => 'int',
        'subscriptionStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reportDefinitionName' => null,
        'subscriptionType' => null,
        'reportName' => null,
        'reportMimeType' => null,
        'reportFrequency' => null,
        'reportInterval' => null,
        'timezone' => null,
        'startTime' => null,
        'startDay' => null,
        'subscriptionStatus' => null
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
        'reportDefinitionName' => 'reportDefinitionName',
        'subscriptionType' => 'subscriptionType',
        'reportName' => 'reportName',
        'reportMimeType' => 'reportMimeType',
        'reportFrequency' => 'reportFrequency',
        'reportInterval' => 'reportInterval',
        'timezone' => 'timezone',
        'startTime' => 'startTime',
        'startDay' => 'startDay',
        'subscriptionStatus' => 'subscriptionStatus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'reportDefinitionName' => 'setReportDefinitionName',
        'subscriptionType' => 'setSubscriptionType',
        'reportName' => 'setReportName',
        'reportMimeType' => 'setReportMimeType',
        'reportFrequency' => 'setReportFrequency',
        'reportInterval' => 'setReportInterval',
        'timezone' => 'setTimezone',
        'startTime' => 'setStartTime',
        'startDay' => 'setStartDay',
        'subscriptionStatus' => 'setSubscriptionStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'reportDefinitionName' => 'getReportDefinitionName',
        'subscriptionType' => 'getSubscriptionType',
        'reportName' => 'getReportName',
        'reportMimeType' => 'getReportMimeType',
        'reportFrequency' => 'getReportFrequency',
        'reportInterval' => 'getReportInterval',
        'timezone' => 'getTimezone',
        'startTime' => 'getStartTime',
        'startDay' => 'getStartDay',
        'subscriptionStatus' => 'getSubscriptionStatus'
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
        $this->container['reportDefinitionName'] = isset($data['reportDefinitionName']) ? $data['reportDefinitionName'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['reportMimeType'] = isset($data['reportMimeType']) ? $data['reportMimeType'] : null;
        $this->container['reportFrequency'] = isset($data['reportFrequency']) ? $data['reportFrequency'] : null;
        $this->container['reportInterval'] = isset($data['reportInterval']) ? $data['reportInterval'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['startDay'] = isset($data['startDay']) ? $data['startDay'] : null;
        $this->container['subscriptionStatus'] = isset($data['subscriptionStatus']) ? $data['subscriptionStatus'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['reportDefinitionName'] === null) {
            $invalid_properties[] = "'reportDefinitionName' can't be null";
        }
        if (!preg_match("/[a-zA-Z]+/", $this->container['reportDefinitionName'])) {
            $invalid_properties[] = "invalid value for 'reportDefinitionName', must be conform to the pattern /[a-zA-Z]+/.";
        }

        if ($this->container['subscriptionType'] === null) {
            $invalid_properties[] = "'subscriptionType' can't be null";
        }
        if (!is_null($this->container['reportName']) && !preg_match("/[a-zA-Z0-9-_ ]+/", $this->container['reportName'])) {
            $invalid_properties[] = "invalid value for 'reportName', must be conform to the pattern /[a-zA-Z0-9-_ ]+/.";
        }

        if (!is_null($this->container['reportInterval']) && !preg_match("/^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/", $this->container['reportInterval'])) {
            $invalid_properties[] = "invalid value for 'reportInterval', must be conform to the pattern /^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/.";
        }

        if (!is_null($this->container['startDay']) && ($this->container['startDay'] > 31)) {
            $invalid_properties[] = "invalid value for 'startDay', must be smaller than or equal to 31.";
        }

        if (!is_null($this->container['startDay']) && ($this->container['startDay'] < 1)) {
            $invalid_properties[] = "invalid value for 'startDay', must be bigger than or equal to 1.";
        }

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

        if ($this->container['reportDefinitionName'] === null) {
            return false;
        }
        if (!preg_match("/[a-zA-Z]+/", $this->container['reportDefinitionName'])) {
            return false;
        }
        if ($this->container['subscriptionType'] === null) {
            return false;
        }
        if (!preg_match("/[a-zA-Z0-9-_ ]+/", $this->container['reportName'])) {
            return false;
        }
        if (!preg_match("/^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/", $this->container['reportInterval'])) {
            return false;
        }
        if ($this->container['startDay'] > 31) {
            return false;
        }
        if ($this->container['startDay'] < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets reportDefinitionName
     * @return string
     */
    public function getReportDefinitionName()
    {
        return $this->container['reportDefinitionName'];
    }

    /**
     * Sets reportDefinitionName
     * @param string $reportDefinitionName Valid Report Definition Name
     * @return $this
     */
    public function setReportDefinitionName($reportDefinitionName)
    {
        if ((!preg_match("/[a-zA-Z]+/", $reportDefinitionName))) {
            throw new \InvalidArgumentException("invalid value for $reportDefinitionName when calling PredefinedSubscriptionRequestBean., must conform to the pattern /[a-zA-Z]+/.");
        }

        $this->container['reportDefinitionName'] = $reportDefinitionName;

        return $this;
    }

    /**
     * Gets subscriptionType
     * @return string
     */
    public function getSubscriptionType()
    {
        return $this->container['subscriptionType'];
    }

    /**
     * Sets subscriptionType
     * @param string $subscriptionType The subscription type for which report definition is required. Valid values are CLASSIC and STANDARD. Valid Values:   - CLASSIC   - STANDARD
     * @return $this
     */
    public function setSubscriptionType($subscriptionType)
    {
        $this->container['subscriptionType'] = $subscriptionType;

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
     * @param string $reportName
     * @return $this
     */
    public function setReportName($reportName)
    {
        if (!is_null($reportName) && (!preg_match("/[a-zA-Z0-9-_ ]+/", $reportName))) {
            throw new \InvalidArgumentException("invalid value for $reportName when calling PredefinedSubscriptionRequestBean., must conform to the pattern /[a-zA-Z0-9-_ ]+/.");
        }

        $this->container['reportName'] = $reportName;

        return $this;
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
     * @param string $reportMimeType Report Format             Valid Values:   - application/xml   - text/csv
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
     * @param string $reportFrequency 'The frequency for which subscription is created. For Standard we can have DAILY, WEEKLY and MONTHLY. But for Classic we will have only DAILY.' **NOTE: Do not document USER_DEFINED Frequency field in developer center** Valid Values: - 'DAILY' - 'WEEKLY' - 'MONTHLY' - 'USER_DEFINED'
     * @return $this
     */
    public function setReportFrequency($reportFrequency)
    {
        $this->container['reportFrequency'] = $reportFrequency;

        return $this;
    }

    /**
     * Gets reportInterval
     * @return string
     */
    public function getReportInterval()
    {
        return $this->container['reportInterval'];
    }

    /**
     * Sets reportInterval
     * @param string $reportInterval If the reportFrequency is User-defined, reportInterval should be in **ISO 8601 time format** Please refer the following link to know more about ISO 8601 format.[Rfc Time Format](https://en.wikipedia.org/wiki/ISO_8601#Durations)  **Example time format for 2 hours and 30 Mins:**   - PT2H30M **NOTE: Do not document reportInterval field in developer center**
     * @return $this
     */
    public function setReportInterval($reportInterval)
    {
        if (!is_null($reportInterval) && (!preg_match("/^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/", $reportInterval))) {
            throw new \InvalidArgumentException("invalid value for $reportInterval when calling PredefinedSubscriptionRequestBean., must conform to the pattern /^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/.");
        }

        $this->container['reportInterval'] = $reportInterval;

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
     * @param string $timezone By Default the timezone for Standard subscription is PST. And for Classic subscription it will be GMT. If user provides any other time zone apart from PST for Standard subscription api should error out.
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
     * @param string $startTime The hour at which the report generation should start. It should be in hhmm format. By Default it will be 0000. The format is 24 hours format.
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
     * @param int $startDay This is the start day if the frequency is WEEKLY or MONTHLY. The value varies from 1-7 for WEEKLY and 1-31 for MONTHLY. For WEEKLY 1 means Sunday and 7 means Saturday. By default the value is 1.
     * @return $this
     */
    public function setStartDay($startDay)
    {
        if (!is_null($startDay) && ($startDay > 31)) {
            throw new \InvalidArgumentException('invalid value for $startDay when calling PredefinedSubscriptionRequestBean., must be smaller than or equal to 31.');
        }
        if (!is_null($startDay) && ($startDay < 1)) {
            throw new \InvalidArgumentException('invalid value for $startDay when calling PredefinedSubscriptionRequestBean., must be bigger than or equal to 1.');
        }

        $this->container['startDay'] = $startDay;

        return $this;
    }

    /**
     * Gets subscriptionStatus
     * @return string
     */
    public function getSubscriptionStatus()
    {
        return $this->container['subscriptionStatus'];
    }

    /**
     * Sets subscriptionStatus
     * @param string $subscriptionStatus The status for subscription which is either created or updated. By default it is ACTIVE. Valid Values:   - ACTIVE   - INACTIVE
     * @return $this
     */
    public function setSubscriptionStatus($subscriptionStatus)
    {
        $this->container['subscriptionStatus'] = $subscriptionStatus;

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


