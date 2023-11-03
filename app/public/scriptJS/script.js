const hamburgerBtn = document.querySelector(".hamburgerBtn");
const xBtn = document.querySelector(".xBtn");
const headerBtn = document.querySelector(".headerBtn");
const leMenuBtn = document.querySelector(".leMenuBtn");
const aboutUsBtn = document.querySelector(".aboutUsBtn");
const contactUsBtn = document.querySelector(".contactUsBtn");

function ClosingTheNavBar() {
  if (window.innerWidth <= 800) {
    xBtn.style.display = "none";
    headerBtn.style.display = "none";
    hamburgerBtn.style.display = "flex";
  }
}

function OpenTheNavBar() {
  hamburgerBtn.style.display = "none";
  xBtn.style.display = "flex";
  headerBtn.style.display = "flex";
}

hamburgerBtn.addEventListener("click", OpenTheNavBar);
xBtn.addEventListener("click", ClosingTheNavBar);
leMenuBtn.addEventListener("click", ClosingTheNavBar);
aboutUsBtn.addEventListener("click", ClosingTheNavBar);
contactUsBtn.addEventListener("click", ClosingTheNavBar);

window.addEventListener("resize", function () {
  if (window.innerWidth > 800) {
    hamburgerBtn.style.display = "none";
    xBtn.style.display = "none";
    headerBtn.style.display = "flex";
  } else {
    hamburgerBtn.style.display = "flex";
    headerBtn.style.display = "none";
  }
});

window.addEventListener("scroll", function () {
  //JS to make navbar change color on scroll
  var navbar = document.querySelector(".headerNavBar"); //making a variable for the navigation bar
  var scrollPosition = window.scrollY;
  var scrollThreshold = 650; //at this height, navbar changes to blue-green

  if (scrollPosition > scrollThreshold) {
    navbar.style.backgroundColor = "#00657c"; //the color it changes to
  } else {
    navbar.style.backgroundColor = "transparent"; //the default color
  }
});
window.addEventListener("scroll", function () {
  //JS to make navbar in the menu section disappear on scroll
  var menuCategories = document.querySelector(".menuCategories");
  var aboutUsSection = document.querySelector(".aboutUsSection"); //navbar will disappear when scroll reaches about us section
  var scrollPosition = window.scrollY;
  var sectionTop = aboutUsSection.offsetTop;

  if (scrollPosition > sectionTop) {
    menuCategories.style.display = "none"; // Hide the menuCategories
  } else {
    menuCategories.style.display = "flex"; // Show the menuCategories
  }
});
