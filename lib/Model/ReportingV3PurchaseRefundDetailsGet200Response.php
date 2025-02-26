<?php
/**
 * ReportingV3PurchaseRefundDetailsGet200Response
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
 * ReportingV3PurchaseRefundDetailsGet200Response Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3PurchaseRefundDetailsGet200Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3PurchaseRefundDetailsGet200Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'offset' => 'int',
        'limit' => 'int',
        'pageResults' => 'int',
        'requestDetails' => '\CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseRequestDetails[]',
        'settlements' => '\CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseSettlements[]',
        'authorizations' => '\CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseAuthorizations[]',
        'feeAndFundingDetails' => '\CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseFeeAndFundingDetails[]',
        'others' => '\CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseOthers[]',
        'settlementStatuses' => '\CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseSettlementStatuses[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'offset' => null,
        'limit' => null,
        'pageResults' => null,
        'requestDetails' => null,
        'settlements' => null,
        'authorizations' => null,
        'feeAndFundingDetails' => null,
        'others' => null,
        'settlementStatuses' => null
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
        'offset' => 'offset',
        'limit' => 'limit',
        'pageResults' => 'pageResults',
        'requestDetails' => 'requestDetails',
        'settlements' => 'settlements',
        'authorizations' => 'authorizations',
        'feeAndFundingDetails' => 'feeAndFundingDetails',
        'others' => 'others',
        'settlementStatuses' => 'settlementStatuses'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'offset' => 'setOffset',
        'limit' => 'setLimit',
        'pageResults' => 'setPageResults',
        'requestDetails' => 'setRequestDetails',
        'settlements' => 'setSettlements',
        'authorizations' => 'setAuthorizations',
        'feeAndFundingDetails' => 'setFeeAndFundingDetails',
        'others' => 'setOthers',
        'settlementStatuses' => 'setSettlementStatuses'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'offset' => 'getOffset',
        'limit' => 'getLimit',
        'pageResults' => 'getPageResults',
        'requestDetails' => 'getRequestDetails',
        'settlements' => 'getSettlements',
        'authorizations' => 'getAuthorizations',
        'feeAndFundingDetails' => 'getFeeAndFundingDetails',
        'others' => 'getOthers',
        'settlementStatuses' => 'getSettlementStatuses'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pageResults'] = isset($data['pageResults']) ? $data['pageResults'] : null;
        $this->container['requestDetails'] = isset($data['requestDetails']) ? $data['requestDetails'] : null;
        $this->container['settlements'] = isset($data['settlements']) ? $data['settlements'] : null;
        $this->container['authorizations'] = isset($data['authorizations']) ? $data['authorizations'] : null;
        $this->container['feeAndFundingDetails'] = isset($data['feeAndFundingDetails']) ? $data['feeAndFundingDetails'] : null;
        $this->container['others'] = isset($data['others']) ? $data['others'] : null;
        $this->container['settlementStatuses'] = isset($data['settlementStatuses']) ? $data['settlementStatuses'] : null;
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
     * Gets offset
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     * @param int $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets pageResults
     * @return int
     */
    public function getPageResults()
    {
        return $this->container['pageResults'];
    }

    /**
     * Sets pageResults
     * @param int $pageResults
     * @return $this
     */
    public function setPageResults($pageResults)
    {
        $this->container['pageResults'] = $pageResults;

        return $this;
    }

    /**
     * Gets requestDetails
     * @return \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseRequestDetails[]
     */
    public function getRequestDetails()
    {
        return $this->container['requestDetails'];
    }

    /**
     * Sets requestDetails
     * @param \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseRequestDetails[] $requestDetails List of Request Info values
     * @return $this
     */
    public function setRequestDetails($requestDetails)
    {
        $this->container['requestDetails'] = $requestDetails;

        return $this;
    }

    /**
     * Gets settlements
     * @return \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseSettlements[]
     */
    public function getSettlements()
    {
        return $this->container['settlements'];
    }

    /**
     * Sets settlements
     * @param \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseSettlements[] $settlements List of Settlement Info values
     * @return $this
     */
    public function setSettlements($settlements)
    {
        $this->container['settlements'] = $settlements;

        return $this;
    }

    /**
     * Gets authorizations
     * @return \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseAuthorizations[]
     */
    public function getAuthorizations()
    {
        return $this->container['authorizations'];
    }

    /**
     * Sets authorizations
     * @param \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseAuthorizations[] $authorizations List of Authorization Info values
     * @return $this
     */
    public function setAuthorizations($authorizations)
    {
        $this->container['authorizations'] = $authorizations;

        return $this;
    }

    /**
     * Gets feeAndFundingDetails
     * @return \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseFeeAndFundingDetails[]
     */
    public function getFeeAndFundingDetails()
    {
        return $this->container['feeAndFundingDetails'];
    }

    /**
     * Sets feeAndFundingDetails
     * @param \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseFeeAndFundingDetails[] $feeAndFundingDetails List of Fee Funding Info values
     * @return $this
     */
    public function setFeeAndFundingDetails($feeAndFundingDetails)
    {
        $this->container['feeAndFundingDetails'] = $feeAndFundingDetails;

        return $this;
    }

    /**
     * Gets others
     * @return \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseOthers[]
     */
    public function getOthers()
    {
        return $this->container['others'];
    }

    /**
     * Sets others
     * @param \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseOthers[] $others List of Other Info values
     * @return $this
     */
    public function setOthers($others)
    {
        $this->container['others'] = $others;

        return $this;
    }

    /**
     * Gets settlementStatuses
     * @return \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseSettlementStatuses[]
     */
    public function getSettlementStatuses()
    {
        return $this->container['settlementStatuses'];
    }

    /**
     * Sets settlementStatuses
     * @param \CyberSource\Model\ReportingV3PurchaseRefundDetailsGet200ResponseSettlementStatuses[] $settlementStatuses List of Settlement Status Info values
     * @return $this
     */
    public function setSettlementStatuses($settlementStatuses)
    {
        $this->container['settlementStatuses'] = $settlementStatuses;

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


