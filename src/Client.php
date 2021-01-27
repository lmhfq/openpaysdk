<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Lmh\OpenPaySDK\Request\BaseRequest;
use Lmh\OpenPaySDK\Response\BaseResponse;
use ReflectionException;

/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午3:04
 */
class Client
{
    /**
     * @var string 网关
     */
    public $gatewayUrl = "https://payment.wyawds.com/gateway";
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appSecret;
    /**
     * @var string 返回数据格式
     */
    public $format = "json";
    /**
     * @var string api版本
     */
    public $version = '1.0';
    /**
     * @var string 签名类型
     */
    public $signType = "MD5";
    /**
     * @var bool
     */
    public $sandbox;
    /**
     * @var int
     */
    public $timeout = 30;
    /**
     * @var array
     * @see https://docs.guzzlephp.org/en/stable/request-options.html#proxy
     * 'proxy' => [
     * 'http'  => 'tcp://localhost:8125', // Use this proxy with "http"
     * 'https' => 'tcp://localhost:9124', // Use this proxy with "https",
     * 'no' => ['.mit.edu', 'foo.com']    // Don't use a proxy with these
     * ]
     */
    private $options = [];
    /**
     * @var string
     */
    private $requestBody;

    /**
     * Client constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        if ($options) {
            $this->options = array_merge($this->options, $options);
        }
    }

    /**
     * @return string
     */
    public function getRequestBody(): string
    {
        return $this->requestBody;
    }

    /**
     * @return bool
     */
    public function inSandbox(): bool
    {
        return (bool)$this->sandbox;
    }

    /**
     * @param BaseRequest $request
     * @param BaseResponse $response
     * @return BaseResponse
     * @throws GuzzleException
     * @throws ReflectionException
     */
    public function execute(BaseRequest $request, BaseResponse $response): BaseResponse
    {
        $sysParams["appId"] = $this->appId;
        $sysParams["version"] = $this->version;
        $sysParams["format"] = $this->format;
        $sysParams["signType"] = $this->signType;
        $sysParams["method"] = $request->getMethod();
        try {
            $sysParams["nonce"] = self::random();
        } catch (Exception $e) {
        }
        $apiParams = $request->getApiParams();
        $params = array_merge($sysParams, $apiParams);

        $params['sign'] = (new Signer())->sign($params, $this->appSecret);

        $this->requestBody = json_encode($params);
        $options = array_merge($this->options, [
            'body' => $this->requestBody,
        ]);

        $requestClient = new Request([
            'base_uri' => $this->gatewayUrl,
            'timeout' => $this->timeout,
        ]);
        $result = $requestClient->request('', "POST", $options);
        if ($result && is_string($result)) {
            $attributes = json_decode($result, true);
            if (isset($attributes['data'])) {
                $attributes = array_merge($attributes, $attributes['data']);
            }
            $response->setAttributes($attributes);
        }
        return $response;
    }


    /**
     * Generates a random string of given length from characters specified in second argument.
     * Supports intervals, such as `0-9` or `A-Z`.
     * @param int $length
     * @param string $charList
     * @return string
     * @throws Exception
     */
    public static function random(int $length = 16, string $charList = '0-9a-z'): string
    {
        $charList = count_chars(preg_replace_callback('#.-.#', function (array $m): string {
            return implode('', range($m[0][0], $m[0][2]));
        }, $charList), 3);
        $chLen = strlen($charList);
        $res = '';
        for ($i = 0; $i < $length; $i++) {
            $res .= $charList[random_int(0, $chLen - 1)];
        }
        return $res;
    }
}