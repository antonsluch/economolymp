<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../initDb.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$table_name = 'customer_parents';

Capsule::schema()->create($table_name, function ($table) {
    $table->increments('id')->autoIncrement();
    $table->bigInteger('customer_id')->unsigned();
    $table->string('name');
    $table->string('surname');
    $table->string('patronymic')->nullable(true);
    $table->string('email');
    $table->timestamps();
});

printf("Таблица %s успешно создана.\n", $table_name);