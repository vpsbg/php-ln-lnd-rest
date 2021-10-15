<?php
/**
 * LnrpcOpenStatusUpdate
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
 * LnrpcOpenStatusUpdate Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcOpenStatusUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcOpenStatusUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chanPending' => '\Lnd\Rest\Model\LnrpcPendingUpdate',
        'chanOpen' => '\Lnd\Rest\Model\LnrpcChannelOpenUpdate',
        'psbtFund' => '\Lnd\Rest\Model\LnrpcReadyForPsbtFunding',
        'pendingChanId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chanPending' => null,
        'chanOpen' => null,
        'psbtFund' => null,
        'pendingChanId' => 'byte'
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
        'chanPending' => 'chan_pending',
        'chanOpen' => 'chan_open',
        'psbtFund' => 'psbt_fund',
        'pendingChanId' => 'pending_chan_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chanPending' => 'setChanPending',
        'chanOpen' => 'setChanOpen',
        'psbtFund' => 'setPsbtFund',
        'pendingChanId' => 'setPendingChanId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chanPending' => 'getChanPending',
        'chanOpen' => 'getChanOpen',
        'psbtFund' => 'getPsbtFund',
        'pendingChanId' => 'getPendingChanId'
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
        $this->container['chanPending'] = isset($data['chanPending']) ? $data['chanPending'] : null;
        $this->container['chanOpen'] = isset($data['chanOpen']) ? $data['chanOpen'] : null;
        $this->container['psbtFund'] = isset($data['psbtFund']) ? $data['psbtFund'] : null;
        $this->container['pendingChanId'] = isset($data['pendingChanId']) ? $data['pendingChanId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['pendingChanId']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['pendingChanId'])) {
            $invalidProperties[] = "invalid value for 'pendingChanId', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets chanPending
     *
     * @return \Lnd\Rest\Model\LnrpcPendingUpdate
     */
    public function getChanPending()
    {
        return $this->container['chanPending'];
    }

    /**
     * Sets chanPending
     *
     * @param \Lnd\Rest\Model\LnrpcPendingUpdate $chanPending Signals that the channel is now fully negotiated and the funding transaction published.
     *
     * @return $this
     */
    public function setChanPending($chanPending)
    {
        $this->container['chanPending'] = $chanPending;

        return $this;
    }

    /**
     * Gets chanOpen
     *
     * @return \Lnd\Rest\Model\LnrpcChannelOpenUpdate
     */
    public function getChanOpen()
    {
        return $this->container['chanOpen'];
    }

    /**
     * Sets chanOpen
     *
     * @param \Lnd\Rest\Model\LnrpcChannelOpenUpdate $chanOpen Signals that the channel's funding transaction has now reached the required number of confirmations on chain and can be used.
     *
     * @return $this
     */
    public function setChanOpen($chanOpen)
    {
        $this->container['chanOpen'] = $chanOpen;

        return $this;
    }

    /**
     * Gets psbtFund
     *
     * @return \Lnd\Rest\Model\LnrpcReadyForPsbtFunding
     */
    public function getPsbtFund()
    {
        return $this->container['psbtFund'];
    }

    /**
     * Sets psbtFund
     *
     * @param \Lnd\Rest\Model\LnrpcReadyForPsbtFunding $psbtFund Signals that the funding process has been suspended and the construction of a PSBT that funds the channel PK script is now required.
     *
     * @return $this
     */
    public function setPsbtFund($psbtFund)
    {
        $this->container['psbtFund'] = $psbtFund;

        return $this;
    }

    /**
     * Gets pendingChanId
     *
     * @return string
     */
    public function getPendingChanId()
    {
        return $this->container['pendingChanId'];
    }

    /**
     * Sets pendingChanId
     *
     * @param string $pendingChanId The pending channel ID of the created channel. This value may be used to further the funding flow manually via the FundingStateStep method.
     *
     * @return $this
     */
    public function setPendingChanId($pendingChanId)
    {

        if (!is_null($pendingChanId) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $pendingChanId))) {
            throw new \InvalidArgumentException("invalid value for $pendingChanId when calling LnrpcOpenStatusUpdate., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['pendingChanId'] = $pendingChanId;

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


