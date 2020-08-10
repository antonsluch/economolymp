function setCookie(name, value) {
  var date = new Date(new Date().getTime() + 31536000 * 1000);
  document.cookie = name + "=" + value + "; path=/; expires=" + date.toUTCString();
}

/*function deleteCookie(name) {
  var date = new Date(0);
  document.cookie = name + "=; path=/; expires=" + date.toUTCString();
}*/

function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : "noCookie";
}



var olympFlag = 0;

function showBtnOlymp() {
  var txt = '<span class="olympiadsBtn" onclick="showOlympiads()">Расписание олимпиад</span>';
  $("body").append(txt);
}

function removeBtnOlymp() {
  $(".olympiadsBtn").remove();
}

function showOlympiads() {
  $.get("../php/olympiads-form.html", function(txt) {
    $("body").append(txt);
  });
  olympFlag = 1;
  removeBtnOlymp();
}

function closeOlympiads() {
  $(".olympiads").remove();
  showBtnOlymp();
  olympFlag = 0;
}

$(document).keydown(function(e) {
  if (olympFlag == 1 && e.keyCode === 27) {
    $(".olympiads").remove();
    showBtnOlymp();
    olympFlag = 0;
  }
});

$(document).mouseup(function(e) {
  if (olympFlag == 1 && !$(".olympiadsForm").is(e.target) && $(".olympiadsForm").has(e.target).length === 0) {
    $(".olympiads").remove();
    showBtnOlymp();
    olympFlag = 0;
  }
});

$(document).ready(function() {
  if (getCookie("showing") == "noCookie") {
    showBtnOlymp();
    
    setTimeout(function() {
      $.get("../php/olympiads-form.html", function(txt) {
        $("body").append(txt);
      });
      olympFlag = 1;
      setCookie("showing", "notFirst");
    }, 25000);
  } else if (getCookie("showing") == "notFirst" && (window.location.pathname.search("courses") == -1) && (window.location.pathname.search("webinar") == -1) && (window.location.pathname.search("payment") == -1)) {
    showBtnOlymp();
  }
});
