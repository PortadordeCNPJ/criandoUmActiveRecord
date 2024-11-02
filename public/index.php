<?php

require "../vendor/autoload.php";

use app\database\activerecord\Update;
use app\database\models\User;

$user = new User;
$user->firstName = 'Guilherme';
$user->lastName = 'De Souza Muller';
$user->id = 1;

$user->update(new Update);

