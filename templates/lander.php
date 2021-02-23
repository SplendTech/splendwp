<?php
/*
*
* Template Name: Lander
*/

get_header(); ?>

<div class="section bg_part" style="background-image:url('<?php the_field('lander_background', 'option') ?>')" >
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="lander_box">
      <div class="sides">
        <div class="left">
          <h2>Splend <?php the_title(); ?></h2>
          <div class="lander_text">
            <?php the_field('lander_content'); ?>
            <div class="btn__wrap">
              <a href="<?php the_field('available_cars', 'option') ?>" class="btn btn_styleLander">See available cars</a>
            </div>
          </div>
        </div>
        <div class="right">
          <h2>Contact us</h2>
          <div class="contact_fields">
            <div><strong>Address</strong><?php the_field('address'); ?></div>
            <div><strong>Phone number</strong> <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a> </div>
            <div><strong>Email</strong><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a> </div>
          </div>
          <a class="directions" href="<?php the_field('map_url'); ?>">Get directions</a>
          <div class="embed-container">
            <?php the_field('iframe_url'); ?>
          </div>
          <div class="schedule">
            <?php if ( have_rows('schedule') ): ?>
                <?php while ( have_rows('schedule') ) : the_row(); ?>
                  <div class="single_schedule sides">
                   <div class="half">
                     <?php the_sub_field('days') ?>
                   </div>
                   <div class="half">
                     <?php the_sub_field('hours') ?>
                   </div>
                  </div>
                <?php endwhile; ?>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
    <div class="global_box">
      <h2>
        <div class="topit">
          <?php the_field('member_title', 'option'); ?>
        </div>
        <div class="underit">
          <?xml version="1.0" standalone="no"?>
          <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
           "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
          <svg fill="#000000" version="1.0" xmlns="http://www.w3.org/2000/svg"
           width="280.000000pt" height="525.000000pt" viewBox="0 0 280.000000 525.000000"
           preserveAspectRatio="xMidYMid meet">
          <g transform="translate(0.000000,525.000000) scale(0.100000,-0.100000)" stroke="none">
          <path d="M464 4838 c-227 -227 -417 -423 -423 -435 -20 -40 -13 -96 18 -144
          16 -24 378 -393 805 -819 611 -611 776 -780 776 -800 0 -19 -168 -193 -789
          -815 -434 -434 -796 -804 -805 -822 -20 -40 -21 -95 -2 -131 8 -15 198 -210
          423 -435 l408 -407 736 737 c440 442 758 769 793 815 252 341 366 670 366
          1058 0 388 -114 717 -366 1058 -35 46 -352 372 -793 815 l-736 737 -411 -412z"/>
          </g>
          </svg>
          <span><?php the_field('member_subtitle', 'option'); ?></span>
        </div>
      </h2>
      <div class="sides">
        <?php if ( have_rows('benefits', 'option') ): ?>
            <?php while ( have_rows('benefits', 'option') ) : the_row(); ?>
              <div class="third single_benefit">
                <div class="img__wrap"><img src="<?php the_sub_field('icon') ?>" alt=" <?php the_sub_field('title') ?>"></div>
                <h3> <?php the_sub_field('title') ?></h3>
                <p><?php the_sub_field('content') ?></p>
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
      <a href="<?php the_field( "button1_url", "option" ); ?>" class="btn btn_big"><?php the_field( "button1_text", "option" ); ?> <i class="fas fa-arrow-right"></i></a>
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

<div class="blog_upsell">
  <div class="container">
    <div class="sides">
      <?php
        $featured_posts = get_field('featured_posts');
        if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ):

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <div class="third">
                  <h4>  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <p><?php echo wp_trim_words( get_the_content(), 22, '...' ); ?></p>
                  <a class="arrow_link" href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i></a>
                </div>
            <?php endforeach; ?>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
  </div>
</div>
<div class="questions" style="background-image:url('<?php the_field('questions_background', 'option') ?>')" >
  <div class="container">
    <a href="<?php the_field( "button4_url", "option" ); ?>">Have more questions? See our FAQ</a>
  </div>

</div>
<?php get_footer(); ?>
<script>
  jQuery('.slick_testimonials').slick({
    dots: true,
    infinite: true,
    arrows:false,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });
</script>
