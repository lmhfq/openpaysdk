<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountCapitalCollectionRequest extends BaseRequest
{
    protected $method = 'account.capital.collection';
    /**
     * @var int 被归集方ID
     */
    public $accountId;
    /**
     * @var string 归集方唯一ID
     */
    public $collectionExternalId;
    /**
     * @var int 归集方账户ID
     */
    public $collectionAccountId;
    /**
     * @var int 归集金额
     */
    public $totalAmount;
    /**
     * @var string 描述信息
     */
    public $description;
}