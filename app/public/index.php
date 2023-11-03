<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oui caffee</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <main>
      <header><?php include 'php/header.php'; headerSection();?></header>
      <section><?php include 'php/whatsOnTheMenu.php'; wotm();?></section>
      <article class="menu"><?php include 'php/menu.php'; MenuSection();?></article>
      <section class="aboutUsSection"><?php include 'php/aboutUs.php'; aboutUs();?></section>
    </main>
    <footer class="copyrightText">&copy; Copyright 2023 - OUI</footer>
    <script> 
      window.addEventListener('scroll', function() {//JS to make navbar change color on scroll
        var navbar = document.querySelector('.headerNavBar'); //making a variable for the navigation bar
        var scrollPosition = window.scrollY;
        var scrollThreshold = 650; //at this height, navbar changes to blue-green

        if (scrollPosition > scrollThreshold) {
            navbar.style.backgroundColor = '#00657c'; //the color it changes to
        } else {
            navbar.style.backgroundColor = 'transparent'; //the default color
        }
      });
      window.addEventListener('scroll', function() {//JS to make navbar in the menu section disappear on scroll
        var menuCategories = document.querySelector('.menuCategories');
        var aboutUsSection = document.querySelector('.aboutUsSection'); //navbar will disappear when scroll reaches about us section
        var scrollPosition = window.scrollY;
        var sectionTop = aboutUsSection.offsetTop;

        if (scrollPosition > sectionTop) {
            menuCategories.style.display = 'none'; // Hide the menuCategories
        } else {
            menuCategories.style.display = 'flex'; // Show the menuCategories
        }
      });

      const hamburgerBtn = document.querySelector(".hamburgerBtn");
      const xBtn = document.querySelector(".xBtn");
      const headerBtns = document.querySelector(".headerBtn");
        
      hamburgerBtn.addEventListener("click", function() {
          hamburgerBtn.style.display = "none";
          xBtn.style.display = "flex";
          headerBtns.style.display = "flex";
      });
      
      xBtn.addEventListener("click", function() {
        xBtn.style.display = "none";
        headerBtns.style.display = "none";
        hamburgerBtn.style.display = "flex";
      });

      window.addEventListener("resize", function(){
        if(window.innerWidth > 800){        
          hamburgerBtn.style.display = "none";
          xBtn.style.display ="none";
          headerBtns.style.display = "flex";
        }else {
          hamburgerBtn.style.display = "flex";
          headerBtns.style.display = "none";
        }
      });
    </script>
  </body>
</html>
