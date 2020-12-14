<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK;

use GuzzleHttp\Exception\GuzzleException;
use Lmh\OpenPaySDK\Request\BaseRequest;
use Lmh\OpenPaySDK\Response\BaseResponse;
use Nette\Utils\Random;
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
    public $gatewayUrl = "https://pay.wyawds.com/gateway";

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
     * @see 参考 https://docs.guzzlephp.org/en/stable/request-options.html#proxy
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
     * @return string
     */
    public function getRequestBody(): string
    {
        return $this->requestBody;
    }

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
        $sysParams["nonce"] = Random::generate(16);

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
}