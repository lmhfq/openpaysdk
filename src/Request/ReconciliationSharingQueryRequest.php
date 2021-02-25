<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class ReconciliationSharingQueryRequest extends BaseRequest
{
    protected $method = 'reconciliation.sharing.query';
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $receiverExternalId;
}