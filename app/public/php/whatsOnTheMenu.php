<?php
    function wotm (){
    echo '
        <div class="wotmBanner">
            <p>Special Opening Event: 20% Lucky IOU Gift Cards</p>
            <a class="wotmButton" href="event.html">MORE INFORMATION</a>
        </div>
        <div class="wotm">
            <div class="wotmWrapper">
                <h1 class="wotmH1">What&rsquo;s on the menu?</h1>
                <section class="wotmSection">
                    <div class="wotmFood">
                        <p>Food</p>
                        <a href="#food"><img src="imgs/photos/whatsOnTheMenu/frenchRagout.png" alt="food"></a>
                    </div>
                    <div class="wotmFood">
                        <p>Pain croissant</p>
                        <a href="#bread"><img src="imgs/photos/whatsOnTheMenu/croissant.png" alt="croissant"></a>
                    </div>
                    <div class="wotmFood">
                        <p>Coffee</p>
                        <a href="#coffee"><img class="wotmCoffee" src="imgs/photos/whatsOnTheMenu/coffee.png" alt="coffee"></a>
                    </div>
                    <div class="wotmFood">
                        <p>Tea</p>
                        <a href="#tea"><img src="imgs/photos/whatsOnTheMenu/tea.png" alt="tea"></a>
                    </div>
                    <div class="wotmFood">
                        <p>Sweets</p>
                        <a href="#sweets"><img src="imgs/photos/whatsOnTheMenu/meringue.png" alt="meringue"></a>
                    </div>
                    <div class="wotmFood">
                        <p>Cool drinks</p>
                        <a href="#drinks"><img src="imgs/photos/whatsOnTheMenu/lemonade.png" alt="lemonade"></a>
                    </div>
                </section>
                <a href="teaser.html" class="wotmBack"><img src="imgs/left-arrow.png" alt="arrow"></a>
                <a href="#menu" class="wotmButton">Le Menu</a>
                <div class="wotmBackground">';?>
                <?php
                    for ($i=0; $i<=3; $i++) {
                        echo '<img src="imgs/illustrations/merengue/illustrations_blue green_merengue.svg" alt="merengue">';
                    }
                    for($i=0; $i<=4; $i++){
                        echo '<div></div>';
                    }
                    for($i=0; $i<=30; $i++){
                        echo '<img src="imgs/illustrations/merengue/illustrations_blue green_merengue.svg" alt="merengue">';
                    }
                ?><?php '
            </div>
        </div>
    ';
    }
?>