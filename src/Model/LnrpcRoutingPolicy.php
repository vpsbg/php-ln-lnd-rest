<?php
/**
 * LnrpcRoutingPolicy
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
 * LnrpcRoutingPolicy Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcRoutingPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcRoutingPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'timeLockDelta' => 'int',
        'minHtlc' => 'string',
        'feeBaseMsat' => 'string',
        'feeRateMilliMsat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'timeLockDelta' => 'int64',
        'minHtlc' => 'int64',
        'feeBaseMsat' => 'int64',
        'feeRateMilliMsat' => 'int64'
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
        'timeLockDelta' => 'time_lock_delta',
        'minHtlc' => 'min_htlc',
        'feeBaseMsat' => 'fee_base_msat',
        'feeRateMilliMsat' => 'fee_rate_milli_msat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timeLockDelta' => 'setTimeLockDelta',
        'minHtlc' => 'setMinHtlc',
        'feeBaseMsat' => 'setFeeBaseMsat',
        'feeRateMilliMsat' => 'setFeeRateMilliMsat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timeLockDelta' => 'getTimeLockDelta',
        'minHtlc' => 'getMinHtlc',
        'feeBaseMsat' => 'getFeeBaseMsat',
        'feeRateMilliMsat' => 'getFeeRateMilliMsat'
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
        $this->container['timeLockDelta'] = isset($data['timeLockDelta']) ? $data['timeLockDelta'] : null;
        $this->container['minHtlc'] = isset($data['minHtlc']) ? $data['minHtlc'] : null;
        $this->container['feeBaseMsat'] = isset($data['feeBaseMsat']) ? $data['feeBaseMsat'] : null;
        $this->container['feeRateMilliMsat'] = isset($data['feeRateMilliMsat']) ? $data['feeRateMilliMsat'] : null;
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
     * Gets timeLockDelta
     *
     * @return int
     */
    public function getTimeLockDelta()
    {
        return $this->container['timeLockDelta'];
    }

    /**
     * Sets timeLockDelta
     *
     * @param int $timeLockDelta timeLockDelta
     *
     * @return $this
     */
    public function setTimeLockDelta($timeLockDelta)
    {
        $this->container['timeLockDelta'] = $timeLockDelta;

        return $this;
    }

    /**
     * Gets minHtlc
     *
     * @return string
     */
    public function getMinHtlc()
    {
        return $this->container['minHtlc'];
    }

    /**
     * Sets minHtlc
     *
     * @param string $minHtlc minHtlc
     *
     * @return $this
     */
    public function setMinHtlc($minHtlc)
    {
        $this->container['minHtlc'] = $minHtlc;

        return $this;
    }

    /**
     * Gets feeBaseMsat
     *
     * @return string
     */
    public function getFeeBaseMsat()
    {
        return $this->container['feeBaseMsat'];
    }

    /**
     * Sets feeBaseMsat
     *
     * @param string $feeBaseMsat feeBaseMsat
     *
     * @return $this
     */
    public function setFeeBaseMsat($feeBaseMsat)
    {
        $this->container['feeBaseMsat'] = $feeBaseMsat;

        return $this;
    }

    /**
     * Gets feeRateMilliMsat
     *
     * @return string
     */
    public function getFeeRateMilliMsat()
    {
        return $this->container['feeRateMilliMsat'];
    }

    /**
     * Sets feeRateMilliMsat
     *
     * @param string $feeRateMilliMsat feeRateMilliMsat
     *
     * @return $this
     */
    public function setFeeRateMilliMsat($feeRateMilliMsat)
    {
        $this->container['feeRateMilliMsat'] = $feeRateMilliMsat;

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


