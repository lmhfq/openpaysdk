<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentOrderListRequest extends BaseRequest
{
    protected $method = 'payment.order.list';
    /**
     * @var string
     */
    public $outTradeNo;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $createdTimeStart;
    /**
     * @var string
     */
    public $createdTimeEnd;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $totalAmountMin;
    /**
     * @var string
     */
    public $totalAmountMax;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
}