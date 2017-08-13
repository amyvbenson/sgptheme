<?php
/**
 * sgp functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sgp
 */

if ( ! function_exists( 'sgp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sgp_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sgp, use a find and replace
	 * to change 'sgp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sgp', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'sgp' ),
    'footer' => esc_html__( 'Footer', 'sgp' ),
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
	add_theme_support( 'custom-background', apply_filters( 'sgp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'sgp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sgp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sgp_content_width', 640 );
}
add_action( 'after_setup_theme', 'sgp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sgp_widgets_init() {
	register_sidebars(1, array(
		'name'          => esc_html__( 'Sidebar', 'sgp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sgp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebars(1, array(
    'name'          => esc_html__( 'Footer text', 'sgp' ),
    'id'            => 'footer-text',
    'description'   => esc_html__( 'Add widgets here.', 'sgp' ),
    'before_widget' => '<div class="site-footer__small-print">',
    'after_widget'  => '</div>'
  ) );
  register_sidebars(1, array(
    'name'          => esc_html__( 'Category sidebar', 'sgp' ),
    'id'            => 'category-sidebar',
    'description'   => esc_html__( 'Add widgets here.', 'sgp' )
  ) );
}
add_action( 'widgets_init', 'sgp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sgp_scripts() {
  wp_enqueue_style( 'sgp-style', get_stylesheet_uri() );
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'sgp-nav', get_template_directory_uri() . '/js/nav.js', array(), '20151215', true );
	wp_enqueue_script( 'sgp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
  wp_enqueue_script( 'responsive-video', get_template_directory_uri() . '/js/responsive-video.js', array(), '20161029', true );
  wp_enqueue_script( 'faux-links', get_template_directory_uri() . '/js/faux-links.js', array(), '20161029', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sgp_scripts' );

/**
 * Get child pages for sidebar nav
 */
function sgp_pages_nav() {
  global $post;

  if (!$post->post_parent) {
    $parentpage = get_the_title($post->post_parent);
    $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=1");
  } else {
    if ($post->ancestors) {
      $parentpage = get_the_title(end($post->ancestors));
      $ancestors = end($post->ancestors);
      $children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0&depth=1");
    }
  }

  if ($children) {
    $heading = '<h2 class="pages-nav__heading"><a href="' . get_permalink($parentpage) . '">' . $parentpage . '</a></h2>';
    $string = '<nav class="pages-nav">' . $heading . '<ul class="pages-nav__list">' . $children . '</ul></nav>';
  }
  return $string;
}

/**
 * Get post from a specific category
 */
function sgp_category_posts($category_slug, $num_posts, $offset = 0) {
	global $post;
	$args = array( 'category_name' => $category_slug, 'posts_per_page' => $num_posts, 'offset' => $offset);
  return new WP_Query( $args);
}

/**
 * Get homepage latest news
 * posts that have categories featured and news
 */
function sgp_featured_news($num_posts, $offset = 0) {
  global $post;

  $featured_slug = 'featured';
  $featured_cat = get_category_by_slug($featured_slug);
  $news_slug = 'news';
  $news_cat = get_category_by_slug($news_slug);


  $args = array(
    'posts_per_page' => $num_posts,
    'offset' => $offset,
    'category__and' => array( $featured_cat->term_id, $news_cat->term_id )
  );
  return new WP_Query( $args);
}

/**
 * Use first image from post if no thumbnail
 * Source: https://css-tricks.com/snippets/wordpress/get-the-first-image-from-a-post/
 */
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = get_bloginfo('template_directory') . '/images/default.jpg';
  }
  return $first_img;
}

/**
 * Create svg icon
 */
function svg_icon($icon, $sr_text = '') {
  $svg = '<svg class="icon" aria-hidden="true">';
  $svg .= '<use xlink:href="#icon-'. $icon .'"></use>';
  $svg .= '</svg>';

  if ($sr_text) {
    $svg .= '<span class="sr-only">'. $sr_text . '</span>' ;
  }

  return $svg;
}

/**
 * Post author details
 * From custom fields
 */
function post_author($post) {
  $author_name = get_post_meta($post->ID, 'author', true);
  $author_title = get_post_meta($post->ID, 'author-title', true);
  $author_image = get_post_meta($post->ID, 'author-image', true);
  $author_link = get_post_meta($post->ID, 'author-link', true);
  $default_img = get_template_directory_uri() . '/images/default-tb.jpg';

  $display_name = $author_name ? $author_name : 'Sheffield Green Party';
  $img_src = $author_image ? $author_image : $default_img;

  $block = '<div class="post-info__author">';
  $block .= '<h2>Written by</h2>';
  $block .= '<div class="post-info__author-inner">';
  $block .= '<img src="' . $img_src . ' " alt="" />';
  $block .= '<p>';
  if ($author_link) {
    $block .= '<a class="post-info__author-name" href="' . $author_link . '">' . $author_name .'</a>';
  } else {
    $block .= '<span class="post-info__author-name">' . $display_name . '</span>';
  }
  if ($author_title) :
    $block .= '<span class="post-info__author-title">' . $author_title . '</span>';
  endif;
  $block .= '</p>';
  $block .= '</div></div>';

  return $block;
}

/**
 * Override wp-caption too make it responsive
 */
function responsive_wp_caption($val, $attr, $content = NULL) {
    extract( shortcode_atts(
        array(
         'id' => '',
         'align' => '',
         'width' => '',
         'caption' => '',
        ),
        $attr
      )
    );

    if ( intval( $width ) < 1 || empty( $caption ) ) {
        return $val;
    }

    $id = $id ? ('id="' . $id . '" ') : '';

    $new_caption = '<figure class="wp-caption ' . $align .'" style="width: 100%; max-width: ' . $width . 'px">';
    $new_caption .= do_shortcode( $content );
    $new_caption .= '<figcaption class="wp-caption-text">' . $caption . '</figcaption>';
    $new_caption .= '</figure>';

    return $new_caption;
}

add_filter( 'img_caption_shortcode', 'responsive_wp_caption', 10, 3 );

/**
 * Sets the post excerpt length.
 */
function sgp_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'sgp_excerpt_length' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis
 */
function sgp_auto_excerpt_more( $more ) {
  return '&hellip;';
}
add_filter( 'excerpt_more', 'sgp_auto_excerpt_more' );

/**
 * Add theme support for the Eventbrite API plugin.
 * See: https://wordpress.org/plugins/eventbrite-api/
 */
 add_theme_support( 'eventbrite' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
// require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// require get_template_directory() . '/inc/jetpack.php';
