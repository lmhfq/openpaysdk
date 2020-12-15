<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;

class MerchantChannelCreateResponse extends BaseResponse
{
    /**
     * @var int 商家ID 历史数据可能没有
     */
    public $merchantId;
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