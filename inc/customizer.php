<?php
    function custom_config($wp_customize){
        class Sydney_Info extends WP_Customize_Control {
            public $type = 'info';
            public $label = '';
            public function render_content() {
            ?>
                <h3 style="margin-top:30px;border:1px solid;padding:5px;color:#58719E;text-transform:uppercase;"><?php echo esc_html( $this->label ); ?></h3>
            <?php
            }
        }
        $wp_customize->add_panel( 'header_panel', array(
            'priority'       => 10,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => 'Header area',
        ) );
        $wp_customize->add_section(
            'slider',
            array(
                'title'         => 'Header Slider',
                'description'   => 'You can add up to 5 images in the slider. Make sure you select where to display your slider from the Header Type section found above. You can also add a Call to action button (scroll down to find the options)',
                'priority'      => 11,
                'panel'         => 'header_panel',
            )
        );
        //Mobile slider
        $wp_customize->add_setting(
            'mobile_slider',
            array(
                'default'           => 'responsive',
                'sanitize_callback' => 'sydney_sanitize_mslider',
            )
        );
        $wp_customize->add_control(
            'mobile_slider',
            array(
                'type'        => 'radio',
                'label'       => 'Slider mobile behavior',
                'section'     => 'slider',
                'priority'    => 99,
                'choices' => array(
                    'fullscreen'    => 'Full screen',
                    'responsive'    => 'Responsive',
                ),
            )
        );    
        //Speed
        $wp_customize->add_setting(
            'slider_speed',
            array(
                'default' => '4000',
                'sanitize_callback' => 'absint',
            )
        );
        $wp_customize->add_control(
            'slider_speed',
            array(
                'label' => 'Slider speed',
                'section' => 'slider',
                'type' => 'number',
                'description'   => 'Slider speed in miliseconds. Use 0 to disable [default: 4000]',       
                'priority' => 7
            )
        );
        $wp_customize->add_setting(
            'textslider_slide',
            array(
                'sanitize_callback' => 'sydney_sanitize_checkbox',
            )       
        );
        $wp_customize->add_control(
            'textslider_slide',
            array(
                'type'      => 'checkbox',
                'label'     => 'Stop the text slider?',
                'section'   => 'slider',
                'priority'  => 9,
            )
        );
        //Image 1
        $wp_customize->add_setting('options[info]', array(
                'type'              => 'info_control',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'esc_attr',            
            )
        );
        $wp_customize->add_control( new Sydney_Info( $wp_customize, 's1', array(
            'label' => 'First slide',
            'section' => 'slider',
            'settings' => 'options[info]',
            'priority' => 10
            ) )
        );    
        $wp_customize->add_setting(
            'slider_image_1',
            array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'slider_image_1',
                array(
                   'label'          => 'Upload your first image for the slider',
                   'type'           => 'image',
                   'section'        => 'slider',
                   'settings'       => 'slider_image_1',
                   'priority'       => 11,
                )
            )
        );
        //Title
        $wp_customize->add_setting(
            'slider_title_1',
            array(
                'default' => 'Welcome to Sydney',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_title_1',
            array(
                'label' => 'Title for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 12
            )
        );
        //Subtitle
        $wp_customize->add_setting(
            'slider_subtitle_1',
            array(
                'default' => 'Feel free to look around',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_subtitle_1',
            array(
                'label' => 'Subtitle for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 13
            )
        );           

    }

    add_action( 'customize_register', 'custom_config' );