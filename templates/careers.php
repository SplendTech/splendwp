<?php
/*
*
* Template Name: Careers
*/

get_header(); ?>
<div class="section hero_part inner_global blue_page">
	<div class="container">
		<div class="sides">
			<div class="left">
				<h2><?php the_field('top_title') ?></h2>
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

<div class="section video_part">
  <div class="container">
    <div class="modal_wrapper">
      <div class="video-gallery">
        <a class="glightbox3" href="<?php the_field( "video_url" ); ?>" >
            <img src="<?php the_field( "video_thumb" ); ?>" />
        </a>
      </div>
      <div class="absolute_box">
        <div class="topside">
          <h1><?php the_field( "video_title" ); ?></h1>
        </div>
        <div class="play_button"><span class="dashicons dashicons-arrow-right"></span></div>
      </div>
    </div>
  </div>
</div>


<div class="section howitworks">
  <div class="container">
    <div class="sides">
      <div class="left">
        <h2><?php the_field( "people_title" ); ?></h2>
        <div class="paragraph">
          <?php the_field( "people_text" ); ?>
        </div>
          <a href="mailto:<?php the_field( "email" ); ?>" class="btn btn_style_email"><?php the_field( "email" ); ?></a>
      </div>
      <div class="right">
        <img src="<?php the_field( "people_right_image" ); ?>" alt="<?php the_field( "people_title" ); ?>">
      </div>
    </div>
  </div>
</div>

<div class="section content_about">
  <div class="container">
    <h2><?php the_field( "content_title" ); ?></h2>
    <img src="<?php the_field( "content_image" ); ?>" alt="<?php the_field( "content_title" ); ?>">
    <div class="boxes sides boxes_small">
      <?php if ( have_rows('boxes') ): ?>
          <?php while ( have_rows('boxes') ) : the_row(); ?>
            <div class="third">
              <h3>  <?php the_sub_field('title'); ?></h3>
              <p>  <?php the_sub_field('content'); ?></p>
            </div>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="section bottom_boxes">
  <div class="container">
    <div class="sides">
      <div class="left" style="background-image:url(<?php the_field( 'left_box_background' ); ?>);">
        <h2><?php the_field( "left_box_title" ); ?></h2>
        <p><?php the_field( "left_box_content" ); ?></p>
      </div>
      <div class="right" style="background-image:url(<?php the_field( 'right_box_background' ); ?>);">
        <h2><?php the_field( "right_box_title" ); ?></h2>
        <a class="btn cyan_btn" href="<?php the_field( "right_box_url" ); ?>"><?php the_field( "right_box_label" ); ?></a>
      </div>
        <a href="<?php the_field( "button_url"); ?>" class="btn btn_style3"><span><?php the_field( "button_text"); ?></span><i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</div>
