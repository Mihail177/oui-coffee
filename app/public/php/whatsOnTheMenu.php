<?php
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
                        <img src="imgs/photos/whatsOnTheMenu/frenchRagout.png" alt="food">
                    </div>
                    <div class="wotmFood">
                        <p>Pain croissant</p>
                        <img src="imgs/photos/whatsOnTheMenu/croissant.png" alt="croissant">
                    </div>
                    <div class="wotmFood">
                        <p>Coffee</p>
                        <img class="wotmCoffee" src="imgs/photos/whatsOnTheMenu/coffee.png" alt="coffee">
                    </div>
                        <div class="wotmFood">
                            <p>Tea</p>
                            <img src="imgs/photos/whatsOnTheMenu/tea.png" alt="tea">
                        </div>
                        <div class="wotmFood">
                            <p>Sweets</p>
                            <img src="imgs/photos/whatsOnTheMenu/meringue.png" alt="meringue">
                        </div>
                        <div class="wotmFood">
                            <p>Cool drinks</p>
                            <img src="imgs/photos/whatsOnTheMenu/lemonade.png" alt="lemonade">
                        </div>
                </section>
                <a href="" class="wotmButton">Le Menu</a>
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
?>