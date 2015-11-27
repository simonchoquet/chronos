<?php

get_header();
get_sidebar();

?>
<div>
<?php

if (!have_posts()) {
    echo '<p>pas d\'articles</p>';
} else {
    while(have_posts()){
        the_post();
        the_title();
        echo '<br>';
        the_content();
    }
}


?>
</div>
<?php

get_footer();