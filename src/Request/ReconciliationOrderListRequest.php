<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class ReconciliationOrderListRequest extends BaseRequest
{
    protected $method = 'reconciliation.order.list';
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
}