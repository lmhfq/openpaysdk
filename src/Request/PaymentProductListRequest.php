<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午3:18
 */

namespace Lmh\OpenPaySDK\Request;


class PaymentProductListRequest extends BaseRequest
{
    protected $method = 'payment.product.list';
}