<?php
declare(strict_types=1);

namespace OpenPaySDK;
use OpenPaySDK\Kernel\Support\Str;

/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/10/27
 * @method static \OpenPaySDK\Payment\Application            payment(array $config)
 * @method static \OpenPaySDK\Account\Application        account(array $config)
 * @method static \OpenPaySDK\Merchant\Application       merchant(array $config)
 * @method static \OpenPaySDK\Reconciliation\Application    reconciliation(array $config)
 * @method static \OpenPaySDK\Wechat\Application       wechat(array $config)
 */
class Factory
{
    /**
     * @param $name
     * @param array $config
     * @return mixed
     */
    public static function make($name, array $config)
    {
        $namespace = Str::studly($name);
        $application = "\\OpenPay\\{$namespace}\\Application";

        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return self::make($name, ...$arguments);
    }
}