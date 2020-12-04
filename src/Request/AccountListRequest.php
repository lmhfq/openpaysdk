<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountListRequest extends BaseRequest
{
    protected $method = 'account.list';
    /**
     * @var array
     */
    public $accountId;
    /**
     * @var int
     */
    public $examineStatus;
}