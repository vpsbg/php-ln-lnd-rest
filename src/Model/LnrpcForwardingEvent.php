<?php
/**
 * LnrpcForwardingEvent
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
 * Swagger Codegen version: 2.3.1
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
 * LnrpcForwardingEvent Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcForwardingEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcForwardingEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timestamp' => 'string',
        'chanIdIn' => 'string',
        'chanIdOut' => 'string',
        'amtIn' => 'string',
        'amtOut' => 'string',
        'fee' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timestamp' => 'uint64',
        'chanIdIn' => 'uint64',
        'chanIdOut' => 'uint64',
        'amtIn' => 'uint64',
        'amtOut' => 'uint64',
        'fee' => 'uint64'
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
        'timestamp' => 'timestamp',
        'chanIdIn' => 'chan_id_in',
        'chanIdOut' => 'chan_id_out',
        'amtIn' => 'amt_in',
        'amtOut' => 'amt_out',
        'fee' => 'fee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timestamp' => 'setTimestamp',
        'chanIdIn' => 'setChanIdIn',
        'chanIdOut' => 'setChanIdOut',
        'amtIn' => 'setAmtIn',
        'amtOut' => 'setAmtOut',
        'fee' => 'setFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timestamp' => 'getTimestamp',
        'chanIdIn' => 'getChanIdIn',
        'chanIdOut' => 'getChanIdOut',
        'amtIn' => 'getAmtIn',
        'amtOut' => 'getAmtOut',
        'fee' => 'getFee'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['chanIdIn'] = isset($data['chanIdIn']) ? $data['chanIdIn'] : null;
        $this->container['chanIdOut'] = isset($data['chanIdOut']) ? $data['chanIdOut'] : null;
        $this->container['amtIn'] = isset($data['amtIn']) ? $data['amtIn'] : null;
        $this->container['amtOut'] = isset($data['amtOut']) ? $data['amtOut'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
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

        return true;
    }


    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp / Timestamp is the time (unix epoch offset) that this circuit was completed.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets chanIdIn
     *
     * @return string
     */
    public function getChanIdIn()
    {
        return $this->container['chanIdIn'];
    }

    /**
     * Sets chanIdIn
     *
     * @param string $chanIdIn / The incoming channel ID that carried the HTLC that created the circuit.
     *
     * @return $this
     */
    public function setChanIdIn($chanIdIn)
    {
        $this->container['chanIdIn'] = $chanIdIn;

        return $this;
    }

    /**
     * Gets chanIdOut
     *
     * @return string
     */
    public function getChanIdOut()
    {
        return $this->container['chanIdOut'];
    }

    /**
     * Sets chanIdOut
     *
     * @param string $chanIdOut / The outgoing channel ID that carried the preimage that completed the circuit.
     *
     * @return $this
     */
    public function setChanIdOut($chanIdOut)
    {
        $this->container['chanIdOut'] = $chanIdOut;

        return $this;
    }

    /**
     * Gets amtIn
     *
     * @return string
     */
    public function getAmtIn()
    {
        return $this->container['amtIn'];
    }

    /**
     * Sets amtIn
     *
     * @param string $amtIn / The total amount of the incoming HTLC that created half the circuit.
     *
     * @return $this
     */
    public function setAmtIn($amtIn)
    {
        $this->container['amtIn'] = $amtIn;

        return $this;
    }

    /**
     * Gets amtOut
     *
     * @return string
     */
    public function getAmtOut()
    {
        return $this->container['amtOut'];
    }

    /**
     * Sets amtOut
     *
     * @param string $amtOut / The total amount of the outgoign HTLC that created the second half of the circuit.
     *
     * @return $this
     */
    public function setAmtOut($amtOut)
    {
        $this->container['amtOut'] = $amtOut;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string $fee / The total fee that this payment circuit carried.
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

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


