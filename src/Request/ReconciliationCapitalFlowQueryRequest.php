<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class ReconciliationCapitalFlowQueryRequest extends BaseRequest
{
    protected $method = 'reconciliation.capital.flow.query';
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var array
     */
    public $type;
}