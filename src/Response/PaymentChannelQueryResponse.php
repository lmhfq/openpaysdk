<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class PaymentChannelQueryResponse extends BaseResponse
{
    /**
     * @var int
     */
    public $channelId;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $channelCode;
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var int
     */
    public $rate;
    /**
     * @var int
     */
    public $platformRate;
    /**
     * @var int
     */
    public $statementType;
    /**
     * @var int
     */
    public $status;
}