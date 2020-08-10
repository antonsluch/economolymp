<?php

/*
 * Обработчик ответа от системы Сбербанк эквайринга об оплате
 */

// https://developer.sberbank.ru/doc/v1/acquiring/rest-interaction

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

// тут проверка успешности/неуспешности оплаты

/*
$deal = array();
$deal['user']['email'] = $_POST['email'];
$deal['user']['first_name'] = $_POST['name'];
$deal['user']['addfields']['vk'] = $_POST['vk'];
$deal['system']['refresh_if_exists'] = 1;
$deal['system']['multiple_offers'] = 0;
$deal['session']['referer'] = "economyolymp.ru";
$deal['product_description'] = "";
$deal['deal_status'] = "in_work";
$deal['deal_is_paid'] = "да";
$deal['manager_email'] = "lzorin@nes.ru";
$deal['deal_created_at'] = date("Y-m-d H:i:s");
$deal['deal_finished_at'] = date("Y-m-d H:i:s");
$deal['payment_type'] = "sberbank";
$deal['payment_status'] = "expected";


$deal['system'] = array(
    'refresh_if_exists' => 1,
    'multiple_offers' => 0
);
*/

function sendAdminEmailNotification()
{
	$subject = 'Покупка курса'; //Загаловок сообщения
	$message = '
	              Имя: ' . $_POST['name'] . '
	              VK: ' . $_POST['vk'] . '
	              Course: Основной
	              Email: ' . $_POST['email'] . ''; //Текст нащего сообщения можно использовать HTML теги
	$headers = "From: Отправитель <agbusiness@agb.ru>\r\n"; //Наименование и почта отправителя
	mail('economolymp.info@gmail.com', $subject, $message, $headers);
	mail('angstudio@yandex.ru', $subject, $message, $headers);
}

function addOrUpdateGetcourseUser()
{

}

function addGetcourseDeal($deal)
{
	$base64 = base64_encode(json_encode($deal));
	$ch = curl_init('https://economolymp.getcourse.ru/pl/api/deals');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=add&key=' . $secretKey . '&params=' . $base64);
	$response_array['getcourse_response'] = curl_exec($ch);
	$response_array['getcourse_ask'] = json_encode($deal);
	curl_close($ch);

	// todo: обработка ответа
}