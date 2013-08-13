<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */

get_header(); ?>

<?php if (have_posts()) : ?>

<header class="main-header">
  <div class="container">
    <h1>Hanna's Blog</h1>
    <h2>Design and Web Thoughts</h2>

    <?php get_sidebar(); ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2 class="pagetitle">Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2 class="pagetitle">Blog Archives</h2>
    <?php } ?>

  </div>
</header>
<section>
  <div class="container container960">
    <div class="col6 center-notext">

    <?php while (have_posts()) : the_post(); ?>

    <article class="blog-entry" id="post-<?php the_ID(); ?>">
        <header>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <span class="date"><?php the_time('m-d-y') ?></span>
            <h1><?php the_title(); ?></h1>
          </a>
          <p class="meta">Posted in: <?php the_category(', '); ?>. <?php the_tags('Tagged: ', ', ', ''); ?>.</p> 
        </header>

        <?php the_content('Read the rest of this entry &raquo;'); ?>

        <hr>
        <span class="comments-link">
          <a href="<?php comments_link(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments'); ?></a> | <a href="<?php the_permalink() ?>#respond">Leave a Comment</a>
            <?php edit_post_link('Edit Post', ' | ' ); ?>
        </span>
      </article>

    <?php endwhile; ?>

    <nav>
      <div class="next float"><?php next_posts_link('&laquo; Older Entries') ?></div>
      <div class="previous"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </nav>

  <?php else :

  if ( is_category() ) { // If this is a category archive
    printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
  } else if ( is_date() ) { // If this is a date archive
    echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
  } else if ( is_author() ) { // If this is a category archive
    $userdata = get_userdatabylogin(get_query_var('author_name'));
    printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
  } else {
    echo("<h2>No posts found.</h2>");
  }
  get_search_form();

  endif;
  ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>