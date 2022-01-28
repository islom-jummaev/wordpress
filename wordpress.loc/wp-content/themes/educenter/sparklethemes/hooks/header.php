<?php
/**
 * Header Section Skip Area
*/
if ( ! function_exists( 'educenter_skip_links' ) ) {
	/**
	 * Skip links
	 * @since  1.0.0
	 */
	function educenter_skip_links() { ?>
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html_e( 'Skip to content', 'educenter' ); ?>
			</a>
		<?php
	}
}
add_action( 'educenter_header_before', 'educenter_skip_links', 5 );


if ( ! function_exists( 'educenter_header_before' ) ) {
	/**
	 * Header area
	 * @since  1.0.0
	*/
	function educenter_header_before() {
		?>
			<header id="masthead header" class="site-header general-header header-layout-1" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">		
		<?php
	}
}
add_action( 'educenter_header_before', 'educenter_header_before', 10 );

/**
 * Top header area
*/
if ( ! function_exists( 'educenter_top_header' ) ) {
	
	function educenter_top_header() { 

	   		$top_header_options = get_theme_mod( 'educenter_top_header', 0 );

	   		if($top_header_options == 1 ){ 
	   	?>
	   		<div class="top-header clearfix">

				<div class="container">

					<div class="contact-info left-contact">

						
			<ul class="quickcontact">
				  <li>
                    <a href="">
                    <img src="/wp-content/uploads/2022/01/gerb.png" height="25px" width="25px">
					  </a>
                  </li>
				  <li>
                    <a href="">
                    <img src="/wp-content/uploads/2022/01/flag.png" height="25px" width="25px">
					  </a>
                  </li>
				
                  <li>
                    <a href="mailto:info@otm.uz">
                      <i class="fas fa-envelope"></i>
                      info@otm.uz                    </a>
                  </li>
                                
                                      
                  <li>                                    
                    <a href="tel:03762218720">
                      <i class="fas fa-phone"></i>
                      (0376) 221-87-20                    </a>
                  </li>
                                
                                     
                  <li>                                
                  <i class="fas fa-map"></i>
                  190100, Termiz sh., Islom Karimov ko’chasi, 288а uy                  </li>
                                
                                             
            </ul>
					</div>

					<div class="right-contact clearfix">

					<ul class="edu-social">
                            <li>
                    <a href="#">
						 <i class="fa fa-sitemap"></i>
                    </a>
                </li>
            
                  <li> 
                  <a href="#" class="bvi-open">
                   <i class="fa fa-eye"></i>
                  </a>
                </li>
						
                 <li>
                  <a href="#">
                   <i class="fa fa-rss"></i>
                  </a>
                </li>
     
                <li>		
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
            
                    <li> 
                  <a href="#">
                  <img src="/wp-content/uploads/2022/01/telegram.png" height="25px" width="25px">
                  </a>
                </li>
                <li> 
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
               </li>
				<li> 
                  <a href="/">
                   <img src="/wp-content/uploads/2022/01/uz.png" height="25px" width="25px">
                  </a>
               </li>
				<li> 
                  <a href="/ru">
                  <img src="/wp-content/uploads/2022/01/ru.png" height="25px" width="25px">
                  </a>
               </li>
				<li> 
                  <a href="/en">
                   <img src="/wp-content/uploads/2022/01/en.png" height="25px" width="25px">
                  </a>
               </li>
             </ul>
						
					</div>

				</div>

			</div>
	   		
	   	<?php } 
	}
}
add_action( 'educenter_header', 'educenter_top_header', 15 );


/**
 * Main header area
*/
if ( ! function_exists( 'educenter_main_header' ) ) {
	
	function educenter_main_header() { ?>

		<div class="bottom-header clearfix">
			<div class="container">
				<div class="header-middle-inner">
					<div class="site-branding logo">
						
						<?php the_custom_logo(); ?>

						<div class="brandinglogo-wrap">
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>
							<?php
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php endif;  ?>
						</div>

						<button class="header-nav-toggle" data-toggle-target=".header-mobile-menu"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
				            <div class="one"></div>
				            <div class="two"></div>
				            <div class="three"></div>
						</button><!-- Mobile navbar toggler -->

					</div><!-- .site-branding -->
					
					<div class="box-header-nav main-menu-wapper">
						<?php
							wp_nav_menu( array(
									'theme_location'  => 'menu-1',
									'menu'            => 'primary-menu',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'main-menu',
								)
							);
						?>
	                </div>
				</div>
			</div>
		</div>

		<?php
	}
}
add_action( 'educenter_header', 'educenter_main_header', 20 );



if ( ! function_exists( 'educenter_header_after' ) ) {
	/**
	 * Header area
	 * @since  1.0.0
	*/
	function educenter_header_after() {
		?>
			</header><!-- #masthead -->
		<?php
	}
}
add_action( 'educenter_header_after', 'educenter_header_after', 25 );