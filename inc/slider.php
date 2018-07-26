<?php

    if ( ! function_exists( 'slider_template' ) ) :
        function slider_template(){
            $speed = get_theme_mod( 'slider_speed', 4000 );
            if( ! function_exists('pll_register_string')){
                $titles = array(
                    'slider_title_1' => get_theme_mod( 'slider_title_1', 'Welcome to Website' )
                );
                $subtitle = array(
                    'slider_subtitle_1' => get_theme_mod('slider_subtitle_1', 'Title for the first slide')
                );
            }
            else{
                $titles = array(
                    'slider_title_1' => pll__(get_theme_mod( 'slider_title_1', 'Welcome to Website' ))
                );
                $subtitle = array(
                    'slider_subtitle_1' => pll__(get_theme_mod('slider_subtitle_1', 'Title for the first slide'))
                );
            }
            $images = array(
                'slider_image_1' => get_theme_mod( 'slider_image_1', get_template_directory_uri() )
            );
            ?>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for($i=0;$i<count($images);$i++){?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
                    <?php }?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php $i=0; foreach($images as $image){?>
                        <div class="item <?php if($i==0){ ?>active<?php } ?>">
                            <img src="<?php echo $image ?>">
                        </div>
                    <?php } $i++; ?>
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