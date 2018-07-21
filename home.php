<?php
    get_header();
    $slides = array();
    $args = array(
        'post_type' => 'slide',
        'post_per_page' => 1,
        'offset' => 1
    );
    $slideShow = new WP_Query( $args );                    
    if($slideShow->have_posts()){
        while($slideShow->have_posts()){
            $slideShow->the_post();
            if(has_post_thumbnail()){
                $temp = array();
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
                $thumb_url = $thumb_url_array[0];
                $temp['title'] = get_the_title();
                $temp['excerpt'] = get_the_excerpt();
                $temp['image'] = $thumb_url;
                $slides[] = $temp;
            }
        }
    }
    wp_reset_postdata();
    if(count($slides)>0){ ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    
            <ol class="carousel-indicators">
                <?php for($i=0;$i<count($slides);$i++) { ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
                <?php } ?>
            </ol>

            <div class="carousel-inner" role="listbox">
                <?php $i=0; foreach($slides as $slide) { 
                    extract($slide); 
                ?>
                <div class="item <?php if($i == 0) { ?>active<?php } ?>">
                    <img src="<?php echo $image ?>" alt="<?php echo esc_attr($title); ?>">
                </div>
                <?php $i++; } ?>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> 
    <?php }
    $pages = array();
    $s = array(
        'post_type' => 'slide',
        'post_per_page' => 5,
    );
    $pageShow = new WP_Query( $s );                    
    if($pageShow->have_posts()){
        while($pageShow->have_posts()){
            $pageShow->the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div><?php the_excerpt(); ?></div>
<?php   }
    }
    wp_reset_postdata();
    get_footer();
?>