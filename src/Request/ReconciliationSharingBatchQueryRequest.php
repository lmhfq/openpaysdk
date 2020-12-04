<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class ReconciliationSharingBatchQueryRequest extends BaseRequest
{
    protected $method = 'reconciliation.sharing.batch.query';
    /**
     * @var int 分账状态 1-待分账  2-已分账 3-冻结在总部
     */
    public $status;
}