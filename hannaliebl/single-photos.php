<?php get_header(); ?>

        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>


<section>

            <div class="container">
                <article class="center-text">
                    <div class="holder">
                     <h2><?php the_title(); ?></h2>


                    <?php if(get_adjacent_post(false, '', false)) { ?>
<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="left-arrow"></a>
<?php } else { /*do nothing*/ } ; ?>
                    <?php if(get_adjacent_post(false, '', true)) { ?>
<a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="right-arrow"></a>
<?php } else { /*do nothing*/ } ; ?>
                     
                     

                 </div>

                        <?php the_post_thumbnail('full'); ?>
                    
						<?php the_content(); ?>
                        <span class="date"><?php the_date(); ?></span>
					</article>
            </div>
            
                    
</section>

		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>


<?php get_footer(); ?>


