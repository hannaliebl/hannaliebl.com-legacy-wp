<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */
?>

    <footer>
      <div class="container">
                <div class="center-text">
                    <a href="http://www.twitter.com/lieblhan"><img src="<?php bloginfo('template_directory');?>/img/twitter.png" class="social-logo" /></a> <a href="http://www.linkedin.com/pub/hanna-liebl/33/739/121"><img src="<?php bloginfo('template_directory');?>/img/linkedin.png" class="social-logo"/></a>
                <p>Say hello: hanna&#64;hannaliebl&#46;com <br />
                  <a href="" class="scrollup">Back to top</a><br />
                    &copy; 2013</p>
                </div>
            </div>
        </footer>



  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
  <script src="<?php bloginfo('template_directory');?>/js/main.js"></script>


  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID -->
  <!-- WordPress.com does not allow Google Analytics code to be built into themes they host. 
       Add this section from HTML Boilerplate manually (html5-boilerplate/index.html), or use a Google Analytics WordPress Plugin-->
	   
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
			   
  <?php wp_footer(); ?>

</body>
</html>
