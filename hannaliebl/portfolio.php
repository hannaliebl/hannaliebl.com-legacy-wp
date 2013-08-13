<?php


add_action('init', 'portfolio_register');

function portfolio_register () {

	//Arguments to create post type.
	$args = array(
	'label' => __('Portfolio'),
	'singular_label' => __('Portfolio Piece'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'has_archive' => true,
	'supports' => array('title', 'editor', 'thumbnail'),
	'rewrite' => array('slug' => 'work', 'with_front' => false), );


	//Register type and custom taxonomy for type.
	register_post_type( 'work' , $args);
	register_taxonomy("portfolio-types", array("work"), array("hierarchical" => true, "label" => "Work Types", "singular_label" => "Work Type", "rewrite" => true, "slug" => 'portfolio-type'));
}

/*Adds Support for Featured Images**/
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 480, 480 );
}



 

add_action("admin_init", "portfolio_add_categories");  


//Create area for post categories to be listed on works page and website URL, if applicable
function portfolio_add_categories(){  
    add_meta_box("portfolio-categories", "Categories for Work (Web Design, Wordpress, etc.)", "portfolio_categories", "work", "normal", "high");   
}  

function portfolio_categories(){  
        global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
        
        $custom = get_post_custom($post->ID);
		$categories= $custom["categories"][0];
		$website= $custom["website"][0];
		$intro= $custom["intro"][0];
		
?>  

<style type="text/css">
<?php include('css/portfolio.css'); ?>
</style>

<div class="portfolio_categories">

<?php	
		
	$website= ($website == "") ? "http://" : $website;
?>
	<div><label>Categories:</label><input name="categories" value="<?php echo $categories; ?>" /></div>
	<div><label>Website:</label><input name="website" value="<?php echo $website; ?>" /></div>
	<div><textarea type="text" name="intro" rows="10" cols="50"><?php if($intro ) { echo $intro; } ?></textarea></div>

</div>   
<?php  
    }
    
add_action('save_post', 'portfolio_save_meta_box'); 

function portfolio_save_meta_box(){  
    global $post;  

    
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ //if you remove this the sky will fall on your head.
		return $post_id;
	}else{
    	update_post_meta($post->ID, "categories", $_POST["categories"]); 
    	update_post_meta($post->ID, "website", $_POST["website"]);
    	update_post_meta($post->ID, "intro", $_POST["intro"]);
    } 
}  

?>