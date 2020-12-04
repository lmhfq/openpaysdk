<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class CpcnBankQueryRequest extends BaseRequest
{
    protected $method = 'cpcn.bank.query';
    /**
     * @var string
     */
    public $ptnCode;
    /**
     * @var string
     */
    public $bankCardNo;
}