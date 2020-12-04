<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountActivateRequest extends BaseRequest
{
    protected $method = 'account.activate';
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string 原交易类型
     */
    public $activateType;
    /**
     * @var string 验证信息
     */
    public $activateInfo;
    /**
     * @var string
     */
    public $tradeNo;
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $capitalAccount;
    /**
     * @var int
     */
    public $accountType;
    /**
     * @var string
     */
    public $ptnCode;
}