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
				
			<?php else : ?>
				
			<?php endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation navbar nav-home navbar-fixed-top topnav" role="navigation">
            <div class="container-fluid topnav">
                <div class="navbar-header">
			         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand topnav" href="<?php echo home_url(); ?>">Santa Barbara Care Homes</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			     
                    <ul class="nav navbar-nav navbar-right">
                    <?php 
                        $menue = get_nav_menu_locations()['primary'];
                        $menue_items = array();
                        foreach ( wp_get_nav_menu_items($menue) as $item) {
                            $item_array = array();
                            $item_array['link'] = $item->url;
                            $item_array['title'] = $item->title;
                            $item_array['name'] = $item->post_name;
                            $item_array['parent'] = $item->menu_item_parent;
                            $item_array['children'] = array();
                            $menue_items[] = $item_array;
                            
                                    
                        }
                        $sub_items = array();
                        $main_items = array();
                        foreach ($menue_items as $item) {
                            if ($item['parent'] == 0 ) {
                                $main_items[$item['name']] = $item;
                            } else {
                                $sub_items[] = $item;   
                            }
                        }

                        foreach ($sub_items as $sub_item) {
                            $parent = $sub_item['parent'];
                            $main_items[$parent]['children'][] = $sub_item;
                        }

                        

                        foreach($main_items as $item){
                            $link = $item['link'];
                            $title = $item['title'];
                            if( count($item['children']) == 0){
                                echo "<li><a href='$link'>$title</a></li>";  
                            } else {
                                echo "<li class='dropdown'><a href='#' class='dropdown-toggle'  data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>$title <span class='caret'></span></a><ul class='dropdown-menu'>";
                                foreach($item['children'] as $sub_item){
                                    $sub_link = $sub_item['link'];
                                    $sub_name = $sub_item['title'];
                                    echo "<li><a href='$sub_link'>$sub_name</a></li>";
                                }
                                    
                                echo "</ul></li>";
                            } 
                        }

                        ?>
                    </ul>
                </div>
            </div>
		</nav><!-- #site-navigation -->
        
        
        
        
        
        
	</header><!-- #masthead -->
    
  

	<div id="content" class="site-content">
