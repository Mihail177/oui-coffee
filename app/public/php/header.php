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
         <div class="headerBtn">
           <a href="#" class="headerBtns">Le menu</a>
           <a href="#" class="headerBtns">About Us</a>
           <a href="#" class="headerBtns">Contact Us</a>
         </div>
       </nav>
 
       <div class="headerText">
         <h1 class="headerTitle">welcome</h1>
         <p class="headerSubtitle">
           bienvenue! its <span>coffee</span> oclock...
         </p>
       </div>
     </header>
        ';
}
?>