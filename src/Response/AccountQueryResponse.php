<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class AccountQueryResponse extends BaseResponse
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var int
     */
    public $accountType;
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var int
     */
    public $productId;
    /**
     * @var  string
     */
    public $productCode;
    /**
     * @var array
     */
    public $bankCard;
    /**
     * @var string
     */
    public $ptnCode;
    /**
     * @var string
     */
    public $cpcnMerchantId;
    /**
     * @var string
     */
    public $capitalAccount;
    /**
     * @var int
     */
    public $examineStatus;
    /**
     * @var string
     */
    public $examineInfo;
    /**
     * @var string
     */
    public $examineTime;
    /**
     * @var int 开户手续费
     */
    public $merchantFee;
    /**
     * @var int
     */
    public $feeBear;
    /**
     * @var int
     */
    public $feeStatus;
    /**
     * @var string
     */
    public $tradeNo;
    /**
     * @var string
     */
    public $platformTradeNo;
    /**
     * @var int 是否开启
     */
    public $status;
    /**
     * @var string 通知商户服务器地址
     */
    public $notifyUrl;
    /**
     * @var string 成功页面跳转地址
     */
    public $returnUrl;
    /**
     * @var string 账户余额
     */
    public $balance;
    /**
     * @var string 冻结金额
     */
    public $freezeBalance;
    /**
     * @var string
     */
    public $signUrl;
    /**
     * @var string
     */
    public $legalValidationUrl;
}