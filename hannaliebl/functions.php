<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */

// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li>
     <div class="entire-comment" <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
       <header class="comment-author vcard gravatar float clearfix">
          <?php echo get_avatar($comment,$size='200' ); ?>
       </header>
<div class="comment-container float-right clearfix">
  <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.') ?></em>
          <br />
       <?php endif; ?>
  <?php printf(__('<h1 class="author">%s</h1>'), get_comment_author_link()) ?>
          <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(),  get_comment_time()) ?></a></time> <?php edit_comment_link(__('(Edit Comment)'),'  ','') ?>

       <?php comment_text() ?>

       <nav>
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
       </nav>
</div>
     </div>
    <!-- </li> is added by wordpress automatically -->
<?php
}


// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

//allow redirection, even if my theme starts to send output to the browser
add_action('init', 'do_output_buffer');
function do_output_buffer() {
        ob_start();
}

require_once('portfolio.php');
require_once('photography.php');

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes=""){
  echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
}

// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes=""){
  echo '<script src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url){
  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
  $file_version = "";

  if(file_exists($file)) {
    $file_version = "?v=".filemtime($file);
  }

  return $relative_url.$file_version;
}

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 480, 480, true);   
}

if ( function_exists( 'add_image_size' ) ) { 
  add_image_size('work-grid-pic', 480, 480, true);
    add_image_size('work-in-context', 960, 738, true);
    add_image_size('one-third', 480, 593, true);
    add_image_size('two-thirds', 960, 593, true);
    add_image_size('half', 720, 593, true);
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
  return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Wordpress has a known bug with the posts_per_page value and overriding it using
 * query_posts. The result is that although the number of allowed posts_per_page
 * is abided by on the first page, subsequent pages give a 404 error and act as if
 * there are no more custom post type posts to show and thus gives a 404 error.
 *
 * This fix is a nicer alternative to setting the blog pages show at most value in the
 * WP Admin reading options screen to a low value like 1.
 *
 */
function custom_posts_per_page( $query ) {
 
    if ( $query->is_archive('work') ) {
        set_query_var('posts_per_page', 15);
    }
}
add_action( 'pre_get_posts', 'custom_posts_per_page' );
?>