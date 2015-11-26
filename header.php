<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peppers
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<?php wp_enqueue_script("jquery"); ?>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'peppers' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<div class="jumbotron">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="intro-message">
                                    <h1>The Peppers Estate</h1>
                                    <h3>A Residential Care Facility for the Elderly</h3>

                                    <hr />

                                    <h4>430 Hot Springs Road
                                        Santa Barbara, Ca. 93108</h4>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container -->

                </div>
			<?php else : ?>
				
			<?php endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation nav-home navbar-fixed-top topnav" role="navigation">
            <div class="container topnav">
                <div class="navbar-header">
			         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand topnav" href="<?php echo home_url(); ?>">Peppers Estate</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			     
                    <ul class="nav navbar-nav navbar-right">
                    <?php 
                        $menue = get_nav_menu_locations()['primary'];
                        foreach ( wp_get_nav_menu_items($menue) as $item) {
                            $link = $item->url;
                            $title = $item->title;
                            echo "<li><a href='$link'>$title</a></li>";          
                        } ?>
                    </ul>
                </div>
            </div>
		</nav><!-- #site-navigation -->
        
        
        
        
        
        
	</header><!-- #masthead -->
    
  

	<div id="content" class="site-content">
