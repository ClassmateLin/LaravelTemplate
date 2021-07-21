<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Date: 2021/7/21
 * Time: 11:12 上午
 * @param array $data
 * @param array $aesConf
 * @return string
 */

/**
 * AES 加密
 * Author: ClassmateLin
 * Time: 2021/7/21 11:48 上午
 * @param string $data
 * @param array $aesConf
 * @return string
 */
function aes_encrypt(string $data, array $aesConf): string
{
    $encryptData = base64_encode(openssl_encrypt(json_encode($data, true),
        'aes-128-cbc', $aesConf['key'], true, $aesConf['iv']));
    // base编码的数据进行URL编码,解码操作, 由于某些字符会被转义导致两次数据不一致，需要将特殊字符替换.
    return str_replace(['+', '/', '='], ['-', '_', ''], $encryptData);
}

/**
 * AES 解密
 * Author: ClassmateLin
 * Time: 2021/7/21 11:48 上午
 * @param $data
 * @param array $aesConf
 * @return false|string
 */
function aes_decrypt($data, array $aesConf)
{
    $data = str_replace(['-','_',''], ['+', '/', '='], $data); // 需要加之前加密替换的字符替换回来
    return openssl_decrypt(base64_decode($data), 'aes-128-cbc',
        $aesConf['key'],true ,$aesConf['iv']);
}


/**
 * 普通日志记录
 * Author: ClassmateLin
 * Time: 2021/7/21 12:07 下午
 * @param string $msg
 * @param array $context
 */
function infoLog(string $msg, $context=[])
{
    logger()->channel('logger')->info($msg, $context);
}

/**
 * 异常日志记录
 * Author: ClassmateLin
 * Time: 2021/7/21 12:07 下午
 * @param string $msg
 * @param array $context
 */
function exceptionLog(string $msg, array $context = [])
{
    logger()->channel('logger')->error($msg, $context);
}
