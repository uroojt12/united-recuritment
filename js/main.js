// =================scroll===========
let offset = 0;
$(function () {
  // header fix
  offSet = $("body").offset().top;
  offSet = offSet + 5;
  $(window).scroll(function () {
    scrollPos = $(window).scrollTop();
    if (scrollPos >= offSet) {
      $("header").addClass("fix");
    } else {
      $("header").removeClass("fix");
    }
  });
});
// =====
$(window).on("load", function () {
  // AOS Js
  AOS.init({
    easing: "ease-in-out-sine",
    offset: 10,
    disable: window.innerWidth <= 991,
  });
});
// _____popup_____*/
$(document).on("click", ".popBtn", function () {
  var popUp = $(this).data("popup");
  $("body").addClass("flow");
  $(".popup[data-popup= " + popUp + "]").fadeIn();
});
$(document).on("click", ".crosBtn", function () {
  $(".popup").fadeOut();
  $("body").removeClass("flow");
});

//
/*____ FAQ's ____*/
$(document).on("click", ".faqBlk > h5", function () {
  $(".faqBlk")
    .not($(this).parent().toggleClass("active"))
    .removeClass("active");
  $(".faqBlk > .txt")
    .not($(this).parent().children(".txt").slideToggle())
    .slideUp();
});
/*========== Toggle ==========*/
$(document).on("click", ".toggle", function () {
  $(".toggle").toggleClass("active");
  $("body").toggleClass("flow");
  $("[nav]").toggleClass("active");
  $(".upperlay").toggleClass("active");
  // $("nav > ul > li > .sub").slideUp();
});

// money=============
$(".testi-carousel").owlCarousel({
  autoplay: true,
  nav: false,
  navText: [
    '<i class="fa-solid fa-circle-chevron-left"></i>',
    '<i class="fa-solid fa-circle-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: true,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 20,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
      dots: true,
      nav: false,
    },
    600: {
      items: 1,
    },
    991: {
      items: 2,
    },
    1000: {
      items: 2,
    },
  },
});

// banner=============
$(".banner-carousel").owlCarousel({
  autoplay: true,
  nav: false,
  navText: [
    '<i class="fa-solid fa-circle-chevron-left"></i>',
    '<i class="fa-solid fa-circle-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: true,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 20,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
      dots: true,
      nav: false,
    },
    600: {
      items: 1,
    },
    991: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

// ======upload=====
$(document).ready(function () {
  // upload file
  var imgFile;
  $(document).on("click", ".uploadImg", function () {
    $(this).parents("form").find(".uploadFile").trigger("click");
  });
});
