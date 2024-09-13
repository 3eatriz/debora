// let phone = document.querySelector(".wpcf7-tel");

// if (phone) {
//   phone.addEventListener("input", function (e) {
//     var x = e.target.value.replace(/\D/g, "").match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
//     e.target.value = !x[2] ? x[1] : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
//   });
// }

// const buttonMenu = document.querySelector(".menuMobile");
// const mobileMenu = document.querySelector(".mobileMenu");
// const responsive = document.querySelector(".responsive");
// const overflowFix = document.querySelectorAll(".menu_space");
// const overflowFix2 = document.querySelector(".menu_space2");
// const x = document.querySelector(".close_menu");

// if (overflowFix) {
//   overflowFix[0].addEventListener("click", exitLink);
//   overflowFix[1].addEventListener("click", exitLink);
//   overflowFix[2].addEventListener("click", exitLink);
//   overflowFix[3].addEventListener("click", exitLink);
//   overflowFix[4].addEventListener("click", exitLink);
// }

// if (overflowFix2) {
//   overflowFix2.addEventListener("click", exitLink);
// }

// if (x) {
//   x.addEventListener("click", exitLink);
// }

// if (mobileMenu) {
//   mobileMenu.addEventListener("click", menuResponsive);
// }

// let menu = false;

// function exitLink() {
//   responsive.style.display = "none";
//   document.body.style.overflow = "auto";
//   menu = !menu;
// }

// function menuResponsive() {
//   menu = !menu;

//   if (menu) {
//     responsive.style.display = "block";
//     document.body.style.overflow = "hidden";
//   } else {
//     responsive.style.display = "none";
//     document.body.style.overflow = "auto";
//   }
// }
