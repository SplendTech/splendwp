<?php
/*
*
* Template Name: Why Splend
*/

get_header(); ?>
<div class="section hero_part inner_global center_page" style="min-height:400px;">
	<div class="container">
		<div class="sides">
			<div class="left">
				<h2><?php the_field('center_title') ?></h2>
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

<div class="section alternate_part">
	<div class="container mini-container">
		<h1><?php the_field('main_title') ?></h1>
    <h3><?php the_field('subtitle') ?></h3>
    <div class="alternate">
      <?php if ( have_rows('reasons') ): ?>
          <?php while ( have_rows('reasons') ) : the_row(); ?>
              <div class="single_alternate sides">
                <div class="left">
                  <img src="<?php the_sub_field( "image"); ?>" alt="<?php the_sub_field( "title"); ?>">
                </div>
                <div class="right">
                  <h4><?php the_sub_field( "title"); ?></h4>
                  <p><?php the_sub_field( "content"); ?></p>
                </div>
              </div>
          <?php endwhile; ?>
      <?php endif; ?>


      </div>
      <h2><?php the_field('bottom_title') ?></h2>
      <h4><?php the_field('bottom_text') ?></h4>
    </div>
	</div>
</div>

<?php get_footer(); ?>
