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

$paymentTradeUnifiedOrderRequest = new PaymentTradeUnifiedOrderRequest();
$paymentTradeUnifiedOrderRequest->externalId = "1698";
$paymentTradeUnifiedOrderRequest->outTradeNo = "" . time();
$paymentTradeUnifiedOrderRequest->buyerId = '16996';
$paymentTradeUnifiedOrderRequest->tradeType = TradeType::WECHAT;
$paymentTradeUnifiedOrderRequest->totalAmount = 100;
$paymentTradeUnifiedOrderRequest->openid = 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o';

$result = $client->execute($paymentTradeUnifiedOrderRequest, new PaymentTradeUnifiedOrderResponse());
```