<?php

/** Color Switcher */ 
add_action( 'customize_register', function ( $wp_customize){
 
    // Add Settings 
    $wp_customize->add_setting( 'theme_main_color', array(
        'default' => '#fe7200',
        'sanitize_callback' => 'sanitize_hex_color',
    )); 
 
    // Add Controls
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_main_color', array(
        'label' => __('Theme Main Color', 'theme_main_color' ),
        'section' => 'colors',
        'settings' => 'theme_main_color'
 
    )));
} );



/**Adding colors to headers */ 
add_action( 'wp_head', function (){
    $themeColor = get_theme_mod('theme_main_color');
 
    if(!empty($themeColor)):
     
    ?>
    <style type="text/css" id="heigh10-custom-colors">
        :root{--main:<?php echo $themeColor; ?>}
    </style>    
    <?php
    endif;    
} );


// Custom Options

add_action('customize_register', function ($wp_customize)
{
   
    $wp_customize->add_section('custom_option', array(
        'title' => __('Custom Options', 'custom_option'),
        'priority' => 30 //the lowest the number the highest the input field will get preference
    ));

    /** Call us number */
     // Save settings to database
     $wp_customize->add_setting('call_us', array(
        'default' => '+1 698 987 7896',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'call_us',
            array(
                'label'          => __( 'Call Us', 'call_us' ),
                'section'        => 'custom_option',
                'settings'       => 'call_us',
                'type'           => 'text'
            )
        )
    );

     // Save settings to database
     $wp_customize->add_setting('mail_us', array(
        'default' => 'support@heigh10.com',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mail_us',
            array(
                'label'          => __( 'Mail Us', 'mail_us' ),
                'section'        => 'custom_option',
                'settings'       => 'mail_us',
                'type'           => 'email'
            )
        )
    );

    /** Social Links */
    // $arr = ['facebook','instagram','linkedin','twitter'];

  // Save settings to database
  $wp_customize->add_setting('social_links_ln', array(
    'default' => '',
    'transport' => 'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'linkedin',
        array(
            'label'          => __('linkedin', 'linkedin' ),
            'section'        => 'custom_option',
            'settings'       => 'social_links_ln',
            'type'           => 'url'
        )
    )
);

  // Save settings to database
  $wp_customize->add_setting('social_links_fb', array(
    'default' => '',
    'transport' => 'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'facebook',
        array(
            'label'          => __('facebook', 'facebook' ),
            'section'        => 'custom_option',
            'settings'       => 'social_links_fb',
            'type'           => 'url'
        )
    )
);

  // Save settings to database
  $wp_customize->add_setting('social_links_ig', array(
    'default' => '',
    'transport' => 'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'instagram',
        array(
            'label'          => __('instagram', 'instagram' ),
            'section'        => 'custom_option',
            'settings'       => 'social_links_ig',
            'type'           => 'url'
        )
    )
);

/** Footer Background Image*/
     // Add Settings 
    //  $wp_customize->add_setting( 'footer_image'); 
 
    // Add Controls
    // $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_image', array(
    //     'label' => __('Footer Background Image', 'footer_image' ),
    //     'section' => 'custom_option',
    //     'settings' => 'footer_image',
    // )));
/** Apply Now Link for Jobs */
    $wp_customize->add_setting('apply_now', array(
        'default' => '',
        'transport' => 'refresh'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'apply_now',
            array(
                'label'          => __('Apply Now Link', 'apply_now' ),
                'section'        => 'custom_option',
                'settings'       => 'apply_now',
                'type'           => 'url'
            )
        )
    );

});

