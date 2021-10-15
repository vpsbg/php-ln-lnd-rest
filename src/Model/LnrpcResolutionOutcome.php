<?php
/**
 * LnrpcResolutionOutcome
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
 * LnrpcResolutionOutcome Class Doc Comment
 *
 * @category Class
 * @description - OUTCOME_UNKNOWN: Outcome unknown.  - CLAIMED: An output was claimed on chain.  - UNCLAIMED: An output was left unclaimed on chain.  - ABANDONED: ResolverOutcomeAbandoned indicates that an output that we did not claim on chain, for example an anchor that we did not sweep and a third party claimed on chain, or a htlc that we could not decode so left unclaimed.  - FIRST_STAGE: If we force closed our channel, our htlcs need to be claimed in two stages. This outcome represents the broadcast of a timeout or success transaction for this two stage htlc claim.  - TIMEOUT: A htlc was timed out on chain.
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcResolutionOutcome
{
    /**
     * Possible values of this enum
     */
    const OUTCOME_UNKNOWN = 'OUTCOME_UNKNOWN';
    const CLAIMED = 'CLAIMED';
    const UNCLAIMED = 'UNCLAIMED';
    const ABANDONED = 'ABANDONED';
    const FIRST_STAGE = 'FIRST_STAGE';
    const TIMEOUT = 'TIMEOUT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OUTCOME_UNKNOWN,
            self::CLAIMED,
            self::UNCLAIMED,
            self::ABANDONED,
            self::FIRST_STAGE,
            self::TIMEOUT,
        ];
    }
}

