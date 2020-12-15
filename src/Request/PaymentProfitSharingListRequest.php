<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentProfitSharingListRequest extends BaseRequest
{
    protected $method = 'payment.profit.sharing.list';
    /**
     * @var string 商户订单号
     */
    public $outTradeNo;
    /**
     * @var int 分账状态 1-待分账  2-已分账 3-冻结在总部
     */
    public $status;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
}