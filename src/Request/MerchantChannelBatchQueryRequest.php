<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class MerchantChannelBatchQueryRequest extends BaseRequest
{
    protected $method = 'merchant.channel.batch.query';
    /**
     * @var array
     */
    public $externalId;
}