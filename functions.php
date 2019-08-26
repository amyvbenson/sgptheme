<?php
/**
 * sgp functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sgp
 */

if (! function_exists('sgp_setup')) :
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

  // Allow excerpts on pages
  add_post_type_support( 'page', 'excerpt' );
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
    'before_widget' => '<div>',
    'after_widget'  => '</div>'
  ) );
  register_sidebars(1, array(
    'name'          => esc_html__( 'City Ward Blog', 'sgp' ),
    'id'            => 'city-ward-blog-sidebar',
    'description'   => esc_html__( 'Add widgets here.', 'sgp' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebars(1, array(
    'name'          => esc_html__( 'Gleadless Valley Blog', 'sgp' ),
    'id'            => 'gleadless-valley-blog-sidebar',
    'description'   => esc_html__( 'Add widgets here.', 'sgp' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebars(1, array(
    'name'          => esc_html__( 'Elections', 'sgp' ),
    'id'            => 'elections-sidebar',
    'description'   => esc_html__( 'Add widgets here.', 'sgp' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'sgp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sgp_scripts() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
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
function sgp_featured_posts($num_posts, $offset = 0) {
  global $post;

  $featured_slug = 'featured';
  $featured_cat = get_category_by_slug($featured_slug);

  $args = array(
    'posts_per_page' => $num_posts,
    'offset' => $offset,
    'category__and' => array( $featured_cat->term_id )
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
 * Get child pages
 */
function sgp_child_pages() {
  global $post;
  $child_pages_query_args = array(
    'post_type'   => 'page',
    'post_parent' => $post->ID,
    'orderby'     => 'title',
    'order'       => 'ASC'
  );
  return new WP_Query( $child_pages_query_args );
}


/**
 * Comment template
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function sgp_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  if ( '' == $comment->comment_type ) {?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment-body">
      <div class="comment-meta">
        <span>
          <strong><?php printf(__('%s'), get_comment_author_link()) ?></strong>
          says
        </span>

        <div class="comment-metadata">
          <?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?>
          <?php edit_comment_link( 'Edit', $before, $after ); ?>
        </div>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
        <p><em>Your comment is awaiting moderation</em></p>
      <?php endif; ?>
      <div class="comment-content">
        <?php comment_text(); ?>
      </div>
    </div>
    </li>
  <?php }

}

/**
 * Exclude categories by slug from post categories list
 */
function sgp_exclude_post_categories($exclude) {
  global $post;
  $categories = get_the_category($post->ID);
  if (!empty($categories)) {
    $html = '<ul>';
    foreach ($categories as $cat) {
      $catname = trim(strip_tags($cat->slug));
      if (!in_array($catname, $exclude)) {
        $html .= '<li><a href="' . get_category_link($cat->cat_ID) . '" ';
        $html .= '>' . $cat->cat_name . '</a></li>';
      }
    }
    $html .= '</ul>';
    echo $html;
  }
}

/**
 * Get category ids in comma seperated string from slugs
 */
function sgp_category_ids($slugs) {
  $cats_array = array();
  foreach ($slugs as $slug) {
    $category = get_category_by_slug($slug);
    if ($category) {
      $cat_id = $category->term_id;
      array_push($cats_array, $cat_id);
    }
  }
  $cat_str = implode(',', $cats_array);
  return $cat_str;
}

/**
 * Order candadates by custom field 'order'
 */
function sgp_order_candidates($candidates) {
  usort($candidates, function($a, $b) {
    return strcmp($a->order,$b->order);
  });
  return $candidates;
}

/**
 * Set custom template for a category
 */
function sgp_get_custom_cat_template($single_template) {
  global $post;
  if ( in_category( 'city-ward-blog' )) {
    $single_template = dirname( __FILE__ ) . '/single-city-ward-blog.php';
  }
  if ( in_category( 'gleadless-valley-blog' )) {
    $single_template = dirname( __FILE__ ) . '/single-gleadless-valley-blog.php';
  }
  return $single_template;
}

add_filter( 'single_template', 'sgp_get_custom_cat_template' ) ;

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
