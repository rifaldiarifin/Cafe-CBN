const mainNav = document.querySelector(".main-nav");
const secondNav = document.querySelector(".second-nav");
const mainNav1 = mainNav.querySelectorAll(".nav-menu .nav-list");

mainNav1[0].addEventListener("click", function () {
    secondNav.setAttribute("style", "height: 460px");
});

mainNav1[1].addEventListener("click", function () {
    secondNav.setAttribute("style", "height: 190px");
});

mainNav1[2].addEventListener("click", function () {
    secondNav.setAttribute("style", "height: 370px");
});