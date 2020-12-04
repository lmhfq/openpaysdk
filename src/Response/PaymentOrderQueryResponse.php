<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class PaymentOrderQueryResponse extends BaseResponse
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
     * @var int 订单总金额，单位为分
     */
    public $totalAmount;
    /**
     * @var int
     * @see OrderStatusEnum
     */
    public $status;
    /**
     * @var int 已分账金额（分账完成金额，不含分账中的）
     */
    public $finishAmount;
    /**
     * @var int 待分账金额
     */
    public $remainAmount;
    /**
     * @var int 商家手续费
     */
    public $merchantFee;
    /**
     * @var int 支付平台手续费
     */
    public $paymentFee;
    /**
     * @var int 第三方平台手续费
     */
    public $platformFee;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $createdAt;
}