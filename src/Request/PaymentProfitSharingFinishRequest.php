<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/12
 * Time: 下午6:07
 */

namespace Lmh\OpenPaySDK\Request;


class PaymentProfitSharingFinishRequest extends BaseRequest
{
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
     * @var string
     */
    public $description = '分账已完成';
    /**
     * @var string 支付产品，WECHAT WECHAT_SP CPCN
     */
    public $productCode;
    /**
     * @var string 外部分账单号
     */
    public $outSharingNo;
}