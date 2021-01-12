<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/3
 * Time: 下午12:03
 */

namespace Lmh\OpenPaySDK\Request;


class MerchantCreateRequest extends BaseRequest
{
    protected $method = 'merchant.create';
    /**
     * @var string 所属商户外部唯一ID
     */
    public $ancestorExternalId;
    /**
     * @var int 1：个人  2 企业
     */
    public $merchantNature;
    /**
     * @var string 商户名称
     */
    public $merchantName;
    /**
     * @var string 证件类型
     */
    public $cardType;
    /**
     * @var string 证件号
     */
    public $cardNo;
    /**
     * @var string 证件有效期(起始时间)
     */
    public $cardStartTime;
    /**
     * @var string 证件有效期(截止时间)
     */
    public $cardEndTime;
    /**
     * @var string 法人姓名
     */
    public $contactName;
    /**
     * @var string 联系电话
     */
    public $contactMobile;
    /**
     * @var string 电子邮件
     */
    public $contactEmail;
    /**
     * @var string 企业地址
     */
    public $address;
    /**
     * @var string 企业规模
     */
    public $scale;
    /**
     * @var string 注册资本
     */
    public $capital;
    /**
     * @var string 经营范围
     */
    public $business;
    /**
     * @var string 省份编码
     */
    public $province;
    /**
     * @var string 城市编码
     */
    public $city;
    /**
     * @var string 地区编码
     */
    public $district;
    /**
     * @var string 开户许可证核准号
     */
    public $accountLicence;
    /**
     * @var string 社会统一信用代码
     */
    public $businessLicenseNumber;
    /**
     * @var string 社会统一信用到期时间
     */
    public $businessTime;
    /**
     * @var string 组织机构代码
     */
    public $organizationNumber;
    /**
     * @var string 组织机构代码有效期限
     */
    public $organizationTime;
    /**
     * @var string 经办人姓名
     */
    public $operatorName;
    /**
     * @var string 经办人身份证号
     */
    public $operatorCardNo;
    /**
     * @var string 经办人手机号;
     */
    public $operatorMobile;
}