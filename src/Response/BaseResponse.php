<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

use ReflectionClass;
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
     * @var array
     */
    public $data = [];

    /**
     * @param $values
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
     * @throws \ReflectionException
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