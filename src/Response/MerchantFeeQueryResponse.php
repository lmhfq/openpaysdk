<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class MerchantFeeQueryResponse extends BaseResponse
{
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var string
     */
    public $enterpriseAccountFee;
    /**
     * @var int
     */
    public $enterpriseWithdrawalFeeType;
    /**
     * @var string
     */
    public $enterpriseWithdrawalFee;
    /**
     * @var string
     */
    public $enterpriseWithdrawalMinFee;
    /**
     * @var string
     */
    public $personalAccountFee;
    /**
     * @var int
     */
    public $personalWithdrawalFeeType;
    /**
     * @var string
     */
    public $personalWithdrawalFee;
    /**
     * @var string
     */
    public $personalWithdrawalMinFee;
    /**
     * @var int
     */
    public $accountFeeBear;
    /**
     * @var int
     */
    public $payFeeBear;
    /**
     * @var int
     */
    public $withdrawFeeBear;
    /**
     * @var array
     */
    public $channel;
}