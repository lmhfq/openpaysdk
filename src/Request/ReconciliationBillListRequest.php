<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class ReconciliationBillListRequest extends BaseRequest
{
    protected $method = 'reconciliation.bill.list';
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $endTime;
}