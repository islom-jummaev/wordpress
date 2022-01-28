<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Educenter
 */

?>

	</div><!-- #content -->

	<?php

		do_action( 'educenter_footer_before');

			/**
			 * @see  educenter_footer_widget_area() - 10
			*/
			do_action( 'educenter_footer_widget');

	    	/**
	    	 * Button Footer Area
	    	   * @see  educenter_copyright() - 5
	    	*/
	    ?>
			<div class="bottom-footer clearfix">

				<div class="container">
				<center>
					<div class="footer-bottom">

						<p>Copyright  © 2022 Termiz muxandis texnologiya instuti</p>

					</div>

					<div class="footer-bottom-right"></div>
				</div>
				</center>
			</div>
				<?php
	    
	    do_action( 'educenter_footer_after');
	?><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
