<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK;

use GuzzleHttp\Exception\GuzzleException;
use Lmh\OpenPaySDK\Request\BaseRequest;
use Lmh\OpenPaySDK\Response\BaseResponse;
use Nette\Utils\Random;

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
    public $gatewayUrl = "http://payment.xls.com/gateway";
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
    protected $version = '1.0';
    /**
     * @var string 签名类型
     */
    public $signType = "MD5";
    /**
     * @var bool
     */
    public $sandbox;
    /**
     * @var array
     * @see 参考 https://docs.guzzlephp.org/en/stable/request-options.html#proxy
     * 'proxy' => [
     * 'http'  => 'tcp://localhost:8125', // Use this proxy with "http"
     * 'https' => 'tcp://localhost:9124', // Use this proxy with "https",
     * 'no' => ['.mit.edu', 'foo.com']    // Don't use a proxy with these
     * ]
     */
    protected $options = [];

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
     * @throws \ReflectionException
     */
    public function execute(BaseRequest $request, BaseResponse $response): BaseResponse
    {
        $sysParams["appId"] = $this->appId;
        $sysParams["version"] = $this->version;
        $sysParams["format"] = $this->format;
        $sysParams["signType"] = $this->signType;
        $sysParams["method"] = $request->getMethod();
        $sysParams["nonce"] = Random::generate(16);;

        $apiParams = $request->getApiParams();
        $params = array_merge($sysParams, $apiParams);

        $querySigner = new Signer();
        $params['sign'] = $querySigner->sign($params, $this->appSecret);
        $options = array_merge($this->options, [
            'body' => json_encode($params),
        ]);
        $requestClient = new Request();
        $requestClient->baseUri = $this->gatewayUrl;
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