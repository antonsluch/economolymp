if ($_POST['webinar_f']){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = "=?utf-8?B?".base64_encode('Запрос вебинара')."?="; //Загаловок сообщения
    $message = '
                      Имя: '.$_POST['name'].'
                      Телефон: '.$_POST['number'].'
                      Email: '.$_POST['email'].''; //Текст нащего сообщения можно использовать HTML теги
    $headers = "From: Отправитель <webinar@economolymp.ru>\r\n"; //Наименование и почта отправителя
    mail('ilya.goldobin1@gmail.com',$subject,$message,$headers);
    $response_array['status'] = 'cool';
}