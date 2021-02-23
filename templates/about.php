<?php
/*
*
* Template Name: About
*/

get_header(); ?>

<div class="section hero_part about_page">
  <div class="container">
    <div class="sides">
      <div class="left">
        <h1><span> <?php the_field( "top_title" ); ?> </span> <?php the_field( "hero_title" ); ?> </h1>
      </div>
      <div class="right">
      </div>
    </div>
  </div>
  <style>
    .hero_part {
      background-image:url(<?php the_field( "hero_background" ); ?>);
    }
    @media(max-width:480px){
      .hero_part {
        background-image:url(<?php the_field( "hero_fallback" ); ?>);
      }
    }
  </style>
</div>

<div class="section content_about">
  <div class="container">
    <h2><?php the_field( "content_title" ); ?></h2>
    <img src="<?php the_field( "content_image" ); ?>" alt="<?php the_field( "content_title" ); ?>">
    <div class="boxes sides">
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

<div class="section journey">
  <div class="container">
    <h2><?php the_field( "journey_title" ); ?></h2>
    <div class="sides">
      <div class="left">
          <p><?php the_field( "journey_text1" ); ?></p>
      </div>
      <div class="right">
        <img src="<?php the_field( "journey_image1" ); ?>" alt="<?php the_field( "journey_title" ); ?>">
      </div>
    </div>
    <div class="sides">
      <div class="left">
        <img src="<?php the_field( "journey_image2" ); ?>" alt="<?php the_field( "journey_title" ); ?>">
      </div>
      <div class="right">
        <p><?php the_field( "journey_text2" ); ?></p>
      </div>
    </div>
  </div>
</div>

<div class="section video_part">
  <div class="container">
    <div class="modal_wrapper">
      <div class="video-gallery">
        <img src="<?php the_field( "video_thumb" ); ?>" />
        <div class="absolute_box">
          <div class="topside">
            <a class="glightbox3" href="<?php the_field( "video_url" ); ?>" ><h1><?php the_field( "video_title" ); ?></h1></a>
            <a class="url_to_test" href="<?php the_field( "testimonials_url" ); ?>"><?php the_field( "testimonials_text" ); ?></a>
          </div>
          <a class="glightbox3" href="<?php the_field( "video_url" ); ?>" ><div class="play_button"><span>&#11208;</span></div></a>
        </div>
      </div>
    </div>
    <a class="btn cyan_btn btn_testimonial" href="<?php the_field( "testimonials_url" ); ?>"><?php the_field( "testimonials_text" ); ?></a>
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
    </div>
  </div>
</div>

<div class="blog_upsell">
  <div class="container">
    <div class="sides">
      <?php if ( have_rows('featured_posts') ): ?>
          <?php while ( have_rows('featured_posts') ) : the_row(); ?>
            <div class="third">
              <h4>  <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a></h4>
                <p><?php the_sub_field('content'); ?></p>
                <a class="arrow_link" target="_blank" href="<?php the_sub_field('url'); ?>"><i class="fas fa-arrow-right"></i></a>
            </div>
          <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
<script>
  var lightboxVideo = GLightbox({
      selector: '.glightbox3'
  });
</script>
