<?php
/*
*
* Template Name: Contact
*/

get_header(); ?>

<div class="section hero_part inner_global">
  <div class="container">
    <div class="sides">
      <div class="left">
        <h1><?php the_field( "hero_title" ); ?> <span> <?php the_field( "sub_title" ); ?> </span> </h1>
        <h2><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></h2>
        <h2><a href="mailto:<?php the_field('email'); ?>"> <?php the_field('email'); ?></a></h2>
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
<div class="section contact_part">
  <div class="container">
    <h2><?php the_field('middle_title'); ?></h2>
    <p><?php the_field('middle_content'); ?></p>
  </div>
</div>

<div class="section contact_boxes">
  <div class="container">
    <div class="sides">
      <?php
      $featured_posts = get_field('locations');
      if( $featured_posts ): ?>
          <?php foreach( $featured_posts as $post ):
            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>
            <div class="half">
              <div class="left__contact">
                <h2>Splend <?php the_title(); ?></h2>
                <div class="lander_text">

                  <!-- <a href="<?php the_field('available_cars', 'option') ?>" class="btn btn_styleLander">See available cars</a> -->
                </div>
                  <div><strong>Address</strong> <?php the_field('address'); ?></div>
                <a class="directions" href="<?php the_field('map_url'); ?>">Get directions</a>
              </div>
              <div class="right__contact">
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
