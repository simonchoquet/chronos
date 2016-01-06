<?php
/**
 * Template Name: Programmation
 */
get_header();
get_sidebar();
?>

<h6>Programmation</h6>

<div class="row">
    <div class="col-md-12">
        <?php
        the_post();
        the_content();
        ?>
    </div>

</div>

<?php
get_footer();
?>
