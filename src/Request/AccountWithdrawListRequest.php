<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountWithdrawListRequest extends BaseRequest
{
    protected $method = 'account.withdraw.list';
    /**
     * @var string
     */
    public $createdTimeStart;
    /**
     * @var string
     */
    public $createdTimeEnd;
    /**
     * @var string
     */
    public $createdTimeSort;
    /**
     * @var int
     */
    public $withdrawStatus;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
}