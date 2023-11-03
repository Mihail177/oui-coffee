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
    </script>
  </body>
</html>
