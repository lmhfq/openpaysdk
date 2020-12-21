<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午3:18
 */

namespace Lmh\OpenPaySDK\Request;


class PaymentCustomsDeclareRequest extends BaseRequest
{
    protected $method = 'payment.customs.declare';
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var string 交易流水号
     */
    public $tradeNo;
    /**
     * @var string 商户报关流水号
     */
    public $outCustomsNo;
    /**
     * @var string
     */
    public $customs;
    /**
     * @var string 商户海关备案号
     */
    public $mchCustomsNo;
    /**
     * @var string 报关信息
     * 不传，默认是新增
     * ADD 新增报关申请
     * MODIFY 修改
     */
    public $actionType;
    /**
     * @var int 订单总金额
     */
    public $totalAmount;
    /**
     * @var string
     */
    public $platformTradeNo;
    /**
     * @var string 报关流水号
     */
    public $customsNo;
}