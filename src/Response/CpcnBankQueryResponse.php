<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class CpcnBankQueryResponse extends BaseResponse
{
    /**
     * @var string
     */
    public $bankCode;
    /**
     * @var string
     */
    public $bankName;
    /**
     * @var string
     */
    public $bankCardNo;
    /**
     * @var string
     */
    public $bankCardType;
    /**
     * @var string
     */
    public $crdBin;
}