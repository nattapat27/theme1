<?php
    get_header();
    if(is_front_page()){
        slider_template();
        $args = array(
            'post_status' => array('publish')
        );
        $query = new WP_Query($args);
        $i=0;
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
                echo get_the_title($i).'<br>';
                echo get_post_field('post_content', $i).'<br>';
                $i++;
            }
        }
        else{
            echo '<p>No Contents</p>';
        }
    }
    else{

    }
    get_footer();