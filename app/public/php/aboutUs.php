<?php
 function aboutUs(){
    echo'
    <section class="aboutusSection">
    <div class="aboutusContent">
        <h4 id="aboutusTitle">About us</h4>
        <p id="aboutusText">We are a group of people who are very passionate about coffee and France. We love coffee, tea, biscuits, meringues, macarons, and many other pastries. We want to share our love for coffee with the world so we have brought teatime to you and everything has been made entirely by hand. From us to you. OUI.</p>
    </div>
</section>  

<section class="aboutus"> 
    <div class="aboutusLocation aboutusHoursAndLocation">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3972.9945580207723!2d6.890963164390024!3d52.79529540920947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTLCsDQ3JzQwLjAiTiA2wrA1MyczOS4zIkU!5e0!3m2!1sen!2snl!4v1698239686776!5m2!1sen!2snl" class="aboutusMap"></iframe>
        
        <div class="timesContact">
        <h3 class="aboutusFooterTitle">Available Days</h3>
            <div class="aboutusAvailability">
                    <ul class="availableDays"> 
                        <li class="listStyleNone">Monday:</li>
                        <li class="listStyleNone">Tuesday:</li>
                        <li class="listStyleNone">Wednesday:</li>
                        <li class="listStyleNone">Thursday:</li>
                        <li class="listStyleNone">Friday:</li>
                    </ul>
                    <ul class="availableTimes">
                        <li class="listStyleNone">10:00 - 14:00 </li>
                        <li class="listStyleNone">9:00 - 19:00 </li>
                        <li class="listStyleNone">9:00 - 19:00 </li>    
                        <li class="listStyleNone">12:00 - 17:00 </li>
                        <li class="listStyleNone">12:00 - 17:00 </li>
                    </ul>
            </div>
            </div>
        </div>
        <div class="aboutusLocation aboutusFooter">
            <img src="imgs/logos/Logos-02.svg" alt="logo" class="footerLogo">

            <div class="quickLinksBox">
                <h3 class="aboutusFooterTitle"> Quick Links </h3>
                <ul>
                    <li class="listStyleNone"><a href="#" class="quickLinksText aboutusFooterText">Home</a></li>
                    <li class="listStyleNone"><a href="#" class="quickLinksText aboutusFooterText">About Us</a></li>
                    <li class="listStyleNone"><a href="#" class="quickLinksText aboutusFooterText">Menu</a></li>
                    <li class="listStyleNone"><a href="#" class="quickLinksText aboutusFooterText">Events</a></li>
                    <li class="listStyleNone"><a href="#" class="quickLinksText aboutusFooterText">Location</a></li>
                </ul>
            </div>
            <p class="footerParagraph aboutusFooterText">We are a group of people who are very passionate about coffee and France. We love coffee, tea, biscuits, meringues, macarons, and many other pastries. We want to share our love for coffee with the world.</p>
            <ul class="contactUs">
            <li class="listStyleNone aboutusFooterText">Email: administrator@oui.com</li>
            <li class="listStyleNone aboutusFooterText">Phone: +3167541123444</li>
            </ul>    
        </div>
    </div>
</section>
    ';
};
    ?>