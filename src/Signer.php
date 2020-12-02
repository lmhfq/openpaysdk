<?php
declare(strict_types=1);


namespace Lmh\OpenPaySDK;


/**
 * Class Signer
 * @package Lmh\OpenPaySDK
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 */
class Signer
{
    /**
     * @param $content
     * @param $sign
     * @param $appSecret
     * @return bool
     */
    public function verify($content, $sign, $appSecret): bool
    {
        $signStr = $this->sign($content, $appSecret);
        return $signStr == $sign;
    }

    /**
     * @param array $params
     * @param $key
     * @return string
     */
    public function sign(array $params, $key)
    {
        unset($params['sign']);
        ksort($params);
        $params['key'] = $key;
        $params = urldecode(http_build_query($params));
        return strtoupper(md5($params));
    }
}