<?php get_header(); ?>

<section>
    <div class="container">
        <div class="center-text">
            <h1 class="page-heading">PHOTOS</h1>
        </div>
        <ul class="gallery-grid row">        	
            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        		<?php 
        			$logo= get_the_post_thumbnail($post->ID);
				?>
				<li class="col4 float gallery-image">
                    <a href="<?php the_permalink(); ?>" class="darken"><?php the_post_thumbnail('post-thumbnail'); ?>
                        <span class="gallery-description">
                            <h1><?php the_title(); ?></h1>
                            <h2><?php the_time('F j, Y'); ?></h2>
                        </span>
                    </a>
                </li>
            <?php endwhile; else: ?>
			     <p><?php _e('No posts were found. Sorry!'); ?></p>
		    <?php endif; ?>
        </ul>
    </div>
</section>

<?php get_footer(); ?>
