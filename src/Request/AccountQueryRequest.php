<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountQueryRequest extends BaseRequest
{
    protected $method = 'account.query';
    /**
     * @var int
     */
    public $accountId;
}