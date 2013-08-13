<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */

get_header(); ?>
<header class="main-header">
            <div class="container">
                <h1>HANNA'S BLOG</h1>
                <h2>Design and Web Thoughts</h2>

                <?php get_sidebar(); ?>


  

            </div>
        </header>
        <section>
            <div class="container container960">
                    <div class="col6 center-notext">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article class="blog-entry" id="post-<?php the_ID(); ?>">
        <header>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <span class="date float"><?php the_time('m-d-y') ?></span>
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

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>
</div>
</div>
</section>

<?php get_footer(); ?>


