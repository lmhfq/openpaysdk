<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/3
 * Time: 上午11:08
 */

namespace Lmh\OpenPaySDK\Request;


class PaymentRefundCreateRequest extends BaseRequest
{
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
     * @var int 需要退款的金额，该金额不能大于订单金额
     */
    public $refundAmount;
    /**
     * @var string 退款的原因说明
     */
    public $refundReason;
    /**
     * @var string 通知商户服务器地址
     */
    public $notifyUrl;
}