<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Date: 2021/7/21
 * Time: 11:49 上午
 */

namespace App\Services;


use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;


/**
 * user相关业务逻辑
 * Author: ClassmateLin
 * Time: 2021/7/21 11:52 上午
 * Class UserService
 * @package App\Services
 */
class UserService extends BaseService
{
    public function __construct(UserRepository $repository)
    {
        $this->repo = $repository;
    }

    /**
     * 用户登录逻辑
     * Author: ClassmateLin
     * Time: 2021/7/21 12:14 下午
     * @param $params
     * @return JsonResponse
     */
    public function login($params): JsonResponse
    {
        return $this->success($params);
    }
}
