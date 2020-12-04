<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class PaymentRefundQueryResponse extends BaseResponse
{
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var string 卖家唯一标示 商家入驻时的唯一ID
     */
    public $externalId;
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
    public $outRefundNo;
    /**
     * @var string 退款交易流水号
     */
    public $refundNo;
    /**
     * @var int 需要退款的金额，该金额不能大于订单金额
     */
    public $refundAmount;
    /**
     * @var string 退款的原因说明
     */
    public $refundReason;
    /**
     * @var string
     */
    public $refundStatus;
    /**
     * @var string 交易状态
     */
    public $refundStatusDesc;
    /**
     * @var string 通知商户服务器地址
     */
    public $notifyUrl;
    /**
     * @var string 第三方退款单号
     */
    public $platformTradeNo;
    /**
     * @var string 完成时间
     */
    public $finishTime;
    /**
     * @var string 退款渠道
     */
    public $refundChannel;
}