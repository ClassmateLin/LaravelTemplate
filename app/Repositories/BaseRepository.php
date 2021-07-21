<?php
/**
 * Created by PhpStorm.
 * User: ClassmateLin
 * Date: 2021/7/21
 * Time: 11:29 上午
 */

namespace App\Repositories;


use App\Contracts\RepositoryContract;


/**
 * 模型操作基类
 * Author: ClassmateLin
 * Time: 2021/7/21 11:31 上午
 * Class BaseRepository
 * @package App\Repositories
 */
abstract class BaseRepository implements RepositoryContract
{
    protected $model = null;
}
