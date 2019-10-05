<?php
/**
 * LnrpcInitWalletRequest
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
 * LnrpcInitWalletRequest Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcInitWalletRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcInitWalletRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'walletPassword' => 'string',
        'cipherSeedMnemonic' => 'string[]',
        'aezeedPassphrase' => 'string',
        'recoveryWindow' => 'int',
        'channelBackups' => '\Lnd\Rest\Model\LnrpcChanBackupSnapshot'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'walletPassword' => 'byte',
        'cipherSeedMnemonic' => null,
        'aezeedPassphrase' => 'byte',
        'recoveryWindow' => 'int32',
        'channelBackups' => null
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
        'walletPassword' => 'wallet_password',
        'cipherSeedMnemonic' => 'cipher_seed_mnemonic',
        'aezeedPassphrase' => 'aezeed_passphrase',
        'recoveryWindow' => 'recovery_window',
        'channelBackups' => 'channel_backups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'walletPassword' => 'setWalletPassword',
        'cipherSeedMnemonic' => 'setCipherSeedMnemonic',
        'aezeedPassphrase' => 'setAezeedPassphrase',
        'recoveryWindow' => 'setRecoveryWindow',
        'channelBackups' => 'setChannelBackups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'walletPassword' => 'getWalletPassword',
        'cipherSeedMnemonic' => 'getCipherSeedMnemonic',
        'aezeedPassphrase' => 'getAezeedPassphrase',
        'recoveryWindow' => 'getRecoveryWindow',
        'channelBackups' => 'getChannelBackups'
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
        $this->container['walletPassword'] = isset($data['walletPassword']) ? $data['walletPassword'] : null;
        $this->container['cipherSeedMnemonic'] = isset($data['cipherSeedMnemonic']) ? $data['cipherSeedMnemonic'] : null;
        $this->container['aezeedPassphrase'] = isset($data['aezeedPassphrase']) ? $data['aezeedPassphrase'] : null;
        $this->container['recoveryWindow'] = isset($data['recoveryWindow']) ? $data['recoveryWindow'] : null;
        $this->container['channelBackups'] = isset($data['channelBackups']) ? $data['channelBackups'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['walletPassword']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['walletPassword'])) {
            $invalidProperties[] = "invalid value for 'walletPassword', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['aezeedPassphrase']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['aezeedPassphrase'])) {
            $invalidProperties[] = "invalid value for 'aezeedPassphrase', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets walletPassword
     *
     * @return string
     */
    public function getWalletPassword()
    {
        return $this->container['walletPassword'];
    }

    /**
     * Sets walletPassword
     *
     * @param string $walletPassword * wallet_password is the passphrase that should be used to encrypt the wallet. This MUST be at least 8 chars in length. After creation, this password is required to unlock the daemon.
     *
     * @return $this
     */
    public function setWalletPassword($walletPassword)
    {

        if (!is_null($walletPassword) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $walletPassword))) {
            throw new \InvalidArgumentException("invalid value for $walletPassword when calling LnrpcInitWalletRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['walletPassword'] = $walletPassword;

        return $this;
    }

    /**
     * Gets cipherSeedMnemonic
     *
     * @return string[]
     */
    public function getCipherSeedMnemonic()
    {
        return $this->container['cipherSeedMnemonic'];
    }

    /**
     * Sets cipherSeedMnemonic
     *
     * @param string[] $cipherSeedMnemonic * cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed cipher seed obtained by the user. This may have been generated by the GenSeed method, or be an existing seed.
     *
     * @return $this
     */
    public function setCipherSeedMnemonic($cipherSeedMnemonic)
    {
        $this->container['cipherSeedMnemonic'] = $cipherSeedMnemonic;

        return $this;
    }

    /**
     * Gets aezeedPassphrase
     *
     * @return string
     */
    public function getAezeedPassphrase()
    {
        return $this->container['aezeedPassphrase'];
    }

    /**
     * Sets aezeedPassphrase
     *
     * @param string $aezeedPassphrase * aezeed_passphrase is an optional user provided passphrase that will be used to encrypt the generated aezeed cipher seed.
     *
     * @return $this
     */
    public function setAezeedPassphrase($aezeedPassphrase)
    {

        if (!is_null($aezeedPassphrase) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $aezeedPassphrase))) {
            throw new \InvalidArgumentException("invalid value for $aezeedPassphrase when calling LnrpcInitWalletRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['aezeedPassphrase'] = $aezeedPassphrase;

        return $this;
    }

    /**
     * Gets recoveryWindow
     *
     * @return int
     */
    public function getRecoveryWindow()
    {
        return $this->container['recoveryWindow'];
    }

    /**
     * Sets recoveryWindow
     *
     * @param int $recoveryWindow * recovery_window is an optional argument specifying the address lookahead when restoring a wallet seed. The recovery window applies to each individual branch of the BIP44 derivation paths. Supplying a recovery window of zero indicates that no addresses should be recovered, such after the first initialization of the wallet.
     *
     * @return $this
     */
    public function setRecoveryWindow($recoveryWindow)
    {
        $this->container['recoveryWindow'] = $recoveryWindow;

        return $this;
    }

    /**
     * Gets channelBackups
     *
     * @return \Lnd\Rest\Model\LnrpcChanBackupSnapshot
     */
    public function getChannelBackups()
    {
        return $this->container['channelBackups'];
    }

    /**
     * Sets channelBackups
     *
     * @param \Lnd\Rest\Model\LnrpcChanBackupSnapshot $channelBackups * channel_backups is an optional argument that allows clients to recover the settled funds within a set of channels. This should be populated if the user was unable to close out all channels and sweep funds before partial or total data loss occurred. If specified, then after on-chain recovery of funds, lnd begin to carry out the data loss recovery protocol in order to recover the funds in each channel from a remote force closed transaction.
     *
     * @return $this
     */
    public function setChannelBackups($channelBackups)
    {
        $this->container['channelBackups'] = $channelBackups;

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


