var buyFlag = 0;

function buyWindow() {
  $.get("../php/index-carousel.html", function(txt) {
    $("body").append(txt);
  });

  buyFlag = 1;
}

function closebuyWindow() {
  $(".buyWindow").remove();
  buyFlag = 0;
}

function showCarousel1() {
  $(".carousel1").css({display: "block"});
  $(".carousel2").css({display: "none"});
  $(".firstCarousel").css({background:"#404659"});
  $(".secondCarousel").css({background:"rgba(64, 70, 89, 0.5)"});
}

function showCarousel2() {
  $(".carousel2").css({display: "block"});
  $(".carousel1").css({display: "none"});
  $(".firstCarousel").css({background:"rgba(64, 70, 89, 0.5)"});
  $(".secondCarousel").css({background:"#404659"});
}

$(document).keydown(function(e) {
  if (buyFlag == 1 && e.keyCode == 27) {
    $(".buyWindow").remove();
    buyFlag = 0;
  }
});

$(document).mouseup(function(e) {
  if (!$(".buyWindowForm").is(e.target) && $(".buyWindowForm").has(e.target).length === 0) {
    $(".buyWindow").remove();
    buyFlag = 0;
  }
});
