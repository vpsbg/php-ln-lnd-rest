<?php
/**
 * LnrpcHop
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
 * LnrpcHop Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcHop implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcHop';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chanId' => 'string',
        'chanCapacity' => 'string',
        'amtToForward' => 'string',
        'fee' => 'string',
        'expiry' => 'int',
        'amtToForwardMsat' => 'string',
        'feeMsat' => 'string',
        'pubKey' => 'string',
        'tlvPayload' => 'bool',
        'mppRecord' => '\Lnd\Rest\Model\LnrpcMPPRecord',
        'ampRecord' => '\Lnd\Rest\Model\LnrpcAMPRecord',
        'customRecords' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chanId' => 'uint64',
        'chanCapacity' => 'int64',
        'amtToForward' => 'int64',
        'fee' => 'int64',
        'expiry' => 'int64',
        'amtToForwardMsat' => 'int64',
        'feeMsat' => 'int64',
        'pubKey' => null,
        'tlvPayload' => 'boolean',
        'mppRecord' => null,
        'ampRecord' => null,
        'customRecords' => 'byte'
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
        'chanId' => 'chan_id',
        'chanCapacity' => 'chan_capacity',
        'amtToForward' => 'amt_to_forward',
        'fee' => 'fee',
        'expiry' => 'expiry',
        'amtToForwardMsat' => 'amt_to_forward_msat',
        'feeMsat' => 'fee_msat',
        'pubKey' => 'pub_key',
        'tlvPayload' => 'tlv_payload',
        'mppRecord' => 'mpp_record',
        'ampRecord' => 'amp_record',
        'customRecords' => 'custom_records'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chanId' => 'setChanId',
        'chanCapacity' => 'setChanCapacity',
        'amtToForward' => 'setAmtToForward',
        'fee' => 'setFee',
        'expiry' => 'setExpiry',
        'amtToForwardMsat' => 'setAmtToForwardMsat',
        'feeMsat' => 'setFeeMsat',
        'pubKey' => 'setPubKey',
        'tlvPayload' => 'setTlvPayload',
        'mppRecord' => 'setMppRecord',
        'ampRecord' => 'setAmpRecord',
        'customRecords' => 'setCustomRecords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chanId' => 'getChanId',
        'chanCapacity' => 'getChanCapacity',
        'amtToForward' => 'getAmtToForward',
        'fee' => 'getFee',
        'expiry' => 'getExpiry',
        'amtToForwardMsat' => 'getAmtToForwardMsat',
        'feeMsat' => 'getFeeMsat',
        'pubKey' => 'getPubKey',
        'tlvPayload' => 'getTlvPayload',
        'mppRecord' => 'getMppRecord',
        'ampRecord' => 'getAmpRecord',
        'customRecords' => 'getCustomRecords'
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
        $this->container['chanId'] = isset($data['chanId']) ? $data['chanId'] : null;
        $this->container['chanCapacity'] = isset($data['chanCapacity']) ? $data['chanCapacity'] : null;
        $this->container['amtToForward'] = isset($data['amtToForward']) ? $data['amtToForward'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['expiry'] = isset($data['expiry']) ? $data['expiry'] : null;
        $this->container['amtToForwardMsat'] = isset($data['amtToForwardMsat']) ? $data['amtToForwardMsat'] : null;
        $this->container['feeMsat'] = isset($data['feeMsat']) ? $data['feeMsat'] : null;
        $this->container['pubKey'] = isset($data['pubKey']) ? $data['pubKey'] : null;
        $this->container['tlvPayload'] = isset($data['tlvPayload']) ? $data['tlvPayload'] : null;
        $this->container['mppRecord'] = isset($data['mppRecord']) ? $data['mppRecord'] : null;
        $this->container['ampRecord'] = isset($data['ampRecord']) ? $data['ampRecord'] : null;
        $this->container['customRecords'] = isset($data['customRecords']) ? $data['customRecords'] : null;
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
     * Gets chanId
     *
     * @return string
     */
    public function getChanId()
    {
        return $this->container['chanId'];
    }

    /**
     * Sets chanId
     *
     * @param string $chanId The unique channel ID for the channel. The first 3 bytes are the block height, the next 3 the index within the block, and the last 2 bytes are the output index for the channel.
     *
     * @return $this
     */
    public function setChanId($chanId)
    {
        $this->container['chanId'] = $chanId;

        return $this;
    }

    /**
     * Gets chanCapacity
     *
     * @return string
     */
    public function getChanCapacity()
    {
        return $this->container['chanCapacity'];
    }

    /**
     * Sets chanCapacity
     *
     * @param string $chanCapacity chanCapacity
     *
     * @return $this
     */
    public function setChanCapacity($chanCapacity)
    {
        $this->container['chanCapacity'] = $chanCapacity;

        return $this;
    }

    /**
     * Gets amtToForward
     *
     * @return string
     */
    public function getAmtToForward()
    {
        return $this->container['amtToForward'];
    }

    /**
     * Sets amtToForward
     *
     * @param string $amtToForward amtToForward
     *
     * @return $this
     */
    public function setAmtToForward($amtToForward)
    {
        $this->container['amtToForward'] = $amtToForward;

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
     * @param string $fee fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets expiry
     *
     * @return int
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     *
     * @param int $expiry expiry
     *
     * @return $this
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets amtToForwardMsat
     *
     * @return string
     */
    public function getAmtToForwardMsat()
    {
        return $this->container['amtToForwardMsat'];
    }

    /**
     * Sets amtToForwardMsat
     *
     * @param string $amtToForwardMsat amtToForwardMsat
     *
     * @return $this
     */
    public function setAmtToForwardMsat($amtToForwardMsat)
    {
        $this->container['amtToForwardMsat'] = $amtToForwardMsat;

        return $this;
    }

    /**
     * Gets feeMsat
     *
     * @return string
     */
    public function getFeeMsat()
    {
        return $this->container['feeMsat'];
    }

    /**
     * Sets feeMsat
     *
     * @param string $feeMsat feeMsat
     *
     * @return $this
     */
    public function setFeeMsat($feeMsat)
    {
        $this->container['feeMsat'] = $feeMsat;

        return $this;
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
     * @param string $pubKey An optional public key of the hop. If the public key is given, the payment can be executed without relying on a copy of the channel graph.
     *
     * @return $this
     */
    public function setPubKey($pubKey)
    {
        $this->container['pubKey'] = $pubKey;

        return $this;
    }

    /**
     * Gets tlvPayload
     *
     * @return bool
     */
    public function getTlvPayload()
    {
        return $this->container['tlvPayload'];
    }

    /**
     * Sets tlvPayload
     *
     * @param bool $tlvPayload If set to true, then this hop will be encoded using the new variable length TLV format. Note that if any custom tlv_records below are specified, then this field MUST be set to true for them to be encoded properly.
     *
     * @return $this
     */
    public function setTlvPayload($tlvPayload)
    {
        $this->container['tlvPayload'] = $tlvPayload;

        return $this;
    }

    /**
     * Gets mppRecord
     *
     * @return \Lnd\Rest\Model\LnrpcMPPRecord
     */
    public function getMppRecord()
    {
        return $this->container['mppRecord'];
    }

    /**
     * Sets mppRecord
     *
     * @param \Lnd\Rest\Model\LnrpcMPPRecord $mppRecord An optional TLV record that signals the use of an MPP payment. If present, the receiver will enforce that the same mpp_record is included in the final hop payload of all non-zero payments in the HTLC set. If empty, a regular single-shot payment is or was attempted.
     *
     * @return $this
     */
    public function setMppRecord($mppRecord)
    {
        $this->container['mppRecord'] = $mppRecord;

        return $this;
    }

    /**
     * Gets ampRecord
     *
     * @return \Lnd\Rest\Model\LnrpcAMPRecord
     */
    public function getAmpRecord()
    {
        return $this->container['ampRecord'];
    }

    /**
     * Sets ampRecord
     *
     * @param \Lnd\Rest\Model\LnrpcAMPRecord $ampRecord An optional TLV record that signals the use of an AMP payment. If present, the receiver will treat all received payments including the same (payment_addr, set_id) pair  as being part of one logical payment. The payment will be settled by XORing the root_share's together and deriving the child hashes and preimages according to BOLT XX. Must be used in conjunction with mpp_record.
     *
     * @return $this
     */
    public function setAmpRecord($ampRecord)
    {
        $this->container['ampRecord'] = $ampRecord;

        return $this;
    }

    /**
     * Gets customRecords
     *
     * @return map[string,string]
     */
    public function getCustomRecords()
    {
        return $this->container['customRecords'];
    }

    /**
     * Sets customRecords
     *
     * @param map[string,string] $customRecords An optional set of key-value TLV records. This is useful within the context of the SendToRoute call as it allows callers to specify arbitrary K-V pairs to drop off at each hop within the onion.
     *
     * @return $this
     */
    public function setCustomRecords($customRecords)
    {
        $this->container['customRecords'] = $customRecords;

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


