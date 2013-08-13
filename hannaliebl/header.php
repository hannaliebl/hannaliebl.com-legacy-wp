<?php
/**
 * @package WordPress
 * @subpackage hannaliebl
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta name="viewport" content="width=device-width">

     <link rel="shortcut icon" href="http://www.hannaliebl.com/favicon.ico" type="image/x-icon">
     <link rel="icon" href="http://www.hannaliebl.com/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>style.css">
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/respond.min.js"></script>
    
    <script type="text/javascript" src="//use.typekit.net/hto7nhw.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script> 
    <script src="<?php bloginfo('template_directory');?>/js/vendor/modernizr-2.6.2.min.js"></script>

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

</head>
<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <nav id="top">
             <div class="container">
                <div class="logo-container">
                    <a href="http://www.hannaliebl.com"><span class="logo"></span></a>
                </div>
                <div class="nav-container">
                    <div class="slide-trigger"><span></span></div>
                    <ul class="navigation">
                        <li><a href="http://www.hannaliebl.com/work">Work</a></li>
                        <li><a href="http://www.hannaliebl.com/about">About</a></li>
                        <li><a href="http://www.hannaliebl.com/contact">Contact</a></li>
                        <li><a href="http://www.hannaliebl.com/blog">Blog</a></li>
                        <li><a href="http://www.hannaliebl.com/photos">Photos</a></li>
                 </div>
            </div>
        </nav>