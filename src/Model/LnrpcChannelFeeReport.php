<?php
/**
 * LnrpcChannelFeeReport
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
 * LnrpcChannelFeeReport Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcChannelFeeReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcChannelFeeReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chanPoint' => 'string',
        'baseFeeMsat' => 'string',
        'feePerMil' => 'string',
        'feeRate' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chanPoint' => null,
        'baseFeeMsat' => 'int64',
        'feePerMil' => 'int64',
        'feeRate' => 'double'
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
        'chanPoint' => 'chan_point',
        'baseFeeMsat' => 'base_fee_msat',
        'feePerMil' => 'fee_per_mil',
        'feeRate' => 'fee_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chanPoint' => 'setChanPoint',
        'baseFeeMsat' => 'setBaseFeeMsat',
        'feePerMil' => 'setFeePerMil',
        'feeRate' => 'setFeeRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chanPoint' => 'getChanPoint',
        'baseFeeMsat' => 'getBaseFeeMsat',
        'feePerMil' => 'getFeePerMil',
        'feeRate' => 'getFeeRate'
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
        $this->container['chanPoint'] = isset($data['chanPoint']) ? $data['chanPoint'] : null;
        $this->container['baseFeeMsat'] = isset($data['baseFeeMsat']) ? $data['baseFeeMsat'] : null;
        $this->container['feePerMil'] = isset($data['feePerMil']) ? $data['feePerMil'] : null;
        $this->container['feeRate'] = isset($data['feeRate']) ? $data['feeRate'] : null;
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
     * Gets chanPoint
     *
     * @return string
     */
    public function getChanPoint()
    {
        return $this->container['chanPoint'];
    }

    /**
     * Sets chanPoint
     *
     * @param string $chanPoint / The channel that this fee report belongs to.
     *
     * @return $this
     */
    public function setChanPoint($chanPoint)
    {
        $this->container['chanPoint'] = $chanPoint;

        return $this;
    }

    /**
     * Gets baseFeeMsat
     *
     * @return string
     */
    public function getBaseFeeMsat()
    {
        return $this->container['baseFeeMsat'];
    }

    /**
     * Sets baseFeeMsat
     *
     * @param string $baseFeeMsat / The base fee charged regardless of the number of milli-satoshis sent.
     *
     * @return $this
     */
    public function setBaseFeeMsat($baseFeeMsat)
    {
        $this->container['baseFeeMsat'] = $baseFeeMsat;

        return $this;
    }

    /**
     * Gets feePerMil
     *
     * @return string
     */
    public function getFeePerMil()
    {
        return $this->container['feePerMil'];
    }

    /**
     * Sets feePerMil
     *
     * @param string $feePerMil / The amount charged per milli-satoshis transferred expressed in millionths of a satoshi.
     *
     * @return $this
     */
    public function setFeePerMil($feePerMil)
    {
        $this->container['feePerMil'] = $feePerMil;

        return $this;
    }

    /**
     * Gets feeRate
     *
     * @return double
     */
    public function getFeeRate()
    {
        return $this->container['feeRate'];
    }

    /**
     * Sets feeRate
     *
     * @param double $feeRate / The effective fee rate in milli-satoshis. Computed by dividing the fee_per_mil value by 1 million.
     *
     * @return $this
     */
    public function setFeeRate($feeRate)
    {
        $this->container['feeRate'] = $feeRate;

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


