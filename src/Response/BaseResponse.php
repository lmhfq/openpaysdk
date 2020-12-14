<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

use ReflectionClass;
use ReflectionException;
use ReflectionProperty;

/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午6:30
 */
class BaseResponse
{
    /**
     * @var string 商家外部唯一ID
     */
    public $externalId;
    /**
     * @var string 签名
     */
    public $sign;
    /**
     * @var bool
     */
    public $success = false;
    /**
     * @var string
     */
    public $resultCode = "SYSTEM_ERROR";
    /**
     * @var string
     */
    public $resultMessage = 'SYSTEM_ERROR';
    /**
     * @var array 原生返回数据
     */
    public $data = [];

    /**
     *
     * @param $values
     * @throws ReflectionException
     */
    public function setAttributes($values)
    {
        if (is_array($values)) {
            $attributes = array_flip($this->attributes());
            foreach ($values as $name => $value) {
                if (isset($attributes[$name])) {
                    $this->$name = $value;
                }
            }
        }
    }

    /**
     * @return array
     * @throws ReflectionException
     */
    public function attributes()
    {
        $class = new ReflectionClass($this);
        $names = [];
        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            if (!$property->isStatic()) {
                $names[] = $property->getName();
            }
        }
        return $names;
    }
}