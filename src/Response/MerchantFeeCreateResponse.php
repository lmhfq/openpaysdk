<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class MerchantFeeCreateResponse extends BaseResponse
{
    /**
     * @var int 商户id
     */
    public $merchantId;
    /**
     * @var int 企业开户手续费
     */
    public $enterpriseAccountFee;
    /**
     * @var int 企业提现手续费收取方式
     */
    public $enterpriseWithdrawalFeeType;
    /**
     * @var string 商户提现手续费
     */
    public $enterpriseWithdrawalFee;
    /**
     * @var string 商家提现最低手续费
     */
    public $enterpriseWithdrawalMinFee;
    /**
     * @var string 个人开户手续费
     */
    public $personalAccountFee;
    /**
     * @var int 个人手续费收取方式
     */
    public $personalWithdrawalFeeType;
    /**
     * @var string 个人提现手续费
     */
    public $personalWithdrawalFee;
    /**
     * @var string 个人提现最低手续费
     */
    public $personalWithdrawalMinFee;
    /**
     * @var int 开户费承担方
     */
    public $accountFeeBear;
    /**
     * @var int 支付手续费费承担方
     */
    public $payFeeBear;
    /**
     * @var int 提现手续费费承担方
     */
    public $withdrawFeeBear;
    /**
     * @var string 第三方账户名称自定义
     */
    public $customName;
}