<?php
    if(!function_exists('banner_template')) {
        function banner_template (){
            $type = get_theme_mod('bannerStyle', 'right');
            $imageLogo = get_theme_mod('banner_logo_image');
            if(!function_exists('pll_register_string')){
                $content_banner = get_theme_mod('banner_contects', 'Contact tel. 06-66614-233');
            }
            else{
                $content_banner = pll__(get_theme_mod('banner_contects', 'Contact tel. 06-66614-233'));
            }
            if(strcmp($type, 'center')==0){
?>        

                <!-- Logo Center -->
                <div class="row banner text-center">
                    <div class="col-sm-12">
                        <img class="logo" src="<?php echo $imageLogo?>" />
                    </div>
                </div>
<?php
            }
            else {
?>
                <!-- Logo Right -->
                <div class="row banner">
                    <div class="col-sm-12 col-md-8 contact-info align-self-center">
<?php               if(strcmp($type, 'right_with_contents')==0) { 
                        echo $content_banner;
                    } ?>
                    </div>
                    <div class="col-sm-12 col-md-4 logo-container-right align-self-center">
                        <img class="logo" src="<?php echo $imageLogo?>" />
                    </div>
                </div>
<?php
            }
        }
    }