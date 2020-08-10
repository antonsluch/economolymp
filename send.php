<?php
if ($_POST['courses_f']) {
  if ((isset($_POST['name']) && $_POST['name'] != "" && (strlen($_POST['name']) < 200)) && (isset($_POST['email']) && $_POST['email'] != "" && (strlen($_POST['email']) < 200))) { //Проверка отправилось ли наше поля name и не пустые ли они
    $email = $_POST['email'];
    $name = $_POST['name'];
    //$to = $email; //Почта получателя, через запятую можно указать сколько угодно адресов

    $subject = "Ваша бесплатная пробная лекция";
    $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

    $subjectlev = "Запрос лекции";
    $subjectlev = "=?utf-8?B?" . base64_encode($subjectlev) . "?=";
    $service = "Пользователь '.$name.' заинтересовался курсами и запросил лекцию. <br /> Мы уже выслали ему на почту '.$email.' сообщение.";
    //$service = "Пользователь $name заинтересовался курсами и запросил лекцию. <br /> Мы уже выслали ему на почту $email сообщение.";
    /*$text = 'Здравствуйте, '.$name.'!<br />Меня зовут Лев Зорин, я являюсь основателем проекта Экономический олимп!<br/>
    Мы очень рады, что вы заинтересовались нашим проектом и очень надеемся, что вам понравится лекция! <br />
    Вы заказали пробную лекцию базового курса. Целью курса является получение базовых знаний и навыков решения задач по экономике. Программа рассчитана на тех, кто только начинает свое знакомство с экономикой!<br />
    Курс длится 2 месяца. Каждую неделю ученик получает запись лекции со всей необходимой теорией по теме, а также семинара с разбором методов решения задач. После этого в течение недели каждый ученик самостоятельно решает задачи и сдает их в систему. По каждой решенной задаче он получает комментарий проверяющего<br />
    Занятия начнутся 4-ого ноября, а значит уже совсем скоро вы сможете начать подготовку к олимпиадам по экономике!<br />
    Пробная лекция доступна по ссылке:<br />
    <a href="https://drive.google.com/file/d/1SOrBsDNSy40XSyEXWTiXUfzJZOGL3ntt/view">Ваша лекция!</a> <br />
    Если ссылка не открывается, скопируйте ссылку в адресную строку: <a href="https://drive.google.com/file/d/1SOrBsDNSy40XSyEXWTiXUfzJZOGL3ntt/view">https://drive.google.com/file/d/1SOrBsDNSy40XSyEXWTiXUfzJZOGL3ntt/view</a> <br />
    Также у нас есть <a href="https://vk.com/economolymp">сообщество вконтакте</a>, где мы выкладываем полезную информацию об олимпиадах по экономике: <a href="https://vk.com/economolymp">vk.com/economolymp</a><br />
    <br /><br />
    С уважением, <br />
    Лев Зорин<br />
    <a href="https://economolymp.ru">economolymp.ru</a>';

    $emailTo = $email;
    $body = $text;
    $headers = "Content-Type: text/html; charset=utf-8\r\n"."From: lecture@economolymp.ru\r\n".'Reply-To: '.$emailfrom;

    mail($to, $subject, $body, $headers); //Отправка письма с помощью функции mail
    mail('lzorin@nes.ru', $subjectlev, $service, $headers); //Отправка письма с помощью функции mail
    mail('trafikova@nes.ru', $subjectlev, $service, $headers); //Отправка письма с помощью функции mail*/
    $emailfrom = 'lecture@economolymp.ru';
    $headers = "Content-Type: text/html; charset=utf-8\r\n" . "From: lecture@economolymp.ru\r\n" . 'Reply-To: ' . $emailfrom;

    mail('angstudio@yandex.ru', $subjectlev, $service, $headers); //Отправка письма с помощью функции mail

    $apiKey = '13eb6e86a45a95b3e4d946dc7b826462-us19';
    $listID = '41255a1f5b';

    $memberID = md5(strtolower($email));
    $dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members';
    $json = json_encode([
      'email_address' => $email,
      'status'        => 'subscribed',
      'merge_fields'  => [
        'FNAME' => $name
      ]
    ]);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    curl_close($ch);
  }
}
if ($_POST['olymp_f']) {
  if (
    (isset($_POST['name']) && $_POST['name'] != "" && (strlen($_POST['name']) < 200)) &&
    (isset($_POST['email']) && $_POST['email'] != "" && (strlen($_POST['email']) < 200) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
  ) { //Проверка отправилось ли наше поля name и не пустые ли они
    $name = $_POST['name'];
    $email = $_POST['email'];

    $to = 'ilya.goldobin1@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = "=?utf-8?B?" . base64_encode('Олимпиады запросил') . "?="; //Загаловок сообщения
    $message = '
                    Имя: ' . $_POST['name'] . '
                    Email: ' . $_POST['email'] . ''; //Текст нащего сообщения можно использовать HTML теги
    $headers = "From: Отправитель <agbusiness@agb.ru>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail

    $apiKey = '13eb6e86a45a95b3e4d946dc7b826462-us19';
    $listID = 'ff2fd34dc8';
    $lessarr = array('FNAME' => $name);
    $arr = array('email_address' => $email, 'status' => subscribed, 'merge_fields' => $lessarr);
    $memberID = md5(strtolower($email));
    $dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members';
    $json = json_encode($arr);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    curl_close($ch);
  }
}
if ($_POST['webinar_f']) {
  if (
    (isset($_POST['name']) && $_POST['name'] != "" && (strlen($_POST['name']) < 200)) &&
    (isset($_POST['email']) && $_POST['email'] != "" && (strlen($_POST['email']) < 200)) &&
    (strlen($_POST['number']) < 30)
  ) {
    //$name = $_POST['name'];
    //$email = $_POST['email'];
    //$tel = $_POST['number'];
    $to = 'lzorin@nes.ru,trafikova@nes.ru,ilya.goldobin1@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    //$subject = 'Обратный звонок'; //Загаловок сообщения
    $subject = "=?utf-8?B?" . base64_encode('Запрос вебинара') . "?="; //Загаловок сообщения
    $message = '
                      Имя: ' . $_POST['name'] . '
                      Телефон: ' . $_POST['number'] . '
                      Email: ' . $_POST['email'] . ''; //Текст нащего сообщения можно использовать HTML теги
    $headers = "From: Отправитель <webinar@economolymp.ru>\r\n"; //Наименование и почта отправителя

    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail

    $name = $_POST['name'];
    $email = $_POST['email'];
    $apiKey = '13eb6e86a45a95b3e4d946dc7b826462-us19';
    $listID = '1b9bea6fdc';

    $memberID = md5(strtolower($email));
    $dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members';
    $json = json_encode([
      'email_address' => $email,
      'status'        => 'subscribed',
      'merge_fields'  => [
        'FNAME' => $name
      ]
    ]);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    curl_close($ch);
  }
}
if ($_POST['payment_f']) {
  echo '1';
  header('Content-type: application/json');
  if (
    (isset($_POST['name']) && $_POST['name'] != "" && (strlen($_POST['name']) < 200)) &&
    (isset($_POST['email']) && $_POST['email'] != "" && (strlen($_POST['email']) < 200) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) &&
    (isset($_POST['vk']) && $_POST['vk'] != "" && (strlen($_POST['vk']) < 50) && stripos($_POST['vk'], 'vk.com/') !== false) && strlen($_POST['vk']) > 8
  ) {
    if ($_POST['main_f']) { //Основной

      //$name = $_POST['name'];
      //$email = $_POST['email'];
      //$tel = $_POST['number'];






      $order_id = rand(100, 10000);
      $sum  = 7000;

      $vars = array();
      $vars['userName'] = 'economolymp-api';
      $vars['password'] = 'nfps57HF!';

      // ID заказа в магазине.
      $vars['orderNumber'] = $order_id;

      // Сумма заказа в копейках.
      $vars['amount'] = $sum * 100;

      // URL куда клиент вернется в случае успешной оплаты.
      $vars['returnUrl'] = 'https://economolymp.ru/successful.php?course-link=imdbxddj';
      // URL куда клиент вернется в случае ошибки.
      $vars['failUrl'] = 'https://economolymp.ru/error-payment.php';

      // Описание заказа, не более 24 символов, запрещены % + \r \n
      $vars['description'] = 'Заказ №' . $order_id . ' на economolymp.ru';

      $ch = curl_init('https://securepayments.sberbank.ru/payment/rest/register.do?' . http_build_query($vars));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HEADER, false);
      $res = curl_exec($ch);
      curl_close($ch);

      $res = json_decode($res, JSON_OBJECT_AS_ARRAY);
      if (empty($res['orderId'])) {
        // Возникла ошибка:
        $response_array['status'] = 'errorMessage';
        $response_array['error'] = $res['errorMessage'];
      } else {
        // Успех:
        // Тут нужно сохранить ID платежа в своей БД - $res['orderId']

        // Перенаправление клиента на страницу оплаты.
        $response_array['status'] = 'main';
        $response_array['link'] = $res['formUrl'];

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
    } else if ($_POST['advanced-micro_f']) { //Основной

      $order_id = rand(100, 10000);
      $sum  = 8000;

      $vars = array();
      $vars['userName'] = 'economolymp-api';
      $vars['password'] = 'nfps57HF!';

      // ID заказа в магазине.
      $vars['orderNumber'] = $order_id;

      // Сумма заказа в копейках.
      $vars['amount'] = $sum * 100;

      // URL куда клиент вернется в случае успешной оплаты.
      $vars['returnUrl'] = 'https://economolymp.ru/successful.php?course-link=iwclovys';

      // URL куда клиент вернется в случае ошибки.
      $vars['failUrl'] = 'https://economolymp.ru/error-payment.php';

      // Описание заказа, не более 24 символов, запрещены % + \r \n
      $vars['description'] = 'Заказ №' . $order_id . ' на economolymp.ru';

      $ch = curl_init('https://securepayments.sberbank.ru/payment/rest/register.do?' . http_build_query($vars));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HEADER, false);
      $res = curl_exec($ch);
      curl_close($ch);

      $res = json_decode($res, JSON_OBJECT_AS_ARRAY);
      if (empty($res['orderId'])) {
        // Возникла ошибка:
        $response_array['status'] = 'errorMessage';
        $response_array['error'] = $res['errorMessage'];
      } else {
        // Успех:
        // Тут нужно сохранить ID платежа в своей БД - $res['orderId']

        $fp = fopen('orders.txt', 'a');
        fwrite($fp, $res['orderId'] . PHP_EOL);
        fclose($fp);

        // Перенаправление клиента на страницу оплаты.
        $response_array['status'] = 'advanced-micro';
        $response_array['link'] = $res['formUrl'];

        $subject = 'Покупка курса'; //Загаловок сообщения
        $message = '
                              Имя: ' . $_POST['name'] . '
                              VK: ' . $_POST['vk'] . '
                              Course: Продвинутая микроэкономика
                              Email: ' . $_POST['email'] . ''; //Текст нащего сообщения можно использовать HTML теги
        $headers = "From: Отправитель <agbusiness@agb.ru>\r\n"; //Наименование и почта отправителя
        mail('economolymp.info@gmail.com', $subject, $message, $headers);
        mail('angstudio@yandex.ru', $subject, $message, $headers);
      }
    } else if ($_POST['advanced-macro_f']) { //Основной

      $order_id = rand(100, 10000);
      $sum  = 7000;

      $vars = array();
      $vars['userName'] = 'economolymp-api';
      $vars['password'] = 'nfps57HF!';

      // ID заказа в магазине.
      $vars['orderNumber'] = $order_id;

      // Сумма заказа в копейках.
      $vars['amount'] = $sum * 100;

      // URL куда клиент вернется в случае успешной оплаты.
      $vars['returnUrl'] = 'https://economolymp.ru/successful.php?course-link=iyvyrpox';

      // URL куда клиент вернется в случае ошибки.
      $vars['failUrl'] = 'https://economolymp.ru/error-payment.php';

      // Описание заказа, не более 24 символов, запрещены % + \r \n
      $vars['description'] = 'Заказ №' . $order_id . ' на economolymp.ru';

      $ch = curl_init('https://securepayments.sberbank.ru/payment/rest/register.do?' . http_build_query($vars));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HEADER, false);
      $res = curl_exec($ch);
      curl_close($ch);

      $res = json_decode($res, JSON_OBJECT_AS_ARRAY);
      if (empty($res['orderId'])) {
        // Возникла ошибка:
        $response_array['status'] = 'errorMessage';
        $response_array['error'] = $res['errorMessage'];
      } else {
        // Успех:
        // Тут нужно сохранить ID платежа в своей БД - $res['orderId']

        $fp = fopen('orders.txt', 'a');
        fwrite($fp, $res['orderId'] . PHP_EOL);
        fclose($fp);

        // Перенаправление клиента на страницу оплаты.
        $response_array['status'] = 'advanced-macro';
        $response_array['link'] = $res['formUrl'];

        $subject = 'Покупка курса'; //Загаловок сообщения
        $message = '
                              Имя: ' . $_POST['name'] . '
                              VK: ' . $_POST['vk'] . '
                              Course: Продвинутая макроэкономика
                              Email: ' . $_POST['email'] . ''; //Текст нащего сообщения можно использовать HTML теги
        $headers = "From: Отправитель <agbusiness@agb.ru>\r\n"; //Наименование и почта отправителя
        mail('economolymp.info@gmail.com', $subject, $message, $headers);
        mail('angstudio@yandex.ru', $subject, $message, $headers);
      }
    } else if ($_POST['package-main_f']) { //Основной

      $order_id = rand(100, 10000);
      $sum  = 16000;

      $vars = array();
      $vars['userName'] = 'economolymp-api';
      $vars['password'] = 'nfps57HF!';

      // ID заказа в магазине.
      $vars['orderNumber'] = $order_id;

      // Сумма заказа в копейках.
      $vars['amount'] = $sum * 100;

      // URL куда клиент вернется в случае успешной оплаты.
      $vars['returnUrl'] = 'https://economolymp.ru/successful.php?course-link=imdbxddj';

      // URL куда клиент вернется в случае ошибки.
      $vars['failUrl'] = 'https://economolymp.ru/error-payment.php';

      // Описание заказа, не более 24 символов, запрещены % + \r \n
      $vars['description'] = 'Заказ №' . $order_id . ' на economolymp.ru';

      $ch = curl_init('https://securepayments.sberbank.ru/payment/rest/register.do?' . http_build_query($vars));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HEADER, false);
      $res = curl_exec($ch);
      curl_close($ch);

      $res = json_decode($res, JSON_OBJECT_AS_ARRAY);
      if (empty($res['orderId'])) {
        // Возникла ошибка:
        $response_array['status'] = 'errorMessage';
        $response_array['error'] = $res['errorMessage'];
      } else {
        // Успех:
        // Тут нужно сохранить ID платежа в своей БД - $res['orderId']

        $fp = fopen('orders.txt', 'a');
        fwrite($fp, $res['orderId'] . PHP_EOL);
        fclose($fp);

        // Перенаправление клиента на страницу оплаты.
        $response_array['status'] = 'main';
        $response_array['link'] = $res['formUrl'];

        $subject = 'Покупка курса'; //Загаловок сообщения
        $message = '
                              Имя: ' . $_POST['name'] . '
                              VK: ' . $_POST['vk'] . '
                              Course: Пакет основной
                              Email: ' . $_POST['email'] . ''; //Текст нащего сообщения можно использовать HTML теги
        $headers = "From: Отправитель <agbusiness@agb.ru>\r\n"; //Наименование и почта отправителя
        mail('economolymp.info@gmail.com', $subject, $message, $headers);
        mail('angstudio@yandex.ru', $subject, $message, $headers);
      }
    } else if ($_POST['package-advanced_f']) { //Профессиональный + Продвинутая Макроэкономика

      $order_id = rand(100, 10000);
      $sum  = 13000;

      $vars = array();
      $vars['userName'] = 'economolymp-api';
      $vars['password'] = 'nfps57HF!';

      // ID заказа в магазине.
      $vars['orderNumber'] = $order_id;

      // Сумма заказа в копейках.
      $vars['amount'] = $sum * 100;

      // URL куда клиент вернется в случае успешной оплаты.
      $vars['returnUrl'] = 'https://economolymp.ru/successful.php?course-link=iwclovys';

      // URL куда клиент вернется в случае ошибки.
      $vars['failUrl'] = 'https://economolymp.ru/error-payment.php';

      // Описание заказа, не более 24 символов, запрещены % + \r \n
      $vars['description'] = 'Заказ №' . $order_id . ' на economolymp.ru';

      $ch = curl_init('https://securepayments.sberbank.ru/payment/rest/register.do?' . http_build_query($vars));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HEADER, false);
      $res = curl_exec($ch);
      curl_close($ch);

      $res = json_decode($res, JSON_OBJECT_AS_ARRAY);
      if (empty($res['orderId'])) {
        // Возникла ошибка:
        $response_array['status'] = 'errorMessage';
        $response_array['error'] = $res['errorMessage'];
      } else {
        // Успех:
        // Тут нужно сохранить ID платежа в своей БД - $res['orderId']

        $fp = fopen('orders.txt', 'a');
        fwrite($fp, $res['orderId'] . PHP_EOL);
        fclose($fp);

        // Перенаправление клиента на страницу оплаты.
        $response_array['status'] = 'advanced-micro';
        $response_array['link'] = $res['formUrl'];

        $subject = 'Покупка курса'; //Загаловок сообщения
        $message = '
                              Имя: ' . $_POST['name'] . '
                              VK: ' . $_POST['vk'] . '
                              Course: Пакет продвинутый
                              Email: ' . $_POST['email'] . ''; //Текст нащего сообщения можно использовать HTML теги
        $headers = "From: Отправитель <agbusiness@agb.ru>\r\n"; //Наименование и почта отправителя
        mail('economolymp.info@gmail.com', $subject, $message, $headers);
        mail('angstudio@yandex.ru', $subject, $message, $headers);
      }
    } else {
      $response_array['status'] = 'errorForm';
    }
  } else {
    $response_array['status'] = 'error';
  } /*else if(!(isset($_POST['name'])&&$_POST['name']!=""&&(strlen($_POST['name'])<200)) {
      $response_array['status'] = 'errorName';
    } else if(!(isset($_POST['email'])&&$_POST['email']!=""&&(strlen($_POST['email'])<200)&&filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))){
      $response_array['status'] = 'errorEmail';
    } else if(!(isset($_POST['vk'])&&$_POST['vk']!=""&&(strlen($_POST['vk'])<50)&&stripos($_POST['vk'],'vk.com/')!==false)&&strlen($_POST['vk'])>8)){
      $response_array['status'] = 'errorVk';
    }*/
  echo json_encode($response_array);
}
?>


 <?php

  /*if ($emailsent) {
       mail($emailTo, $subject, $body, $headers);
       mail('lzorin@nes.ru', $subjectlev, $service, $headers);
       mail('trafikova@nes.ru', $subjectlev, $service, $headers);
       mail('angstudio@yandex.ru', $subjectlev, $service, $headers);
       define('charset', 'UTF-8');
       mb_internal_encoding(charset);
         //Connection to Database
       define('DBName', 'u0188729_economolymp');
       define('DBadmin', 'u0188729_zorin');
       define('DBpass', "Andr5486");
       $connect = mysqli_connect('localhost', DBadmin , DBpass, DBName);
       mysqli_query($connect, "set character_set_client='utf8'");
       mysqli_query($connect, "set character_set_results='utf8'");
       mysqli_query($connect, "set collation_connection='utf8_general_ci'");
       mysqli_set_charset ($connect ,charset);
       $insert = sprintf("INSERT INTO costumers (name, email) VALUES ('%s', '%s');",
           $name,
           $email
         );
         $result = mysqli_query($connect, $insert);
       header("Location: https://economolymp.ru/aftersend.html");
     } else {
     header("Location: https://economolymp.ru/errorsend.html");
   }*/
  ?>
