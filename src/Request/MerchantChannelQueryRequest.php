<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class MerchantChannelQueryRequest extends BaseRequest
{
    protected $method = 'merchant.channel.query';
    /**
     * @var int
     */
    public $channelId;
    /**
     * @var string
    1	ALIPAY	支付宝支付
    2	WECHAT	微信支付
    4	CPCN_BALANCE	钱包支付(中金)
    5	UNIONPAY	银联支付
    6	WECHAT_MICRO	微信小程序
    7	WECHAT_SP	微信支付(服务商)
    8	CPCN_ALIPAY	支付宝支付(中金)
    9	CPCN_WECHAT	微信支付(中金)
    10	WECHAT_APP	微信APP
    11	WECHAT_SP_MICRO	微信小程序(服务商)
    12	WECHAT_SP_APP	微信APP(服务商)

     */
    public $channelCode;
}