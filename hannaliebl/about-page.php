<?php
/*
Template Name: About Page
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
            <h1 class="page-heading">ABOUT</h1>
        </div>
        <div class="col8 center-notext">
            <article>
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<?php the_content(); ?>
    			<div class="col4 col-padding float">
                            <h2>Technical and Web Skills</h2>
                            	<ul>
                            		<li>Web Design (using HTML5, CSS3, and responsive design principles)</li>
                            		<li>Wordpress Theme Development</li>
                            		<li>Salsa Labs Development</li>
                            		<li>Social media planning and implementation</li>
                            		<li>Video editing</li>
                            	</ul>

                        </div>
                        <div class="col4 float">
                            <h2>Design Skills</h2>
                            	<ul>
                            		<li>Vector Illustration</li>
                            		<li>Logo Design</li>
                            		<li>Web and Print Publication Layouts</li>
                            		<li>Photo Editing</li>
                            	</ul>
                        </div>
                    </article>
                <?php endwhile; endif; ?>
                </div>
    </div>
</section>
<?php get_footer(); ?>