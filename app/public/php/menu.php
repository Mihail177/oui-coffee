<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
</html>
<?php
function MenuSection(){
echo '
<h2 class="menuTrendingTitile">trending orders</h2>
    <article class="menuView">
      <article class="menuTrendingOrders">
        <section class="menuTrendingItems">
          <h6>👑Top of the day</h6>
          <p>Rooibos Tea</p>
          <hr />
          <p>3.00</p>
          <img src="ceai.png" alt="ceai" class="menuTrendingImgs" />
        </section>
        <section class="menuTrendingItems">
          <h6>👑Top of the week</h6>
          <p>French Ragout</p>
          <hr />
          <p>4.70</p>
          <img src="ceai.png" alt="ceai" class="menuTrendingImgs" />
        </section>
        <section class="menuTrendingItems">
          <h6>👑Top of the month</h6>
          <p>Tuna Salad</p>
          <hr />
          <p>4.80</p>
          <img src="ceai.png" alt="ceai" class="menuTrendingImgs" />
        </section>
        <section class="menuTrendingItems">
          <h6>👑Top of the day</h6>
          <p>Flat White</p>
          <hr />
          <p>4.20</p>
          <img src="ceai.png" alt="ceai" class="menuTrendingImgs" />
        </section>
        <section class="menuTrendingItems">
          <h6>👑Top of the week</h6>
          <p>Macarons</p>
          <hr />
          <p>6.00</p>
          <img src="ceai.png" alt="ceai" class="menuTrendingImgs" />
        </section>
        <section class="menuTrendingItems">
          <h6>👑Top of the month</h6>
          <p>Espresso</p>
          <hr />
          <p>1.32</p>
          <img src="ceai.png" alt="ceai" class="menuTrendingImgs" />
        </section>
      </article>
      <h2 class="menuTrendingTitile">Le Menu</h2>
      <article class="menuCategories">
        <a href="#" class="menuCategoriesNames">Coffee</a>
        <a href="#" class="menuCategoriesNames">Tea</a>
        <a href="#" class="menuCategoriesNames">Pain</a>
        <a href="#" class="menuCategoriesNames">Sweets</a>
        <a href="#" class="menuCategoriesNames">Food</a>
        <a href="#" class="menuCategoriesNames">Cool Drinks</a>
      </article>
      <article class="menuContainer">
        <div class="menuItems menuSpanColumn2">
          <h4>coffee</h4>
          <p></p>
        </div>
        <div class="menuItems">
          <div class="menuSubitems">
            <h3>20% off</h3>
            <p>ALL COFFEE DRINKS</p>
          </div>
          <a href="#" class="menuBtn">MORE INFORMATION</a>
        </div>
        <div class="menuItems menuSpanColumnFull">
          <h4>tea</h4>
        </div>
        <div class="menuItems menuSpanRow2">
          <div class="menuSubitems">
            <h3>100%</h3>
            <p>HANDMADE PRODUCTS</p>
          </div>
          <a href="#" class="menuBtn">ABOUT US</a>
        </div>
        <div class="menuItems menuSpanColumn2">
          <h4>croissant (petite pain)</h4>
        </div>
        <div class="menuItems menuSpanColumn2">
          <h4>sweets</h4>
        </div>
        <div class="menuItems menuSpanColumnFull">
          <h4>food</h4>
        </div>
        <div class="menuItems menuSpanColumnFull">
          <h4>cool drinks</h4>
        </div>
      </article>
    </article>

';
}

?>