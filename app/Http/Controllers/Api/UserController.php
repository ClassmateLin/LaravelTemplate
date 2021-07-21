<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Date: 2021/7/21
 * Time: 11:11 上午
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

/**
 * 用户相关接口
 * Author: ClassmateLin
 * Time: 2021/7/21 12:15 下午
 * Class UserController
 * @package App\Http\Controllers\Api
 */
class UserController extends Controller
{
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * 用户登录
     * Author: ClassmateLin
     * Time: 2021/7/21 12:15 下午
     * @param LoginRequest $loginRequest
     * @return JsonResponse
     */
    public function login(LoginRequest $loginRequest): JsonResponse
    {
        return $this->service->login($loginRequest->validated());
    }
}
