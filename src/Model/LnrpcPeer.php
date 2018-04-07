<?php
/**
 * LnrpcPeer
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
 * LnrpcPeer Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcPeer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcPeer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pubKey' => 'string',
        'address' => 'string',
        'bytesSent' => 'string',
        'bytesRecv' => 'string',
        'satSent' => 'string',
        'satRecv' => 'string',
        'inbound' => 'bool',
        'pingTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pubKey' => null,
        'address' => null,
        'bytesSent' => 'uint64',
        'bytesRecv' => 'uint64',
        'satSent' => 'int64',
        'satRecv' => 'int64',
        'inbound' => 'boolean',
        'pingTime' => 'int64'
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
        'pubKey' => 'pub_key',
        'address' => 'address',
        'bytesSent' => 'bytes_sent',
        'bytesRecv' => 'bytes_recv',
        'satSent' => 'sat_sent',
        'satRecv' => 'sat_recv',
        'inbound' => 'inbound',
        'pingTime' => 'ping_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pubKey' => 'setPubKey',
        'address' => 'setAddress',
        'bytesSent' => 'setBytesSent',
        'bytesRecv' => 'setBytesRecv',
        'satSent' => 'setSatSent',
        'satRecv' => 'setSatRecv',
        'inbound' => 'setInbound',
        'pingTime' => 'setPingTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pubKey' => 'getPubKey',
        'address' => 'getAddress',
        'bytesSent' => 'getBytesSent',
        'bytesRecv' => 'getBytesRecv',
        'satSent' => 'getSatSent',
        'satRecv' => 'getSatRecv',
        'inbound' => 'getInbound',
        'pingTime' => 'getPingTime'
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
        $this->container['pubKey'] = isset($data['pubKey']) ? $data['pubKey'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['bytesSent'] = isset($data['bytesSent']) ? $data['bytesSent'] : null;
        $this->container['bytesRecv'] = isset($data['bytesRecv']) ? $data['bytesRecv'] : null;
        $this->container['satSent'] = isset($data['satSent']) ? $data['satSent'] : null;
        $this->container['satRecv'] = isset($data['satRecv']) ? $data['satRecv'] : null;
        $this->container['inbound'] = isset($data['inbound']) ? $data['inbound'] : null;
        $this->container['pingTime'] = isset($data['pingTime']) ? $data['pingTime'] : null;
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
     * Gets pubKey
     *
     * @return string
     */
    public function getPubKey()
    {
        return $this->container['pubKey'];
    }

    /**
     * Sets pubKey
     *
     * @param string $pubKey pubKey
     *
     * @return $this
     */
    public function setPubKey($pubKey)
    {
        $this->container['pubKey'] = $pubKey;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets bytesSent
     *
     * @return string
     */
    public function getBytesSent()
    {
        return $this->container['bytesSent'];
    }

    /**
     * Sets bytesSent
     *
     * @param string $bytesSent bytesSent
     *
     * @return $this
     */
    public function setBytesSent($bytesSent)
    {
        $this->container['bytesSent'] = $bytesSent;

        return $this;
    }

    /**
     * Gets bytesRecv
     *
     * @return string
     */
    public function getBytesRecv()
    {
        return $this->container['bytesRecv'];
    }

    /**
     * Sets bytesRecv
     *
     * @param string $bytesRecv bytesRecv
     *
     * @return $this
     */
    public function setBytesRecv($bytesRecv)
    {
        $this->container['bytesRecv'] = $bytesRecv;

        return $this;
    }

    /**
     * Gets satSent
     *
     * @return string
     */
    public function getSatSent()
    {
        return $this->container['satSent'];
    }

    /**
     * Sets satSent
     *
     * @param string $satSent satSent
     *
     * @return $this
     */
    public function setSatSent($satSent)
    {
        $this->container['satSent'] = $satSent;

        return $this;
    }

    /**
     * Gets satRecv
     *
     * @return string
     */
    public function getSatRecv()
    {
        return $this->container['satRecv'];
    }

    /**
     * Sets satRecv
     *
     * @param string $satRecv satRecv
     *
     * @return $this
     */
    public function setSatRecv($satRecv)
    {
        $this->container['satRecv'] = $satRecv;

        return $this;
    }

    /**
     * Gets inbound
     *
     * @return bool
     */
    public function getInbound()
    {
        return $this->container['inbound'];
    }

    /**
     * Sets inbound
     *
     * @param bool $inbound inbound
     *
     * @return $this
     */
    public function setInbound($inbound)
    {
        $this->container['inbound'] = $inbound;

        return $this;
    }

    /**
     * Gets pingTime
     *
     * @return string
     */
    public function getPingTime()
    {
        return $this->container['pingTime'];
    }

    /**
     * Sets pingTime
     *
     * @param string $pingTime pingTime
     *
     * @return $this
     */
    public function setPingTime($pingTime)
    {
        $this->container['pingTime'] = $pingTime;

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


