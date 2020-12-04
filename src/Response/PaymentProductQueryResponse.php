<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class PaymentProductQueryResponse extends BaseResponse
{
    /**
     * @var int 产品ID
     */
    public $productId;
    /**
     * @var string 产品code
     */
    public $productCode;
    /**
     * @var string 产品名称
     */
    public $productName;
    /**
     * @var string 产品logo
     */
    public $productLogo;
    /**
     * @var string 企业开户手续费 分
     */
    public $enterpriseAccountFee;
    /**
     * @var int  企业提现手续费收取方式
     */
    public $enterpriseWithdrawalFeeType;
    /**
     * @var string  企业提现手续费提现手续费;
     */
    public $enterpriseWithdrawalFee;
    /**
     * @var string 企业提现手续费
     */
    public $enterpriseWithdrawalMinFee;
    /**
     * @var string 个人开户手续费
     */
    public $personalAccountFee;
    /**
     * @var int 个人提现手续费收取方式  1：按比  2：按比例
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
     * @var int  1 T1，2 S0
     */
    public $withdrawalType;
    /**
     * @var array 系统支付通道
     */
    public $channel;
}