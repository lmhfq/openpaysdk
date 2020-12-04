<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentTradeOrderListRequest extends BaseRequest
{
    protected $method = 'payment.trade.order.list';
    /**
     * @var string
     */
    public $outTradeNo;
    /**
     * @var string
     */
    public $tradeNo;
}