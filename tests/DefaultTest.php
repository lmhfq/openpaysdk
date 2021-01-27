<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Tests;

use Lmh\OpenPaySDK\Client;
use Lmh\OpenPaySDK\Constant\TradeType;
use Lmh\OpenPaySDK\Request\AccountBalanceQueryRequest;
use Lmh\OpenPaySDK\Request\AccountCreateRequest;
use Lmh\OpenPaySDK\Request\MerchantFeeQueryRequest;
use Lmh\OpenPaySDK\Request\PaymentChannelQueryRequest;
use Lmh\OpenPaySDK\Request\PaymentProfitSharingReceiverAddRequest;
use Lmh\OpenPaySDK\Request\PaymentProfitSharingReceiverDeleteRequest;
use Lmh\OpenPaySDK\Request\PaymentTradeUnifiedOrderRequest;
use Lmh\OpenPaySDK\Response\AccountBalanceQueryResponse;
use Lmh\OpenPaySDK\Response\BaseResponse;
use Lmh\OpenPaySDK\Response\PaymentChannelQueryResponse;
use Lmh\OpenPaySDK\Response\PaymentProfitSharingReceiverAddResponse;
use Lmh\OpenPaySDK\Response\PaymentTradeUnifiedOrderResponse;
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
//
//        $paymentProductListRequest = new PaymentChannelQueryRequest();
//        $paymentProductListRequest->externalId = "1698";
//        $paymentProductListRequest->channelCode = "WECHAT";
//
//
//        $paymentProductListRequest = new PaymentTradeUnifiedOrderRequest();
//        $paymentProductListRequest->externalId = "1698";
//        $paymentProductListRequest->outTradeNo = "" . time();
//        $paymentProductListRequest->buyerId = '16996';
//        $paymentProductListRequest->tradeType = TradeType::WECHAT;
//        $paymentProductListRequest->totalAmount = 100;
//        $paymentProductListRequest->openid = 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o';
//        $paymentProductListRequest->profitSharing = 'Y';

        $paymentProductListRequest = new MerchantFeeQueryRequest();
        $paymentProductListRequest->externalId = "1699";
     //   $paymentProductListRequest->receivers=[
//            [
//                'type'=>'MERCHANT_ID',
//                'account'=>'15657676',
//                'relationType'=>'',
//            ]
//        ];
//        $paymentProductListRequest->outTradeNo = "" . time();
//        $paymentProductListRequest->buyerId = '16996';
//        $paymentProductListRequest->tradeType = TradeType::CPCN_WECHAT;
//        $paymentProductListRequest->totalAmount = 100;
//        $paymentProductListRequest->openid = 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o';
//        $paymentProductListRequest->profitSharing = 'Y';
//
//        $paymentProductListRequest = new AccountCreateRequest();
//        $paymentProductListRequest->externalId = "100037";

        $result = $client->execute($paymentProductListRequest, new BaseResponse());

        var_dump($result);
    }
}