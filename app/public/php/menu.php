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
<article class="menuView">
      <h2 class="menuTrendingTitile">trending orders</h2>
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
          <h4 class="menuTitle">coffee</h4>
          <div class="menuProducts">
            <p>Mocha</p>
            <p>4.00</p>
          </div>
          <div class="menuProducts">
            <p>Espresso</p>
            <p>1.32</p>
          </div>
          <div class="menuProducts">
            <p>Americano</p>
            <p>2.20</p>
          </div>
          <div class="menuProducts">
            <p>Flat White</p>
            <p>4.20</p>
          </div>
          <div class="menuProducts">
            <p>Cappucino</p>
            <p>3.20</p>
          </div>
          <div class="menuProducts">
            <p>Latte</p>
            <p>4.00</p>
          </div>
        </div>
        <div class="menuItems">
          <div class="menuSubitems">
            <h3>20% off</h3>
            <p>ALL COFFEE DRINKS</p>
          </div>
          <a href="#" class="menuBtn">MORE INFORMATION</a>
        </div>
        <div class="menuItems menuSpanColumnFull">
          <h4 class="menuTitle">tea</h4>
          <div class="menuProducts">
            <p>Black Tea</p>
            <p>1.32</p>
          </div>
          <div class="menuProducts">
            <p>Green Tea</p>
            <p>1.32</p>
          </div>
          <div class="menuProducts">
            <p>Herbal Tea</p>
            <p>2.20</p>
          </div>
          <div class="menuProducts">
            <p>Jasmine Tea</p>
            <p>2.30</p>
          </div>
          <div class="menuProducts">
            <p>Rooibos</p>
            <p>3.00</p>
          </div>
        </div>
        <div class="menuItems menuSpanRow2">
          <div class="menuSubitems">
            <h3>100%</h3>
            <p>HANDMADE PRODUCTS</p>
          </div>
          <a href="#" class="menuBtn">ABOUT US</a>
        </div>
        <div class="menuItems menuSpanColumn2">
          <h4 class="menuTitle">croissant (petite pain)</h4>
          <div class="menuProducts">
            <p>Natural/Plain</p>
            <p>1.30</p>
          </div>
          <div class="menuProducts">
            <p>Butter</p>
            <p>2.30</p>
          </div>
          <div class="menuProducts">
            <p>Herb butter</p>
            <p>2.80</p>
          </div>
          <div class="menuProducts">
            <p>Jam or Nutella</p>
            <p>3.30</p>
          </div>
          <div class="menuProducts">
            <p>Brie or Camembert</p>
            <p>4.50</p>
          </div>
          <div class="menuProducts">
            <p>Cheese with walnuts</p>
            <p>4.70</p>
          </div>
          <div class="menuProducts">
            <p>Smoked Salmon</p>
            <p>5.80</p>
          </div>
          <div class="menuProducts">
            <p>Cream Cheese</p>
            <p>4.80</p>
          </div>
          <div class="menuProducts">
            <p>Soft goat cheese</p>
            <p>4.80</p>
          </div>
        </div>
        <div class="menuItems menuSpanColumn2">
          <h4 class="menuTitle">sweets</h4>
          <div class="menuProducts">
            <p>Eclair</p>
            <p>1.30</p>
          </div>
          <div class="menuProducts">
            <p>Millefeuille</p>
            <p>2.30</p>
          </div>
          <div class="menuProducts">
            <p>Paris-brest</p>
            <p>2.80</p>
          </div>
          <div class="menuProducts">
            <p>Cream puffs</p>
            <p>3.30</p>
          </div>
          <div>
            <div class="menuProducts">
              <p>Macarons</p>
              <p>6.00</p>
            </div>
            <div>
              <p>Chocolate</p>
              <p>Strawberry and cream</p>
              <p>Vanilla</p>
              <p>Lemon curd</p>
              <p>Blueberry</p>
              <p>Cookies and cream</p>
            </div>
          </div>
        </div>
        <div class="menuItems menuSpanColumnFull">
          <h4 class="menuTitle">food</h4>
          <div class="menuProducts">
            <p>Tuna salad</p>
            <p>4.80</p>
          </div>
          <div class="menuProducts">
            <p>Egg salad</p>
            <p>4.80</p>
          </div>
          <div class="menuProducts">
            <p>Hummus</p>
            <p>4.60</p>
          </div>
          <div class="menuProducts">
            <p>French ragout</p>
            <p>4.70</p>
          </div>
        </div>
        <div class="menuItems menuSpanColumnFull">
          <h4 class="menuTitle">cool drinks</h4>
          <div class="menuProducts">
            <p>Home-made lemonade</p>
            <p>3.00</p>
          </div>
          <div class="menuProducts">
            <p>Jus dorange</p>
            <p>3.30</p>
          </div>
          <div class="menuProducts">
            <p>Apple juice</p>
            <p>2.20</p>
          </div>
          <div class="menuProducts">
            <p>Ice tea</p>
            <p>2.32</p>
          </div>
          <div class="menuProducts">
            <p>Flat water</p>
            <p>2.00</p>
          </div>
          <div class="menuProducts">
            <p>Sparkling water</p>
            <p>2.50</p>
          </div>
        </div>
      </article>
    </article>
';
}

?>