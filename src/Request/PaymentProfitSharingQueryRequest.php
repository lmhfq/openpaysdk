<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentProfitSharingQueryRequest extends BaseRequest
{
    protected $method = 'payment.profit.sharing.query';
    /**
     * @var int 入驻商家ID
     */
    public $merchantId;
    /**
     * @var string 入驻外部唯一ID
     */
    public $externalId;
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var string 订单交易流水号
     */
    public $tradeNo;
    /**
     * @var string 外部分账流水号
     */
    public $outSharingNo;
    /**
     * @var string 分账流水号
     */
    public $sharingNo;
    /**
     * @var string 分账状态
     */
    public $status;
}