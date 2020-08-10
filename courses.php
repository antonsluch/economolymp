<!DOCTYPE html>
<html>

<head>
  <?php include('php/head.php'); ?>
  <title>Онлайн-курсы подготовки по олимпиадной экономике | Экономический олимп</title>

  <meta name="keywords" content="лекции по экономике, курс лекций по экономике, скачать лекции по экономике, курсы по экономике, подготовка к олимпиаде по экономике">
  <meta name="description" content="Курсы в формате онлайн для подготовки к олимпиадам по экономике для школьников. Лекции и авторские задачи с проверкой от лучших преподавателей России">

  <meta property="og:type" content="website">
  <meta property="og:title" content="Курсы по олимпиадной экономике | Экономический олимп">
  <meta property="og:description" content="Онлайн-курсы подготовки к олимпиадам школьников по экономике">
  <meta property="og:url" content="https://economolymp.ru/courses.php">
  <meta property="og:image" content="https://economolymp.ru/images/icons/logo.png">
  <meta property="og:image:height" content="732">
  <meta property="og:image:type" content="image/png">

  <link type="text/css" rel="stylesheet" href="css/courses.css">

  <script src="js/lecture-free.js" type="text/javascript" charset="utf-8"></script>
  <?php include ('php/head_vk_pixel.php'); ?>
</head>

<body>
  <?php include ('php/yandex_counter.php'); ?>
  <?php include('php/header.php'); ?>
  <p class="coursesTop">
    Курсы
  </p>
  <!-- <a class="menuP getReady getReadyM" href="prof-course.php" title="Хочу подготовиться к заключительному этапу ВОШ !">Хочу подготовиться к заключительному этапу ВОШ !</a> -->
  <div class="courseItem iT">
    <p class="courseItemTop">
      Основной
    </p>
    <p class="courseItemText">
      Вы получите знания и навыки решения задач по всем основным темам олимпиадной экономики.
    </p>
    <p class="courseItemInfo">
      Начало занятий: 18 июня<br />Длительность: 2 месяца
    </p>
    <p class="courseItemPrice">
      7000 руб.
    </p>
    <a class="courseDesc" href="https://economolymp.ru/course-main.php" title="Основной курс по олимпиадной экономике">Подробнее</a>
  </div>
  <div class="courseItem iT">
    <p class="courseItemTop">
      Продвинутая микроэкономика
    </p>
    <p class="courseItemText">
      Вы углубите свои знания по микроэкономике и научитесь решать сложные задачи.
    </p>
    <p class="courseItemInfo">
      Начало занятий: 18 июня<br />Длительность: 2 месяца
    </p>
    <p class="courseItemPrice">
      <!-- <span>&nbsp;&nbsp;8000 руб.&nbsp;&nbsp; </span> -->
      8000 руб.
    </p>
    <!-- <p class="courseItemInfoChangeSchedule">
      Повышение цен: 20 сентября
    </p> -->
    <a class="courseDesc" href="https://economolymp.ru/course-microeconomics.php" title="Курс по олимпиадной микроэкономике">Подробнее</a>
  </div>
  <div class="courseItem iT">
    <p class="courseItemTop">
      Продвинутая макроэкономика
    </p>
    <p class="courseItemText">
      Вы освоите необходимую теорию и научитесь решать задачи по всем темам макроэкономики.
    </p>
    <p class="courseItemInfo">
      Начало занятий: 18 июня<br />Длительность: 1.5 месяца
    </p>
    <p class="courseItemPrice">
      <!-- <span>&nbsp;&nbsp;7000 руб.&nbsp;&nbsp; </span> -->
      7000 руб.
    </p>
    <!-- <p class="courseItemInfoChangeSchedule">
      Повышение цен: 1 сентября
    </p> -->
    <a class="courseDesc" href="https://economolymp.ru/course-macroeconomics.php" title="Курс по олимпиадной макроэкономике">Подробнее</a>
  </div>
  <div class="lectureFree">
    <p class="lectureFreeText">
      Получите лекцию совершенно бесплатно!
    </p>
    <span class="lectureFreeBtn">Получить&nbsp;лекцию</span>
    <form class="lectureFreeForm" id="form_lect" action="php/lection.php" method="post">
      <p class="lectureFreeFormText">
        Укажите, куда отправить первую полную лекцию совершенно бесплатно!
      </p>
      <input type="text" class="lectureFreeInput iT" name="name" id="name" placeholder="Ваше имя" required>
      <input type="email" class="lectureFreeInput iT" name="email" id="email" placeholder="Ваш Email" required>
      <input type="submit" name="submit_lecture" class="lectureFreeFormBtn iT" form="form_lect" id="submit" onclick="ym(64664659,'reachGoal','requestOrder'); return true;" value="Отправить" />
    </form>
  </div>
  <p class="coursesSales">
    Сэкономьте до 30% при покупке сразу <a href="https://economolymp.ru/sales.php" title="Акции в Экономическом олимпе">нескольких курсов</a>!
  </p>
  <?php include("php/footer.php"); ?>
</body>

</html>