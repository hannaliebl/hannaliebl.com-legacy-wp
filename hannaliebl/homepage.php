<?php
/*
Template Name: Homepage
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */

get_header('home'); ?>

<section id="recent-works">
            <div class="container">
                <h1 class="center-text">RECENT PROJECTS</h1>
                 <ul class="gallery-grid row">

                        <?php
                            $args= array(
                                'post_type' => 'work',
                                'posts_per_page' => 6,
                                );
                        $portfolio= get_posts($args);
    
                        foreach ($portfolio as $post) :  setup_postdata($post); ?>

                        <?php 
                    $custom = get_post_custom($post->ID);
                    $categories= $custom["categories"][0]; 
                    $logo= get_the_post_thumbnail($post->ID);
                ?>

                        <li class="col4 float gallery-image">
                            <a href="<?php the_permalink(); ?>" class="darken"><?php print $logo; ?>
                                <span class="gallery-description">
                                   <h1><?php the_title(); ?></h1>
                                   <h2><?php print $categories; ?></h2>
                                </span>
                            </a>
                        </li>

                        <?php endforeach; ?>

                    </ul>
                </div>
                <div class="container center-text">
                        
                   <a class="button" href="<?php bloginfo('url'); ?>/work/">See All My Work</a>             
                


                </div>
            </div>
        </section>
        <section id="recent-blog-posts">
            <div class="container container960">
                <h1 class="center-text">RECENT POSTS</h1>
                    <div class="col6 center-notext">
                        <?php 
                            $posts= get_posts('posts_per_page=3');
                            foreach ($posts as $post) :  setup_postdata($post); 
                        ?>
                        <article class="blog-snippet">
                            <header>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                    <span class="date float"><?php the_time('m-d-y') ?></span>
                                    <h1><?php the_title(); ?></h1>
                                </a>
                                <p class="meta">Posted in: <?php the_category(', '); ?>. <?php the_tags('Tagged: ', ', ', ''); ?>.</p> 
                            </header>
                            <?php the_excerpt(); ?>
                            <hr>
                            <span class="comments-link">
                                <a href="<?php comments_link(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments'); ?></a> | <a href="<?php the_permalink() ?>#respond">Leave a Comment</a>
                                <?php edit_post_link('Edit Post', ' | ' ); ?>
                            </span>
                        </article>
            
            
                        <?php endforeach; ?>
            
                        <div class="center-text">

                            <?php 
                                $blogID= get_page_by_path('blog');
                                $blogLink= get_page_link($blogID->ID); 
                            ?>

                            <a href="<?php print $blogLink; ?>" class="button">Read More Posts</a>
                        </div>
                    </div>
            </div>
        </section>
        <section>
        	<div class="container">
                <h1 class="center-text">RECENT PHOTOS</h1>
                 <ul class="gallery-grid row">

                        <?php
                            $args= array(
                                'post_type' => 'photos',
                                'posts_per_page' => 6,
                                );
                        $photos= get_posts($args);
    
                        foreach ($photos as $post) :  setup_postdata($post); ?>

                        <?php 
                    $custom = get_post_custom($post->ID);
                    $categories= $custom["categories"][0]; 
                    $logo= get_the_post_thumbnail($post->ID);
                ?>

                        <li class="col4 float gallery-image">
                            <a href="<?php the_permalink(); ?>" class="darken"><?php print $logo; ?>
                                <span class="gallery-description">
                                   <h1><?php the_title(); ?></h1>
                                   <h2><?php the_time('F j, Y'); ?></h2>
                                </span>
                            </a>
                        </li>

                        <?php endforeach; ?>

                    </ul>
                </div>
                <div class="container center-text">
                        
                   <a class="button" href="<?php bloginfo('url'); ?>/photos/">See All My Photos</a>             
                


                </div>
            </div>

        </section>

<?php get_footer(); ?>