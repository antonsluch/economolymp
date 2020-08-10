<?php
if(
    (isset($_POST['name'])&&$_POST['name']!=""&&(strlen($_POST['name'])<200))&&
    (isset($_POST['email'])&&$_POST['email']!=""&&(strlen($_POST['email'])<200)&&filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))){ //Проверка отправилось ли наше поля name и не пустые ли они
    $name = $_POST['name'];
    $email = $_POST['email'];

    $to = 'economolymp.info@gmail.com,angstudio@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = "=?utf-8?B?".base64_encode('Запрос расписания олимпиад')."?="; //Загаловок сообщения
    $message = '
                    Имя: '.$_POST['name'].'
                    Email: '.$_POST['email'].''; //Текст нащего сообщения можно использовать HTML теги
    $headers = "From: Отправитель <agbusiness@agb.ru>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail

    $apiKey = '13eb6e86a45a95b3e4d946dc7b826462-us19';
    $listID = 'ff2fd34dc8';
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