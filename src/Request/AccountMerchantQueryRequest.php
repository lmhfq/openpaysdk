<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountMerchantQueryRequest extends BaseRequest
{
    protected $method = 'account.merchant.query';
    /**
     * @var int
     */
    public $productId;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var int 账户状态 1 开启 0 关闭
     */
    public $status;
    /**
     * @var int 审核状态： 1 审核中 2 审核成功 3 审核失败
     */
    public $examineStatus;
}