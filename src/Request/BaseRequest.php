<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午3:12
 * @property string $externalId
 */
class BaseRequest
{
    /**
     * @var string 商家外部唯一ID
     */
    public $externalId;
    /**
     * @var int 商家入驻后返回的商户ID（支付平台的商户ID）
     */
    public $merchantId;
    /**
     * @var string 接口名称
     */
    protected $method = '';

    /**
     * 获取接口名称
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    public function getApiParams(): array
    {
        return $this->toArray();
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $params = get_object_vars($this);
        return array_filter($params, function ($v) {
            return $v !== null;
        });
    }
}