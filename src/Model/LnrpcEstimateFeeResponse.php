<?php
/**
 * LnrpcEstimateFeeResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * rpc.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Lnd\Rest\Model;

use \ArrayAccess;
use \Lnd\Rest\ObjectSerializer;

/**
 * LnrpcEstimateFeeResponse Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcEstimateFeeResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcEstimateFeeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'feeSat' => 'string',
        'feerateSatPerByte' => 'string',
        'satPerVbyte' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'feeSat' => 'int64',
        'feerateSatPerByte' => 'int64',
        'satPerVbyte' => 'uint64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'feeSat' => 'fee_sat',
        'feerateSatPerByte' => 'feerate_sat_per_byte',
        'satPerVbyte' => 'sat_per_vbyte'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feeSat' => 'setFeeSat',
        'feerateSatPerByte' => 'setFeerateSatPerByte',
        'satPerVbyte' => 'setSatPerVbyte'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feeSat' => 'getFeeSat',
        'feerateSatPerByte' => 'getFeerateSatPerByte',
        'satPerVbyte' => 'getSatPerVbyte'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['feeSat'] = isset($data['feeSat']) ? $data['feeSat'] : null;
        $this->container['feerateSatPerByte'] = isset($data['feerateSatPerByte']) ? $data['feerateSatPerByte'] : null;
        $this->container['satPerVbyte'] = isset($data['satPerVbyte']) ? $data['satPerVbyte'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets feeSat
     *
     * @return string
     */
    public function getFeeSat()
    {
        return $this->container['feeSat'];
    }

    /**
     * Sets feeSat
     *
     * @param string $feeSat The total fee in satoshis.
     *
     * @return $this
     */
    public function setFeeSat($feeSat)
    {
        $this->container['feeSat'] = $feeSat;

        return $this;
    }

    /**
     * Gets feerateSatPerByte
     *
     * @return string
     */
    public function getFeerateSatPerByte()
    {
        return $this->container['feerateSatPerByte'];
    }

    /**
     * Sets feerateSatPerByte
     *
     * @param string $feerateSatPerByte Deprecated, use sat_per_vbyte. The fee rate in satoshi/vbyte.
     *
     * @return $this
     */
    public function setFeerateSatPerByte($feerateSatPerByte)
    {
        $this->container['feerateSatPerByte'] = $feerateSatPerByte;

        return $this;
    }

    /**
     * Gets satPerVbyte
     *
     * @return string
     */
    public function getSatPerVbyte()
    {
        return $this->container['satPerVbyte'];
    }

    /**
     * Sets satPerVbyte
     *
     * @param string $satPerVbyte The fee rate in satoshi/vbyte.
     *
     * @return $this
     */
    public function setSatPerVbyte($satPerVbyte)
    {
        $this->container['satPerVbyte'] = $satPerVbyte;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


