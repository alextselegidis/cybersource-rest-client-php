<?php
/**
 * PtsV2PayoutsPost201ResponseOrderInformationAmountDetails
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
 * PtsV2PayoutsPost201ResponseOrderInformationAmountDetails Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PayoutsPost201ResponseOrderInformationAmountDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PayoutsPost201Response_orderInformation_amountDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalAmount' => 'string',
        'currency' => 'string',
        'settlementAmount' => 'string',
        'settlementCurrency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalAmount' => null,
        'currency' => null,
        'settlementAmount' => null,
        'settlementCurrency' => null
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
        'totalAmount' => 'totalAmount',
        'currency' => 'currency',
        'settlementAmount' => 'settlementAmount',
        'settlementCurrency' => 'settlementCurrency'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'totalAmount' => 'setTotalAmount',
        'currency' => 'setCurrency',
        'settlementAmount' => 'setSettlementAmount',
        'settlementCurrency' => 'setSettlementCurrency'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'totalAmount' => 'getTotalAmount',
        'currency' => 'getCurrency',
        'settlementAmount' => 'getSettlementAmount',
        'settlementCurrency' => 'getSettlementCurrency'
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
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['settlementAmount'] = isset($data['settlementAmount']) ? $data['settlementAmount'] : null;
        $this->container['settlementCurrency'] = isset($data['settlementCurrency']) ? $data['settlementCurrency'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['totalAmount']) && (strlen($this->container['totalAmount']) > 19)) {
            $invalid_properties[] = "invalid value for 'totalAmount', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['currency']) && (strlen($this->container['currency']) > 3)) {
            $invalid_properties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['settlementAmount']) && (strlen($this->container['settlementAmount']) > 12)) {
            $invalid_properties[] = "invalid value for 'settlementAmount', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['settlementCurrency']) && (strlen($this->container['settlementCurrency']) > 3)) {
            $invalid_properties[] = "invalid value for 'settlementCurrency', the character length must be smaller than or equal to 3.";
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

        if (strlen($this->container['totalAmount']) > 19) {
            return false;
        }
        if (strlen($this->container['currency']) > 3) {
            return false;
        }
        if (strlen($this->container['settlementAmount']) > 12) {
            return false;
        }
        if (strlen($this->container['settlementCurrency']) > 3) {
            return false;
        }
        return true;
    }


    /**
     * Gets totalAmount
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     * @param string $totalAmount Grand total for the order. This value cannot be negative. You can include a decimal point (.), but no other special characters. CyberSource truncates the amount to the correct number of decimal places.  **Note** For CTV, FDCCompass, Paymentech processors, the maximum length for this field is 12.  **Important** Some processors have specific requirements and limitations, such as maximum amounts and maximum field lengths. This information is covered in:  Table 15, \"Authorization Information for Specific Processors,\" on page 43  Table 19, \"Capture Information for Specific Processors,\" on page 58  Table 23, \"Credit Information for Specific Processors,\" on page 75 If your processor supports zero amount authorizations, you can set this field to 0 for the authorization to check if the card is lost or stolen. See \"Zero Amount Authorizations,\" page 247.  **DCC with a Third-Party Provider**\\ Set this field to the converted amount that was returned by the DCC provider. You must include either this field or offer0 and the offerlevel field amount in your request. For details, see \"Dynamic Currency Conversion with a Third Party Provider,\" page 125.  **FDMS South**\\ If you accept IDR or CLP currencies, see the entry for FDMS South in Table 15, \"Authorization Information for Specific Processors,\" on page 43.  **DCC for First Data**\\ Not used.
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        if (!is_null($totalAmount) && (strlen($totalAmount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $totalAmount when calling PtsV2PayoutsPost201ResponseOrderInformationAmountDetails., must be smaller than or equal to 19.');
        }

        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency used for the order. Use the three-character ISO Standard Currency Codes.  For an authorization reversal (`reversalInformation`) or a capture (`processingOptions.capture` is set to `true`), you must use the same currency that you used in your request for Payment API.  **DCC for First Data**\\ Your local currency. For details, see \"Dynamic Currency Conversion for First Data,\" page 113.
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling PtsV2PayoutsPost201ResponseOrderInformationAmountDetails., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets settlementAmount
     * @return string
     */
    public function getSettlementAmount()
    {
        return $this->container['settlementAmount'];
    }

    /**
     * Sets settlementAmount
     * @param string $settlementAmount This is a multicurrency field. It contains the transaction amount (field 4), converted to the Currency used to bill the cardholder’s account.
     * @return $this
     */
    public function setSettlementAmount($settlementAmount)
    {
        if (!is_null($settlementAmount) && (strlen($settlementAmount) > 12)) {
            throw new \InvalidArgumentException('invalid length for $settlementAmount when calling PtsV2PayoutsPost201ResponseOrderInformationAmountDetails., must be smaller than or equal to 12.');
        }

        $this->container['settlementAmount'] = $settlementAmount;

        return $this;
    }

    /**
     * Gets settlementCurrency
     * @return string
     */
    public function getSettlementCurrency()
    {
        return $this->container['settlementCurrency'];
    }

    /**
     * Sets settlementCurrency
     * @param string $settlementCurrency This is a multicurrency-only field. It contains a 3-digit numeric code that identifies the currency used by the issuer to bill the cardholder's account.
     * @return $this
     */
    public function setSettlementCurrency($settlementCurrency)
    {
        if (!is_null($settlementCurrency) && (strlen($settlementCurrency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $settlementCurrency when calling PtsV2PayoutsPost201ResponseOrderInformationAmountDetails., must be smaller than or equal to 3.');
        }

        $this->container['settlementCurrency'] = $settlementCurrency;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
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

