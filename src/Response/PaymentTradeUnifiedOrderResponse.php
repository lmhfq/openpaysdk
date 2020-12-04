<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/4
 * Time: 上午10:57
 */

namespace Lmh\OpenPaySDK\Response;


class PaymentTradeUnifiedOrderResponse extends BaseResponse
{
    /**
     * @var int 订单总金额
     */
    public $totalAmount;
    /**
     * @var string 交易类型
     */
    public $tradeType;
    /**
     * @var string
     */
    public $profitSharing;
    /**
     * @var array
     */
    public $paymentInfo;
}