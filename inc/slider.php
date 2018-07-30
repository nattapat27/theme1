<?php

    if ( ! function_exists( 'slider_template' ) ) :
        function slider_template(){
            $speed = get_theme_mod( 'slider_speed', 4000 );
            if( ! function_exists('pll_register_string')){
                $titles = array(
                    'slider_title_1' => get_theme_mod( 'slider_title_1', 'Welcome to Website' ),
                    'slider_title_2' => get_theme_mod( 'slider_title_2'),
                    'slider_title_3' => get_theme_mod( 'slider_title_3'),
                    'slider_title_4' => get_theme_mod( 'slider_title_4'),
                    'slider_title_5' => get_theme_mod( 'slider_title_5')
                );
                $subtitle = array(
                    'slider_subtitle_1' => get_theme_mod('slider_subtitle_1', 'Title for the first slide'),
                    'slider_subtitle_2' => get_theme_mod('slider_subtitle_2'),
                    'slider_subtitle_3' => get_theme_mod('slider_subtitle_3'),
                    'slider_subtitle_4' => get_theme_mod('slider_subtitle_4'),
                    'slider_subtitle_5' => get_theme_mod('slider_subtitle_5')
                );
            }
            else{
                $titles = array(
                    'slider_title_1' => pll__(get_theme_mod( 'slider_title_1', 'Welcome to Website' )),
                    'slider_title_2' => pll__(get_theme_mod( 'slider_title_2')),
                    'slider_title_3' => pll__(get_theme_mod( 'slider_title_3')),
                    'slider_title_4' => pll__(get_theme_mod( 'slider_title_4')),
                    'slider_title_5' => pll__(get_theme_mod( 'slider_title_5'))
                );
                $subtitle = array(
                    'slider_subtitle_1' => pll__(get_theme_mod('slider_subtitle_1', 'Title for the first slide')),
                    'slider_subtitle_2' => pll__(get_theme_mod('slider_subtitle_2')),
                    'slider_subtitle_3' => pll__(get_theme_mod('slider_subtitle_3')),
                    'slider_subtitle_4' => pll__(get_theme_mod('slider_subtitle_4')),
                    'slider_subtitle_5' => pll__(get_theme_mod('slider_subtitle_5'))
                );
            }
            $images = array(
                'slider_image_1' => get_theme_mod( 'slider_image_1', get_template_directory_uri() ),
                'slider_image_2' => get_theme_mod( 'slider_image_2'),
                'slider_image_3' => get_theme_mod( 'slider_image_3'),
                'slider_image_4' => get_theme_mod( 'slider_image_4'),
                'slider_image_5' => get_theme_mod( 'slider_image_5')
            );
            ?>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-speed="<?php echo esc_attr($speed); ?>">
                <ol class="carousel-indicators">
                    <?php $i=0; 
                    foreach($images as $image) {
                        if($image) { ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
                    <?php 
                        }
                        $i++;
                    } ?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php $i=0; foreach($images as $image) { 
                        if($image) { ?>
                            <div class="item <?php if($i==0){ ?>active<?php } ?>">
                                <img src="<?php echo $image ?>">
                            </div>
                    <?php  
                        }
                        $i++;
                    }  ?>
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
<?php   }
    endif;