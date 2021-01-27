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
class WechatCombineTransactionUnifiedOrderRequest extends BaseRequest
{
    protected $method = 'wechat.combine.transaction.unified.order';
    /**
     * @var string 买家唯一标示
     */
    public $buyerId;
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var string 交易类型
     */
    public $tradeType;
    /**
     * JSAPI -JSAPI支付
     * NATIVE -Native支付
     * WEB- 电脑网站支付
     * @var string 交易场景
     * @see TradeSceneEnum
     */
    public $scene = 'JSAPI';
    /**
     * @var string 终端IP
     */
    public $spbillCreateIp = '';
    /**
     * @var array  场景信息
     */
    public $sceneInfo;
    /**
     * @var array
     */
    public $subOrders;
    /**
     * @var int 订单总金额，单位为分
     */
    public $totalAmount;
    /**
     * @var string 通知商户服务器地址
     */
    public $notifyUrl;
    /**
     * @var string 订单支付成功页面跳转地址
     */
    public $returnUrl;
    /**
     * @var string 交易起始时间 格式为yyyy-MM-dd HH:mm:ss 默认当前时间
     */
    public $timeStart;
    /**
     * @var string 订单失效时间 格式为yyyy-MM-dd HH:mm:ss
     */
    public $expireTime;
    /**
     * @var string 微信JSAPI，此参数必传，用户在主商户appid下的唯一标识。openid和sub_openid可以选传其中之一，如果选择传sub_openid,则必须传sub_appid
     */
    public $openid;
    /**
     * @var string 第三方支付平台订单号
     */
    public $platformTradeNo;
    /**
     * @var string
     */
    public $merchantRate;
    /**
     * @var string
     */
    public $paymentRate;
    /**
     * @var string
     */
    public $platformRate;
    /**
     * @var int
     */
    public $miniProgram;
}