<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../initDb.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$table_name = 'products';

Capsule::schema()->create($table_name, function ($table) {
    $table->increments('id')->autoIncrement();
    $table->string('name');
    $table->decimal('price', 9, 2);
    $table->jsonb('additional_data')->nullable('true');
    $table->timestamps();
});

printf("Таблица %s успешно создана.\n", $table_name);