function clearForm(t) {
  $("form").get(0).reset();
  $("body").append('<div class="thanks"><p class="thanksText">Спасибо за интерес! Информация о ' + t + ' отправлена на почту!</p></div>');
  setTimeout(function () {
    $(".thanks").remove();
  }, 3000);
}

function post_query_lect(data) {
  var str = "courses_f=1";
  $.each(data.split("."), function (k, v) {
    str += "&" + v + "=" + $("#" + v).val();
  });
  $.ajax({
    url: "../php/send.php",
    type: "POST",
    data: str,
    cache: false,
    success: function (xml) {
      clearForm('лекции');
    }
  });
}

function post_query_olymp(data) {
  var str = "olymp_f=1";
  $.each(data.split("."), function (k, v) {
    str += "&" + v + "=" + $("#" + v).val();
  });
  $.ajax({
    url: "../php/send.php",
    type: "POST",
    data: str,
    cache: false,
    success: function (xml) {
      clearForm('расписании олимпиад');
    }
  });
}

function post_query_webinar(data) {
  var str = "webinar_f=1";
  $.each(data.split("."), function (k, v) {
    str += "&" + v + "=" + $("#" + v).val();
  });
  $.ajax({
    url: "../php/send.php/",
    type: "POST",
    data: str,
    cache: false,
    success: function (xml) {
      clearForm('вебинаре');
      //window.location.href = window.location.href;
    }
  });
}

function post_query_payment(data, courseType) {
  var str = "payment_f=1";
  // alert(data);
  $.each(data.split("."), function (k, v) {
    str += "&" + v + "=" + $("#" + v).val();
  });
  str += "&" + courseType + '_f=1';
  console.log('отправление');
  $.ajax({
    url: "../php/send.php",
    type: "POST",
    data: str,
    cache: false,
    success: function (data) {
      if (data.status == 'error') {
        alert('Форма заполнена неверно. Пример заполнения: \n Фамилия Имя Отчество \n lzorin@nes.ru \n vk.com/economolymp');
      } 
      else if (data.status == 'errorForm') {
        alert('Ошибка формы, обратитесь в поддержку');
      } 
      else if (data.status == 'errorMessage') {
        alert(data.error);
      }
      else if (data.link) {
        window.location.href = data.link
      }
    }
  });
}