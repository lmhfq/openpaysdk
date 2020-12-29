<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/29
 * Time: 上午11:01
 */

namespace Lmh\OpenPaySDK\Request;


class MerchantChannelBatchCreateRequest extends BaseRequest
{
    /**
     * @var array 商家支付通道
     */
    public $channel;
}