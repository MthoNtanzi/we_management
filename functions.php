<?php

// Dependencies
function my_custom_theme_assets()
{
    // === Styles ===
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap', false);
    wp_enqueue_style('fontawesome6', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), null);
    wp_enqueue_style('fontawesome5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), null);
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), null);

    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/lib/animate/animate.min.css');
    wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css');

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri()); // style.css in root
    wp_enqueue_style('blog-style', get_template_directory_uri() . '/assets/css/blog.css');
    wp_enqueue_style('blog-post-style', get_template_directory_uri() . '/assets/css/post.css');

    // === Scripts ===
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array(), null, true);

    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/lib/wow/wow.min.js', array(), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array(), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array(), null, true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array(), null, true);

    wp_enqueue_script('banner', get_template_directory_uri() . '/assets/js/banner.js', array(), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_assets');

function wmg_enqueue_material_icons() {
    wp_enqueue_style(
        'google-material-symbols',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined'
    );
}
add_action('wp_enqueue_scripts', 'wmg_enqueue_material_icons');

// Blog Settings
function wemanagement_blog_customizer($wp_customize)
{
    // === Blog Subtitle ===
    $wp_customize->add_setting('blog_subtitle', array(
        'default' => 'Browse our latest blog posts to stay updated with the latest trends and insights in the real estate industry.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('blog_subtitle_control', array(
        'label' => __('Blog Subtitle', 'wemanagement'),
        'section' => 'blog_settings',
        'settings' => 'blog_subtitle',
        'type' => 'textarea',
    ));

    // === Blog Slider Images ===
    $wp_customize->add_setting('blog_slider_images', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wemanagement_sanitize_slider_images'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'blog_slider_images_control', array(
        'label' => __('Blog Slider Images (One per line)', 'wemanagement'),
        'section' => 'blog_settings',
        'settings' => 'blog_slider_images',
        'type' => 'textarea',
        'description' => __('Enter one image URL per line', 'wemanagement')
    )));

    // === sanitization ===
    function wemanagement_sanitize_slider_images($input)
    {
        // Convert textarea input into array
        $urls = explode("\n", $input);
        $output = array();

        foreach ($urls as $url) {
            $url = esc_url_raw(trim($url));
            if (!empty($url)) {
                $output[] = array('url' => $url);
            }
        }

        return $output;
    }

    // === Add section ===
    $wp_customize->add_section('blog_settings', array(
        'title' => __('Blog Settings', 'wemanagement'),
        'priority' => 30,
    ));
}
add_action('customize_register', 'wemanagement_blog_customizer');

// === Post Types ===
function wemanagement_register_post_types()
{
    // === Styles ===
    register_post_type('blog', array(
        'labels' => array(
            'name' => 'Blog Posts',
            'singular_name' => 'Blog Post',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Blog Post',
            'edit_item' => 'Edit Blog Post',
            'new_item' => 'New Blog Post',
            'view_item' => 'View Blog Post',
            'search_items' => 'Search Blog Posts',
            'not_found' => 'No blog posts found',
            'not_found_in_trash' => 'No blog posts found in Trash'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'blog'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'menu_icon' => 'dashicons-edit',
        'taxonomies' => array('category', 'post_tag')
    ));
}
add_action('init', 'wemanagement_register_post_types');
add_theme_support('post-thumbnails');
add_image_size('blog-thumbnail', 600, 400, true);

// === Function to get post views ===
function wemanagement_get_post_views($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

// === Function to count post views ===
// Track post views
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Get post views
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}


// Initialize Owl Carousel
function we_management_owl_carousel() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        $('.header-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1500,
            dots: false,
            nav: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'we_management_owl_carousel');

function custom_comment_format($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    
    <div <?php comment_class('blog-comment' . ($depth > 1 ? ' blog-comment-replies' : '')); ?> id="comment-<?php comment_ID(); ?>">
        <div class="blog-comment-img">
            <?php echo get_avatar($comment, 64); ?>
        </div>
        <div class="blog-comment-content">
            <div class="blog-comment-meta">
                <span class="blog-comment-name"><?php comment_author(); ?></span>
                <span class="blog-comment-date"><?php comment_date('M j, Y'); ?></span>
            </div>
            <?php if ($comment->comment_approved == '0') : ?>
                <p class="blog-comment-awaiting-moderation">Your comment is awaiting moderation.</p>
            <?php endif; ?>
            <p class="blog-comment-text"><?php comment_text(); ?></p>
            <?php 
            comment_reply_link(array_merge($args, array(
                'reply_text' => '<i class="fas fa-reply"></i> Reply',
                'depth' => $depth,
                'max_depth' => $args['max_depth'],
                'before' => '<div class="reply">',
                'after' => '</div>'
            ))); 
            ?>
        </div>
    </div>
<?php }


function wemanagement_set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count === '') {
        $count = 0;
        add_post_meta($postID, $count_key, 1);
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function wemanagement_track_post_views() {
    if (!is_single()) return;

    global $post;
    if (!isset($post->ID)) return;

    // Optional: Only count if not already counted in this session
    if (empty($_SESSION)) session_start();
    $key = 'viewed_' . $post->ID;

    if (!isset($_SESSION[$key])) {
        wemanagement_set_post_views($post->ID);
        $_SESSION[$key] = true;
    }
}
add_action('template_redirect', 'wemanagement_track_post_views');

// Kirki Customer
require get_template_directory() . "/includes/customiser.php";
require get_template_directory() . "/includes/pages/about-customiser.php";
require get_template_directory()."/includes/pages/services-customiser.php";
require get_template_directory() . '/includes/pages/brokerage-customiser.php';
require get_template_directory() . '/includes/pages/contact-customiser.php';
require get_template_directory() . '/includes/pages/facility-management-customiser.php';
require get_template_directory() . '/includes/pages/property-management-customiser.php';
require get_template_directory() . '/includes/pages/wpc-customiser.php';


add_theme_support('customize-selective-refresh-widgets');

require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';

// === Register menu locations ===
function register_my_menus() {
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('after_setup_theme', 'register_my_menus');
