<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class ReconciliationSharingStatisticsQueryRequest extends BaseRequest
{
    protected $method = 'reconciliation.sharing.statistics.query';
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $receiverExternalId;
}