$(".navbar ul a").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(href).offset().top }, 1100);
  });
  $(function () {
    $("#section1").mouseenter(function () {
      $("#section1 h2").css("color", "rgb(17, 188, 240)");
    });
    $("#section1").mouseleave(function () {
      $("#section1 h2").css("color", "#EEE");
    });
  });
  $(function () {
    $("#section2").mouseenter(function () {
      $("#section2 h2").css("color", "rgb(17, 188, 240)");
    });
    $("#section2").mouseleave(function () {
      $("#section2 h2").css("color", "#EEE");
    });
  });
  $(function () {
    $("#section3").mouseenter(function () {
      $("#section3 h2").css("color", "rgb(17, 188, 240)");
    });
    $("#section3").mouseleave(function () {
      $("#section3 h2").css("color", "#EEE");
    });
  });
  $(function () {
    $("#section4").mouseenter(function () {
      $("#section4 h2").css("color", "rgb(17, 188, 240)");
    });
    $("#section4").mouseleave(function () {
      $("#section4 h2").css("color", "#EEE");
    });
  });
  $(function () {
    $("#and").mouseenter(function () {
      $("#and").css("color", "rgb(17, 188, 240)");
    });
    $("#and").mouseleave(function () {
      $("#and").css("color", "#EEE");
    });
  });
  $(function () {
    $(".iam h2").mouseenter(function () {
      $(".iam h2").css("color", "rgb(17, 188, 240)");
    });
    $(".iam h2").mouseleave(function () {
      $(".iam h2").css("color", "#EEE");
    });
  });
  $(function () {
    $("button").click(function () {
      $("ul").toggle(1000);
    });
  });
  