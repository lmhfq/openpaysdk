<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK;

use GuzzleHttp\Exception\GuzzleException;
use Lmh\OpenPaySDK\Request\BaseRequest;
use Lmh\OpenPaySDK\Response\BaseResponse;
use Nette\Utils\Random;
use RandomLib\Factory;
use SecurityLib\Strength;

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


    protected $request;

    public function __construct()
    {


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
     * @return array|mixed
     * @throws GuzzleException
     */
    public function execute(BaseRequest $request): BaseResponse
    {
        $sysParams["appId"] = $this->appId;
        $sysParams["version"] = $this->version;
        $sysParams["format"] = $this->format;
        $sysParams["sign_type"] = $this->signType;
        $sysParams["method"] = $request->getMethod();
        $sysParams["nonce"] = Random::generate(16);;

        $apiParams = $request->getApiParams();

        $params = array_merge($sysParams, $apiParams);
        $querySigner = new Signer();
        $params['sign'] = $querySigner->sign($params, $this->appSecret);
        $options = [
            'body' => json_encode($params),
        ];
        $requestClient = new Request();
        $requestClient->baseUri = $this->gatewayUrl;

        $baseResponse = new BaseResponse();
        $response = $requestClient->request('', "POST", $options);
        if ($response && is_string($response)) {
            $result = json_decode($response, true);
            $baseResponse->data = $result['data'] ?? [];
            $baseResponse->resultCode = $result['resultCode'] ?? [];
            $baseResponse->resultMessage = $result['resultMessage'] ?? [];
            $baseResponse->success = $result['success'];
        }
        return $baseResponse;
    }
}