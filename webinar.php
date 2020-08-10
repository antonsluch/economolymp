<?php
    header('Location: https://economolymp.ru/');
?>

<!DOCTYPE html>
<html>
<head>
    <?php include('php/head.php'); ?>
    <title>Вебинар | Онлайн-курсы подготовки по олимпиадной экономике</title>

    <meta name="keywords"
          content="лекции по экономике, курс лекций по экономике, скачать лекции по экономике, курсы по экономике, подготовка к олимпиаде по экономике">
    <meta name="description" content="Вебинары об олимпиадной экономике. Станьте настоящим олимпиадником по экономике">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Вебинары по олимпиадной экономике | Экономический олимп">
    <meta property="og:description"
          content="Окунитесь в мир олимпиад по экономике с преподавателями Экономического олимпа">
    <meta property="og:url" content="https://economolymp.ru/webinar.php">
    <meta property="og:image" content="https://economolymp.ru/images/icons/logo.png">
    <meta property="og:image:height" content="732">
    <meta property="og:image:type" content="image/png">

    <link type="text/css" rel="stylesheet" href="css/webinars.css">
    <?php include ('php/head_vk_pixel.php'); ?>
</head>

<body>
<?php include ('php/yandex_counter.php'); ?>
<?php include('php/header.php'); ?>
<div class="webinarTop">
    <p class="webinarTopText">Бесплатный вебинар</p>
    <p class="webinarTopTextBottom">
        “Как поступить на бюджет на экономическую специальность?”
    </p>
</div>
<p class="webinarDate">
    Дата проведения:
    <span>8 сентября</span> <!--<br><b>14:00 по МСК</b> -->
</p>
<div class="webinarBlock iT">
    <div class="webinarDiv">
        <p class="webinarBlockTop">
            Что будет на вебинаре:
        </p>
        <ul class="webinarBlockText webinarBlockTextUl">
            <li>Список олимпиад с описанием специфики каждой</li>
            <li>Олимпиады по экономике как альтернатива ЕГЭ</li>
            <li>Льготы каждой олимпиады при поступлении</li>
            <li>Как выбрать ВУЗ (список лучших ВУЗов)</li>
            <li>Пути поступления на бюджет</li>
        </ul>
    </div>
    <div class="webinarDiv">
        <p class="webinarBlockTextThin">
            Сразу после регистрации вы получите список всех перечневых олимпиад по экономике с их уровнями и
            ориентировочными датами проведения!
        </p>
        <p class="webinarBlockText">
            А уже на самом вебинаре вы узнаете, какие льготы эти олимпиады дают в конкретные ВУЗы
        </p>
    </div>
</div>
<div class="webinarBlock iT">
    <div class="webinarDiv webinarBlockRight">
        <p class="webinarBlockTop">
            Данный вебинар будет полезен тем, кто:
        </p>
        <ul class="webinarBlockText webinarBlockTextUl">
            <li>Хочет поступить на бюджет на экономическую специальность</li>
            <li>Хочет поступить в ВУЗ своей мечты еще до начала ЕГЭ</li>
            <li>Хочет эффективно распределить свое время при подготовке</li>
            <li>Хочет получить структурированную информацию об олимпиадах по экономике</li>
        </ul>
    </div>
</div>

<div class="webinarForm">
    <p class="webinarFormTop">
        Зарегистрироваться на вебинар<br/>
        <span>Получите список всех олимпиад по экономике сразу после регистрации</span>
    </p>
    <!--<form class="webinarFormBlock" id="form_webinar" method="post">
      <input type="text" class="webinarInput iT" name="name" id="name" placeholder="Ваше имя *" required>
      <input type="email" class="webinarInput iT" name="email" id="email" placeholder="Ваш Email *" required>
      <input type="tel" class="webinarInput webinarInputLast iT" name="number" id="number" placeholder="Ваш номер"> 
      <span class="webinarFormBlockSpan">За день до вебинара мы пришлём вам смс напоминание</span>
      <button type="button" name="submit_webinar" class="webinarFormBtn iT" form="form_webinar" id="submit" onclick="post_query_webinar('name.email.number'); yaCounter49515925.reachGoal('webinar'); return true;">Зарегистрироваться</button>
    </form>-->
    <form class="webinarFormBlock" id="form_webinar" action="php/webinar.php" method="post">
        <input type="text" class="webinarInput iT" name="name" id="name" placeholder="Ваше имя *" required>
        <input type="email" class="webinarInput iT" name="email" id="email" placeholder="Ваш Email *" required>
        <input type="tel" class="webinarInput webinarInputLast iT" name="number" id="number" placeholder="Ваш номер">
        <span class="webinarFormBlockSpan">За день до вебинара мы пришлём вам смс напоминание</span>
        <input type="submit" name="submit_webinar" class="webinarFormBtn iT" form="form_webinar" id="submit"
               onclick="yaCounter49515925.reachGoal('webinar'); return true;" value="Зарегистрироваться"/>
    </form>
</div>
<?php include("php/footer.php"); ?>
</body>
</html>
