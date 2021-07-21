<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Date: 2021/7/21
 * Time: 11:53 上午
 */

namespace App\Traits;


use App\Constant\Constant;
use Illuminate\Http\JsonResponse;

/**
 * API Response 定义
 * Author: ClassmateLin
 * Time: 2021/7/21 11:59 上午
 * Trait ApiResponseTrait
 * @package App\Traits
 */
trait ApiResponseTrait
{
    /**
     * 返回操作成功的数据给客户端
     * Author: ClassmateLin
     * Time: 2021/7/21 11:54 上午
     * @param $data
     * @return JsonResponse
     */
    public function success($data=null): JsonResponse
    {
        $responseData = [
            'code' => Constant::CODE_SUCCESS,
            'msg'  => Constant::MSG_MAP[Constant::CODE_SUCCESS],
            'data' => $data,
        ];
        return response()->json($responseData);
    }

    /**
     * 返回操作失败的数据给客户端
     * Author: ClassmateLin
     * Time: 2021/7/21 11:54 上午
     * @param int $code
     * @param null $data
     * @param null $extra
     * @param null $msg
     * @return JsonResponse
     */
    public function error(int $code=Constant::ERR_SYSTEM, $data=null, $extra=null, $msg=null): JsonResponse
    {
        $responseData = [
            'code' => $code,
            'msg'  => Constant::MSG_MAP[$code] ?? $msg,
            'data' => $data,
        ];
        if (empty($extra)){
            $responseData['extra'] = $extra;
        }
        return response()->json($responseData);
    }
}
