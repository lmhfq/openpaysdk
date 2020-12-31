<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentOrderCombineRequest extends BaseRequest
{
    protected $method = 'payment.order.combine';
    /**
     * @var string
     */
    public $outTradeNo;
    /**
     * @var int
     */
    public $totalAmount;
    /**
     * @var array
     */
    public $subOrders;
}