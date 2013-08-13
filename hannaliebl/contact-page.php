<?php
/*
Template Name: Contact Page
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */

get_header(); ?>

<section>
    <div class="container container960">
        <div class="center-text">
            <h1 class="page-heading">CONTACT</h1>
        </div>
        <div class="col8 center-notext">
        <div class="col4 col-padding float">
            <article>
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<?php the_content(); ?>
                </div>
                <div class="col4 float">
                    <?php echo do_shortcode( '[contact-form-7 id="19"]' ); ?>
                            
                </div>
            </article>
                <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>