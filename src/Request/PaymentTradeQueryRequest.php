<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/3
 * Time: 上午11:09
 */

namespace Lmh\OpenPaySDK\Request;


class PaymentTradeQueryRequest extends BaseRequest
{
    protected $method = 'payment.trade.query';
    /**
     * @var string 商家外部订单号
     */
    public $outTradeNo;
    /**
     * @var string 交易流水号
     */
    public $tradeNo;
}