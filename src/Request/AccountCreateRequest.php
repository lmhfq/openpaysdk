<?php
declare(strict_types=1);

namespace Lmh\OpenPaySDK\Request;

class AccountCreateRequest extends BaseRequest
{
    protected $method = 'account.create';
    /**
     * @var int
     */
    public $productId;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var int 账户类型 1个人户 2 企业户
     */
    public $accountType;
    /**
     * @var string 客户名称（企业是公司名称）
     */
    public $accountName;
    /**
     * @var string 商户简称
     */
    public $merchantShortName;
    /**
     * @var string 组织机构号
     */
    public $ptnCode;
    /**
     * @var string 终端商户号
     */
    public $cpcnMerchantId;
    /**
     * @var string  公司：法定代表人 个人：自然人姓名
     */
    public $contactName;
    /**
     * @var string  法定代表人/自然人 证件类型
     */
    public $cardType;
    /**
     * @var string 法定代表人/自然人 证件号码
     */
    public $cardNo;
    /**
     * @var string 身份证姓名
     */
    public $cardName;
    /**
     * @var string 法定代表人（企业必填）证件签发日期 Y-m-d
     */
    public $cardStartTime;
    /**
     * @var string 法定代表人（企业必填） 证件到期日期，若长期有效 请填写 2099-12-31
     */
    public $cardEndTime;
    /**
     * @var string  统一社会信用代码(公司必填)
     */
    public $businessLicenseNumber;
    /**
     * @var string 社会信用代码开始日期 Y-m-d
     */
    public $businessStartTime;
    /**
     * @var string 社会信用代码到期日期 Y-m-d
     */
    public $businessTime;
    /**
     * @var string 组织机构代码
     */
    public $organizationNumber;
    /**
     * @var string 组织机构代码有效期限 Y-m-d
     */
    public $organizationStartTime;
    /**
     * @var string 组织机构代码有效期限 Y-m-d(或'长期')
     */
    public $organizationEndTime;
    /**
     * @var string 联系电话
     */
    public $contactMobile;
    /**
     * @var string 电子邮件
     */
    public $contactEmail;
    /**
     * 地址
     */
    public $address;
    /**
     * 省份编码
     */
    public $province;
    /**
     * 城市编码
     */
    public $city;
    /**
     * @var string 行业编码
     */
    public $industryId;
    /**
     * @var string 企业规模
     */
    public $scale;
    /**
     * @var string 开户许可证核准号/企业基本账号
     */
    public $accountLicence;
    /**
     * @var string 注册资本 万元
     */
    public $capital;
    /**
     * @var string 经营范围
     */
    public $businessScope;
    /**
     * @var string  法人类型(65-经营者/法人 66-负责人)
     */
    public $operatorType;
    /**
     * @var string 经办人姓名
     */
    public $operatorName;
    /**
     * @var string 经办人证件号码
     */
    public $operatorCardNo;
    /**
     * @var string 经办人（企业必填）证件签发日期 Y-m-d
     */
    public $operatorCardStartTime;
    /**
     * @var string 经办人 证件到期日期，若长期有效 请填写 2099-12-31
     */
    public $operatorCardEndTime;
    /**
     * @var string 经办人邮箱
     */
    public $operatorEmail;
    /**
     * @var string 经办人手机号
     */
    public $operatorMobile;
    /**
     * @var string 补充说明
     */
    public $businessAdditionDesc;
    /**
     * @var array 绑卡信息
     */
    public $bankCard;
    /**
     * @var array 电子证件
     */
    public $fileInfo = [];
    /**
     * @var array 店铺信息
     */
    public $storeInfo = [];
    /**
     * @var string 通知商户服务器地址
     */
    public $notifyUrl;
    /**
     * @var string 成功页面跳转地址
     */
    public $returnUrl;
}