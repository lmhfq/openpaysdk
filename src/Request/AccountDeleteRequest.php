<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountDeleteRequest extends BaseRequest
{
    protected $method = 'account.delete';
    /**
     * @var int
     */
    public $accountId;
}