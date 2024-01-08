// Toogle class active
const navbarNav = document.querySelector(".navbar-content");
// ketika menu diklik
document.querySelector("#Hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik diluar navbar
const hamburger = document.querySelector("#Hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
