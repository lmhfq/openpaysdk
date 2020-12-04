<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentChannelQueryRequest extends BaseRequest
{
    protected $method = 'payment.channel.query';
    /**
     * @var string
     */
    public $channelCode;
}