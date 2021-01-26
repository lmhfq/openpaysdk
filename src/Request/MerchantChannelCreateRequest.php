<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/3
 * Time: 下午1:43
 */

namespace Lmh\OpenPaySDK\Request;


class MerchantChannelCreateRequest extends BaseRequest
{
    protected $method = 'merchant.channel.create';
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
    public $aesKey;
    /**
     * @var string
     */
    public $serialNumber;
    /**
     * @var string
     */
    public $certPath;
    /**
     * @var int
     */
    public $channelId;
    /**
     * @var int
     */
    public $rate;
    /**
     * @var int 通道状态
     */
    public $status;
    /**
     * @var string
     */
    public $channelCode;
    /**
     * @var int 是否开启服务商
     */
    public $openPartner;
    /**
     * @var int 服务商Id
     */
    public $partnerId;
}