<?php
/**
 * Global Dignity functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Global_Dignity
 */

if ( ! function_exists( 'global_dignity_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function global_dignity_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Global Dignity, use a find and replace
		 * to change 'global-dignity' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'global-dignity', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Header Menu', 'global-dignity' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'global-dignity' ),
			'leadership-menu' => esc_html__( 'Leadership Menu', 'global-dignity' ),
			'resources-menu' => esc_html__( 'Resources Menu', 'global-dignity' ),
			'teaching-menu' => esc_html__( 'Teaching Menu', 'global-dignity' ),
			'country_selector' => esc_html__( 'Countries Menu', 'global-dignity' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'global_dignity_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'global_dignity_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function global_dignity_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'global_dignity_content_width', 640 );
}
add_action( 'after_setup_theme', 'global_dignity_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function global_dignity_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'global-dignity' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'global-dignity' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'global_dignity_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function global_dignity_scripts() {
	wp_enqueue_style( 'global-dignity-style', get_stylesheet_uri() );

// 	wp_enqueue_script( 'global-dignity-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'global-dignity-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'jquery-ui-accordion' );
		
	wp_enqueue_script( 'global-dignity-map', get_template_directory_uri() . '/js/map.js', array(), '20151215', true );
	
	wp_enqueue_script('greensock-tweenMax', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js', array(), '20151215', true);
	
	wp_enqueue_script('greensock-scrollTo', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/ScrollToPlugin.min.js', array(), '20151215', true);
	
	wp_enqueue_script('greensock-customEase', get_template_directory_uri() .  '/js/CustomEase.min.js', array(), '20151215', true);
	
	wp_enqueue_script('scroll-magic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js', array(), '20151215', true);
	
	wp_enqueue_script('scroll-magic-gsap', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), '20151215', true);
		
	wp_enqueue_script('scroll-magic-debug', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js', array(), '20151215', true);
	
	wp_enqueue_script( 'global-dignity-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true );

	
/*
	wp_enqueue_script('greensock-css', '//cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js', array(), '20151215', true);
	
	wp_enqueue_script('greensock-ease', '//cdnjs.cloudflare.com/ajax/libs/gsap/latest/easing/EasePack.min.js', array(), '20151215', true);

	wp_enqueue_script('greensock-bezier', '//cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/BezierPlugin.min.js', array(), '20151215', true);
	
*/
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'global_dignity_scripts' );

// Enqueue MyFonts Stylesheet
function myfonts_style_sheet() {
wp_enqueue_style( 'custom-styling', get_stylesheet_directory_uri() . '/MyFontsWebfontsKit.css' );
}
add_action('wp_enqueue_scripts', 'myfonts_style_sheet');

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

// ***** CUSTOM *****
// Custom Image Sizes
add_image_size( 'banner-normal-res', 1440, 600, true );
add_image_size( 'banner-high-res', 2880, 1200, true );


// Remove Top Admin Bar
add_filter('show_admin_bar', '__return_false');

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

// Add ACF Options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}

// YouTube Embed Customizing
function wp_enqueue_scripts__youtube_api() {
    wp_enqueue_script( 'yt-player-api', '//www.youtube.com/player_api', array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts__youtube_api' );
function Oembed_youtube_no_title($html,$url,$args){
$url_string = parse_url($url, PHP_URL_QUERY);
parse_str($url_string, $id);
if (isset($id['v'])) {
return '<iframe width="'.$args['width'].'" height="'.$args['height'].'" src="https://www.youtube.com/embed/'.$id['v'].'?rel=0&amp;&showinfo=0;&autohide=0;&modestbranding=1&amp;&nologo=1&amp" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
}
return $html;
}
add_filter('oembed_result','Oembed_youtube_no_title',10,3);

// Cotact Form Select Defaults
function my_wpcf7_form_elements($html) {
    function ov3rfly_replace_include_blank($name, $text, &$html) {
        $matches = false;
        preg_match('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $html, $matches);
        if ($matches) {
            $select = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $matches[0]);
            $html = preg_replace('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $select, $html);
        }
    }
    ov3rfly_replace_include_blank('menu-1120', 'Choose language', $html);
    ov3rfly_replace_include_blank('menu-614', 'Choose country', $html);
    return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');

// Protected By Password Form

function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<div class="wrap-960" id="protected-form"><h3 id="protected-title">Please Enter The Password To Access This Content</h3><form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post"><p id="protected-copy">Only members of the Global Dignity Board of Directors are authorized to access Board Resources</p><input name="post_password" placeholder="Password" id="' . $label . '" type="password" size="20" maxlength="20" /><div><input type="submit" class="button-black" name="Submit" value="' . esc_attr__( "Submit" ) . '" /></div></form></div>';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );


// Expire Password Preotected Post Cookie
/*
function custom_password_cookie_expiry( $expires ) {
    return 0;
}
add_filter( 'post_password_expires', 'custom_password_cookie_expiry' );
*/
add_filter( 'the_password_form', 'wpse_71284_custom_post_password_msg' );

/**
 * Add a message to the password form.
 *
 * @wp-hook the_password_form
 * @param string $form
 * @return string
 */
function wpse_71284_custom_post_password_msg( $form )
{
 // No cookie, the user has not sent anything until now.
 if ( ! isset ( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) )
 return $form;

 // Translate and escape.
 $msg = esc_html__( 'Sorry, your password is wrong! Please Try Again.', 'your_text_domain' );

 // We have a cookie, but it doesn’t match the password.
 $msg = "<h2 class='custom-password-message wrap-960 centered'>$msg</h2>";

 return $msg . $form;
}