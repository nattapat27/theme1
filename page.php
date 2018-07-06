<?php 
    get_header();
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php if(is_front_page()){ ?>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <?php 
                    $slide = array(
                        post_type => 'Slider',
                        
                    );
                ?>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    
                    <!-- <div class="item active">
                    <img src="la.jpg" alt="Los Angeles">
                    </div>

                    <div class="item">
                    <img src="chicago.jpg" alt="Chicago">
                    </div>

                    <div class="item">
                    <img src="ny.jpg" alt="New York">
                    </div> -->
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        
        <?php }?>
        <?php the_content();?>
    <?php    endwhile;
    else :
        echo '<p>No content found</p>';
    endif;    
    get_footer();
?>