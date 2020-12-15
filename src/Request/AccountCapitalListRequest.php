<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountCapitalListRequest extends BaseRequest
{
    protected $method = 'account.capital.list';
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $outTradeNo;
    /**
     * @var string
     */
    public $tradeNo;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $type;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
}