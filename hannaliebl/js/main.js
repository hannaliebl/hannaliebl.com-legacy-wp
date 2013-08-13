/* MOBILE COLLAPSE MENU */
;(function($) {
  $('.slide-trigger').click(function(){
    if( $(this).is(':visible') ){$('ul.navigation').slideToggle(500);}
  });
  $(window).resize(function(){
    if($(window).width() > 480)
      $('ul.navigation').show();
  });
})(jQuery);


/* SCROLLING */
/* scroll from bottom to top */
(function( $ ) {
  	$('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0}, 600);
            return false;
        });
})( jQuery );

/* Scroll to recent works */

$('#work').click(function() {
	$('html, body').animate({
	scrollTop: $("#recent-works").offset().top
}, 700);
});

/* Scroll to recent blog posts */

$('#blog').click(function() {
	$('html, body').animate({
	scrollTop: $("#recent-blog-posts").offset().top
}, 700);
});