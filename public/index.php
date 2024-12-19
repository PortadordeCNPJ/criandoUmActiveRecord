<?php

require "../vendor/autoload.php";

use app\database\models\User;
use app\database\activerecord\Find;
use app\database\activerecord\Insert;
use app\database\activerecord\Update;

$user = new User;
$user->firstName = 'Guilherme';
$user->lastName = 'de Souza Muller';

$user->execute(new Update(field:"id", value:1));

