<?php
function headerSection(){
       echo '
       <header class="headerMain">
       <div>
         <img
           src="imgs\down-chevron-svgrepo-com.svg"
           alt="corner"
           class="headerCorner headerCornerTL"
         />
         <img
           src="imgs\down-chevron-svgrepo-com.svg"
           alt="corner"
           class="headerCorner headerCornerTR"
         />
         <img
           src="imgs\down-chevron-svgrepo-com.svg"
           alt="corner"
           class="headerCorner headerCornerBL"
         />
         <img
           src="imgs\down-chevron-svgrepo-com.svg"
           alt="corner"
           class="headerCorner headerCornerBR"
         />
       </div>
       <nav class="headerNavBar">
         <a href="">
           <img class="headerLogo" src="imgs/logos/Logos-02.svg" alt="logo" />
         </a>
         <ul class="headerBtn">
           <li class="listStyleNone"><a href="#" class="headerBtns">Le menu</a></li>
           <li class="listStyleNone"><a href="#" class="headerBtns">About Us</a></li>
           <li class="listStyleNone"><a href="#" class="headerBtns">Contact Us</a></li>
         </ul>
         <button class="hamburgerBtn">
         <img src="imgs/bars-solid.svg" alt="hamburger" class="hamburgerImg" />
         </button>
       </nav>
 
       <div class="headerText">
         <h1 class="headerTitle">welcome</h1>
         <p class="headerSubtitle">
           bienvenue! its <span>coffee</span> oclock...
         </p>
       </div>

       <div class="scrollBox">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" " stroke="currentColor" class="arrowDown">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
        </svg>
        <p class="scrollDownText">SCROLL DOWN</p>
       </div>
     </header>
        ';
}
?>