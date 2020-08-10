$(document).ready(function() {
  $(".reviewItem").ready(function() {
    $(this).find(".reviewTextShow").click(function() {
      if ($(this).text() == "Показать полностью") {
        $(this).html("Скрыть");
        $(this).prev().css("height", "auto");
        flag = 1;
      } else if ($(this).text() == "Скрыть") {
        $(this).html("Показать полностью");
        $(this).prev().css("height", "100px");
        flag = 0;
      }
    });
  });
});
