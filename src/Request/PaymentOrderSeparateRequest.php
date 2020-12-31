<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentOrderSeparateRequest extends BaseRequest
{
    protected $method = 'payment.order.separate';
    /**
     * @var string
     */
    public $outTradeNo;
    /**
     * @var array
     */
    public $subOrders;
}