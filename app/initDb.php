<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/initConfig.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $_SERVER['DB_HOST'],
    'database'  => $_SERVER['DB_DATABASE'],
    'username'  => $_SERVER['DB_USERNAME'],
    'password'  => $_SERVER['DB_PASSWORD'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->setAsGlobal();
$capsule->bootEloquent();
