<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/3
 * Time: 上午10:24
 */

namespace Lmh\OpenPaySDK\Request;

/**
 * Class PaymentTradeUnifiedOrderRequest
 * @package Lmh\OpenPaySDK\Request
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/3
 */
class PaymentTradeUnifiedOrderRequest extends BaseRequest
{
    protected $method = 'payment.trade.unified.order';
    /**
     * @var string 买家外部唯一ID
     */
    public $buyerId;
    /**
     * @var string 商家外部订单号
     */
    public $outTradeNo;
    /**
     * @var int 交易总金额
     */
    public $totalAmount;
    /**
     * @var string 交易类型
     */
    public $tradeType;
    /**
     * @var string
     */
    public $openid;
    /**
     * @var string
     */
    public $scene;
    /**
     * @var string 商品描述 description
     */
    public $subject;
    /**
     * @var string 商品详情
     */
    public $detail;
    /**
     * @var string 附加数据
     */
    public $attach;
    /**
     * @var string 通知商户服务器地址
     */
    public $notifyUrl;
    /**
     * @var string 订单支付成功页面跳转地址
     */
    public $returnUrl;
    /**
     * @var string 交易起始时间 格式为yyyy-MM-dd HH:mm:ss
     */
    public $timeStart;
    /**
     * @var string 订单失效时间 格式为yyyy-MM-dd HH:mm:ss
     */
    public $expireTime;
    /**
     * @var string 是否需要分账 默认N
     */
    public $profitSharing;
    /**
     * @var string 终端IP
     */
    public $spbillCreateIp;
    /**
     * @var array 快捷支付交易数据
     */
    public $tradeData;
}