<?php
/*
*
* Template Name: Plans Inner
*/

get_header(); ?>
<div class="section crosssell">
  <div class="container">
    <a class="cross_link" href="<?php the_field( "cross_url" ); ?>"><?php the_field( "cross_text" ); ?></a>
  </div>
</div>
<div class="section hero_part inner_page">
  <div class="container">
    <div class="sides">
      <div class="left">
        <h1> <?php the_field( "hero_title" ); ?> </h1>
        <h2 class="hero_title_2"><?php the_field( "hero_title_2" ); ?></h2>
        <h2>
          <span class="svg">
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
          </span>
          <span class="hero_title_3"><?php the_field( "hero_title_3" ); ?></span>
        </h2>

        <div class="rating_box">
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


<div class="section content_part">
  <div class="container">
    <div class="sides">
      <div class="left">
        <h2><?php the_field( "content_title" ); ?></h2>
        <h3><?php the_field( "content_subtitle" ); ?></h3>
        <div class="paragraph">
          <?php the_field( "content_text" ); ?>
        </div>
        <div class="cta_buttons">
          <a href="<?php the_field( "button1_url", "option" ); ?>" class="btn btn_style_accent"><?php the_field( "button1_text", "option" ); ?></a>
          <a href="<?php the_field( "button2_url", "option" ); ?>" class="btn btn_style2"><?php the_field( "button2_text", "option" ); ?></a>
        </div>
      </div>
      <div class="right">
        <img src="<?php the_field( "content_right_image" ); ?>" alt="<?php the_field( "how_it_works_title" ); ?>">
      </div>
    </div>

  </div>
</div>

<div class="section include">
  <div class="container">
    <div class="include_boxes sides">
      <div class="third main_box">
        <h2><?php the_field( "include_title" ); ?></h2>
        <div class="bullets">
          <?php if ( have_rows('items') ): ?>
              <?php while ( have_rows('items') ) : the_row(); ?>
                <div class="single_item_included">
                  <?php the_sub_field('item') ?>
                </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <?php if ( have_rows('cars') ): ?>
          <?php while ( have_rows('cars') ) : the_row(); ?>
            <div class="third car_box">
              <div class="car_box_inside">
                <img src="<?php the_sub_field('car_image') ?>" alt="<?php the_sub_field('car_title') ?>">
                <h3><?php the_sub_field('car_title') ?></h3>
                <h4><?php the_sub_field('car_pricing') ?></h4>
                <p><?php the_sub_field('car_text') ?></p>
                <?php if( get_sub_field( "car_url" ) ) : ?>
                    <a class="car_url" href="<?php the_sub_field('car_url') ?>">Click here for more car info.</a>
                <?php endif; ?>
                <?php if( get_sub_field( "note" ) ) : ?>
                    <p class="note"><?php the_sub_field('note') ?></p>
                <?php endif; ?>
              </div>
            </div>
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

<div class="section global_on_inner">
  <div class="container">
    <div class="global_box">
      <h2><?php the_field('member_title', 'option'); ?> <span><?php the_field('member_subtitle', 'option'); ?></span></h2>
      <div class="sides">
        <?php if ( have_rows('benefits', 'option') ): ?>
            <?php while ( have_rows('benefits', 'option') ) : the_row(); ?>
              <div class="third single_benefit">
                <img src="<?php the_sub_field('icon') ?>" alt=" <?php the_sub_field('title') ?>">
                <h3> <?php the_sub_field('title') ?></h3>
                <p><?php the_sub_field('content') ?></p>
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
      <a href="<?php the_field( "button1_url", "option" ); ?>" class="btn btn_big dark"><?php the_field( "button1_text", "option" ); ?> <i class="fas fa-arrow-right"></i></a>
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
