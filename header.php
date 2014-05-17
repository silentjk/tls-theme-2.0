<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- media-queries.js (fallback) -->
    <!--[if lt IE 9]>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>      
      <![endif]-->

      <!-- html5.js -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

      <!-- wordpress head functions -->
      <?php wp_head(); ?>
      <!-- end of wordpress head -->

      <!-- theme options from options panel -->
      <?php get_wpbs_theme_options(); ?>

      <!-- typeahead plugin - if top nav search bar enabled -->
      <?php require_once('library/typeahead.php'); ?>
      <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/library/css/font-awesome.css" type="text/css" />

    </head>

    <body <?php body_class(); ?>>
      <!--facebook-->
      <div id="fb-root"></div>
      <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s);
          js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=164950143540443";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
      <!--end facebook-->  
      <header role="banner">


        <nav class="navbar navbar-default" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <div class="header-logo">
                <a href="<?php echo get_bloginfo("url");?>"><img src="<?php bloginfo('template_directory')?>/images/tls-logo-small.png"/></a>
              </div>
              <div class="header-container container">
                <div class="nav nav-pills">
                  <li><a href="<?php echo get_bloginfo("url");?>">Home</a></li>
                  <li><a href="<?php echo get_bloginfo("url");?>/section/university">University</a></li>
                  <li><a href="<?php echo get_bloginfo("url");?>/section/menagerie">Menagerie</a></li>
                  <li><a href="<?php echo get_bloginfo("url");?>/section/sports">Sports</a></li>
                  <li><a href="<?php echo get_bloginfo("url");?>/section/opinion">Opinion</a></li>
                  <li><a href="http://www.facebook.com/media/albums/?id=149678604759">Photo</a></li>
                  <li><a href="<?php echo get_bloginfo("url");?>/about">About Us</a></li>
                  <li class="searchform"><?php get_search_form(); ?></li>
                </div>
              </div>
            </div>
              <div class="navbar-collapse collapse">
                <?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right">
                  <?php if(of_get_option('search_bar', '1')) {?>
                  <form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                    <div class="input-group">
                      <input name="s" id="s" type="text" class="form-control" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">Submit</button></span>
                    </div>
                  </form>
                  <?php } ?>
              </div>
          </div>
        </nav> <!-- end .navbar -->
      </header> <!-- end header -->
          <div class="container" style="background: white;">
