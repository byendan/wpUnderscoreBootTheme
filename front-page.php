<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package peppers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="jumbotron">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="intro-message">
                                    <h1>Santa Barbara Senior Care Homes</h1>
                                    <h3>Residential Care Facilities for the Elderly</h3>

                                    <hr />
                                
                                    <a class="btn btn-primary" role="button" href="index.php/category/properties/">Locations</a>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container -->

                </div>
            
             <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Care Facilities That Feel Like Home</h2>
                    <p class="lead">Over time we have helped so many families with 'hard to handle' residents. Ray from Heritage, Patricia from Wood Glen Hall, Al from Maravilla, Joe from Villa Riviera, Myda and others from Marge's in Montecito, John from At Home, Catherine from Your Home, and as many again if we continued to list. All were asked to leave elsewhere for one reason or another, but were able to be accepted and intergrated at the Peppers. Moreover, they prospered and maintained quality years thereafter.<br /><br />

In many cases this may be explained by thier transitioning from a larger to a smaller facility, where the larger facilities typically do not have the staff ratio's for the personal attention they needed. But others benefited from our constant striving for normalcy as our basic philosophy.<br /><br />

Dementia, or diminished cognitive abilities does not have to so completely define someone. Our facilities have perimeter fencing and Dementia capabilities, but we approach it in a different way and with an expectation of maintaining normalcy, in spite of the manifestations of the Dementia itself. We have a great history of achieving this aim.  </p>
                </div>
                
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
            
            <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    
                </div>
                <div class="col-lg-5">
                    
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->


		<?php if ( have_posts() ) : ?>

			

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
//					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
