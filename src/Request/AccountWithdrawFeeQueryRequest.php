<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountWithdrawFeeQueryRequest extends BaseRequest
{
    protected $method = 'account.withdraw.fee.query';
    /**
     * @var string 提现方唯一ID 二选一
     */
    public $withdrawExternalId;
    /**
     * @var int 提现方账户ID 二选一
     */
    public $withdrawAccountId;
    /**
     * @var int 提现金额
     */
    public $amount;
    /**
     * @var int 商家手续费
     */
    public $merchantFee;
    /**
     * @var int
     */
    public $productId;
    /**
     * @var string
     */
    public $productCode;
}