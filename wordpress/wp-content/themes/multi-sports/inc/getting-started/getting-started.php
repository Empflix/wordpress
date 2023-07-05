<?php
//about theme info
add_action( 'admin_menu', 'multi_sports_gettingstarted' );
function multi_sports_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'multi-sports'), esc_html__('About Theme', 'multi-sports'), 'edit_theme_options', 'multi_sports_guide', 'multi_sports_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function multi_sports_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'multi_sports_admin_theme_style');

//guidline for about theme
function multi_sports_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'multi-sports' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Multi Sports WordPress Theme', 'multi-sports' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'multi-sports' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'multi-sports' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'multi-sports' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'multi-sports' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'multi-sports' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'multi-sports' ); ?> <a href="<?php echo esc_url( MULTI_SPORTS_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'multi-sports' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'This Multi Sports theme is an extraordinary theme that is a perfect fit for any kind of sports. Let it be cricket, Rugby, Soccer, Hockey, Tennis, Basketball, Football, Volleyball, Baseball, Games or any other sports this theme is capable to serve all sports and any sport-related website including sports clubs and sports training academies. Its layout is clean and elegantly crafted to give your site a professional look. Every single section is designed with simplicity and is tailored to match your taste as it has a theme customizer that offers plenty of personalization options. It is 100% responsive and makes your site fit perfectly in all the screen sizes. Packed with secure and clean codes, it can attract a lot of visitors on your site due to its SEO friendly design. Multi Sports theme is optimized to deliver fast loading pages and extraordinary web experience to your visitors. The Bootstrap based design not only gives a strong foundation to your website but also grants you enough flexibility. The stunning animations add to the attractiveness of your website. It offers everything that you need to build a sophisticated and captivating sports website.', 'multi-sports')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Multi Sports Theme', 'multi-sports' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'multi-sports'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( MULTI_SPORTS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'multi-sports'); ?></a>
			<a href="<?php echo esc_url( MULTI_SPORTS_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'multi-sports'); ?></a>
			<a href="<?php echo esc_url( MULTI_SPORTS_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'multi-sports'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/multi-sports.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'multi-sports'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'multi-sports'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'multi-sports'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>