<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentOrderQueryRequest extends BaseRequest
{
    protected $method = 'payment.order.query';
    /**
     * @var string
     */
    public $outTradeNo;
}