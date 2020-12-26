<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class ReconciliationCapitalFlowQueryResponse extends BaseResponse
{
    /**
     * @var int 收入金额
     */
    public $incomeAmount;
    /**
     * @var int 支出金额
     */
    public $expendAmount;
}