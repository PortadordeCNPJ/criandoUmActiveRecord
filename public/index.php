<?php

require "../vendor/autoload.php";

use app\database\models\User;
use app\database\activerecord\Delete;


$user = new User;
// $user->firstName = 'Guilherme';
// $user->lastName = 'De Souza Muller';

echo $user->execute(new Delete(field:'id', value:3));

