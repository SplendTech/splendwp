<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Splend
 */

get_header();
?>

<div class="section hero_part inner_global">
	<div class="container">
		<div class="sides">
			<div class="left">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="right">
			</div>
		</div>
	</div>
	<style>
		.hero_part {
			background-image:url(<?php the_field( "blog_hero", 'option'); ?>);
		}
		@media(max-width:480px){
			.hero_part {
				background-image:url(<?php the_field( "blog_hero_fallback", 'option'); ?>);
			}
		}
	</style>
</div>

<div class="post_main">

	<div class="container">
		<div class="default_page">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php get_footer();
