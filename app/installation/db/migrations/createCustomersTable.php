<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../initDb.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$table_name = 'customers';

Capsule::schema()->create($table_name, function ($table) {
    $table->increments('id')->autoIncrement();
    $table->string('name');
    $table->string('surname');
    $table->string('patronymic')->nullable(true);
    $table->string('email');
    $table->string('vk_id')
    	->comment('ID пользователя в Vkontakte');
    $table->string('getcourse_user_id')->nullable(true)
    	->comment('ID пользователя в Getcourse');
    $table->timestamps();
});

printf("Таблица %s успешно создана.\n", $table_name);