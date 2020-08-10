<?php

/*
 * Обработчик ajax запросов с html форм покупки новых курсов.
 */

header('Content-type: application/json');

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

$response = array();

if ($_POST['payment_f']) {
    $course_type = array_keys($_POST, $config['getcourse_courses']);
    if (!empty($course_type[0])) {
        $course_type = $course_type[0];

        $order = createNewOrder();
        
        try {
            $sberbank_order = createSberbankPaymentNewOrder($order);

            $response['status'] = 'success';
            $response['link'] = $res['formUrl'];
        } catch(Exception $e) {
            $response['status'] = 'errorMessage';
            $response['error'] = $e->getMessage();
        }
    }
    else {
        $response['status'] = 'errorForm';
    }
}
else {
    $response['status'] = 'errorForm';
}

print(json_encode($response));


function createNewOrder($customer_name, $customer_email, $customer_vk_url, $course_type)
{
    global $config;

    $order = new Order();
    
    $orderCustomer = new Customer();
    $order->addCustomer($orderCustomer);

    foreach ($config['getcourse_courses'][$course_type] as $course_template) {
        $orderProduct = new Product();
        $order->addProduct($orderProduct);
    }

    $order->save();

    return $order;
}

function prepareSberbankPaymentNewOrder(Order $order)
{
    global $config;

    $request_payload = array();
    $request_payload['userName'] = $config['sberbank_payment_rest_api']['login'];
    $request_payload['password'] = $config['sberbank_payment_rest_api']['password'];
    $request_payload['returnUrl'] = $config['sberbank_payment_rest_api']['return_url']['succesfull_payment'];
    $request_payload['failUrl'] = $config['sberbank_payment_rest_api']['return_url']['fail_payment'];

    $request_payload['orderNumber'] = $order->getNumber();
    /*
     * стоимость в копейках
     */
    $request_payload['amount'] = $order->getTotal() * 100;
    $request_payload['description'] = sprintf('Заказ № %s на %s', $order->getNumber(), $config['domain']);

    return $request_payload;
}

function createSberbankPaymentNewOrder(Order $order)
{
    $request_payload = prepareSberbankPaymentNewOrder($order);

    $ch = curl_init('https://securepayments.sberbank.ru/payment/rest/register.do?' . http_build_query($request_payload));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $ch_result = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($ch_result, true);
    $json_error_code = json_last_error();
    if (null === $result && (JSON_ERROR_NONE !== $json_error_code)) {
        $error_msg = 'fatal error in function json_decode.' . PHP_EOL . 'Error code: ' . $json_error_code . PHP_EOL;
        throw new Exception($error_msg);
    }

    return $result;
}