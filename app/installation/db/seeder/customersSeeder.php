<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../initDb.php';
require_once __DIR__ . '/../../../models/Customer.php';
require_once __DIR__ . '/../../../models/CustomerParent.php';
require_once __DIR__ . '/../../../models/VkScreenNameToIdUpdateJob.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Customer;
use App\Models\CustomerParent;
use App\Models\VkScreenNameToIdUpdateJob;

$seeder_name = 'ustomers & customer_parents & vk_screen_name_to_id_update_jobs';

$customers = [
	[
		'name' => 'Иван',
		'surname' => 'Химич',
		'patronymic' => 'Валерьевич',
		'email' => 'himivan@gmail.com',
		'vk_id' => 'himivan',
		'parent' => [
			'name' => 'Елена',
			'surname' => 'Химич',
			'patronymic' => 'Владимировна',
			'email' => 'lena@mail.ru'
		]
	],
	[
		'name' => 'Александр',
		'surname' => 'Игнатенко',
		'patronymic' => '',
		'email' => 'alexkonspirator@google.com',
		'vk_id' => 'alexkonspirator',
		'parent' => [
			'name' => 'Петр',
			'surname' => 'Игнатенко',
			'patronymic' => 'Михайлович',
			'email' => 'petr@mail.ru'
		]
	],
	[
		'name' => 'Петров',
		'surname' => 'Никифоров',
		'patronymic' => '',
		'email' => 'petr@yandex.ru',
		'vk_id' => 'asdsaasdq1eczzxx',
		'parent' => []
	],
];

foreach ($customers as $customer_to_seed) {
	$customer_obj = new Customer;
    $customer_obj->name = $customer_to_seed['name'];
    $customer_obj->surname = $customer_to_seed['surname'];

    if (!empty($customer_to_seed['patronymic'])) {
    	$customer_obj->patronymic = $customer_to_seed['patronymic'];
    }

    $customer_obj->email = $customer_to_seed['email'];
    $customer_obj->vk_id = $customer_to_seed['vk_id'];

    $customer_obj->save();

    $vk_screen_name_to_id_update_job_obj = new VkScreenNameToIdUpdateJob();
    $vk_screen_name_to_id_update_job_obj->status = 'active';
	
	$customer_obj->vkScreenNameToIdUpdateJob()->save($vk_screen_name_to_id_update_job_obj);    

    if (!empty($customer_to_seed['parent'])) {
    	$customer_parent_obj = new CustomerParent();
    	$customer_parent_obj->name = $customer_to_seed['parent']['name'];
	    $customer_parent_obj->surname = $customer_to_seed['parent']['surname'];

	    if (!empty($customer_to_seed['parent']['patronymic'])) {
	    	$customer_parent_obj->patronymic = $customer_to_seed['parent']['patronymic'];
	    }

	    $customer_parent_obj->email = $customer_to_seed['parent']['email'];

	    $customer_obj->parents()->save($customer_parent_obj);
    }
}

printf("Seeder '%s' успешно обработан.\n", $seeder_name);