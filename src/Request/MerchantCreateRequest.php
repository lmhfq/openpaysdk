<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/3
 * Time: 下午12:03
 */

namespace Lmh\OpenPaySDK\Request;


class MerchantCreateRequest extends BaseRequest
{
    protected $method = 'merchant.create';
    /**
     * @var string 商户名称
     */
    public $merchantName;
    /**
     * @var int  1：个人  2 企业
     */
    public $merchantNature;

}