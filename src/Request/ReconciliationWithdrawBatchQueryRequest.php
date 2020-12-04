<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class ReconciliationWithdrawBatchQueryRequest extends BaseRequest
{
    protected $method = 'reconciliation.withdraw.batch.query';
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var int 提现状态(0-提现中 1-提现成功 2-提现失败)
     */
    public $withdrawStatus;
}