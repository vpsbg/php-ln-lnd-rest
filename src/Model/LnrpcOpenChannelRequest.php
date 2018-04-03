<?php
/**
 * LnrpcOpenChannelRequest
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
 * Swagger Codegen version: 2.3.0
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
 * LnrpcOpenChannelRequest Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcOpenChannelRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcOpenChannelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nodePubkey' => 'string',
        'nodePubkeyString' => 'string',
        'localFundingAmount' => 'string',
        'pushSat' => 'string',
        'targetConf' => 'int',
        'satPerByte' => 'string',
        'private' => 'bool',
        'minHtlcMsat' => 'string',
        'remoteCsvDelay' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nodePubkey' => 'byte',
        'nodePubkeyString' => null,
        'localFundingAmount' => 'int64',
        'pushSat' => 'int64',
        'targetConf' => 'int32',
        'satPerByte' => 'int64',
        'private' => 'boolean',
        'minHtlcMsat' => 'int64',
        'remoteCsvDelay' => 'int64'
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
        'nodePubkey' => 'node_pubkey',
        'nodePubkeyString' => 'node_pubkey_string',
        'localFundingAmount' => 'local_funding_amount',
        'pushSat' => 'push_sat',
        'targetConf' => 'target_conf',
        'satPerByte' => 'sat_per_byte',
        'private' => 'private',
        'minHtlcMsat' => 'min_htlc_msat',
        'remoteCsvDelay' => 'remote_csv_delay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nodePubkey' => 'setNodePubkey',
        'nodePubkeyString' => 'setNodePubkeyString',
        'localFundingAmount' => 'setLocalFundingAmount',
        'pushSat' => 'setPushSat',
        'targetConf' => 'setTargetConf',
        'satPerByte' => 'setSatPerByte',
        'private' => 'setPrivate',
        'minHtlcMsat' => 'setMinHtlcMsat',
        'remoteCsvDelay' => 'setRemoteCsvDelay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nodePubkey' => 'getNodePubkey',
        'nodePubkeyString' => 'getNodePubkeyString',
        'localFundingAmount' => 'getLocalFundingAmount',
        'pushSat' => 'getPushSat',
        'targetConf' => 'getTargetConf',
        'satPerByte' => 'getSatPerByte',
        'private' => 'getPrivate',
        'minHtlcMsat' => 'getMinHtlcMsat',
        'remoteCsvDelay' => 'getRemoteCsvDelay'
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
        $this->container['nodePubkey'] = isset($data['nodePubkey']) ? $data['nodePubkey'] : null;
        $this->container['nodePubkeyString'] = isset($data['nodePubkeyString']) ? $data['nodePubkeyString'] : null;
        $this->container['localFundingAmount'] = isset($data['localFundingAmount']) ? $data['localFundingAmount'] : null;
        $this->container['pushSat'] = isset($data['pushSat']) ? $data['pushSat'] : null;
        $this->container['targetConf'] = isset($data['targetConf']) ? $data['targetConf'] : null;
        $this->container['satPerByte'] = isset($data['satPerByte']) ? $data['satPerByte'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
        $this->container['minHtlcMsat'] = isset($data['minHtlcMsat']) ? $data['minHtlcMsat'] : null;
        $this->container['remoteCsvDelay'] = isset($data['remoteCsvDelay']) ? $data['remoteCsvDelay'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['nodePubkey']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['nodePubkey'])) {
            $invalidProperties[] = "invalid value for 'nodePubkey', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

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

        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['nodePubkey'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets nodePubkey
     *
     * @return string
     */
    public function getNodePubkey()
    {
        return $this->container['nodePubkey'];
    }

    /**
     * Sets nodePubkey
     *
     * @param string $nodePubkey nodePubkey
     *
     * @return $this
     */
    public function setNodePubkey($nodePubkey)
    {

        if (!is_null($nodePubkey) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $nodePubkey))) {
            throw new \InvalidArgumentException("invalid value for $nodePubkey when calling LnrpcOpenChannelRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['nodePubkey'] = $nodePubkey;

        return $this;
    }

    /**
     * Gets nodePubkeyString
     *
     * @return string
     */
    public function getNodePubkeyString()
    {
        return $this->container['nodePubkeyString'];
    }

    /**
     * Sets nodePubkeyString
     *
     * @param string $nodePubkeyString nodePubkeyString
     *
     * @return $this
     */
    public function setNodePubkeyString($nodePubkeyString)
    {
        $this->container['nodePubkeyString'] = $nodePubkeyString;

        return $this;
    }

    /**
     * Gets localFundingAmount
     *
     * @return string
     */
    public function getLocalFundingAmount()
    {
        return $this->container['localFundingAmount'];
    }

    /**
     * Sets localFundingAmount
     *
     * @param string $localFundingAmount localFundingAmount
     *
     * @return $this
     */
    public function setLocalFundingAmount($localFundingAmount)
    {
        $this->container['localFundingAmount'] = $localFundingAmount;

        return $this;
    }

    /**
     * Gets pushSat
     *
     * @return string
     */
    public function getPushSat()
    {
        return $this->container['pushSat'];
    }

    /**
     * Sets pushSat
     *
     * @param string $pushSat pushSat
     *
     * @return $this
     */
    public function setPushSat($pushSat)
    {
        $this->container['pushSat'] = $pushSat;

        return $this;
    }

    /**
     * Gets targetConf
     *
     * @return int
     */
    public function getTargetConf()
    {
        return $this->container['targetConf'];
    }

    /**
     * Sets targetConf
     *
     * @param int $targetConf / The target number of blocks that the funding transaction should be confirmed by.
     *
     * @return $this
     */
    public function setTargetConf($targetConf)
    {
        $this->container['targetConf'] = $targetConf;

        return $this;
    }

    /**
     * Gets satPerByte
     *
     * @return string
     */
    public function getSatPerByte()
    {
        return $this->container['satPerByte'];
    }

    /**
     * Sets satPerByte
     *
     * @param string $satPerByte / A manual fee rate set in sat/byte that should be used when crafting the funding transaction.
     *
     * @return $this
     */
    public function setSatPerByte($satPerByte)
    {
        $this->container['satPerByte'] = $satPerByte;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool $private / Whether this channel should be private, not announced to the greater network.
     *
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets minHtlcMsat
     *
     * @return string
     */
    public function getMinHtlcMsat()
    {
        return $this->container['minHtlcMsat'];
    }

    /**
     * Sets minHtlcMsat
     *
     * @param string $minHtlcMsat / The minimum value in millisatoshi we will require for incoming HTLCs on the channel.
     *
     * @return $this
     */
    public function setMinHtlcMsat($minHtlcMsat)
    {
        $this->container['minHtlcMsat'] = $minHtlcMsat;

        return $this;
    }

    /**
     * Gets remoteCsvDelay
     *
     * @return int
     */
    public function getRemoteCsvDelay()
    {
        return $this->container['remoteCsvDelay'];
    }

    /**
     * Sets remoteCsvDelay
     *
     * @param int $remoteCsvDelay / The delay we require on the remote's commitment transaction. If this is not set, it will be scaled automatically with the channel size.
     *
     * @return $this
     */
    public function setRemoteCsvDelay($remoteCsvDelay)
    {
        $this->container['remoteCsvDelay'] = $remoteCsvDelay;

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


