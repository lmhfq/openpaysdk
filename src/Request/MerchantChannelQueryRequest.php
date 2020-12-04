<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class MerchantChannelQueryRequest extends BaseRequest
{
    protected $method = 'merchant.channel.query';
    /**
     * @var int
     */
    public $channelId;
    /**
     * @var string
     */
    public $channelCode;
}