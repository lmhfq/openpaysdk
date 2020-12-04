<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class PaymentRefundBatchCreateRequest extends BaseRequest
{
    protected $method = 'payment.refund.batch.create';
    /**
     * @var []
     */
    public $list;
    /**
     * @var array[RefundDTO]
     */
    public $refundDTO;
}