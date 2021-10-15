<?php
/**
 * LnrpcUtxo
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
 * LnrpcUtxo Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcUtxo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcUtxo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addressType' => '\Lnd\Rest\Model\LnrpcAddressType',
        'address' => 'string',
        'amountSat' => 'string',
        'pkScript' => 'string',
        'outpoint' => '\Lnd\Rest\Model\LnrpcOutPoint',
        'confirmations' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addressType' => null,
        'address' => null,
        'amountSat' => 'int64',
        'pkScript' => null,
        'outpoint' => null,
        'confirmations' => 'int64'
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
        'addressType' => 'address_type',
        'address' => 'address',
        'amountSat' => 'amount_sat',
        'pkScript' => 'pk_script',
        'outpoint' => 'outpoint',
        'confirmations' => 'confirmations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addressType' => 'setAddressType',
        'address' => 'setAddress',
        'amountSat' => 'setAmountSat',
        'pkScript' => 'setPkScript',
        'outpoint' => 'setOutpoint',
        'confirmations' => 'setConfirmations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addressType' => 'getAddressType',
        'address' => 'getAddress',
        'amountSat' => 'getAmountSat',
        'pkScript' => 'getPkScript',
        'outpoint' => 'getOutpoint',
        'confirmations' => 'getConfirmations'
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
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['amountSat'] = isset($data['amountSat']) ? $data['amountSat'] : null;
        $this->container['pkScript'] = isset($data['pkScript']) ? $data['pkScript'] : null;
        $this->container['outpoint'] = isset($data['outpoint']) ? $data['outpoint'] : null;
        $this->container['confirmations'] = isset($data['confirmations']) ? $data['confirmations'] : null;
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
     * Gets addressType
     *
     * @return \Lnd\Rest\Model\LnrpcAddressType
     */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
     * Sets addressType
     *
     * @param \Lnd\Rest\Model\LnrpcAddressType $addressType addressType
     *
     * @return $this
     */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;

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
     * Gets amountSat
     *
     * @return string
     */
    public function getAmountSat()
    {
        return $this->container['amountSat'];
    }

    /**
     * Sets amountSat
     *
     * @param string $amountSat amountSat
     *
     * @return $this
     */
    public function setAmountSat($amountSat)
    {
        $this->container['amountSat'] = $amountSat;

        return $this;
    }

    /**
     * Gets pkScript
     *
     * @return string
     */
    public function getPkScript()
    {
        return $this->container['pkScript'];
    }

    /**
     * Sets pkScript
     *
     * @param string $pkScript pkScript
     *
     * @return $this
     */
    public function setPkScript($pkScript)
    {
        $this->container['pkScript'] = $pkScript;

        return $this;
    }

    /**
     * Gets outpoint
     *
     * @return \Lnd\Rest\Model\LnrpcOutPoint
     */
    public function getOutpoint()
    {
        return $this->container['outpoint'];
    }

    /**
     * Sets outpoint
     *
     * @param \Lnd\Rest\Model\LnrpcOutPoint $outpoint outpoint
     *
     * @return $this
     */
    public function setOutpoint($outpoint)
    {
        $this->container['outpoint'] = $outpoint;

        return $this;
    }

    /**
     * Gets confirmations
     *
     * @return string
     */
    public function getConfirmations()
    {
        return $this->container['confirmations'];
    }

    /**
     * Sets confirmations
     *
     * @param string $confirmations confirmations
     *
     * @return $this
     */
    public function setConfirmations($confirmations)
    {
        $this->container['confirmations'] = $confirmations;

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


