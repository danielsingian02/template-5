<?php
/**
 * template_5 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package template_5
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
function template_5_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on template_5, use a find and replace
		* to change 'template_5' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'template_5', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'template_5' ),
		)
	);

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
			'template_5_custom_background_args',
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
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'template_5_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function template_5_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'template_5_content_width', 640 );
}
add_action( 'after_setup_theme', 'template_5_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function template_5_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'template_5' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'template_5' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'template_5_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function template_5_scripts() {
	wp_enqueue_style( 'template_5-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'template_5-style', 'rtl', 'replace' );

	wp_enqueue_script( 'template_5-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// Enqueuing Bootstrap CSS and Script
	wp_enqueue_style('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('bootstrap-5-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css', array(), _S_VERSION);
	wp_enqueue_script('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'template_5_scripts' );

function register_footer_settings() {
	if(function_exists('add_settings_field')){

		add_settings_section(
			"footer_settings", // id
			"Footer Settings", // title
			"footer_settings", // callback
			"general"
		);

		add_settings_field(
			"footer_text_content",
			"Footer Content",
			"footer_text_content",
			"general",
			"footer_settings",
			array(
				"footer_text_content",
			)
		);

		add_settings_field(
			"footer_copyright",
			"Footer Copyright",
			"footer_copyright",
			"general",
			"footer_settings",
			array(
				"footer_copyright",
			)
		);

		register_setting( "general", "footer_text_content", "esc_attr" );
		register_setting( "general", "footer_copyright", "esc_attr" );
	}

	// Setting Default Values for the settings
	set_field_setting_default_value("footer_text_content", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum nunc turpis arcu dui cursus habitasse elit tempus nisi.");
	set_field_setting_default_value("footer_copyright", "© Copyright 2021 HOA Management Name Here");
}
add_action('admin_init', 'register_footer_settings');

function footer_settings() {
	echo "<p>The area to change the content of the footer of your site</p>";
}

function footer_text_content( $args ){
	$option = get_option( $args[0] );

//	echo "<input
//			type='text'
//			size='50'
//			value='$option'
//			name='$args[0]'
//			placeholder='The Text content in your footer'>";



	echo wp_editor( $option,  'footer-text-content', array(
		"textarea_name" => $args[0],
	));
}

function footer_copyright( $args ){
	$option = get_option( $args[0] );
	echo "<input 
			type='text' 
			size='50' 
			value='$option'
			name='$args[0]'
			placeholder='The Copyright text in your footer'>";
}

/**
 * This function sets default values to the field settings
 *
 * @param $option_name
 * @param $value
 *
 * @return void
 */
function set_field_setting_default_value( $option_name, $value ){
	if ( ! get_option( $option_name ) ) {
		update_option( $option_name, $value );
	}
}

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

