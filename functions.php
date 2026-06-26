<?php
/**
 * PeruLuxuryTrips functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PeruLuxuryTrips
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
function peruluxurytrips_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on PeruLuxuryTrips, use a find and replace
		* to change 'peruluxurytrips' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'peruluxurytrips', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'peruluxurytrips' ),
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
			'peruluxurytrips_custom_background_args',
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
add_action( 'after_setup_theme', 'peruluxurytrips_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function peruluxurytrips_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'peruluxurytrips_content_width', 640 );
}
add_action( 'after_setup_theme', 'peruluxurytrips_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function peruluxurytrips_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'peruluxurytrips' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'peruluxurytrips' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'peruluxurytrips_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function peruluxurytrips_scripts() {
	wp_enqueue_style( 'peruluxurytrips-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'peruluxurytrips-tailwind', get_template_directory_uri() . '/src/output.css', array(), _S_VERSION );
	wp_enqueue_style( 'peruluxurytrips-blog-utils', get_template_directory_uri() . '/src/blog-utilities.css', array( 'peruluxurytrips-tailwind' ), _S_VERSION );

	   // CSS de Swiper
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );

    // JS de Swiper
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );

    // Font Awesome 5 JS
    wp_enqueue_script( 'fontawesome-js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js', array(), null, false );

    // Inicialización personalizada de Swiper
    wp_add_inline_script( 'swiper-js', '
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 4,
            spaceBetween: 15,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 4
                }
            }
        });
    ' );



}
add_action( 'wp_enqueue_scripts', 'peruluxurytrips_scripts' );

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


add_filter('wpcf7_autop_or_not', '__return_false');
function register_acf_block_types()
{
	// register block gallery
	acf_register_block_type(array(
		'name'              => 'gallery',
		'title'             => __('Gallery PeruLT'),
		'description'       => __('A custom gallery block.'),
		'render_template'   => 'template-parts/block/gallery.php',
		'category'          => 'formatting',
		'icon'              => 'format-gallery',
		'keywords'          => array('gallery', 'tour'),
	));

}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}

/**
 * Register Custom Post Type for Blog
 */
function peruluxurytrips_register_blog_post_type() {
	$labels = array(
		'name'                  => _x( 'Blog Posts', 'Post Type General Name', 'peruluxurytrips' ),
		'singular_name'         => _x( 'Blog Post', 'Post Type Singular Name', 'peruluxurytrips' ),
		'menu_name'             => __( 'Blog', 'peruluxurytrips' ),
		'name_admin_bar'        => __( 'Blog Post', 'peruluxurytrips' ),
		'archives'              => __( 'Blog Archives', 'peruluxurytrips' ),
		'attributes'            => __( 'Blog Attributes', 'peruluxurytrips' ),
		'parent_item_colon'     => __( 'Parent Blog Post:', 'peruluxurytrips' ),
		'all_items'             => __( 'All Blog Posts', 'peruluxurytrips' ),
		'add_new_item'          => __( 'Add New Blog Post', 'peruluxurytrips' ),
		'add_new'               => __( 'Add New', 'peruluxurytrips' ),
		'new_item'              => __( 'New Blog Post', 'peruluxurytrips' ),
		'edit_item'             => __( 'Edit Blog Post', 'peruluxurytrips' ),
		'update_item'           => __( 'Update Blog Post', 'peruluxurytrips' ),
		'view_item'             => __( 'View Blog Post', 'peruluxurytrips' ),
		'view_items'            => __( 'View Blog Posts', 'peruluxurytrips' ),
		'search_items'          => __( 'Search Blog Posts', 'peruluxurytrips' ),
	);
	
	$args = array(
		'label'                 => __( 'Blog Post', 'peruluxurytrips' ),
		'description'           => __( 'Blog posts for Peru Luxury Trips', 'peruluxurytrips' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'blog',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rewrite'               => array( 'slug' => 'blog' ),
	);
	
	register_post_type( 'blog', $args );
}
add_action( 'init', 'peruluxurytrips_register_blog_post_type', 0 );

/**
 * Flush rewrite rules on theme activation
 */
function peruluxurytrips_flush_rewrites() {
	peruluxurytrips_register_blog_post_type();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'peruluxurytrips_flush_rewrites' );

/**
 * Modify main query for blog archive
 */
function peruluxurytrips_modify_main_query( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {
		// En la página de blog, mostrar posts del tipo 'blog'
		if ( is_home() && ! is_front_page() ) {
			$query->set( 'post_type', array( 'blog' ) );
			$query->set( 'posts_per_page', 8 ); // 8 posts por página
		}
	}
}
add_action( 'pre_get_posts', 'peruluxurytrips_modify_main_query' );

/**
 * Calculate reading time for blog posts
 */
function peruluxurytrips_reading_time() {
    $content = get_post_field( 'post_content', get_the_ID() );
    $word_count = str_word_count( strip_tags( $content ) );
    $reading_time = ceil( $word_count / 200 );
    return $reading_time . ' min de lectura';
}

/**
 * Customize search to include blog posts when searching
 */
function peruluxurytrips_search_filter( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ( $query->is_search() ) {
            // Include blog post type in search results
            $query->set( 'post_type', array( 'post', 'blog', 'page' ) );
        }
    }
}
add_action( 'pre_get_posts', 'peruluxurytrips_search_filter' );

/**
 * Modify blog archive queries to show more posts per page
 */
function peruluxurytrips_blog_posts_per_page( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ( is_post_type_archive( 'blog' ) ) {
			$query->set( 'posts_per_page', 8 );
        }
    }
}
add_action( 'pre_get_posts', 'peruluxurytrips_blog_posts_per_page' );

/**
 * Add blog-specific body classes
 */
function peruluxurytrips_blog_body_classes( $classes ) {
    if ( is_post_type_archive( 'blog' ) || is_singular( 'blog' ) ) {
        $classes[] = 'blog-page';
    }
    if ( is_singular( 'blog' ) ) {
        $classes[] = 'single-blog';
    }
    return $classes;
}
add_filter( 'body_class', 'peruluxurytrips_blog_body_classes' );



// Agregar colores personalizados a la paleta de Gutenberg
function agregar_colores_personalizados() {
    // Agregar soporte de color del editor
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __('Verde oscuro', 'tu-tema'),
            'slug'  => 'verde-oscuro',
            'color' => '#1e3627',
        ),
        array(
            'name'  => __('Dorado', 'tu-tema'),
            'slug'  => 'dorado',
            'color' => '#D4B66A',
        ),
        array(
            'name'  => __('Negro', 'tu-tema'),
            'slug'  => 'negro',
            'color' => '#000000',
        ),
    ));
}
add_action('after_setup_theme', 'agregar_colores_personalizados');
