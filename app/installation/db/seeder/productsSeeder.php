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

$seeder_name = 'products & pack_products';

$products = [
	[
		'name' => 'Основной',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Основной 18-06-2020',
                'offer_code' => '1097595',
                'group_name' => 'Основной 18-06-20'
			]
		],
		'price' => 7000,
	],
	[
		'name' => 'Продвинутая микроэкономика',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Микро 18-06-2020',
                'offer_code' => '1097578',
                'group_name' => 'Микро 18-06-2020'
			]
		],
		'price' => 8000,
	],
	[
		'name' => 'Продвинутая макроэкономика',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Макро 18-06-2020',
                'offer_code' => '1097587',
                'group_name' => 'Макро 18-06-2020'
			]
		],
		'price' => 7000,
	],
	[
		'name' => 'Продвинутая макроэкономика - Самостоятельный',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Курс Продвинутой Макроэкономики от 30-12',
                'offer_code' => '840245',
			]
		],
		'price' => 6000,
	],
	[
		'name' => 'Экономика в олимпиадах по обществознанию',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Экономика в олимпиадах по обществознанию',
                'offer_code' => '781673'
			]
		],
		'price' => 2500,
	],
	[
		'name' => 'Экспресс-интенсив ко всеросу',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Покупка Экспресс-интенсива ко всеросу',
                'offer_code' => '985838'
			]
		],
		'price' => 7000,
	],
	[
		'name' => 'Качественные задачи',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Курс по качественным задачам 27.01',
                'offer_code' => '835979'			]
		],
		'price' => 2000,
	],
	[
		'name' => 'Качественные задачи - Интенсив к региону',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Интенсив к региону',
                'offer_code' => '844720'
			]
		],
		'price' => 4000,
	],
	[
		'name' => 'Основной самостоятельный курс от 30.12',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Основной самостоятельный курс от 30.12',
                'offer_code' => '840248'
			]
		],
		'price' => 0,
	],
	[
		'name' => 'Микро самостоятельный курс от 30.12',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Микро самостоятельный курс от 30.12',
                'offer_code' => '840864'
			]
		],
		'price' => 0,
	],
	[
		'name' => 'Макро самостоятельный курс от 30.12',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Макро самостоятельный курс от 30.12',
                'offer_code' => '840865'
			]
		],
		'price' => 0,
	],
	[
		'name' => 'Курс Продвинутой Микроэкономики от 30-12',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Курс Продвинутой Микроэкономики от 30-12',
                'offer_code' => '840864'
			]
		],
		'price' => 0,
	],
	[
		'name' => 'Курс Продвинутой Макроэкономики от 30-12',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Курс Продвинутой Макроэкономики от 30-12',
                'offer_code' => '840865'
			]
		],
		'price' => 0,
	],
	[
		'name' => 'Покупка Профессионального курсу',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Покупка Профессионального курсу',
                'offer_code' => '878062'
			]
		],
		'price' => 0,
	],
	[
		'name' => 'Курс Продвинутой Макроэкономики от 1-03',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Курс Продвинутой Макроэкономики от 1-03',
                'offer_code' => '879055'
			]
		],
		'price' => 0,
	],
	[
		'name' => 'Продвинутый от 18-06-2020',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Продвинутый пакет от 18-06-2020',
                'offer_code' => '1098896',
                'group' => 'Продвинутый пакет от 18-06-2020'
			]
		],
		'price' => 0,
	],
	[
		'name' => 'Полный от 18-06-2020',
		'additional_data' => [
			'getcourse' => [
				'product_title' => 'Полный пакет от 18-06-2020',
                'offer_code' => '1098875',
                'group_name' => 'Полный пакет от 18-06-2020'
			]
		],
		'price' => 0,
	],
];

$product_packs = [
	[
		'name' => 'Основной пакет',
		'price' => 16000,
		'products' => [
			'Полный от 18-06-2020',
		]
	],
	[
		'name' => 'Основной пакет - Самостоятельный',
		'price' => 10000,
		'products' => [
			'Основной самостоятельный курс от 30.12',
			'Микро самостоятельный курс от 30.12',
			'Макро самостоятельный курс от 30.12'
		]
	],
	[
		'name' => 'Продвинутый пакет',
		'price' => 13000,
		'products' => [
			'Продвинутый от 18-06-2020',
		]
	],
	[
		'name' => 'Продвинутый пакет - Самостоятельный',
		'price' => 8000,
		'products' => [
			'Курс Продвинутой Микроэкономики от 30-12',
			'Курс Продвинутой Макроэкономики от 30-12'
		]
	],
	[
		'name' => 'Пакет Профессиональный + Продвинутая Макроэкономика',
		'price' => 13000,
		'products' => [
			'Покупка Профессионального курсу',
			'Курс Продвинутой Макроэкономики от 1-03'
		]
	]
];

foreach ($products as $product_to_seed) {
	$product_obj = new Product();
	$product_obj->name = $product_to_seed['name'];
	$product_obj->price = $product_to_seed['price'];
	$product_obj->additional_data = json_encode($product_to_seed['additional_data']);

	$product_obj->save();
}

foreach ($product_packs as $product_pack_to_seed) {
	$product_pack_obj = new ProductPack();
	$product_pack_obj->name = $product_pack_to_seed['name'];
	$product_pack_obj->price = $product_pack_to_seed['price'];

	$product_pack_obj->save();

	foreach ($product_pack_to_seed['products'] as $pack_product_to_seed) {
		$pack_product_obj = Product::where('name', $pack_product_to_seed)->first();
		if (!empty($pack_product_obj)) {
			$product_pack_obj->products()->save($pack_product_obj);
		}
	}
}

printf("Seeder '%s' успешно обработан.\n", $seeder_name);
