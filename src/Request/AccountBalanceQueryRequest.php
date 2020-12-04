<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountBalanceQueryRequest extends BaseRequest
{
    protected $method = 'account.balance.query';
    /**
     * @var int
     */
    public $accountId;
}