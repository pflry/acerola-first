<?php
/**
 * Template Name: page home
 *
 * The template for displaying the home page. 
 * 
 * Display specific template to display home page
 * 
 * @package WordPress
 * @subpackage ACEROLA CARRIERE v3.0
 */

get_header('home'); ?>
<section id="content" role="main" class="main page-home page-full">
    
    <section id="homeCounters" class="home-counters">
        <div class="container">
            <div class="counter">
                <div class="counter-head">
                    <div id="counterCareer" class="counter--digit" data-number="291"></div>
                    <div class="counter--title">carrières<br>boostées</div>
                </div>
                <div class="counter-content">
                    <p>Un nouveau projet professionnel, la confiance retrouvée &hellip;</p>
                </div>
            </div>
            <div class="counter">
                <div class="counter-head">
                    <div id="counterCustomer" class="counter--digit" data-number="89"></div>
                    <div class="counter--title">clients<br>entreprise</div>
                </div>
                <div class="counter-content">
                    <p>Notre cocktail vitaminé : proximité, efficacité, optimisation du budget.</p>
                </div>
            </div>
            <div class="counter">
                <div class="counter-head">
                    <div id="counterContact" class="counter--digit" data-number="2388"></div>
                    <div class="counter--title">contacts<br>réseaux</div>
                </div>
                <div class="counter-content">
                    <p>&hellip; à partager avec vous !</p>
                </div>
            </div>
        </div>
    </section>



</section>
<?php get_footer(); ?>