<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class AccountBalanceQueryResponse extends BaseResponse
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var string
     */
    public $externalId;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var int 可用余额
     */
    public $balance;
    /**
     * @var int 冻结金额
     */
    public $freezeBalance;
}