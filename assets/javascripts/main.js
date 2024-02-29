let $ = jQuery.noConflict(); // insteadof using this line we can use jQuery instead of $

var humbergerMenu = document.querySelector(".hamburger");
var bars = document.querySelectorAll(".bar");
var nav = document.querySelector(".navbar");
humbergerMenu.addEventListener("click", showMenu);
function showMenu() {
  var menuInMobile = document.querySelector(".menubardiv");
  var bar1 = document.querySelector(".bar-1");
  var bar2 = document.querySelector(".bar-2");
  var bar3 = document.querySelector(".bar-3");
  bar1.classList.toggle("bar1");
  bar2.classList.toggle("bar2");
  bar3.classList.toggle("bar3");
  menuInMobile.classList.toggle("menushow");
  nav.classList.toggle("b-color");
}

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
  var splide = new Splide(".splide", {
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

// lightbox
lightbox.option({
  resizeDuration: 200,
  wrapAround: true,
});
