<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Trekking
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<a class="skip-link screen-reader-text" href="#content_navigator">
<?php esc_html_e( 'Skip to content', 'skt-trekking' ); ?>
</a>
<?php
	$showpagebanner = esc_html(get_theme_mod('inner_page_banner_option', 1));
	$showpostbanner = esc_html(get_theme_mod('inner_post_banner_option', 1));
	$pagethumb = esc_html(get_theme_mod('inner_page_banner_thumb'));
	$postthumb = esc_html(get_theme_mod('inner_post_banner_thumb'));
	$topsocial = get_theme_mod('hide_header_social_icons', 1);	
	$fb_link = esc_url(get_theme_mod('hdr_fb_link')); 
	$twitt_link = esc_url(get_theme_mod('hdr_twitt_link'));
	$instagram_link = esc_url(get_theme_mod('hdr_instagram_link'));
	$linkedin_link = esc_url(get_theme_mod('hdr_linkedin_link'));
	$youtube_link = esc_url(get_theme_mod('hdr_youtube_link'));
?>
<div id="main-set">
<div class="header">
	<div class="container">
    <div class="logo">
		<?php skt_trekking_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <div id="logo-main">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
        </div>
    </div> 
        <div id="navigation" <?php if ( !class_exists( 'WooCommerce' ) ) { ?>class="fullnavig"<?php } ?>><nav id="site-navigation" class="main-navigation">
				<button type="button" class="menu-toggle">
					<span></span>
					<span></span>
					<span></span>
				</button>
		<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'primary-menu menu' ) ); ?>
			</nav></div>
            <?php if ( class_exists( 'WooCommerce' ) ) { ?>
            <div class="header-cart">
            	<a class="cart-customlocation" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'skt-trekking' ); ?>"> <img class="cart-customlocation" src="<?php echo esc_url(get_template_directory_uri());?>/images/cart-icon.png" /> <span class="custom-cart-count"><div id="mini-cart-count"></div></span> </a>  
            </div>   
            <?php } ?>
        <div class="clear"></div>    
  </div> <!-- container -->   
  <div class="clear"></div> 
  </div> <!-- header -->
  </div><!--main-set-->
  <?php if( !is_home() && !is_front_page() && is_page()) {?>
      <div class="clear"></div>
      <div class="inner-banner-thumb">
      	<?php if($showpagebanner == '') {?>
        <?php 	if ( has_post_thumbnail() ) {
                    echo esc_url(the_post_thumbnail('full'));
                }else{
			if(!empty($pagethumb)){ ?>
            <img src="<?php echo esc_url($pagethumb); ?>" />
            <?php } } ?>
        <?php } ?>    
        <div class="banner-container"><h1><?php the_title(); ?></h1></div>
        <div class="clear"></div>
      </div>
  <?php } ?>
  <?php if( !is_home() && !is_front_page() && !is_page() && is_single() && 'post' == get_post_type()) {?>
      <div class="clear"></div>
      <div class="inner-banner-thumb">
      	<?php if($showpostbanner == '') {?>
        <?php 	if ( has_post_thumbnail() ) {
                    echo esc_url(the_post_thumbnail('full'));
                }else{
			if(!empty($postthumb)){ ?>
            <img src="<?php echo esc_url($postthumb); ?>" />
            <?php }  } ?>
         <?php } ?>   
        <div class="banner-container"><h1><?php the_title(); ?></h1></div>
        <div class="clear"></div>
      </div>
  <?php } ?>  
  <?php if (is_category() || is_archive()) { ?>
  <div class="clear"></div>
  <div class="inner-banner-thumb">
      	<?php if($showpostbanner == '') {?>
        <?php 
			if(!empty($postthumb)){ ?>
            <img src="<?php echo esc_url($postthumb); ?>" />
            <?php }   ?>
         <?php } ?>   
        <div class="banner-container">
  	    <?php if ( class_exists( 'WooCommerce' ) ) {
		if(is_shop()) {
			?><h1><?php woocommerce_page_title(); ?></h1><?php
		}else{
		?><h1><?php the_archive_title(); ?></h1><?php	
		}
	}else{ ?>
    <h1><?php the_archive_title(); ?></h1>
    <?php } ?>	
  </div>
        <div class="clear"></div>
      </div>
  <?php } ?>  
  <div class="clear"></div> 
  