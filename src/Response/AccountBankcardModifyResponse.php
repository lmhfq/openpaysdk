<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class AccountBankcardModifyResponse extends BaseResponse
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var int
     */
    public $state;
}