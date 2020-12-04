<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class ReconciliationOrderListResponse extends BaseResponse
{
    /**
     * @var int
     */
    public $totalAmount;
    /**
     * @var int
     */
    public $totalPlatformFee;
    /**
     * @var int
     */
    public $totalNum;
    /**
     * @var int
     */
    public $totalMerchant;
    /**
     * @var int
     */
    public $refundAmount;
    /**
     * @var int
     */
    public $refundNum;
}