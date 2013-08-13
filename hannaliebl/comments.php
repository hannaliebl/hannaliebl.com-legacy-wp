<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
  <h1 id="comments">Comments</h3>
  
  <nav>
    <div><?php previous_comments_link() ?></div>
    <div><?php next_comments_link() ?></div>
  </nav>

  <ol class="commentlist">
  <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
  </ol>

  <nav>
    <div><?php previous_comments_link() ?></div>
    <div><?php next_comments_link() ?></div>
  </nav>
 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ( comments_open() ) : ?>
    <!-- If comments are open, but there are no comments. -->

   <?php else : // comments are closed ?>
    <!-- If comments are closed. -->
    <p class="nocomments">Comments are closed.</p>

  <?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond">
  <h1><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h1>
  <div class="cancel-comment-reply">
    <small><?php cancel_comment_reply_link(); ?></small>
  </div>

  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
  <?php else : ?>

  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

  <?php if ( is_user_logged_in() ) : ?>

  <p class="small">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

  <?php else : ?>

  <span class="third float respond-info padding-right">
    <input placeholder="Name (required)" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
  </span>

  <span class="third float respond-info padding-right">
    <input placeholder="Email (required)" type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
  </span>

  <span class="third float respond-info">
    <input placeholder="Website (optional)" type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
  </span>

  <?php endif; ?>
  <p><textarea placeholder="Leave your comment here." name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>
 <?php do_action('comment_form', $post->ID); ?>
  <p>
    <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
    <?php comment_id_fields(); ?>
  </p>
 

  </form>

  <?php endif; // If registration required and not logged in ?>
</section>

<?php endif; // if you delete this the sky will fall on your head ?>