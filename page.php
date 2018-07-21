<?php 
    get_header();
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php if(is_front_page()){ 
            include( get_home_template() );
            get_home_template();
        } 
        the_content();?>
    <?php    endwhile;
    else :
        echo '<p>No content found</p>';
    endif;    
    get_footer();
?>