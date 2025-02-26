<?php
/**
 * Riskv1decisionsOrderInformation
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
 * Riskv1decisionsOrderInformation Class Doc Comment
 *
 * @category    Class
 * @description Contains detailed order-level information.
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1decisionsOrderInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1decisions_orderInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amountDetails' => '\CyberSource\Model\Riskv1decisionsOrderInformationAmountDetails',
        'preOrder' => 'string',
        'preOrderDate' => 'string',
        'reordered' => 'bool',
        'shippingDetails' => '\CyberSource\Model\Riskv1decisionsOrderInformationShippingDetails',
        'shipTo' => '\CyberSource\Model\Riskv1decisionsOrderInformationShipTo',
        'returnsAccepted' => 'bool',
        'lineItems' => '\CyberSource\Model\Riskv1decisionsOrderInformationLineItems[]',
        'billTo' => '\CyberSource\Model\Riskv1decisionsOrderInformationBillTo',
        'totalOffersCount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amountDetails' => null,
        'preOrder' => null,
        'preOrderDate' => null,
        'reordered' => null,
        'shippingDetails' => null,
        'shipTo' => null,
        'returnsAccepted' => null,
        'lineItems' => null,
        'billTo' => null,
        'totalOffersCount' => null
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
        'amountDetails' => 'amountDetails',
        'preOrder' => 'preOrder',
        'preOrderDate' => 'preOrderDate',
        'reordered' => 'reordered',
        'shippingDetails' => 'shippingDetails',
        'shipTo' => 'shipTo',
        'returnsAccepted' => 'returnsAccepted',
        'lineItems' => 'lineItems',
        'billTo' => 'billTo',
        'totalOffersCount' => 'totalOffersCount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amountDetails' => 'setAmountDetails',
        'preOrder' => 'setPreOrder',
        'preOrderDate' => 'setPreOrderDate',
        'reordered' => 'setReordered',
        'shippingDetails' => 'setShippingDetails',
        'shipTo' => 'setShipTo',
        'returnsAccepted' => 'setReturnsAccepted',
        'lineItems' => 'setLineItems',
        'billTo' => 'setBillTo',
        'totalOffersCount' => 'setTotalOffersCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amountDetails' => 'getAmountDetails',
        'preOrder' => 'getPreOrder',
        'preOrderDate' => 'getPreOrderDate',
        'reordered' => 'getReordered',
        'shippingDetails' => 'getShippingDetails',
        'shipTo' => 'getShipTo',
        'returnsAccepted' => 'getReturnsAccepted',
        'lineItems' => 'getLineItems',
        'billTo' => 'getBillTo',
        'totalOffersCount' => 'getTotalOffersCount'
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
        $this->container['amountDetails'] = isset($data['amountDetails']) ? $data['amountDetails'] : null;
        $this->container['preOrder'] = isset($data['preOrder']) ? $data['preOrder'] : null;
        $this->container['preOrderDate'] = isset($data['preOrderDate']) ? $data['preOrderDate'] : null;
        $this->container['reordered'] = isset($data['reordered']) ? $data['reordered'] : null;
        $this->container['shippingDetails'] = isset($data['shippingDetails']) ? $data['shippingDetails'] : null;
        $this->container['shipTo'] = isset($data['shipTo']) ? $data['shipTo'] : null;
        $this->container['returnsAccepted'] = isset($data['returnsAccepted']) ? $data['returnsAccepted'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['totalOffersCount'] = isset($data['totalOffersCount']) ? $data['totalOffersCount'] : null;
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
     * Gets amountDetails
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationAmountDetails
     */
    public function getAmountDetails()
    {
        return $this->container['amountDetails'];
    }

    /**
     * Sets amountDetails
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationAmountDetails $amountDetails
     * @return $this
     */
    public function setAmountDetails($amountDetails)
    {
        $this->container['amountDetails'] = $amountDetails;

        return $this;
    }

    /**
     * Gets preOrder
     * @return string
     */
    public function getPreOrder()
    {
        return $this->container['preOrder'];
    }

    /**
     * Sets preOrder
     * @param string $preOrder Indicates whether cardholder is placing an order with a future availability or release date. This field can contain one of these values: - MERCHANDISE_AVAILABLE: Merchandise available - FUTURE_AVAILABILITY: Future availability
     * @return $this
     */
    public function setPreOrder($preOrder)
    {
        $this->container['preOrder'] = $preOrder;

        return $this;
    }

    /**
     * Gets preOrderDate
     * @return string
     */
    public function getPreOrderDate()
    {
        return $this->container['preOrderDate'];
    }

    /**
     * Sets preOrderDate
     * @param string $preOrderDate Expected date that a pre-ordered purchase will be available. Format: YYYYMMDD
     * @return $this
     */
    public function setPreOrderDate($preOrderDate)
    {

        $this->container['preOrderDate'] = $preOrderDate;

        return $this;
    }

    /**
     * Gets reordered
     * @return bool
     */
    public function getReordered()
    {
        return $this->container['reordered'];
    }

    /**
     * Sets reordered
     * @param bool $reordered Indicates whether the cardholder is reordering previously purchased merchandise. This field can contain one of these values: - false: First time ordered - true: Reordered
     * @return $this
     */
    public function setReordered($reordered)
    {
        $this->container['reordered'] = $reordered;

        return $this;
    }

    /**
     * Gets shippingDetails
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationShippingDetails
     */
    public function getShippingDetails()
    {
        return $this->container['shippingDetails'];
    }

    /**
     * Sets shippingDetails
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationShippingDetails $shippingDetails
     * @return $this
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->container['shippingDetails'] = $shippingDetails;

        return $this;
    }

    /**
     * Gets shipTo
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationShipTo
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationShipTo $shipTo
     * @return $this
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

        return $this;
    }

    /**
     * Gets returnsAccepted
     * @return bool
     */
    public function getReturnsAccepted()
    {
        return $this->container['returnsAccepted'];
    }

    /**
     * Sets returnsAccepted
     * @param bool $returnsAccepted Boolean that indicates whether returns are accepted for this order. This field can contain one of the following values: - true: Returns are accepted for this order. - false: Returns are not accepted for this order.
     * @return $this
     */
    public function setReturnsAccepted($returnsAccepted)
    {
        $this->container['returnsAccepted'] = $returnsAccepted;

        return $this;
    }

    /**
     * Gets lineItems
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationLineItems[]
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationLineItems[] $lineItems This array contains detailed information about individual products in the order.
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets billTo
     * @return \CyberSource\Model\Riskv1decisionsOrderInformationBillTo
     */
    public function getBillTo()
    {
        return $this->container['billTo'];
    }

    /**
     * Sets billTo
     * @param \CyberSource\Model\Riskv1decisionsOrderInformationBillTo $billTo
     * @return $this
     */
    public function setBillTo($billTo)
    {
        $this->container['billTo'] = $billTo;

        return $this;
    }

    /**
     * Gets totalOffersCount
     * @return string
     */
    public function getTotalOffersCount()
    {
        return $this->container['totalOffersCount'];
    }

    /**
     * Sets totalOffersCount
     * @param string $totalOffersCount Total number of articles/items in the order as a numeric decimal count. Possible values: 00 - 99
     * @return $this
     */
    public function setTotalOffersCount($totalOffersCount)
    {

        $this->container['totalOffersCount'] = $totalOffersCount;

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


