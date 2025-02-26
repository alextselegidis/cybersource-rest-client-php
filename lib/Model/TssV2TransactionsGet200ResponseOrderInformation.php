<?php
/**
 * TssV2TransactionsGet200ResponseOrderInformation
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
 * TssV2TransactionsGet200ResponseOrderInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponseOrderInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_orderInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billTo' => '\CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationBillTo',
        'shipTo' => '\CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationShipTo',
        'lineItems' => '\CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationLineItems[]',
        'amountDetails' => '\CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationAmountDetails',
        'shippingDetails' => '\CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationShippingDetails',
        'invoiceDetails' => '\CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationInvoiceDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billTo' => null,
        'shipTo' => null,
        'lineItems' => null,
        'amountDetails' => null,
        'shippingDetails' => null,
        'invoiceDetails' => null
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
        'billTo' => 'billTo',
        'shipTo' => 'shipTo',
        'lineItems' => 'lineItems',
        'amountDetails' => 'amountDetails',
        'shippingDetails' => 'shippingDetails',
        'invoiceDetails' => 'invoiceDetails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'billTo' => 'setBillTo',
        'shipTo' => 'setShipTo',
        'lineItems' => 'setLineItems',
        'amountDetails' => 'setAmountDetails',
        'shippingDetails' => 'setShippingDetails',
        'invoiceDetails' => 'setInvoiceDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'billTo' => 'getBillTo',
        'shipTo' => 'getShipTo',
        'lineItems' => 'getLineItems',
        'amountDetails' => 'getAmountDetails',
        'shippingDetails' => 'getShippingDetails',
        'invoiceDetails' => 'getInvoiceDetails'
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
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['shipTo'] = isset($data['shipTo']) ? $data['shipTo'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['amountDetails'] = isset($data['amountDetails']) ? $data['amountDetails'] : null;
        $this->container['shippingDetails'] = isset($data['shippingDetails']) ? $data['shippingDetails'] : null;
        $this->container['invoiceDetails'] = isset($data['invoiceDetails']) ? $data['invoiceDetails'] : null;
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
     * Gets billTo
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationBillTo
     */
    public function getBillTo()
    {
        return $this->container['billTo'];
    }

    /**
     * Sets billTo
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationBillTo $billTo
     * @return $this
     */
    public function setBillTo($billTo)
    {
        $this->container['billTo'] = $billTo;

        return $this;
    }

    /**
     * Gets shipTo
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationShipTo
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationShipTo $shipTo
     * @return $this
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

        return $this;
    }

    /**
     * Gets lineItems
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationLineItems[]
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationLineItems[] $lineItems Transaction Line Item data.
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets amountDetails
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationAmountDetails
     */
    public function getAmountDetails()
    {
        return $this->container['amountDetails'];
    }

    /**
     * Sets amountDetails
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationAmountDetails $amountDetails
     * @return $this
     */
    public function setAmountDetails($amountDetails)
    {
        $this->container['amountDetails'] = $amountDetails;

        return $this;
    }

    /**
     * Gets shippingDetails
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationShippingDetails
     */
    public function getShippingDetails()
    {
        return $this->container['shippingDetails'];
    }

    /**
     * Sets shippingDetails
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationShippingDetails $shippingDetails
     * @return $this
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->container['shippingDetails'] = $shippingDetails;

        return $this;
    }

    /**
     * Gets invoiceDetails
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationInvoiceDetails
     */
    public function getInvoiceDetails()
    {
        return $this->container['invoiceDetails'];
    }

    /**
     * Sets invoiceDetails
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponseOrderInformationInvoiceDetails $invoiceDetails
     * @return $this
     */
    public function setInvoiceDetails($invoiceDetails)
    {
        $this->container['invoiceDetails'] = $invoiceDetails;

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


