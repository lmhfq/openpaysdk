<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class ReconciliationWithdrawQueryResponse extends BaseResponse
{
    /**
     * @var int
     */
    public $amount;
}