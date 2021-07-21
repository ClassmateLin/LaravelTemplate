<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Date: 2021/7/21
 * Time: 10:50 上午
 */
namespace App\Constant;

/**
 * 全局常量定义
 * Author: ClassmateLin
 * Time: 2021/7/21 10:52 上午
 * Class Constant
 * @package App\Constant
 */
class Constant
{
    /************* 状态码定义 *******************/
    public const CODE_SUCCESS = 20000; // 请求成功


    /************* 错误码定义 *******************/

    public const ERR_INVALID_PARAMETER = 10000;  // 请求参数错误
    public const ERR_SYSTEM = 50000;  // 系统错误


    public const MSG_MAP = [
        self::CODE_SUCCESS => '请求成功',
        self::ERR_INVALID_PARAMETER => '请求参数错误',
        self::ERR_SYSTEM => '系统错误',
    ];

}
