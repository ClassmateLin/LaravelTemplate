<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Date: 2021/7/21
 * Time: 10:56 上午
 */

namespace App\Http\Requests;

namespace App\Http\Requests;


use App\Constant\Constant;
use App\Exceptions\JsonException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

/**
 * 表单验证基类
 * Author: ClassmateLin
 * Time: 2021/7/21 12:03 下午
 * Class BaseRequest
 * @package App\Http\Requests
 */
class BaseRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * 表单验证失败返回JSON
     * Author: ClassmateLin
     * Time: 2021/7/21 12:11 下午
     * @param Validator $validator
     * @throws JsonException
     */
    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->toArray();
        throw new JsonException(Constant::ERR_INVALID_PARAMETER, [], $errors);
    }
}
