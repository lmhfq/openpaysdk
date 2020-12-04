<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentRefundQueryRequest extends BaseRequest
{
    protected $method = 'payment.refund.query';
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var string 交易流水号
     */
    public $tradeNo;
    /**
     * @var string 商户退款单号可以为空
     */
    public $outRefundNo = '';
    /**
     * @var string 退款交易流水号
     */
    public $refundNo;
}