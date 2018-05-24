<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>

						<!--<p id="footer-info"><?php printf( __( 'Designed by %1$s | Powered by %2$s', 'Divi' ), '<a href="http://www.elegantthemes.com" title="Premium WordPress Themes">Elegant Themes</a>', '<a href="http://www.wordpress.org">WordPress</a>' ); ?></p>-->
					 <div class="footer_outer clearfix">
    <div class="onepcssgrid-1000"><div>test</div>
    <div>Copyright <?php echo date("Y");?> Rutgers, The State University of New Jersey, an equal opportunity, affirmative action institution. All rights reserved.</div></div>
    </div>
                                        
                                        
                                        </div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
		
        <script>
		
		jQuery(window).on('load resize', function(){
		var win = jQuery(this); 
		 if (win.width() < 600) {
			//alert("hi");
			
             jQuery(".search_outer").insertAfter(".titleundlo");
			 } else {
			 //alert("hi");
			 //alert("hi");
			jQuery(".search_outer").insertAfter(".nwlg");
			 }
			 
            });
		
           /* jQuery(document).ready(function() {
             jQuery(".search_outer").insertAfter("#et-top-navigation");
            });*/
            </script>
<?php //$xy=dynamic_sidebar("postpageurl");

?>

<?php //endif; ?>

        <?php if (is_single() || is_category() || is_tag() || is_search()) {   //  displaying a single blog post or a blog archive ?>
    <script type="text/javascript">
        jQuery("li.current-post-parent").addClass('current-menu-item');
		jQuery("li.current_page_parent").addClass('current-menu-item');
    </script>
<?php } ?>
		<script>
        jQuery(document).ready(function() {
             jQuery(".more-link").text("Read more...");
          });
            </script>   
</body>
</html>
