<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/12
 * Time: 下午6:06
 */

namespace Lmh\OpenPaySDK\Request;


class PaymentProfitSharingCreateRequest extends BaseRequest
{
    protected $method = 'payment.profit.sharing.create';
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var string 订单交易流水号
     */
    public $tradeNo;
    /**
     * @var int 是否多次分账 1多次分账 0 单次分账
     */
    public $multi;
    /**
     * @var string 支付产品，WECHAT WECHAT_SP CPCN
     */
    public $productCode;
    /**
     * @var array
     */
    public $receivers;
    /**
     * @var int 剩余金额
     */
    public $remainAmount;
    /**
     * @var string 外部分账单号
     */
    public $outSharingNo;
}