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
<body id="full_content" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<?php
		wp_nav_menu( array(
			'menu' => 'Main',
			'menu_class'=> 'menu__mobile'
		) );
		?>
		<!-- <div class="mobile-header-menu abs-zero">
      <div class="close-button-wrap">
				<a href="javascript:void(0)" class="header-close-button closebtn" onclick="closeNav()">&times;</a>
			</div>
      <ul>
        <li><a href="/smth">Plans</a></li>
        <li><a href="/smth">How it works</a></li>
		    <li><a href="/smth">Reviews</a></li>
		    <li><a href="/smth">About us</a></li>
		    <li><a href="/smth">News</a></li>
		    <li><a href="/smth">FAQ</a></li>
		    <li><a href="/smth">Contact</a></li>
		    <li><a href="/smth">Sign up</a></li>
      </ul>
    </div> -->
</div>
<script>
var $ = jQuery;
$(document).ready(function(){
	$('.greencolor a').on('click', function(e){
		e.preventDefault();
		$(this).parent().find('ul').toggle();
		$(this).parent().toggleClass('opened');
	});
});
function openNav() {
	document.getElementById("mySidenav").style.width = "280px";
	document.getElementById("page__wrapper").style.marginLeft = "-280px";
	document.getElementById("page__wrapper").style.marginRight = "280px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("page__wrapper").style.marginLeft= "0";
	document.getElementById("page__wrapper").style.marginRight= "0";
}
</script>
<div id="page__wrapper">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'splend' ); ?></a>
	<header id="masthead" class="site-header">
		<!-- Use any element to open the sidenav -->
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
					<span onclick="openNav()"><i class="bars__open fa fa-bars"></i></span>
					<?php
						wp_nav_menu( array(
							'menu' => 'Main',
							'menu_class'=> 'menu__desktop'
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
