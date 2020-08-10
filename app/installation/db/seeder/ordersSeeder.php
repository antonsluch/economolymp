<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../initDb.php';
require_once __DIR__ . '/../../../models/Product.php';
require_once __DIR__ . '/../../../models/ProductPack.php';
require_once __DIR__ . '/../../../models/PackProduct.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Product;
use App\Models\ProductPack;
use App\Models\PackProduct;

$seeder_name = 'orders & order_products & order_product_packs & senler_integration_jobs';

$orders = [
	[
		'customer_email' => 'alexkonspirator@google.com',
		'status' => 'paid',
		'paid_at' => date('Y-m-d H:i:s'),
		'products' => [
			[
				'is_pack' => false,
				'name' => 'Экономика в олимпиадах по обществознанию'
			]
		]
	],
	[
		'customer_email' => 'himivan@gmail.com',
		'status' => 'pending',
		'products' => [
			[
				'is_pack' => true,
				'name' => 'Основной пакет - Самостоятельный'
			]
		]
	],
	[
		'customer_email' => 'petr@yandex.ru',
		'status' => 'paid',
		'paid_at' => date('Y-m-d H:i:s'),
		'products' => [
			[
				'is_pack' => false,
				'name' => 'Качественные задачи - Интенсив к региону'
			]
		]
	]
];

foreach ($order as $order_to_seed) {
	
}

printf("Seeder '%s' успешно обработан.\n", $seeder_name);
