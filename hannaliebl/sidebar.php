<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */
?>
<section id="sidebar">
<div class="col4 float center-text">
<span>Sort by Post Category: <?php wp_dropdown_categories( array('show_option_none' => 'Select category', 'show_count' => 1 ) ); ?>
<script type="text/javascript"><!--
    var dropdown = document.getElementById("cat");
    function onCatChange() {
		if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
			location.href = "<?php echo get_option('home');
?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
		}
    }
    dropdown.onchange = onCatChange;
--></script>

</span>



</div>
<div class="col4 float center-text">
<span>Sort by Post Date: <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?></span>
</select>
</div>
<div class="col4 float center-text">
<span><?php get_search_form(); ?></span>
</div>
</section>

