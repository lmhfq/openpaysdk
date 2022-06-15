<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2021/11/1
 * Time: 下午4:13
 */

namespace Lmh\OpenPaySDK\Request;


class PaymentTransferCreateRequest extends BaseRequest
{
    protected $method = 'payment.transfer.create';
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var string 交易类型
     */
    public $tradeType;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string 校验用户姓名选项 NO_CHECK：不校验真实姓名, FORCE_CHECK：强校验真实姓名
     */
    public $checkName = 'NO_CHECK';
    /**
     * @var string 收款用户姓名
     */
    public $accountName;
    /**
     * @var string 收款用户证件号
     */
    public $cardNo;
    /**
     * @var int
     */
    public $totalAmount;
    /**
     * @var string 企业付款备注
     */
    public $description;
    /**
     * @var int
     */
    public $limit;
    /**
     * @var string 收款人银行卡号
     */
    public $bankCardNo;
    /**
     * @var string 收款人银行卡地区
     */
    public $province;
    /**
     * @var string 收款人银行卡地区
     */
    public $city;
    /**
     * @var string
     */
    public $notifyUrl;
}