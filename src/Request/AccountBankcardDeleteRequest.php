<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountBankcardDeleteRequest extends BaseRequest
{
    protected $method = 'account.bankcard.delete';
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $productCode;
}