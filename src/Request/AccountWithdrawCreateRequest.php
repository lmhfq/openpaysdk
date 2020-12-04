<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountWithdrawCreateRequest extends BaseRequest
{
    protected $method = 'account.withdraw.create';
    /**
     * @var string 提现方唯一ID
     */
    public $withdrawExternalId;
    /**
     * @var int 提现方账户ID
     */
    public $withdrawAccountId;
    /**
     * @var int 提现金额
     */
    public $amount;
    /**
     * @var string
     */
    public $withdrawalType;
    /**
     * @var int
     */
    public $productId;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string 描述信息
     */
    public $description;
}