<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountStatusModifyRequest extends BaseRequest
{
    protected $method = 'account.status.modify';
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var int 账户状态，1 正常 2已关闭
     */
    public $status;
}