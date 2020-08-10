<?php

if((isset($_POST['name'])&&$_POST['name']!=""&&(strlen($_POST['name'])<200))&&(isset($_POST['email'])&&$_POST['email']!=""&&(strlen($_POST['email'])<200))){ //Проверка отправилось ли наше поля name и не пустые ли они
    $email = $_POST['email'];
    $name = $_POST['name'];
    //$to = $email; //Почта получателя, через запятую можно указать сколько угодно адресов

    $subject = "Ваша бесплатная пробная лекция";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";

    $subjectlev = "Запрос лекции";
    $subjectlev = "=?utf-8?B?".base64_encode($subjectlev)."?=";
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
    $emailfrom = 'lecture@economolymp.ru';
    $emailTo = $email;
    $body = $text;
    $headers = "Content-Type: text/html; charset=utf-8\r\n"."From: lecture@economolymp.ru\r\n".'Reply-To: '.$emailfrom;

    mail($to, $subject, $body, $headers); //Отправка письма с помощью функции mail
    mail('lzorin@nes.ru', $subjectlev, $service, $headers); //Отправка письма с помощью функции mail
    mail('trafikova@nes.ru', $subjectlev, $service, $headers); //Отправка письма с помощью функции mail*/
    $headers = "Content-Type: text/html; charset=utf-8\r\n"."From: lecture@economolymp.ru\r\n".'Reply-To: '.$emailfrom;
    $to = 'economolymp.info@gmail.com,angstudio@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
    mail($to, $subjectlev, $service, $headers); //Отправка письма с помощью функции mail

    $apiKey = '13eb6e86a45a95b3e4d946dc7b826462-us19';
    $listID = '41255a1f5b';
    $lessarr = array('FNAME' => $name);
    $arr = array('email_address' => $email, 'status' => subscribed, 'merge_fields' => $lessarr);
    $memberID = md5(strtolower($email));
    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members';
    $json = json_encode($arr);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    curl_close($ch);
    header('Location: https://economolymp.ru/aftersend.php');  
  }

?>