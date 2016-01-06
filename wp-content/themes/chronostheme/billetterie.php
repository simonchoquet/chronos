<?php
/**
 * Template Name: Billetterie
 */
get_header();
get_sidebar();
?>

<h6>Billetterie</h6>

<div class="row">
    <div class="col-md-5 col-md-offset-1">
        <div class="col-md-12">
            <div class="box bouton big-b">
                <div class="bouton-light"></div>
                <h5>Vendredi</h5>
                <h4>Pass 1 jour</h4>
                <p>24/10/2016 à 21h45</p>
                <div class="prix">24€</div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box bouton big-b">
                <div class="bouton-light"></div>
                <h5>Samedi</h5>
                <h4>Pass 2 jours</h4>
                <p>25/10/2016 à 21h45</p>
                <div class="prix">24€</div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="box bouton big-b">
            <div class="bouton-light"></div>
            <h5>Vendredi<br>&<br>Samedi</h5>
            <h4>Pass 2 jours</h4>
            <p>24/10/2016 et 25/10/2016 à 21h45</p>
            <div class="prix">40€</div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
