<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class ReconciliationWithdrawQueryRequest extends BaseRequest
{
    protected $method = 'reconciliation.withdraw.query';
    /**
     * @var int 账户id
     */
    public $accountId;
    /**
     * @var int 提现状态(0-提现中 1-提现成功 2-提现失败)
     */
    public $withdrawStatus;
}