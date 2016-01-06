<?php
class Prog
{
    public function __construct()
    {
        add_shortcode('prog_artistes', array($this, 'prog_html'));
    }

    public function prog_html()
    {
        global $wpdb;

        $row = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}artiste");

        foreach($row as $var) {
            echo '<div class="col-md-3"><div class="box bouton big-b no-padding"><div class="bouton-light"></div>
                    <img src="' . $var->image_url . '" class="img-responsive">
                    <h5 class="text-left">'. $var->name .'</h5>';

            if($var->passage_day) {
                echo '<p class="text-left">Dimanche ';
            } else {
                echo '<p class="text-left">Samedi ';
            }

            if($var->scene){
                echo '| Scène B</p>';
            } else {
                echo '| Scène A</p>';
            }

            echo '<p class="text-left">'. date('H:i', $var->passage_time) .'</p>';

            echo '</div></div>';
        }
    }
}