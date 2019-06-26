<?php

namespace Riverline\DynamoDB\Enum;

/**
 * Replaces deprecated AWS enum types
 * Class ReturnValue
 * @package Riverline\DynamoDB\Enum
 */
class ReturnValue
{
    const NONE = 'NONE';
    const ALL_OLD = 'ALL_OLD';
    const UPDATED_OLD = 'UPDATED_OLD';
    const ALL_NEW = 'ALL_NEW';
    const UPDATED_NEW = 'UPDATED_NEW';
}