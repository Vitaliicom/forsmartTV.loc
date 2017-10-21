<?php
/**
 * Created by PhpStorm.
 * User: masok
 * Date: 20.10.2017
 * Time: 14:10
 */

namespace app\models;


use app\components\Db;

class Model
{
    public function __construct()
    {
        Db::getConnection();
    }
}