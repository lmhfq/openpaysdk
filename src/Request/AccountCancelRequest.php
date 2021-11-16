<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountCancelRequest extends BaseRequest
{
    protected $method = 'account.cancel';
    /**
     * @var int
     */
    public $accountId;
}