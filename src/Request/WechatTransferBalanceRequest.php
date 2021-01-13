<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/29
 * Time: 上午11:09
 */

namespace Lmh\OpenPaySDK\Request;


class WechatTransferBalanceRequest extends BaseRequest
{
    protected $method = 'wechat.transfer.balance';
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var string
     */
    public $openid;
    /**
     * @var string 校验用户姓名选项 NO_CHECK：不校验真实姓名, FORCE_CHECK：强校验真实姓名
     */
    public $checkName = 'NO_CHECK';
    /**
     * @var string 收款用户姓名
     */
    public $reUserName;
    /**
     * @var int
     */
    public $totalAmount;
    /**
     * @var string 企业付款备注
     */
    public $description;
    /**
     * @var int
     */
    public $limit;
}