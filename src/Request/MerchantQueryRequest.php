<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/3
 * Time: 下午12:04
 */

namespace Lmh\OpenPaySDK\Request;


class MerchantQueryRequest extends BaseRequest
{
    protected $method = 'merchant.query';
}