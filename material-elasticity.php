<!DOCTYPE html>
<html>
<head>
  <?php include ('php/head.php'); ?>
  <title>Эластичность | Онлайн-курсы подготовки по олимпиадной экономике</title>

  <meta name="keywords" content="лекции по экономике, курс лекций по экономике, скачать лекции по экономике, курсы по экономике, подготовка к олимпиаде по экономике">
  <meta name="description" content="Подготовка к олимпиадам по экономике для школьников. Лекции и авторские задачи с проверкой от лучших преподавателей России">
 
  <meta property="og:type" content="website">
  <meta property="og:title" content="Курсы по олимпиадной экономике | Экономический олимп">
  <meta property="og:description" content="Онлайн-курсы подготовки к олимпиадам школьников по экономике">
  <meta property="og:url" content="https://economolymp.ru/kursi-po-ekonomike.html">
  <meta property="og:image" content="https://economolymp.ru/images/icons/logo.png">
  <meta property="og:image:height" content="732">
  <meta property="og:image:type" content="image/png">

  <link type="text/css" rel="stylesheet" href="css/materials.css">

  <script src="js/mater-scroll.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/x-mathjax-config">
      MathJax.Hub.Config({
        CommonHTML: { linebreaks: { automatic: true } },
        "HTML-CSS": { linebreaks: { automatic: true } },
        SVG: { linebreaks: { automatic: true } },
        tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
      });
  </script>
  <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML" async>
  </script>
  <?php include ('php/head_vk_pixel.php'); ?>
</head>

<body>
  <?php include ('php/yandex_counter.php'); ?>
  <?php include ('php/header.php'); ?>
  <p class="materTop">
    Эластичность
  </p>
  <ul class="materContent1">
    <li><span class="materSpanContent">Эластичность</span>
      <ul class="materContent2">
        <li><span class="materSpanContent">Определения</span></li>
        <ul class="materContent3">
          <li><span class="materSpanContent">Точное и математически строгое определение</span></li>
          <li><span class="materSpanContent">Дополнительное определение</span></li>
          <li><span class="materSpanContent">Очень грубое интуитивное определение</span></li>
        </ul>
        <li><span class="materSpanContent">Другие виды эластичности</span>
          <ul class="materContent3">
            <li><span class="materSpanContent">Эластичность через дельты</span></li>
            <li><span class="materSpanContent">Дуговая (средняя) эластичность</span></li>
          </ul>
          <li><span class="materSpanContent">Эластичности различных функций</span></li>
          <ul class="materContent3">
            <li><span class="materSpanContent">Эластичность спроса по цене</span></li>
            <li><span class="materSpanContent">Реакция выручки монополиста на изменения цены</span></li>
            <li><span class="materSpanContent">Перекрестная эластичность спроса (эластичность спроса по цене другого товара)</span></li>
            <li><span class="materSpanContent">Эластичность спроса по доходу</span></li>
          </ul>
          <li><span class="materSpanContent">Дополнительное определение эластичности</span></li>
          <li><span class="materSpanContent">Q/A</span></li>
          <!-- <li><span class="materSpanContent">Пробные задания с решением</span></li> -->
        </ul>
    </li>
  </ul>
  <p class="mater1">Эластичность</p>
  Эластичность часто обсуждается экономистами при рассмотрении различных вопросов. В этой статье мы вводим для вас понятие эластичности и приводим примеры, в которых это понятие применяется.
  <p class="mater2">Определения</p>
  <p class="mater3">Точное и математически строгое определение</p>
  <p class="materText">
  Эластичность (точечная эластичность, эластичность в точке) — отношение процентного изменения функции к процентному изменению аргумента. Эластичность показывает чувствительность функции к изменению  и выражается формулой:
      <big>$$\mathcal{E}^{f(x)}_x=\lim\limits_{\Delta x\to 0} \frac{\frac{\Delta f(x)}{f(x)}}{\frac{\Delta x}{x}}=\lim\limits_{\Delta x\to 0}\frac{\Delta f(x)}{\Delta x}\times \frac{x}{f(x)}=f'(x)\times\frac{x}{f(x)}$$</big>
  Формулу стоит пояснить. 

  Эта формула называется формулой точечной эластичности, так как мы смотрим эластичность в точке $(x, f(x))$ для какого-то зафиксированного $x$.
  </p>
  <p class="mater3">Очень грубое интуитивное определение</p>
  <p class="materText">
    Эластичность показывает процентное изменение функции в результате изменения аргумента на один процент. Такое определение нужно экономистам, чтобы понимать и интерпретировать эластичность человеческим языком. Так экономист может сказать, что если спрос стал более эластичным, имея ввиду, что объем спроса изменяется сильнее при росте цены на один процент.
  </p>
  <!-- <img class="materImg" src="images/material/material-1/second.png" alt=""> -->
  <p class="mater2">Другие виды эластичности</p>
  <p class="materText">
  В реальности многие функции в экономике не наблюдаемы, поэтому существуют еще несколько альтернативных видов эластичности.
  </p>
  <p class="mater3">Эластичность через дельты</p>
  <p class="materText">
    <big>$$\mathcal{E}=\frac{f(x_1)-f(x_0)}{x_1-x_0}\times \frac{x_1}{f(x_1)}$$</big>
    В этой формуле мы используем линейное приближение функции (считаем, что наша функция на участке от $x_0$ до $x_1$ линейная), поэтому первый множитель можно интерпретировать как производную линейной функции проходящей через точки $(x_0,f(x_0))$ и $(x_1, f(x_1))$. 
  </p>
  <p class="mater3">Дуговая (средняя) эластичность</p>
  <p class="materText">
    <big>$$\mathcal{E}=\frac{ f(x_1)-f(x_0)}{x_1-x_0}\times\frac{\frac{x_1+x_0}{2}}{\frac{f(x_1)+f(x_0)}{2}}=\frac{ f(x_1)-f(x_0)}{x_1-x_0}\times\frac{x_1+x_0}{f(x_1)+f(x_0)}$$</big>
    Можно заметить, что первый множитель приблизительно равен производной (если $x_1-x_0$ достаточно мало). Дуговую эластичность можно интерпретировать как эластичность линейной функции проходящей через точки $(x_0, f(x_0))$ и $(x_1, f(x_1))$ в точке находящейся посередине этого отрезка.
  </p>
  <p class="mater2"> Эластичности различных функций</p>
  <p class="materText">
  Далее мы посмотрим на эластичности особенных для экономики функций. 
  </p>
  <p class="mater3"> Эластичность спроса по цене</p>
  <p class="materText">
  Эластичность спроса показывает, насколько (в процентном отношении) упадет выпуск по отношению к росту цены.
  <br />
  Эластичность спроса почти всегда отрицательна, так как величина спроса при стандартных предпосылках убывает по цене (исключение: Товары Гиффена), а значит производная функции спроса отрицательна.
  <br />
  Эластичность играет большую роль при монополии. В таблице ниже представлена зависимость выручки монополиста от эластичности спроса.
  </p>
  <img class="materImg" src="images/material/material-elasticity/1.png" alt="">
  <p class="mater3">Перекрестная эластичность спроса</p>
  <p class="materText">Перекрестная эластичность спроса - эластичность спроса по цене другого товара.</p>
  <p class="materText">
    <big>$$\mathcal{E}_{p_2}^{Q_d^1}=\frac{Q_d^1(p_1, p_2)'_{p_2} \times p_2}{Q_d^1(p_1, p_2)}$$</big>
  </p>
  <!-- <img class="materImg" src="images/material/material-1/5.png" alt=""> -->
  <p class="materText">
  Перекрестная эластичность показывает влияние цены другого товара на спрос. При рассмотрении перекрестной эластичности различают 3 типа отношений товаров. Если эластичность спроса на товар 1 по цене товара 2 положительна, то товары-комплементы (взаимодополняющие друг друга), если эластичность отрицательна, то это товары-субституты (взаимозаменяемые товары), а если эластичность равна нулю, то это независимые товары.
  </p>
  <p class="mater3">Эластичность спроса по доходу</p>
  <p class="materText">
    Эластичность спроса по доходу считается как:
    <big>$$\mathcal{E}^{Q_d(p, I)}_I=\frac{Q'_d(p, I)_II}{Q_d(p,I)},$$</big>
    где $Q'_d(p, I)_I$ — производная функции спроса по доходу.
    <br />В зависимости от эластичности спроса по доходу, различают 5 типов товаров.
  </p>
  <img class="materImg2" src="images/material/material-elasticity/2.png" alt="">
  <p class="mater3">Дополнительное определение эластичности</p>
  <p class="materText">
  Еще одна формула эластичности, которой иногда удобно воспользоваться, если вам хватает математического аппарата.<br />
      <big>$$\mathcal{E}^{f(x)}_{x}=\lim\limits_{\Delta\ln x\to 0}\frac{\Delta\ln f(x)}{\Delta\ln x}=\frac{\delta\ln f(x)}{\delta\ln x}$$</big>
  Если произнести эту формулу словами: производная логарифма функции по логарифму аргумента, но вы можете убедиться, что эта формула при раскрытии сводится к предыдущей. Эта формула с маленькой вероятностью пригодится вам на олимпиадах, однако он позволяет понимать литературу по экономики (так как прием представление спроса в логарифмическом виде используется часто). Также, такое представление помогает лучше запомнить факт про функции с постоянной эластичностью. Зададим спрос следующим образом: $ln Q = -2 ln P$. Если мы возведем $e$ в в степерь левой и правой части: $e^{ln Q} = e^{-2 ln P}$. Отсюда, по основному логарифмическому тождеству можем перейти к более привычной записи спроса: $Q=1/P^2$. Видно, что это стандартная запись спроса с постоянной эластичностью равной 2.
  </p>
  <!-- <img class="materImg" src="images/material/material-1/6.png" alt=""> -->
  <p class="mater2">Q/A</p>
  <p class="materText">
    <b>Q:</b> Почему бы вместо эластичности просто не использовать производную?<br/>
    <b>A:</b> Производная функции спроса (как и любой другой функции) сама по себе ничего не значит, так как она имеет размерность (количество штук на единицу валюты) а, эластичность – безразмерная величина; ее использование исключает сложности, связанные с единицами и масштабами рассматриваемых величин.
    <br/>

    <br /> Если у вас еще остались вопросы, то ответы на них можно найти на онлайн-курсах по экономике <a href="https://vk.com/economolymp">Экономический Олимп</a>. Экономический Олимп –— с нами вы постигнете экономику. Наша миссия —— дать всем нашим ученикам возможность поступить в лучшие вузы страны.
  </p>
  <a class="returnblock" href="https://economolymp.ru/materials.php" title="Все темы"> Все темы
  </a>
  <?php include ("php/footer.php"); ?>
</body>
</html>
