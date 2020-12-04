<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountBankcardModifyRequest extends BaseRequest
{
    protected $method = 'account.bankcard.modify';
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var array 绑卡信息
     */
    public $bankCard;
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
    /**
     * @var string  法定代表人/自然人 证件类型(详见数据字典) 目前只支持 A 身份证
     */
    public $cardType;
    /**
     * @var string 法定代表人/自然人 证件号码
     */
    public $cardNo;
}