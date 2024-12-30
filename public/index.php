<?php

require "../vendor/autoload.php";

use app\database\models\User;
use app\database\activerecord\FindAll;

$user = new User;
// $user->firstName = 'Guilherme';
// $user->lastName = 'De Souza Muller';

var_dump($user->execute(new FindAll(fields:"lastName")));
