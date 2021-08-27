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
     * @var string 上级商户订单号
     */
    public $parentOutTradeNo;
    /**
     * @var string
     */
    public $platformTradeNo;
    /**
     * @var string
     */
    public $tradeNo;
    /**
     * @var int
     */
    public $tradeStatus;
}