<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../initDb.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$table_name = 'product_packs';

Capsule::schema()->create($table_name, function ($table) {
    $table->increments('id')->autoIncrement();
    $table->string('name');
    $table->decimal('price', 9, 2);
    $table->timestamps();
});

printf("Таблица %s успешно создана.\n", $table_name);