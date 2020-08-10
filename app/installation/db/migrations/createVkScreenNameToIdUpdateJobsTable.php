<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../initDb.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$table_name = 'vk_screen_name_to_id_update_jobs';

Capsule::schema()->create($table_name, function ($table) {
    $table->increments('id')->autoIncrement();
    $table->string('status')
    	->comment('Статус задания (активное или обработанное)');
    $table->bigInteger('customer_id')->unsigned();
    $table->timestamps();
});

printf("Таблица %s успешно создана.\n", $table_name);