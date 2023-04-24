$(function () {
  $(".main_slide").on("init", function () {
    $(".m_link li").eq(0).addClass("on");
  });

  $(".main_slide").on("beforeChange", function (e, s, c, n) {
    $(".m_link li").removeClass("on");
    $(".m_link li").eq(n).addClass("on");
  });

  $(".main_slide").slick({
    arrows: false,
    autoplay: true,
    pauseOnHover: true,
    pauseOnFocus: true,
    autoplaySpeed: 5000,
    fade: true,
  });
  $(".sub_slide").slick({
    dots: true,
    centerMode: true,
    centerPadding: "20px",
  });
  $(".certifi_slide").slick();
  $(window).on("scroll", function () {
    var sct = $(window).scrollTop();
    console.log(sct);

    if (sct > 500) {
      //$('.toTop').fadeIn();
      $(".toTop").addClass("on");
    } else {
      $(".toTop").removeClass("on");
    }
  });

  $(".toTop").on("click", function () {
    $("html, body").animate({ scrollTop: 0 });
  });
});
