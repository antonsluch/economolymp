<?php

if(
    (isset($_POST['name'])&&$_POST['name']!=""&&(strlen($_POST['name'])<200))&&
    (isset($_POST['email'])&&$_POST['email']!=""&&(strlen($_POST['email'])<200))&&
    (strlen($_POST['number'])<30)) {
      //$name = $_POST['name'];
      //$email = $_POST['email'];
      //$tel = $_POST['number'];
      $to = 'asluch@nes.ru,angstudio@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
      //$subject = 'Обратный звонок'; //Загаловок сообщения
      $subject = "=?utf-8?B?".base64_encode('Запрос вебинара')."?="; //Загаловок сообщения
      $message = '
                      Имя: '.$_POST['name'].'
                      Телефон: '.$_POST['number'].'
                      Email: '.$_POST['email'].''; //Текст нащего сообщения можно использовать HTML теги
      $headers = "From: Отправитель <webinar@economolymp.ru>\r\n"; //Наименование и почта отправителя
      mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
    

  //   // Mailchimp API usage
  //   $name = htmlspecialchars($_POST['name']);
  //   $email = htmlspecialchars($_POST['email']);
  //   $apiKey = '13eb6e86a45a95b3e4d946dc7b826462-us19';
  //   $listID = '1b9bea6fdc';
  //   $lessarr = array('FNAME' => $name);
  //   $tags = array('name' => 'webinar', 'status' => active);
  //   $arr = array('email_address' => $email, 'status' => subscribed, 'merge_fields' => $lessarr);
  //   $memberID = md5(strtolower($email));
  //   $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
  //   $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members';
  //   $json = json_encode($arr);

  //   $ch = curl_init($url);
  //   curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
  //   curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
  //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //   curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  //   curl_setopt($ch, CURLOPT_POST, 1);
  //   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  //   curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
  //   $result = curl_exec($ch);
  //   curl_close($ch);
  //   header('Location: https://economolymp.ru/aftersend.php');
  // }

     // Mailchimp API usage
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $apiKey = '13eb6e86a45a95b3e4d946dc7b826462-us19';
    $listID = '1b9bea6fdc';
    $lessarr = array('FNAME' => $name);
    $arr = array('email_address' => $email, 'status' => subscribed, 'merge_fields' => $lessarr);
    $memberID = md5(strtolower($email));
    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members';
    $json = json_encode($arr);
    
    $arr = array('email_address' => $email, 'status' => subscribed, 'merge_fields' => $lessarr);
    $json2 = 

    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
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