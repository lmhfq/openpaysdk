<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class MerchantFeeCreateRequest extends BaseRequest
{
    protected $method = 'merchant.fee.create';
    /**
     * @var int 企业开户手续费
     */
    public $enterpriseAccountFee;
    /**
     * @var int 企业提现手续费收取方式
     */
    public $enterpriseWithdrawalFeeType;
    /**
     * @var int 商户提现手续费
     */
    public $enterpriseWithdrawalFee;
    /**
     * @var int 商家提现最低手续费
     */
    public $enterpriseWithdrawalMinFee;
    /**
     * @var int 个人开户手续费
     */
    public $personalAccountFee;
    /**
     * @var int 个人手续费收取方式
     */
    public $personalWithdrawalFeeType;
    /**
     * @var int 个人提现手续费
     */
    public $personalWithdrawalFee;
    /**
     * @var int 个人提现最低手续费
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
     * @var array 商家支付通道
     */
    public $channel;
}