<!DOCTYPE html>
<html>
<head>
  <?php include ('php/head.php');
  $course_name = str_replace("\\","", $_GET['name-course']);
  $course_name = urldecode($course_name);

  ?>

    <title><?php
        echo   $course_name;
        ?> | Онлайн-курсы подготовки по олимпиадной экономике</title>

  <meta name="keywords" content="лекции по экономике, курс лекций по экономике, скачать лекции по экономике, курсы по экономике, подготовка к олимпиаде по экономике">
  <meta name="description" content="Подготовка к олимпиадам по экономике для школьников. Лекции и авторские задачи с проверкой от лучших преподавателей России">

  <meta property="og:type" content="website">
  <meta property="og:title" content="Курсы по олимпиадной экономике | Экономический олимп">
  <meta property="og:description" content="Онлайн-курсы подготовки к олимпиадам школьников по экономике">
  <meta property="og:url" content="https://economolymp.ru/kursi-po-ekonomike.html">
  <meta property="og:image" content="https://economolymp.ru/images/icons/logo.png">
  <meta property="og:image:height" content="732">
  <meta property="og:image:type" content="image/png">

  <link type="text/css" rel="stylesheet" href="css/payment.css">
  <?php include ('php/head_vk_pixel.php'); ?>
</head>

<body>
  <?php include ('php/yandex_counter.php'); ?>
  <form class="paymentForm" id="form_olymp" method="post">
    <a href="index.php"><img class="paymentLogo" src="images/logo/logo_top.png" alt="" /></a>
    <p class="paymentText">
      После оплаты вам на почту придёт информация о курсе "<span><?php echo $course_name; ?></span>"
    </p>
    <input type="text" class="paymentInput iT" name="name" id="name" placeholder="Ваше ФИО" required>
    <input type="email" class="paymentInput iT" name="email" id="email" placeholder="Ваш Email" required>
    <input type="text" class="paymentInput iT" name="vk" id="vk" value="vk.com/" required>
    <button type="button" name="submit_payment" class="paymentFormBtn iT" form="form_olymp" id="submit" onclick="post_query_payment('name.email.vk','<?php echo $_GET['course']; ?>')">Отправить</button>
    <a class="offerPayment" href="offer.php">
      Нажимая на кнопку "Купить", вы соглашаетесь с условиями оферты.
    </a>
  </form>
</body>
</html>
