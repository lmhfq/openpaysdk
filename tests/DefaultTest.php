<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Tests;

use Lmh\OpenPaySDK\Client;
use Lmh\OpenPaySDK\Request\PaymentProductListRequest;
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

        $paymentProductListRequest = new PaymentProductListRequest();
        $result = $client->execute($paymentProductListRequest);
    }
}