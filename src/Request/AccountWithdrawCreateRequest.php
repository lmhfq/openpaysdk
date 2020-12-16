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
     * @var string 外部提现单号
     */
    public $outTradeNo;
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
    /**
     * @var string 提现完成通知商户端地址
     */
    public $notifyUrl = '';
    /**
     * @var string 提现申请成功通知商户端地址
     */
    public $returnUrl = '';
}