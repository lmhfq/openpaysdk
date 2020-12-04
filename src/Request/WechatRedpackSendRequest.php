<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class WechatRedpackSendRequest extends BaseRequest
{
    protected $method = 'wechat.redpack.send';
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var string GROUP NORMAl
     */
    public $scene;
    /**
     * @var int 付款金额
     */
    public $totalAmount;
    /**
     * @var string 红包金额设置方式
     */
    public $amtType;
    /**
     * @var int 红包发放总人数
     */
    public $totalNum;
    /**
     * @var string
     */
    public $openid;
    /**
     * @var string 商户名称
     */
    public $sendName;
    /**
     * @var string 红包祝福语
     */
    public $wishing;
    /**
     * @var string 活动名称
     */
    public $actName;
    /**
     * @var string 备注
     */
    public $remark;
    /**
     * @var string
     */
    public $sceneId;
    /**
     * @var string
     */
    public $riskInfo;
    /**
     * @var string 终端IP
     */
    public $spbillCreateIp;
    /**
     * @var string 交易流水号
     */
    public $tradeNo;
}