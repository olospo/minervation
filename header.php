<!DOCTYPE html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="application-name" content="<?php bloginfo('name'); ?>" />
	<meta name="googlebot" content="noodp" />
	<meta name="mssmarttagspreventparsing" content="TRUE" />
	<meta name="google" content="notranslate" />
	<meta name="apple-mobile-web-app-capable" content="yes"> <!-- Charset Encoding-->
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> <!-- Charset Encoding-->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-152.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-120.png">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-76.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-60.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<script src="//use.typekit.net/dlu2evo.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<?php wp_head(); ?>

</head>
<body <?php body_class( ); ?> data-site-url="<?php echo get_site_url( ); ?>">
	<div id="top-line"></div>
	<header>
    <nav class="navbar navbar-default" id="nav" role="navigation">
      <div class="container">
        
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>    
          <a class="navbar-brand" href="<?php echo get_site_url( ); ?>">
            <img class="img-responsive logo" src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="Minervation Logo">
          </a>          
        </div>
        
        <div class="collapse navbar-collapse">
          <?php $args = array( 
            'theme_location'  => 'primary',
            'container'       => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
          ); ?>
          <?php wp_nav_menu( $args ); ?>
          <div id="sb-search" class="sb-search">
            <form role="search" action="<?php echo get_site_url( ); ?>/" method="get">
              <input class="sb-search-input" placeholder="Search" type="text" value="" name="s" id="search">
              <input class="sb-search-submit" type="submit" value="">
              <span class="sb-icon-search glyphicon glyphicon-search"></span>    
            </form>
          </div>

        </div>
          <!-- Secondary menu for some pages -->
          <?php if (is_page( 'about' ) || is_page( 'associates' ) || is_page( 'team-members' ) ) : ?>
						<?php wp_nav_menu( array( 'theme_location' => 'about','container' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s list-unstyled list-inline">%3$s</ul>' ) ); ?>
					<?php elseif ( is_page( 'services' ) || (is_page() && $post->post_parent > 0) ) : ?>
			      <?php wp_nav_menu( array( 'theme_location' => 'services', 'container' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s list-unstyled list-inline">%3$s</ul>' ) ); ?>
					<?php endif; ?>
      </div><!-- /.container -->
    </nav>
	</header>