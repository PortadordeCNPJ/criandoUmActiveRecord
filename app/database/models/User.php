<?php

namespace app\database\models;

use app\database\activerecord\Activerecord;

class User extends Activerecord
{
    //Usado o protect para essa variável ser usada apenas dentro da class User e dentro do Activerecord
    protected $table = 'users';
}