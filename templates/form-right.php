<?php
/*
*
* Template Name: Form on Right
*/

get_header(); ?>


<div class="section hero_part inner_global">
	<div class="container">
		<div class="sides">
			<div class="left">
				<h1><span><?php the_field( "top_title" ); ?></span><?php the_field( "main_title" ); ?></h1>
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

<div class="default_section section">
  <div class="container">
    <div class="sides">
      <div class="left">
        <h2><?php the_field( "content_title" ); ?></h2>
        <div class="paragraph">
          <?php the_field( "content_text" ); ?>
        </div>
      </div>
      <div class="right">
        <?php $contactform = get_field('form_code'); ?>
        <?php echo do_shortcode($contactform) ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();
