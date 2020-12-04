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
     * @var int
     */
    public $status;
}