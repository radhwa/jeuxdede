<?php
    /*
    Template Name: contentdesign
    Template Post Type: post, page, product
    */

        while ( have_posts() ) : the_post();
        get_template_part( 'content' );
        endwhile;

?>