let $ = jQuery.noConflict(); // insteadof using this line we can use jQuery instead of $

// var humbergerMenu = document.querySelector(".hamburger");
// var bars = document.querySelectorAll(".bar");
// var nav = document.querySelector(".navbar");
// humbergerMenu.addEventListener("click", showMenu);
// function showMenu() {
//   var menuInMobile = document.querySelector(".menubardiv");
//   var bar1 = document.querySelector(".bar-1");
//   var bar2 = document.querySelector(".bar-2");
//   var bar3 = document.querySelector(".bar-3");
//   bar1.classList.toggle("bar1");
//   bar2.classList.toggle("bar2");
//   bar3.classList.toggle("bar3");
//   menuInMobile.classList.toggle("menushow");
//   nav.classList.toggle("b-color");
// }

window.onscroll = function () {
  scrollFunction();
};
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("headsection").style.backgroundColor = "black";
  } else {
    document.getElementById("headsection").style.backgroundColor =
      "transparent";
  }
}
// jQuery Code Area
$(document).ready(function () {
  var splide = new Splide("#customer_logo", {
    type: "loop",
    perPage: 5,
    focus: "center",
    height: "10rem",
    autoScroll: {
      speed: 2,
    },
    breakpoints: {
      640: {
        perPage: 2,
        gap: ".7rem",
        height: "6rem",
        focus: "center",
        height: "10rem",
      },
      480: {
        perPage: 1,
        // gap    : '.7rem',
        height: "6rem",
        focus: "center",
        height: "10rem",
      },
    },
  });
  splide.mount();
});

$(document).ready(function () {
  //review
  new Splide("#splide_review", {
    type: "loop",
    perPage: 3,
    autoplay: true,
    breakpoints: {
      768: {
        perPage: 2,
        // gap: ".2rem",
        focus: "center",
      },
      480: {
        perPage: 1,
        focus: "center",
      },
    },
  }).mount();
});
//splide_slider
$(document).ready(function () {
  //review
  new Splide("#splide_slider", {
    type: "fade",
    rewind: true,
    // arrows: (boolean = false),
  }).mount();
});
// lightbox
lightbox.option({
  resizeDuration: 200,
  wrapAround: true,
});

// post slider
$(document).ready(function ($) {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
});

///jquery drilled navbarmenu mibile
$(document).ready(function () {
  $(".mobile_menu").simpleMobileMenu({
    menuStyle: "slide",
  });
});

$(".sub-menu").attr("class", "submenu");
