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
        //Image 2
        $wp_customize->add_setting('options[info]', array(
                'type'              => 'info_control',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'esc_attr',            
            )
        );
        $wp_customize->add_control( new Sydney_Info( $wp_customize, 's2', array(
            'label' => 'First slide',
            'section' => 'slider',
            'settings' => 'options[info]',
            'priority' => 14
            ) )
        );    
        $wp_customize->add_setting(
            'slider_image_2',
            array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'slider_image_2',
                array(
                'label'          => 'Upload your first image for the slider',
                'type'           => 'image',
                'section'        => 'slider',
                'settings'       => 'slider_image_2',
                'priority'       => 15,
                )
            )
        );
        //Title
        $wp_customize->add_setting(
            'slider_title_2',
            array(
                'default' => 'Welcome to Sydney',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_title_2',
            array(
                'label' => 'Title for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 16
            )
        );
        //Subtitle
        $wp_customize->add_setting(
            'slider_subtitle_2',
            array(
                'default' => 'Feel free to look around',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_subtitle_2',
            array(
                'label' => 'Subtitle for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 17
            )
        );           
        //Image 3
        $wp_customize->add_setting('options[info]', array(
                'type'              => 'info_control',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'esc_attr',            
            )
        );
        $wp_customize->add_control( new Sydney_Info( $wp_customize, 's3', array(
            'label' => 'First slide',
            'section' => 'slider',
            'settings' => 'options[info]',
            'priority' => 18
            ) )
        );    
        $wp_customize->add_setting(
            'slider_image_3',
            array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'slider_image_3',
                array(
                'label'          => 'Upload your first image for the slider',
                'type'           => 'image',
                'section'        => 'slider',
                'settings'       => 'slider_image_3',
                'priority'       => 19,
                )
            )
        );
        //Title
        $wp_customize->add_setting(
            'slider_title_3',
            array(
                'default' => 'Welcome to Sydney',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_title_3',
            array(
                'label' => 'Title for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 20
            )
        );
        //Subtitle
        $wp_customize->add_setting(
            'slider_subtitle_3',
            array(
                'default' => 'Feel free to look around',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_subtitle_3',
            array(
                'label' => 'Subtitle for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 21
            )
        );
        //image 4
        $wp_customize->add_setting('options[info]', array(
                'type'              => 'info_control',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'esc_attr',            
            )
        );
        $wp_customize->add_control( new Sydney_Info( $wp_customize, 's4', array(
            'label' => 'First slide',
            'section' => 'slider',
            'settings' => 'options[info]',
            'priority' => 22
            ) )
        );    
        $wp_customize->add_setting(
            'slider_image_4',
            array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'slider_image_4',
                array(
                'label'          => 'Upload your first image for the slider',
                'type'           => 'image',
                'section'        => 'slider',
                'settings'       => 'slider_image_4',
                'priority'       => 23,
                )
            )
        );
        //Title
        $wp_customize->add_setting(
            'slider_title_4',
            array(
                'default' => 'Welcome to Sydney',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_title_4',
            array(
                'label' => 'Title for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 24
            )
        );
        //Subtitle
        $wp_customize->add_setting(
            'slider_subtitle_4',
            array(
                'default' => 'Feel free to look around',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_subtitle_4',
            array(
                'label' => 'Subtitle for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 25
            )
        );
        //Image 5
        $wp_customize->add_setting('options[info]', array(
                'type'              => 'info_control',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'esc_attr',            
            )
        );
        $wp_customize->add_control( new Sydney_Info( $wp_customize, 's5', array(
            'label' => 'First slide',
            'section' => 'slider',
            'settings' => 'options[info]',
            'priority' => 26
            ) )
        );    
        $wp_customize->add_setting(
            'slider_image_5',
            array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'slider_image_5',
                array(
                'label'          => 'Upload your first image for the slider',
                'type'           => 'image',
                'section'        => 'slider',
                'settings'       => 'slider_image_5',
                'priority'       => 27,
                )
            )
        );
        //Title
        $wp_customize->add_setting(
            'slider_title_5',
            array(
                'default' => 'Welcome to Sydney',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_title_5',
            array(
                'label' => 'Title for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 28
            )
        );
        //Subtitle
        $wp_customize->add_setting(
            'slider_subtitle_5',
            array(
                'default' => 'Feel free to look around',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'slider_subtitle_5',
            array(
                'label' => 'Subtitle for the first slide',
                'section' => 'slider',
                'type' => 'text',
                'priority' => 29
            )
        );
        // banner
        $wp_customize->add_section(
            'banner',
            array(
                'title'         => 'Header Banner',
                'description'   => '',
                'priority'      => 30,
                'panel'         => 'header_panel',
            )
        );
        $wp_customize->add_setting(
            'bannerStyle',
            array(
                'default' => 'right',
                'sanitize_callback' => 'sanitize_layout',
            )
        );
        $wp_customize->add_control(
            'bannerStyle',
            array(
                'label' => 'logo place',
                'section' => 'banner',
                'type' => 'select',
                'description'   => '',  
                'choices' => array(
                    'right'   => 'Right',
                    'right_with_contents'   => 'Right With Contents',
                    'center' => 'Center'
                ),     
                'priority' => 7
            )
        );
        $wp_customize->add_setting(
            'banner_logo_image',
            array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'banner_logo_image',
                array(
                'label'          => 'Upload your image for the logo',
                'type'           => 'image',
                'section'        => 'banner',
                'settings'       => 'banner_logo_image',
                'priority'       => 8,
                )
            )
        );
        $wp_customize->add_setting(
            'banner_contects',
            array(
                'default' => 'Contact tel. 06-66614-233',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'banner_contects',
            array(
                'label' => 'contents in banner',
                'section' => 'banner',
                'type' => 'text',
                'priority' => 9
            )
        );

        $wp_customize->add_panel( 'footer', array(
            'priority'       => 40,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => 'Footer area',
        ) );
        
        $wp_customize->add_section(
            'content_1',
            array(
                'title'         => 'Content 1',
                'description'   => '',
                'priority'      => 41,
                'panel'         => 'footer',
            )
        );
        $wp_customize->add_setting(
            'name_content_1',
            array(
                'default' => 'My blog',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'name_content_1',
            array(
                'label' => 'name content',
                'section' => 'content_1',
                'type' => 'text',
                'priority' => 42
            )
        );
        $wp_customize->add_setting(
            'content_1_1',
            array(
                'default' => 'Content 1',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'content_1_1',
            array(
                'label' => 'content 1',
                'section' => 'content_1',
                'type' => 'text',
                'priority' => 43
            )
        );
        $wp_customize->add_setting(
            'content_1_2',
            array(
                'default' => 'Content 2',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'content_1_2',
            array(
                'label' => 'content 2',
                'section' => 'content_1',
                'type' => 'text',
                'priority' => 44
            )
        );
        $wp_customize->add_setting(
            'content_1_3',
            array(
                'default' => 'Content 3',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'content_1_3',
            array(
                'label' => 'content 3',
                'section' => 'content_1',
                'type' => 'text',
                'priority' => 45
            )
        );

        $wp_customize->add_section(
            'content_2',
            array(
                'title'         => 'Content 2',
                'description'   => '',
                'priority'      => 44,
                'panel'         => 'footer',
            )
        );
        $wp_customize->add_setting(
            'name_content_2',
            array(
                'default' => 'Contents 2',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'name_content_2',
            array(
                'label' => 'name content',
                'section' => 'content_2',
                'type' => 'text',
                'priority' => 45
            )
        );
        $wp_customize->add_setting(
            'content_2_1',
            array(
                'default' => 'Content 2',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'content_2_1',
            array(
                'label' => 'content 1',
                'section' => 'content_2',
                'type' => 'text',
                'priority' => 46
            )
        );
        $wp_customize->add_setting(
            'content_2_2',
            array(
                'default' => 'Content 2',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'content_2_2',
            array(
                'label' => 'content 2',
                'section' => 'content_2',
                'type' => 'text',
                'priority' => 47
            )
        );$wp_customize->add_setting(
            'content_2_3',
            array(
                'default' => 'Content 2',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'content_2_3',
            array(
                'label' => 'content 3',
                'section' => 'content_2',
                'type' => 'text',
                'priority' => 48
            )
        );


        $wp_customize->add_section(
            'content_3',
            array(
                'title'         => 'Content 3',
                'description'   => '',
                'priority'      => 47,
                'panel'         => 'footer',
            )
        );
        $wp_customize->add_setting(
            'name_content_3',
            array(
                'default' => 'Contents 3',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'name_content_3',
            array(
                'label' => 'name content',
                'section' => 'content_3',
                'type' => 'text',
                'priority' => 48
            )
        );
        $wp_customize->add_setting(
            'content_3_1',
            array(
                'default' => 'Content 1',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'content_3_1',
            array(
                'label' => 'content 1',
                'section' => 'content_3',
                'type' => 'text',
                'priority' => 49
            )
        );
        $wp_customize->add_setting(
            'content_3_2',
            array(
                'default' => 'Content 2',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'content_3_2',
            array(
                'label' => 'content 2',
                'section' => 'content_3',
                'type' => 'text',
                'priority' => 50
            )
        );
        $wp_customize->add_setting(
            'content_3_3',
            array(
                'default' => 'Content 3',
                'sanitize_callback' => 'sydney_sanitize_text',
            )
        );
        $wp_customize->add_control(
            'content_3_3',
            array(
                'label' => 'content 3',
                'section' => 'content_3',
                'type' => 'text',
                'priority' => 51
            )
        );
    }

    add_action( 'customize_register', 'custom_config' );

    function sanitize_layout( $input ) {
        $valid = array(
            'right'   => 'Right',
            'right_with_contents'   => 'Right With Contents',
            'center' => 'Center'
        );
     
        if ( array_key_exists( $input, $valid ) ) {
            return $input;
        } else {
            return '';
        }
    }
    
    function sydney_sanitize_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }