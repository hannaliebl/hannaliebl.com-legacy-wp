<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */

 ?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <fieldset>
        <input placeholder="search the site" type="search" name="s" id="search" value="<?php the_search_query(); ?>" />
        <input type="submit" id="searchsubmit" value="Search" />
    </fieldset>
</form>