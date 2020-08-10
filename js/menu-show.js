$(document).ready(function() {
  var flag = 0;
  $(".menuMobMenu").click(function() {
    if (flag == 0) {
      $(".menuMobBottom").animate({
        "right": 0
      }, 350);
      flag = 1;
    } else {
      $(".menuMobBottom").animate({
        "right": -250
      }, 350);
      flag = 0;
    }
  });

  $(".scrollTop").click(function() {
    $("html,body").animate({
      scrollTop: 0
    }, 300);
    return false;
  });
});
