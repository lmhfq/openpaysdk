<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class WechatRedpackQueryRequest extends BaseRequest
{
    protected $method = 'wechat.redpack.query';
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var string 交易流水号
     */
    public $tradeNo;
}