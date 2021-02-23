<?php
/*
*
* Template Name: Page with Hero
*/

get_header(); ?>
<div class="section hero_part inner_global empty_page" style="min-height:400px;">
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
			background-image:url(<?php the_field( "hero_background"); ?>);
		}
		@media(max-width:480px){
			.hero_part {
				background-image:url(<?php the_field( "hero_fallback"); ?>);
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

<?php get_footer(); ?>
