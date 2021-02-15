<?php
/*
*
* Template Name: Reviews
*/

get_header(); ?>

<div class="section hero_part inner_global">
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

<div class="section reviews_part">
  <div class="container">
    <div class="alternate">
      <?php if ( have_rows('reviews') ): ?>
          <?php while ( have_rows('reviews') ) : the_row(); ?>
            <div class="single_review sides">
              <div class="left">
                <h2><?php the_sub_field('title') ?></h2>
                <p><?php the_sub_field('content') ?></p>
                <?php if( get_Sub_field( "story_url" ) ) : ?>
                  <a href="<?php the_sub_field( "story_url" ); ?>">
                <?php endif; ?>
              </div>
              <div class="right">
                <div class="video-gallery">
                  <a href="<?php the_sub_field( "video_url" ); ?>" >
                      <img src="<?php the_sub_field( "video_thumb" ); ?>" />
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="section more_testimonials">
  <div class="container">
      <h3 class="more_toggler">See more testimonials</h3>
      <div class="more_loop sides">
        <?php if ( have_rows('more_reviews') ): ?>
            <?php while ( have_rows('more_reviews') ) : the_row(); ?>
            <div class="half">
              <div class="embed-container">
                <?php the_sub_field('video'); ?>
              </div>
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
  </div>
</div>

<div class="orange_part">
  <div class="section global_on_inner">
    <div class="container">
        <a href="<?php the_field( "button1_url", "option" ); ?>" class="btn btn_big dark"><?php the_field( "button1_text", "option" ); ?> <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
  <div class="video_part">
    <div class="container">
      <div class="embed-container">
        <?php the_field('video'); ?>
      </div>
    </div>
  </div>
  <div class="section prices_part">
    <div class="container">
      <div class="sides">
        <div class="left">
          <h2>  <?php the_field( "documents_title", 'option' ); ?></h2>
          <?php if ( have_rows('documents', 'option' ) ): ?>
            <ul>
              <?php while ( have_rows('documents', 'option' ) ) : the_row(); ?>
                <li>  <?php the_sub_field('document') ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
        <div class="right">
          <h2>  <?php the_field( "costs_title", 'option' ); ?></h2>
          <div class="cost_text">
            <?php the_field( "costs_content", 'option' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section global_footer_banners">
  <div class="container">
    <div class="footer_buttons">
      <a href="<?php the_field( "button3_url", "option" ); ?>" class="btn btn_style3"><span><?php the_field( "button3_text", "option" ); ?></span><i class="fas fa-arrow-right"></i></a>
      <a href="<?php the_field( "button4_url", "option" ); ?>" class="btn btn_style3"><span><?php the_field( "button4_text", "option" ); ?></span><i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<div class="section colophon_boxes" style="background-image:url(<?php the_field( 'colophon_background', 'option' ); ?>)">
  <div class="container">
    <div class="sides">
      <div class="left">
        <a href="<?php the_field( "left_url", "option" ); ?>">
          <h3><?php the_field( "left_title", "option" ); ?></h3>
          <p><?php the_field( "left_text", "option" ); ?></p>
        </a>
      </div>
      <div class="right">
        <a href="<?php the_field( "right_url", "option" ); ?>">
          <h3><?php the_field( "right_title", "option" ); ?></h3>
          <p><?php the_field( "right_text", "option" ); ?></p>
        </a>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>
<script>
  jQuery('.video-gallery').lightGallery({controls:false, thumbnail:false});
</script>
