<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class CpcnBankListRequest extends BaseRequest
{
    protected $method = 'cpcn.bank.list';
    /**
     * @var int
     */
    public $bankId;
    /**
     * @var string
     */
    public $openBankName;
    /**
     * @var int
     */
    public $cityId;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
}