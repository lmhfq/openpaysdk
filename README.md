# openpaysdk

```
composer require lmh/openpaysdk

```

```
$client = new Client([
    'proxy' => [
      //  'http' => '0.0.0.0', // Use this proxy with "http"
    ]
]);
$client->appId = '174008574995857408';
$client->appSecret = 'GcnQ7rtAg#O:]-Ea3u6>t16}oQ(Ms\mS';
$client->timeout = 30;

$paymentProductListRequest = new PaymentTradeUnifiedOrderRequest();
$paymentProductListRequest->externalId = "1698";
$paymentProductListRequest->outTradeNo = "" . time();
$paymentProductListRequest->buyerId = '16996';
$paymentProductListRequest->tradeType = TradeType::WECHAT;
$paymentProductListRequest->totalAmount = 100;
$paymentProductListRequest->openid = 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o';

$result = $client->execute($paymentProductListRequest, new PaymentTradeUnifiedOrderResponse());
```