<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class AccountWithdrawCreateResponse extends BaseResponse
{
    /**
     * @var  int
     */
    public $amount;
    /**
     * @var  int
     */
    public $realAmount;
    /**
     * @var  string
     */
    public $withdrawalType;
    /**
     * @var  string
     */
    public $tradeNo;
    /**
     * @var  string
     */
    public $bankName;
    /**
     * @var  string
     */
    public $bankCardNo;
    /**
     * @var  string
     */
    public $openBankName;
}