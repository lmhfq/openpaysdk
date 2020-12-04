<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class MerchantListRequest extends BaseRequest
{
    protected $method = 'merchant.list';
    /**
     * @var array
     */
    public $externalId;
}