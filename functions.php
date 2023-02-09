<?php
/**
 * Heigh10 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Heigh10
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function heigh10_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Heigh10, use a find and replace
		* to change 'heigh10' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'heigh10', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );


    /*Register Main Menu*/
register_nav_menus(array(
    'primary-menu'=>'Main menu'
) );

register_nav_menus(array(
    'footer-menu-1'=>'Footer Menu 1'
) );
register_nav_menus(array(
    'footer-menu-2'=>'Footer Menu 2'
) );
register_nav_menus(array(
    'privacy-policy'=>'Privacy Menu'
) );



/*Add Class to nav list*/
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}, 1, 3);



/*Add Attribute to menu ancher*/
add_filter('nav_menu_link_attributes', function ($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }

    if (isset($args->add_a_attr)) {
        $classes['data-w-id'] = $args->add_a_attr;
    }

    // $color = ['#FFA826','#68C0BC','#1C385E','#E74C5C','#4DA751'];

    // if (isset($args->add_a_color)) {
    //     $item->menu_order > sizeof($color) ? $item->menu_order = 1: '';
    //     $classes['data-color'] = $color[$item->menu_order-1];
    // }

    return $classes;
}, 1, 3);


function add_class_to_href( $classes, $item ) {
    if ( in_array('current_page_item', $item->classes) ) {
        $classes['class'] .= ' w--current';
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_href', 10, 2 );




// /* submenu */
// add_filter( 'nav_menu_submenu_css_class', function ( $classes) {
//     $classes[''] = 'dropdown-menu';
//     return $classes;
// } );


// add_filter( 'nav_menu_link_attributes', function ( $atts, $item ) {
//     if( !$item->has_children && $item->menu_item_parent > 0 ) {
//         $atts['class'] = 'dropdown-item';
//     }
//     return $atts;
// }, 10, 2 );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'heigh10_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support('custom-logo');


    /*Custom logo sticky*/
// add_action('customize_register', function ($wp_customize){
//     $wp_customize->add_setting('dark_logo');
// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dark_logo', array(
//     'label'    => __('Dark Logo', 'store-front'),
//     'section'  => 'title_tagline',
//     'settings' => 'dark_logo',
//     'priority'       => 4,
// )));

//     $wp_customize->add_setting('footer_logo');
// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
//     'label'    => __('Footer Logo', 'store-front'),
//     'section'  => 'title_tagline',
//     'settings' => 'footer_logo',
//     'priority'       => 4,
// )));
// });

}


add_action( 'after_setup_theme', 'heigh10_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function heigh10_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'heigh10_content_width', 640 );
}
add_action( 'after_setup_theme', 'heigh10_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function heigh10_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'heigh10' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'heigh10' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'heigh10_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function heigh10_scripts() {
	wp_enqueue_style( 'heigh10-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'heigh10-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'heigh10-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'heigh10_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Elementor Custom widgets.
 */
// require get_template_directory() . '/inc/elementor-custom-widgets.php';

/**
 * Custom theme Options.
 */
require get_template_directory() . '/inc/custom-options.php';



/* Widgets - sidebar:footer 1 */
register_sidebar([
    'name'=>'Footer Social',
    'id'=> 'footer-social',
    'before_widget' => '',
    'after_widget' => '',
]);

/** Excerpt Support */
add_post_type_support('page','excerpt');
add_post_type_support('post','excerpt');




