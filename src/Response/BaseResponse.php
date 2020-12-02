<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Response;
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午6:30
 */
class BaseResponse
{
    /**
     * @var bool
     */
    public $success = false;
    /**
     * @var string
     */
    public $resultCode = "SYSTEM_ERROR";
    /**
     * @var string
     */
    public $resultMessage = 'SYSTEM_ERROR';
    /**
     * @var array
     */
    public $data = [];
}