<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Splend
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'splend' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="left__side">
				<div class="quarter">
					<a href="/index.php" class="site_logo">
							<img src="<?php the_field( "logo", "option" ); ?>" alt="Splend">
					</a>
				</div>
			</div>
			<div class="right__side">
				<div class="half">
					<?php
						wp_nav_menu( array(
							'menu' => 'Main'
						) );
						?>
				</div>
				<!--<div class="quarter">
					<div class="lang_switcher">
						<a href="#">
							AU <i class="fas fa-chevron-down"></i>
						</a>
						<div class="lang_drop">
								<a href="https://www.splend.co.uk">United Kingdom</a>
								<a href="https://www.splend.com">Global</a>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</header><!-- #masthead -->
