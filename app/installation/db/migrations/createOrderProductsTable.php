<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../initDb.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$table_name = 'order_products';

Capsule::schema()->create($table_name, function ($table) {
    $table->increments('id')->autoIncrement();
    $table->bigInteger('order_id')->unsigned();
    $table->bigInteger('product_id')->unsigned();
    $table->timestamps();
});

printf("Таблица %s успешно создана.\n", $table_name);