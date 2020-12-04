<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentProductQueryRequest extends BaseRequest
{
    protected $method = 'payment.product.query';
    /**
     * @var int
     */
    public $productId;
    /**
     * @var string
     */
    public $productCode;
}