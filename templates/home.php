<?php
/*
*
* Template Name: Homepege
*/

get_header(); ?>

<div class="section hero_part">
  <div class="container">
    <div class="sides">
      <div class="left">
        <h1 data-aos="fade-up" data-aos-delay="50" data-aos-duration="600" data-aos-easing="ease-in-out"> <?php the_field( "hero_title" ); ?> </h1>
        <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="800" data-aos-easing="ease-in-out"> <?php the_field( "hero_subtitle" ); ?></h2>
        <div class="cta_buttons" data-aos="fade-up" data-aos-delay="220" data-aos-duration="1000" data-aos-easing="ease-in-out">
          <a href="<?php the_field( "button1_url", "option" ); ?>" class="btn btn_style1"><?php the_field( "button1_text", "option" ); ?></a>
          <a href="<?php the_field( "button2_url", "option" ); ?>" class="btn btn_style2"><?php the_field( "button2_text", "option" ); ?></a>
        </div>
        <div class="rating_box" class="cta_buttons" data-aos="fade-up" data-aos-delay="260" data-aos-duration="1200" data-aos-easing="ease-in-out">
          <img src="<?php the_field( "rating_image", "option" ); ?>" alt="rating">
          <?php the_field( "rating_text", "option" ); ?>
        </div>
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

<div class="section partners">
  <div class="container">
    <h2><?php the_field( "partners_title", "option" ); ?></h2>
    <div class="partners_loop">
      <?php if ( have_rows('partners', 'option') ): ?>
          <?php while ( have_rows('partners', 'option') ) : the_row(); ?>
             <img src="<?php the_sub_field('partner_logo'); ?>" alt="<?php the_field( "partners_title", "option" ); ?>">
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="section howitworks">
  <div class="container">
    <div class="sides">
      <div class="left">
        <h2><?php the_field( "how_it_works_title" ); ?></h2>
        <div class="paragraph">
          <?php the_field( "how_it_works_content" ); ?>
        </div>
          <a href="<?php the_field( "how_it_works_button_url" ); ?>" class="btn btn_style1"><?php the_field( "how_it_works_button_text" ); ?></a>
      </div>
      <div class="right">
        <img src="<?php the_field( "how_it_works_right_image" ); ?>" alt="<?php the_field( "how_it_works_title" ); ?>">
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
  </div>
</div>

<?php get_template_part('template-parts/comparator', 'index') ?>

<div class="section plans">
  <div class="container">
    <div class="sides">
      <?php if ( have_rows('plans') ): ?>
          <?php while ( have_rows('plans') ) : the_row(); ?>
              <a class="plan_bix half" href="<?php the_sub_field('plan_url') ?>">
                  <img src="<?php the_sub_field('plan_image') ?>" alt="<?php the_sub_field('plan_title') ?>">
                  <h2><?php the_sub_field('plan_title') ?> <span><?php the_sub_field('plan_price') ?></span> </h2>
                  <div class="plan_text_wrapper">
                    <p><?php the_sub_field('plan_text') ?></p><i class="fas fa-arrow-right"></i>
                  </div>
             </a>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="section testimonials">
  <div class="container">
    <h2> <?php the_field( "reviews_title" ); ?> </h2>
    <h3>Google <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h3>
    <div class="slick_testimonials">
      <?php if ( have_rows('reviews') ): ?>
          <?php while ( have_rows('reviews') ) : the_row(); ?>
            <div class="single_test">
              <h4><?php the_sub_field('review_title') ?></h4>
              <p><?php the_sub_field('review_text') ?></p>
            </div>
          <?php endwhile; ?>
      <?php endif; ?>
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

<?php get_footer(); ?>
<script>
  var lightboxVideo = GLightbox({
      selector: '.glightbox3'
  });
  jQuery(".play_button").on("click", () => {
    jQuery("video-gallery").trigger("click");
  });
  $('.play_button').click(function(){
    jQuery("video-gallery a").trigger("click");
  })
  jQuery('.slick_testimonials').slick({
    dots: true,
    infinite: true,
    arrows:false,
    speed: 700,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 4000,
  });
</script>
