<!DOCTYPE html>
<html>
<head>
  <?php include ('php/head.php'); ?>
  <title>Математика для экономистов | Онлайн-курсы подготовки по олимпиадной экономике</title>

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
    Математика для экономистов
  </p>
  <ul class="materContent1">
    <li><span class="materSpanContent">Производная</span>
      <ul class="materContent2">
        <li><span class="materSpanContent">Простое определение</span></li>
        <li><span class="materSpanContent">Строгое определение</span></li>
        <li><span class="materSpanContent">Геометрический смысл</span></li>
        <li><span class="materSpanContent">Правила дифференцирования</span>
          <ul class="materContent3">
            <li><span class="materSpanContent">Производная константы</span></li>
            <li><span class="materSpanContent">Вынос константы из под производной</span></li>
            <li><span class="materSpanContent">Производная суммы (разности) функций</span></li>
            <li><span class="materSpanContent">Производная произведения функций</span></li>
            <li><span class="materSpanContent">Производная частного функций</span></li>
            <li><span class="materSpanContent">Производная сложной функции</span></li>
          </ul>
        </li>
        <li><span class="materSpanContent">Арифметика производных</span></li>
      </ul>
    </li>
    <li><span class="materSpanContent">Прогрессии</span>
      <ul class="materContent2">
        <li><span class="materSpanContent">Арифметическая прогрессия и ее сумма</span></li>
        <li><span class="materSpanContent">Геометрическая прогрессия и ее сумма</span>
          <ul class="materContent3">
            <li><span class="materSpanContent">Сумма бесконечно убывающей прогрессии</span></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
  <p class="mater1">Производная</p>
  <p class="mater2">Простое определение</p>
  <p class="materText">
    Производная — скорость изменения функции в данной точке.
  </p>
  <p class="mater2">Строгое определение</p>
  <p class="materText">
    Для формирования строгого определения необходимо знание пределов (но грубо говоря, предел — то куда стремится функция при приближении аргумента к какому-то значению).<br />
    <br />Производная функции $f(x)$ в точке $x_0$ это
      <big>$$f'(x_0) = \lim\limits_{\Delta x \to 0} \dfrac{f(x_0 + \Delta x) - f(x_0)}{\Delta x}$$</big>
  </p>
  <p class="materText">
    Или другими словами, отношение приращения функции к приращению аргумента при небольших приращениях аргумента. По другому это же можно записать как
    <big>$$f'(x_0) = \lim\limits_{\Delta x \to 0} \dfrac{\Delta f(x)}{\Delta x}$$</big>
  </p>
  <p class="mater2">Геометрический смысл</p>
  <p class="materText">
    С геометрической точки зрения производную функции можно интерпретировать как касательную
  </p>
  <p class="mater2">Правила дифференцирования</p>
  <p class="materText">
    Чтобы решать задачи строгое определение чаще всего не нужно, но следующие правила вам могут оказаться полезными. Если производные  от функций $f(x)$ и $g(x)$ существуют и равны $f'(x)$ и $g'(x)$ соответственно, то следующие выражения верны:
  </p>
  <p class="mater3"> Производная константы:
  </p>
  <p class="materText">
    <big>$$(C)' = 0$$ </big>
  </p>
  <p class="materText">
    Производная константы равна нулю, так как константа не изменяет своего положения при изменении аргумента.
  </p>
  <p class="mater3">Вынос константы из под производной:
  </p>
  <p class="materText">
    <big>$$(af(x))' = af'(x)$$ </big></p>
  <p class="materText">
    Производная произведения функции и числа равна произведению числа и  производной функции.
  </p>
  <p class="mater3">Производная суммы (разности) функций:</p>
  <p class="materText">
    <big>$$(f(x)\pm g(x))' = f'(x) \pm g'(x)$$ </big>
  </p>
  <p class="materText">
    Производная суммы (разности) функций равна сумме (разности) производных функций — если мы складываем две функции, то их скорости тоже складываются.
  </p>
  <p class="mater3">Производная произведения функций:</p>
  <p class="materText">
    <big>$$(f(x)\times g(x))' = f'(x) \times g(x) + f(x) \times g'(x)$$ </big>
  </p>
  <p class="mater3">Производная частного функций:</p>
  <p class="materText">
    <big>$$\left(\dfrac{f(x)}{g(x)}\right)' = \dfrac{f'(x)g(x) - f(x)g'(x)}{g(x)^2}$$ </big>
  </p>
    Просто запомните. То же самое можно получить воспользовавшись правилами производной сложной функции и произведения функций — раскладываем $\frac{f(x)}{g(x)}$ как $f(x)\times \frac{1}{g(x)}$ и берем производную произведения.
  </p>
  <p class="mater3">Производная сложной функции:</p>
  <p class="materText">
    <big>$$f(g(x))' = f'(g(x)) \times g'(x)$$ </big>
  </p>
  <p class="mater2">Арифметика производных:</p>
  <p class="materText">
    Производные самых важных функций
  </p>
  <p class="materText">
    <big>$$(ax)' = a$$ </big>
  </p>
  <p class="materText">
    <big>$$(x^a)' = ax^{a-1}$$ </big>
  </p>
  <p class="materText">
    <big>$$(\sqrt{x})' = \dfrac{1}{2\sqrt{x}}$$ </big>
  </p>
  <p class="materText">
    <big>$$(e^x)' = e^x$$ </big>
  </p>
  <p class="materText">
    <big>$$\left(\dfrac{1}{x}\right)' = -\dfrac{1}{x^2}$$ </big>
  </p>
  <p class="materText">
    <big>$$(\ln x)' = \dfrac{1}{x}$$ </big>
  </p>
  <p class="materText">
    <big>$$(a^x)' = \left(e^{x\ln a} \right)' = e^{x\ln a} \ln a = a^x \ln x$$ </big>
  </p>
  <p class="mater1">Прогрессии</p>
  <p class="materText">
    Прогрессия — ряд увеличивающихся или уменьшающихся по какому-либо правилу чисел. Заметьте, что их бесконечно много, так как зная правило всегда можно построить новое число последовательности.
  </p>
  <p class="mater2">Арифметическая прогрессия и ее сумма</p>
  <p class="materText">
    Арифметическая прогрессия — числовая последовательность, каждый член которой, начиная со второго, равен предыдущему, сложенному с d. Число d называется разностью прогрессии. Любой член арифметической прогрессии вычисляется по формуле:
  </p>
  <p class="materText">
    <big>$$a_i = a_1 + d \times (i-1)$$ </big>
  </p>
  <p class="materText">
    Чтобы найти сумму первых $n$ членов арифметической прогрессии, разобьем последовательность на пары  — каждому элементу с номером $i$ сопоставим элемент номер $n+1+i$: первому элементу будет соответствовать последний, второму – предпоследний и так далее (если количество элементов нечетно, то элемент посередине назовем парой). Заметим, что сумма элементов каждой из пар одинаковая, она равна $2a_1+d(n-1)$, а пар всего $n/2$, значит формула суммы будет –
  </p>
  <p class="materText">
    <big>$$\sum\limits_{arithm} = (a_1 + d(n-1)) \times \dfrac{n}{2} = \dfrac{n(a_1+a_n)}{2}$$ </big>
  </p>
  <p class="mater2">Геометрическая прогрессия и ее сумма</p>
  <p class="materText">
    Геометрическая прогрессия — числовая последовательность, каждый член которой, начиная со второго, равен предыдущему, умноженному на число $q>0$.Число $q$ называется знаменателем прогрессии. Любой член геометрической прогрессии вычисляется по формуле:
  </p>
  <p class="materText">
    <big>$$b_i = b_1 \times q^{i-1}$$ </big>
  </p>
  <p class="materText">
    Сумму первых n членов геометрической прогрессии можно найти по формуле:
  </p>
  <p class="materText">
    <big>$$\sum\limits_{geom} = \dfrac{b_1 (q^n - 1) }{q-1}$$ </big>
  </p>
  <p class="mater3">Сумма бесконечно убывающей прогрессии</p>
  <p class="materText">
    Бесконечно убывающая геометрическая прогрессия — геометрическая прогрессия, у которой $0 < q < 1$. Для неё определяется понятие суммы всех членов бесконечно убывающей геометрической прогрессии, а именно: <big>$$\sum\limits_{geom} = \dfrac{b_1}{1-q}$$</big> </p>
  <p class="materText">
    Если у вас еще остались вопросы, то ответы на них можно найти на онлайн-курсах по экономике <a href="https://vk.com/economolymp">Экономический Олимп</a>. Экономический Олимп – с нами вы постигнете экономику. Наша миссия — дать всем нашим ученикам возможность поступить в лучшие вузы страны.
  </p>
  <a class="returnblock" href="https://economolymp.ru/materials.php" title="Все темы"> Все темы
  </a>
    <?php include ("php/footer.php"); ?>
</body>
</html>
