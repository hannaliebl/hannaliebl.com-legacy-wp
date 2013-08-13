<?php get_header(); ?>

        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

        <?php
        	$custom = get_post_custom($post->ID);
        	$categories= $custom["categories"][0];   
			$website= $custom["website"][0];
			$intro= $custom["intro"][0];

			if ($website != "http://"){
				$website= "<a class='button' href=\"$website\">View Website</a>";
		}else{
				$website= "";
		}

		?>
<header class="main-header">
   	<div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="holder">
        <h2><?php print $categories; ?></h2>
        <?php if(get_adjacent_post(false, '', false)) { ?>
<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="left-arrow"></a>
<?php } else { /*do nothing*/ } ; ?>
                    <?php if(get_adjacent_post(false, '', true)) { ?>
<a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="right-arrow"></a>
<?php } else { /*do nothing*/ } ; ?>
        </div>
    </div>
</header>
<section id="single-work">
            <div class="container container960">
                <div class="col8 center-text">
                    <p class="work-intro">
                    	<?php echo $intro; ?>
                    </p>
                    <?php echo $website; ?>
                </div>
            </div>
            <div class="gray-bg">
                <div class="container center-text">

                        <img src="<?php the_field('work_in_context'); ?>" alt="" />

               	</div>
            </div>
            <div class="container container960">
                <div class="col6 center-notext">
                    <article class="work-description">
						<?php the_content(); ?>
					</article>
                </div>
            </div>
            <div class="gray-bg">
            	<div class="container">
                    <!--one third / two thirds row-->





                     <?php
                    if( get_field('two_thirds_sized_image_l') ):
                    ?>
                 <div class="col8 float grid bottom center-text">
                    <div class="height">
                        <img src="<?php the_field('two_thirds_sized_image_l'); ?>" alt="" />
                    </div>
                </div><?php
endif;

                    ?>
                    <?php
                    if( get_field('one_third_sized_image_r') ):
                    ?>
                 <div class="col4 float grid bottom center-text">
                    <div class="height">
                        <img src="<?php the_field('one_third_sized_image_r'); ?>" alt="" />
                    </div>
                </div><?php
endif;

                    ?>
                    <!--half / half row-->


                        <?php
                    if( get_field('half_sized_image_l') ):
                    ?>
                 <div class="col6 float grid bottom center-text">
                    <div class="half-height">
                        <img src="<?php the_field('half_sized_image_l'); ?>" alt="" />
                    </div>
                </div><?php
endif;

                    ?>
                    <?php
                    if( get_field('half_sized_image_r') ):
                    ?>
                 <div class="col6 float grid bottom center-text">
                    <div class="half-height">
                        <img src="<?php the_field('half_sized_image_r'); ?>" alt="" />
                    </div>
                </div><?php
endif;

                    ?>



                   
                    <!--full row-->


                    <?php
                    if( get_field('full_sized_image') ):
    ?><div class="col12 float grid bottom center-text"><img src="<?php the_field('full_sized_image'); ?>" alt="" /> </div><?php
endif;

                    ?>

                    
		
			
	</div>

				</div>
			</div>
</section>

		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>



<?php get_footer(); ?>
