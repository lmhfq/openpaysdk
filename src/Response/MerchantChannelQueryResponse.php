<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class MerchantChannelQueryResponse extends BaseResponse
{
    /**
     * @var int 商家ID
     */
    public $merchantId;
    /**
     * @var string
     */
    public $externalId;
    /**
     * @var string
     */
    public $subAppId;
    /**
     * @var string
     */
    public $subMchId;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $publicKey;
    /**
     * @var int
     */
    public $channelId;
    /**
     * @var string
     */
    public $channelCode;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var string
     */
    public $status;
}