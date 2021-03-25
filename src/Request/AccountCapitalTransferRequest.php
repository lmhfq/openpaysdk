<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountCapitalTransferRequest extends BaseRequest
{
    protected $method = 'account.capital.transfer';
    /**
     * @var int 收款方ID
     */
    public $accountId;
    /**
     * @var string 付款方唯一ID
     */
    public $payerExternalId;
    /**
     * @var int 付款方账户ID
     */
    public $payerAccountId;
    /**
     * @var int 转账金额
     */
    public $totalAmount;
    /**
     * @var string 描述信息
     */
    public $description;
}