<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountBalanceListRequest extends BaseRequest
{
    protected $method = 'account.balance.list';
    /**
     * @var array
     */
    public $accountId;
}