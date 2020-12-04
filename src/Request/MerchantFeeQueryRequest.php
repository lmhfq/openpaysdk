<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class MerchantFeeQueryRequest extends BaseRequest
{
    protected $method = 'merchant.fee.create';
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var string
     */
    public $externalId;
}