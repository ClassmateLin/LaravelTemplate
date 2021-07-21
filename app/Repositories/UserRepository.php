<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Date: 2021/7/21
 * Time: 11:50 上午
 */

namespace App\Repositories;


use App\Models\User;

/**
 * user model 相关操作
 * Author: ClassmateLin
 * Time: 2021/7/21 11:51 上午
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepository extends BaseRepository
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
