<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../initDb.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$table_name = 'orders';

Capsule::schema()->create($table_name, function ($table) {
    $table->increments('id')->autoIncrement();
    $table->bigInteger('customer_id')->unsigned();
    $table->decimal('total', 9, 2)
    	->comment('Общая сумма заказа');
    $table->string('status');
    $table->dateTime('paid_at')->nullable(true)
    	->comment('Дата и время фактической оплаты');
    $table->timestamps();
});

printf("Таблица %s успешно создана.\n", $table_name);