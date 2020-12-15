<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/12
 * Time: 下午6:08
 */

namespace Lmh\OpenPaySDK\Request;


class PaymentProfitSharingReceiverDeleteRequest extends BaseRequest
{
    /**
     * @var int
     */
    public $merchantId;
    /**
     * @var string 支付产品，WECHAT WECHAT_SP
     */
    public $productCode;
    /**
     * @var array
     */
    public $receivers;
}