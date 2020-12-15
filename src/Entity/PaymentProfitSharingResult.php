<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Entity;
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/15
 * Time: 下午4:24
 */
class PaymentProfitSharingResult
{
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var string 商家入驻时的唯一ID
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
     * @var string 第三方交易流水号
     */
    public $platformTradeNo;
    /**
     * @var string 分账接收者ID
     */
    public $receiverId;
    /**
     * @var string 分账接收者外部ID
     */
    public $receiverExternalId;
    /**
     * @var string 分账接收者名称
     */
    public $receiverName;
    /**
     * @var string 分账接收者数据（微信分账）
     */
    public $receiveData;
    /**
     * @var string 商户分账单号
     */
    public $outSharingNo;
    /**
     * @var string 分账单号
     */
    public $sharingNo;
    /**
     * @var int 分账金额
     */
    public $amount = 0;
    /**
     * @var int
     */
    public $availableAmount = 0;
    /**
     * @var int
     */
    public $feeAmount = 0;
    /**
     * @var int
     */
    public $finishAmount = 0;
    /**
     * @var int 分账状态 1-待分账  2-已分账 3-冻结在总部
     */
    public $status;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $attach;
    /**
     * @var string 第三方分账单号
     */
    public $platformSharingNo;
    /**
     * @var string
     */
    public $productCode;
}