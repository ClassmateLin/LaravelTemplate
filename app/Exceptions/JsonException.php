<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Email: Yue.Lin@pccw.com
 * Date: 2021/3/11
 * Time: 6:04 下午
 */

namespace App\Exceptions;

use App\Constant\Constant;
use App\Traits\ApiResponseTrait;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


/**
 * 通用异常, 返回JSON格式数据
 * Author: ClassmateLin
 * Time: 2021/7/21 12:04 下午
 * Class JsonException
 * @package App\Exceptions
 */
class JsonException extends Exception
{
    use ApiResponseTrait;

    private $msg, $errno, $extraData, $data;

    /**
     * ApiException constructor.
     * @param null $errno 错误码
     * @param array $data
     * @param null $extraData
     * @param bool $logFlag
     */
    public function __construct($errno=null, $data=[], $extraData=null, $logFlag=true)
    {
        $this->errno = $errno;
        $this->data = $data;
        $this->extraData = $extraData;
        if ($logFlag) {
            $this->logException();
        }
    }

    /**
     * 记录异常信息
     * Author: ClassmateLin
     * Time: 2021/7/21 12:08 下午
     */
    protected function logException()
    {
        exceptionLog($this->message, ['code' => $this->errno, 'extra' => $this->extraData, 'data' => $this->data]);
    }

    /**
     * 返回数据
     * @param Request $request
     * @return JsonResponse
     */
    public function render(Request $request): JsonResponse
    {
        return $this->error($this->errno, $this->data, $this->extraData);
    }


}
