<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountFeeQueryRequest extends BaseRequest
{
    protected $method = 'account.fee.query';
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $productCode;
}