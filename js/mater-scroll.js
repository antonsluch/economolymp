$(document).ready(function(){
  $(".materSpanContent").click(function(){
    var text = $(this).text();
    var scrollTo = $("body").find("p:contains("+text+")");
    $("html,body").animate({
      scrollTop: scrollTo.offset().top - 80
    },300);
  });
});
