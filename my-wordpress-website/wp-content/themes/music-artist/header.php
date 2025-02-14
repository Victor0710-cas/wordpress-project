<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package music_artist
 */

$music_artist_options = music_artist_theme_options();
$facebook = $music_artist_options['facebook'];
$twitter = $music_artist_options['twitter'];

$site_title_show = $music_artist_options['site_title_show'];

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(get_option('music_artist_free_back_top_top_enable') && get_option('music_artist_free_back_top_top_enable') == "on" ){ ?>
<!-- Back to top -->
<div id="back-to-top" title="Go to top">
  <i class="fa fa-arrow-up" aria-hidden="true"></i>
</div>
<?php }?>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'music-artist' ); ?></a>


<div class="main-wrap">
	<header id="masthead" class="site-header">

		<div class="container">
             <div class="row">
				<div class="site-branding">
					<?php
					the_custom_logo(); 

					if($site_title_show == 1) { ?>
					<div class="logo-wrap">

					<?php

					if ( is_front_page() && is_home() ) :
						?>
						<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
						<?php
					else :
						?>
						<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
						<?php
					endif;
					$music_artist_description = get_bloginfo( 'description', 'display' );
					if ( $music_artist_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $music_artist_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
					</div>
					<?php } ?>

				<div class="search-wrap show-mobile">
					<div class="header-social">

						<?php 

						if($facebook) 
						echo '<div class="social-icon"><a href="'.esc_url($facebook).'"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></div>';

						if($twitter) 
						echo '<div class="social-icon"><a href="'.esc_url($twitter).'"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></div>';

 ?>

					</div>
					

				</div>




				</div><!-- .site-branding -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="mobile-menu-wrap">
            <button class="open-menu"><i class="fa fa-bars" aria-hidden="true"></i></button>
	            <div class="collapse navbar-collapse" id="navbar-collapse">

	             <?php
	                if (has_nav_menu('primary')) { ?>
	                <?php
	                    wp_nav_menu(array(
	                        'theme_location' => 'primary',
	                        'container' => '',
	                        'menu_class' => 'nav navbar-nav navbar-center',
	                        'menu_id' => 'menu-main',
	                        'walker' => new music_artist_nav_walker(),
	                        'fallback_cb' => 'music_artist_nav_walker::fallback',
	                    ));
	                ?>
	                <?php } else { ?>
	                    <nav id="site-navigation" class="main-navigation clearfix">
	                        <?php   wp_page_menu(array('menu_class' => 'menu','menu_id' => 'menuid')); ?>
	                    </nav>
	                <?php } ?>
					<button class="close-menu"><span class="sr-text"><?php echo esc_html__(
                 'Close Menu',
                 'music-artist'
             ); ?></span><i class="fa fa-times" aria-hidden="true"></i></button>
	            </div><!-- End navbar-collapse -->

			</div>


				<div class="search-wrap">
					<div class="header-social">

						<?php 

if($facebook) 
echo '<div class="social-icon"><a href="'.esc_url($facebook).'"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></div>';

if($twitter) 
echo '<div class="social-icon"><a href="'.esc_url($twitter).'"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></div>';


?>

					</div>


				</div>
				


	            
			</div>
		</div>
		
	</header><!-- #masthead -->
	<div class="breadcrumbs ">
		<div class="container ">
			<?php if (function_exists('check_breadcrumb')) check_breadcrumb();   ?>
		</div>
	</div>

