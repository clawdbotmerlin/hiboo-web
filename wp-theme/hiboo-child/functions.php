<?php
/**
 * Hiboo Child Theme Functions
 *
 * @package Hiboo_Child
 */

defined('ABSPATH') || exit;

/**
 * Helper: return URI to a child theme asset.
 */
function hiboo_asset( $path ) {
    return get_stylesheet_directory_uri() . '/assets/' . ltrim( $path, '/' );
}

/**
 * Enqueue parent + child styles and Google Fonts.
 */
function hiboo_enqueue_styles() {
    // Google Fonts
    wp_enqueue_style(
        'hiboo-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Fredoka:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // GeneratePress parent
    wp_enqueue_style(
        'generatepress-parent',
        get_template_directory_uri() . '/style.css',
        array( 'hiboo-google-fonts' ),
        wp_get_theme( 'generatepress' )->get( 'Version' )
    );

    // Child theme (contains all Hiboo CSS)
    wp_enqueue_style(
        'hiboo-child',
        get_stylesheet_uri(),
        array( 'generatepress-parent' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'hiboo_enqueue_styles' );

/**
 * Enqueue Hiboo JS.
 */
function hiboo_enqueue_scripts() {
    wp_enqueue_script(
        'hiboo-js',
        hiboo_asset( 'js/hiboo.js' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        true // in footer
    );
}
add_action( 'wp_enqueue_scripts', 'hiboo_enqueue_scripts' );

/**
 * Theme support & menus.
 */
function hiboo_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 52,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'hiboo-child' ),
    ) );
}
add_action( 'after_setup_theme', 'hiboo_theme_setup' );

/**
 * Register widget areas.
 */
function hiboo_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Column 1 - Produk', 'hiboo-child' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Column 2 - Info', 'hiboo-child' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Column 3 - Bantuan', 'hiboo-child' ),
        'id'            => 'footer-3',
        'before_widget' => '<div class="footer-col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'hiboo_widgets_init' );

/**
 * Remove GeneratePress default header and footer.
 * We use our own header.php / footer.php templates.
 */
function hiboo_remove_gp_defaults() {
    // Remove GP header element
    remove_action( 'generate_header', 'generate_construct_header' );
    // Remove GP footer widgets
    remove_action( 'generate_footer', 'generate_construct_footer_widgets', 5 );
    // Remove GP footer
    remove_action( 'generate_footer', 'generate_construct_footer' );
}
add_action( 'after_setup_theme', 'hiboo_remove_gp_defaults', 20 );

/**
 * Add excerpt support for pages (for blog cards, etc.).
 */
function hiboo_add_page_excerpts() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'hiboo_add_page_excerpts' );

/**
 * Custom excerpt length.
 */
function hiboo_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'hiboo_excerpt_length' );

/**
 * Custom excerpt more text.
 */
function hiboo_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'hiboo_excerpt_more' );

/**
 * Estimated reading time helper.
 */
function estimated_reading_time() {
    $content = get_post_field( 'post_content', get_the_ID() );
    $word_count = str_word_count( strip_tags( $content ) );
    return max( 1, ceil( $word_count / 200 ) );
}
