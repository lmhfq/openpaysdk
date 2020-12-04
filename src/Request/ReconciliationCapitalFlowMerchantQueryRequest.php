<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class ReconciliationCapitalFlowMerchantQueryRequest extends BaseRequest
{
    protected $method = 'reconciliation.capital.flow.merchant.query';
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $startTime;
}