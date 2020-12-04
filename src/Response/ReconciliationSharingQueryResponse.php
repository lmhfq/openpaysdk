<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class ReconciliationSharingQueryResponse extends BaseResponse
{
    /**
     * @var int
     */
    public $availableAmount;
}