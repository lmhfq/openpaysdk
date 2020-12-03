<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Tests;

use Lmh\OpenPaySDK\Client;
use Lmh\OpenPaySDK\Constant\TradeType;
use Lmh\OpenPaySDK\Request\MerchantChannelCreateRequest;
use Lmh\OpenPaySDK\Request\MerchantChannelListRequest;
use Lmh\OpenPaySDK\Request\MerchantCreateRequest;
use Lmh\OpenPaySDK\Request\PaymentTradeQueryRequest;
use Lmh\OpenPaySDK\Request\PaymentTradeUnifiedOrderRequest;
use Lmh\OpenPaySDK\Response\MerchantCreateResponse;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午3:13
 */
class DefaultTest extends TestCase
{

    public function testAccountInfo()
    {
        $client = new Client();
        $client->appId = '174008574995857408';
        $client->appSecret = 'GcnQ7rtAg#O:]-Ea3u6>t16}oQ(Ms\mS';

        $paymentProductListRequest = new PaymentTradeUnifiedOrderRequest();
        $paymentProductListRequest->externalId = "1698";
        $paymentProductListRequest->outTradeNo = "" . time();
        $paymentProductListRequest->buyerId = '16996';
        $paymentProductListRequest->tradeType = TradeType::WECHAT;
        $paymentProductListRequest->totalAmount = 100;
        $paymentProductListRequest->openid = 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o';


        $paymentProductListRequest = new PaymentTradeQueryRequest();
        $paymentProductListRequest->externalId = "1698";
        $paymentProductListRequest->outTradeNo = '1606964752';



        $paymentProductListRequest = new MerchantCreateRequest();
        $paymentProductListRequest->externalId = "1698";
        $paymentProductListRequest->merchantNature = 2;
        $paymentProductListRequest->merchantName = "1698直连测试1";



        $paymentProductListRequest = new MerchantChannelListRequest();
        $paymentProductListRequest->externalId = "1698";


        $paymentProductListRequest = new MerchantChannelCreateRequest();
        $paymentProductListRequest->externalId = "1698";

        $result = $client->execute($paymentProductListRequest,new MerchantCreateResponse());
        var_dump($result);
    }
}