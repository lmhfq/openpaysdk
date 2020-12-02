<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午3:12
 */
class BaseRequest
{
    /**
     * @var string 接口名称
     */
    protected $method = '';
    /**
     * @var array
     */
    protected $apiParams = [];

    /**
     * 获取接口名称
     */
    public function getMethod()
    {
        return $this->method;
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}