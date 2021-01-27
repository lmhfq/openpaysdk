<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Tests;

use Lmh\OpenPaySDK\Client;
use Lmh\OpenPaySDK\Request\MerchantFeeQueryRequest;
use Lmh\OpenPaySDK\Request\PaymentProductListRequest;
use Lmh\OpenPaySDK\Response\BaseResponse;
use Lmh\OpenPaySDK\Response\MerchantFeeCreateResponse;
use Lmh\OpenPaySDK\Response\MerchantFeeQueryResponse;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午3:13
 */
class DefaultTest extends TestCase
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \ReflectionException
     */
    public function testAccountInfo()
    {
        $client = new Client([
//            'proxy' => [
//              //  'http' => '0.0.0.0', // Use this proxy with "http"
//            ]
        ]);
        $client->appId = '174008574995857408';
        $client->gatewayUrl = 'https://payment.wyawds.com/gateway';
        $client->appSecret = "}ovFff+t'Q}%~aK5zUIOx.3F?#R[b!*]";
        $client->timeout = 30;

        $merchantFeeQueryRequest = new MerchantFeeQueryRequest();
        $merchantFeeQueryRequest->externalId = "1699";
        $result = $client->execute($merchantFeeQueryRequest, new MerchantFeeQueryResponse());

        var_dump($result);
    }
}