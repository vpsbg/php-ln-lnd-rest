<?php
/**
 * LnrpcAddressType
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
use \Lnd\Rest\ObjectSerializer;

/**
 * LnrpcAddressType Class Doc Comment
 *
 * @category Class
 * @description - &#x60;p2wkh&#x60;: Pay to witness key hash (&#x60;WITNESS_PUBKEY_HASH&#x60; &#x3D; 0) - &#x60;np2wkh&#x60;: Pay to nested witness key hash (&#x60;NESTED_PUBKEY_HASH&#x60; &#x3D; 1)
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcAddressType
{
    /**
     * Possible values of this enum
     */
    const WITNESS_PUBKEY_HASH = 'WITNESS_PUBKEY_HASH';
    const NESTED_PUBKEY_HASH = 'NESTED_PUBKEY_HASH';
    const UNUSED_WITNESS_PUBKEY_HASH = 'UNUSED_WITNESS_PUBKEY_HASH';
    const UNUSED_NESTED_PUBKEY_HASH = 'UNUSED_NESTED_PUBKEY_HASH';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WITNESS_PUBKEY_HASH,
            self::NESTED_PUBKEY_HASH,
            self::UNUSED_WITNESS_PUBKEY_HASH,
            self::UNUSED_NESTED_PUBKEY_HASH,
        ];
    }
}


