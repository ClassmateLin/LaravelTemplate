<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Date: 2021/7/21
 * Time: 11:30 上午
 */

namespace App\Services;


use App\Contracts\ServiceContract;
use App\Traits\ApiResponseTrait;

/**
 * 业务逻辑基类
 * Author: ClassmateLin
 * Time: 2021/7/21 11:30 上午
 * Class BaseService
 * @package App\Services
 */
class BaseService implements ServiceContract
{
    use ApiResponseTrait;

    protected $repo = null;
}
