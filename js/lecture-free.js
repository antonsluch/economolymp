$(document).ready(function() {
  var lectFlag = 0;
  $(".lectureFreeBtn").click(function() {
    if (lectFlag == 0) {
      $(".lectureFreeForm").show();
      lectFlag = 1;
    } else {
      $(".lectureFreeForm").hide();
      lectFlag = 0;
    }
  });
});
