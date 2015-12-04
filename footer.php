<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peppers
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer foot" role="contentinfo">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline foot-list">
                        <?php 
                        $menue = get_nav_menu_locations()['primary'];
                        foreach ( wp_get_nav_menu_items($menue) as $item) {
                            $link = $item->url;
                            $title = $item->title;
                            echo "<li><a href='$link'>$title</a></li>";  
                            echo "<li class='footer-menu-divider'>&sdot;</li>";
                        } ?>
                       
                    </ul>
                    
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- jQuery -->
  

<?php if ( is_front_page()  ) : ?>

  <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>

<script>

window.onscroll = function() {myFunction()};

function myFunction() {
    var max_scroll = $(".jumbotron").height();
    if (document.body.scrollTop > max_scroll || document.documentElement.scrollTop > max_scroll) {
        $(".navbar").removeClass('nav-home');
    } else {
        $(".navbar").addClass('nav-home');
    }
}
</script>

<?php else : ?>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script>
$(document).ready(function(){

   $(".navbar").removeClass('nav-home');

}); 
    
</script>

<?php endif; ?>
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

    <script>

$( ".list-group-item" )
  .mouseover(function() {
    $(this).addClass("active");
    $(this).children().css('color', 'white');
  })
  .mouseout(function() {
    $(this).removeClass("active");
    $(this).children().css('color', '#337eb7');
  });

</script>

<!--
<script>
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
});
    
</script>
-->

<!--
<script>
    $(document).ready(function () {
       
        $(".navbar .navbar-header button").click(function(event) {
            $(".navbar-collapse").collapse('hide');
        });
    });
</script>
-->

<!--
<script>
    $(document).ready(function () {
        $('ul li a .dropdown-toggle').dropdown();
        
    });
</script>
-->

<?php wp_footer(); ?>


</body>
</html>
