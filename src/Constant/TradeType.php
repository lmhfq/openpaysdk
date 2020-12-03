<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Constant;
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/3
 * Time: 上午10:51
 */
interface TradeType
{
    /**
     * 支付宝支付
     */
    public const ALIPAY = 'ALIPAY';
    /**
     * 微信支付
     */
    public const WECHAT = 'WECHAT';
    /**
     * 钱包支付(中金)
     */
    public const CPCN_BALANCE = 'CPCN_BALANCE';
    /**
     * 暂不支持
     */
    public const UNIONPAY = 'UNIONPAY';
    /**
     * 微信小程序
     */
    public const WECHAT_MICRO = 'WECHAT_MICRO';
    /**
     * 微信支付(服务商)
     */
    public const WECHAT_SP = 'WECHAT_SP';
    /**
     * 支付宝支付(中金)
     */
    public const CPCN_ALIPAY = 'CPCN_ALIPAY';
    /**
     * 微信支付(中金
     */
    public const CPCN_WECHAT = 'CPCN_WECHAT';
    /**
     * 暂不支持
     */
    public const WECHAT_APP = 'WECHAT_APP';
    /**
     * 暂不支持
     */
    public const WECHAT_SP_MICRO = 'WECHAT_SP_MICRO';
    /**
     * 暂不支持
     */
    public const WECHAT_SP_APP = 'WECHAT_SP_APP';
}